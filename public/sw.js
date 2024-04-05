const staticCacheName =  'static-v1';
const dynamicCacheName = 'site-dynamic-v1';

const filesToCache = [
    "/",
    "/posts",
    "/about",
    "/categories",
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

// const preLoad = function () {
//     return caches.open(staticCacheName).then(function (cache) {
//         // caching index and important routes
//         return cache.addAll(filesToCache);
//     });
// };

// self.addEventListener("install", function (event) {
//     event.waitUntil(preLoad());
// });

// const checkResponse = function (request) {
//     return new Promise(function (fulfill, reject) {
//         fetch(request).then(function (response) {
//             if (response.status !== 404) {
//                 fulfill(response);
//             } else {
//                 reject();
//             }
//         }, reject);
//     });
// };

// const addToCache = function (request) {
//     return caches.open(staticCacheName).then(function (cache) {
//         return fetch(request).then(function (response) {
//             return cache.put(request, response);
//         });
//     });
// };

// const returnFromCache = function (request) {
//     return caches.open(staticCacheName).then(function (cache) {
//         return cache.match(request).then(function (matching) {
//             if (!matching || matching.status === 404) {
//                 return cache.match("offline.html");
//             } else {
//                 return matching;
//             }
//         });
//     });
// };

// Kode Sebelumnya
// self.addEventListener("fetch", function (event) {
//     event.respondWith(
//         checkResponse(event.request).catch(function () {
//             return returnFromCache(event.request);
//         })
//     );
//     if (!event.request.url.startsWith("http")) {
//         event.waitUntil(addToCache(event.request));
//     }
// });

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
// untuk dynamic asset kayak di post yang butuh data DB
self.addEventListener('fetch', evt => {
  evt.respondWith(
      caches.match(evt.request).then(cacheRes => {
          if (!cacheRes || cacheRes.status === 404) {
              return caches.match('offline.html'); //jika response adalah 404 maka akan membawa ke page offline.html
          } else {
              return cacheRes || fetch(evt.request).then(fetchRes => {
                  return caches.open(dynamicCacheName).then(cache => {
                      cache.put(evt.request.url, fetchRes.clone());
                      return fetchRes;
                  });
              });
          }
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