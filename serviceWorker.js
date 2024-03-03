const staticPsicomet = "Psicomet-site-v1";
const assets = [
  "/",
"/index.html",
"/page01.html",
"/page02.html",
"/page03.html",
"/page04.html",
"/page05.html",
"/style.css",
"/images/back.png",
"/images/image1.jpg",
"/images/image2.jpg",
"/images/image3.jpg",
"/images/image4.jpg",
"/images/image5.jpg",
"/images/logo.png",
"/include/content.html",
"/include/footer.html",
"/include/header.html",
"/js/app.js",
"/apps/memopix/index.html",
"/apps/memopix/styles.css",
"/apps/memopix/icons/arrow.png",
"/apps/memopix/icons/book.png",
"/apps/memopix/icons/candy.png",
"/apps/memopix/icons/cup.png",
"/apps/memopix/icons/diamond.png",
"/apps/memopix/icons/fruit.png",
"/apps/memopix/icons/key.png",
"/apps/memopix/icons/potion.png",
"/apps/memopix/icons/sword.png",
"/apps/memopix/icons/wait.gif",
"/apps/phrases/phrases.json",
'/fonts/origami.ttf',
'/fonts/pxlxxl.ttf'
];

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticPsicomet).then(cache => {
      cache.addAll(assets);
    })
  );
});

self.addEventListener("fetch", fetchEvent => {
  fetchEvent.respondWith(
    caches.match(fetchEvent.request).then(res => {
      return res || fetch(fetchEvent.request);
    })
  );
});
