const preLoad = function () {
    return caches.open("offline").then(function (cache) {
        // caching index and important routes
        return cache.addAll(filesToCache);
    });
};

self.addEventListener("install", function (event) {
    event.waitUntil(preLoad());
});

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
    "/offline.html",
];

const checkResponse = function (request) {
    return new Promise(function (fulfill, reject) {
        fetch(request).then(function (response) {
            if (response.status !== 404) {
                fulfill(response);
            } else {
                reject();
            }
        }, reject);
    });
};

const addToCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return fetch(request).then(function (response) {
            return cache.put(request, response);
        });
    });
};

const returnFromCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return cache.match(request).then(function (matching) {
            if (!matching || matching.status === 404) {
                return cache.match("offline.html");
            } else {
                return matching;
            }
        });
    });
};

self.addEventListener("fetch", function (event) {
    event.respondWith(
        checkResponse(event.request).catch(function () {
            return returnFromCache(event.request);
        })
    );
    if (!event.request.url.startsWith("http")) {
        event.waitUntil(addToCache(event.request));
    }
});
