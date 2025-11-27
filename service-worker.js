const CACHE_NAME = "vitalcare-cache-v1";
const urlsToCache = [
    "/",
    "/index.html",
    "/css/style.css",
    "/css/bootstrap.min.css",
    "/js/main.js",
    "/lib/wow/wow.min.js",
    "/lib/owlcarousel/owl.carousel.min.js",
    "/img/icons/icon-192.png",
    "/img/icons/icon-512.png"
];

// Instalar el SW
self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            return cache.addAll(urlsToCache);
        })
    );
});

// Activar SW
self.addEventListener("activate", event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(name => name !== CACHE_NAME)
                    .map(name => caches.delete(name))
            );
        })
    );
});

// Interceptar peticiones
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request);
        })
    );
});
