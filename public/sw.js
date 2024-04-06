const staticCacheName =  'static-v1';
const dynamicCacheName = 'site-dynamic-v1';
const excludedUrls = ['/register', '/login', '/dashboard', '/dashboard/posts', '/dashboard/posts/create', '/posts']; //urls that not been cached

const filesToCache = [
    "/",
    "/css/style.css",
    "/css/stylepost.css",
    "/css/owl.carousel.min.css",
    "/css/bootstrap.min.css.map",
    "/css/bootstrap.min.css",
    "/js/main.js",
    "/js/bootstrap.min.js",
    "/js/jquery-3.3.1.min.js",
    "/js/jquery.sticky.js",
    "/js/owl.carousel.min.js",
    "/js/popper.min.js",
    "/img/unjani3.png",
    "/img/unjanilite.png",
    "/img/unjanismart.png",
    "/icomoon/icomoon.eot",
    "/icomoon/icomoon.svg",
    "/icomoon/icomoon.ttf",
    "/icomoon/icomoon.woff",
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css",
    "/offline.html",
];

//activate event
self.addEventListener('install', evt => {
    console.log('service worker installed');
    evt.waitUntil(
      caches.open(staticCacheName).then((cache) => {
        console.log('caching shell assets');
        cache.addAll(filesToCache);
      })
    );
  });

// fetch event
self.addEventListener('fetch', evt => {
  const { request } = evt;
  const url = new URL(request.url);

  // Check if the request is excluded from caching
  if (excludedUrls.includes(url.pathname)) {
      // If the request is to an excluded URL, bypass caching
      evt.respondWith(fetch(request));
      return;
  }

  // fetch directly from the network if on the main index page
  if (url.pathname === '/') {
      evt.respondWith(
          // Try to fetch from network
          fetch(request)
              .then(fetchRes => {
                  // Clone the response to cache it
                  const responseClone = fetchRes.clone();
                  caches.open(staticCacheName).then(cache => {
                      cache.put(request, responseClone);
                  });
                  return fetchRes;
              })
              .catch(() => {
                  // If fetching from network fails, try to serve from cache
                  return caches.match(request)
                      .then(cacheRes => {
                          if (cacheRes) {
                              // If cached response found, return it
                              return cacheRes;
                          } else {
                              // If no cached response found, return offline page
                              return caches.match('offline.html');
                          }
                      })
                      .catch(() => {
                          // If error occurs while serving from cache, return offline page
                          return caches.match('offline.html');
                      });
              })
      );
      return;
  }

  // For other requests, try cache first, then network
  evt.respondWith(
      caches.match(request).then(cacheRes => {
          return cacheRes || fetch(request).then(fetchRes => {
              if (fetchRes.status === 404) {
                  return caches.match('offline.html');
              } else {
                  return caches.open(dynamicCacheName).then(cache => {
                      cache.put(request.url, fetchRes.clone());
                      return fetchRes;
                  });
              }
          }).catch(() => {
              return caches.match('offline.html');
          });
      })
  );
});

// activate event
// service worker akan membersihkan cache-cache yang tidak lagi digunakan setelah versi service worker yang baru diinstal aktif untuk static dan dynamic asset 
self.addEventListener('activate', evt => {
    evt.waitUntil(
      caches.keys().then(keys => {
        return Promise.all(keys
          .filter(key => key !== staticCacheName && key !== dynamicCacheName)
          .map(key => caches.delete(key))
        );
      })
    );
});

self.addEventListener('/logout', evt => {
  return caches.keys().then(keys => {
    return Promise.all(keys.map(key => {
      if (key === dynamicCacheName) {
        return caches.delete(key);
      }
    }));
  });
});