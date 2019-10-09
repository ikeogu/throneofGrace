const cacheName = "Throne-of-Power";
const filesToCache = [
    ["/","4dca09306f34782abb27a690b8ca6de4"],
    ["/E-books","a3a24a1526e3fa9eea67ff1082982cd2"],
    ["/testi/create","56852e3ba26e1b8dc2579d029937701c"],
    ["/testimony","56852e3ba26e1b8dc2579d029937701c"],
    ["css/app.css","33e746eff21c53ed136bc4fe2a37b04d"],
    ["css/bootstrap.min.css","a15c2ac3234aa8f6064ef9c1f7383c37"],
    ["css/bootstrap2.min.css","ec3bb52a00e176a7181d454dffaea219"],
    ["css/fonts-icon.css","a207426366c2b281571ec581ca8acc62"],
    ["css/style.css","292ffcfdad13fe31fd28d33fa2729491"],
    ["css/style2.css","fa83530c7dd7f22ebbec76241f5bf76f"],
    ["fontawesome/css/fontawesome.css","41987b9c376e6ae6203fbc1ff5eee4b3"],
    ["fontawesome/css/fontawesome.min.css","80af57d84ed93ead94e4560bc8ff7059"],
    ["fontawesome/css/style.css","9400e1aec2ae142a1420f56d65c59b32"],
    ["fontawesome/js/fontawesome.js","efc5d53fe03fb8eb620d6202e1c441d9"],
    ["fontawesome/js/fontawesome.min.js","c194744865b7375ab9c8bd30962f8815"],
    ["fontawesome/webfonts/fa-brands-400.eot","5063b105c7646c8043d58c5289f02cca"],
    ["fontawesome/webfonts/fa-brands-400.svg","a9c4bb7348f42626454c988dbde1d0a0"],
    ["fontawesome/webfonts/fa-brands-400.ttf","06147b6cd88c7346cecd1edd060cd5de"],
    ["fontawesome/webfonts/fa-brands-400.woff","c5e0f14f88a828261ba01558ce2bf26f"],
    ["fontawesome/webfonts/fa-brands-400.woff2","cccc9d29470e879e40eb70249d9a2705"],
    ["fontawesome/webfonts/fa-regular-400.eot","c1a866ec0e04a5e1915b41fcf261457c"],
    ["fontawesome/webfonts/fa-regular-400.svg","7b9568e6389b1f8ae0902cd39665fc1e"],
    ["fontawesome/webfonts/fa-regular-400.ttf","65b286af947c0d982ca01b40e1fcab38"],
    ["fontawesome/webfonts/fa-regular-400.woff","c4f508e7c4f01a9eeba7f08155cde04e"],
    ["fontawesome/webfonts/fa-regular-400.woff2","f5f2566b93e89391da4db79462b8078b"],
    ["fontawesome/webfonts/fa-solid-900.eot","8e4a6dcc692b3887f9f542cd6894d6d4"],
    ["fontawesome/webfonts/fa-solid-900.svg","c2801fb415f03c7b170934769d7b5397"],
    ["fontawesome/webfonts/fa-solid-900.ttf","0bff33a5fd7ec390235476b4859747a0"],
    ["fontawesome/webfonts/fa-solid-900.woff","333bae208dc363746961b234ff6c2500"],
    ["fontawesome/webfonts/fa-solid-900.woff2","44d537ab79f921fde5a28b2c1636f397"],
    ["fonts/glyphicons-halflings-regular.eot","f4769f9bdb7466be65088239c12046d1"],
    ["fonts/glyphicons-halflings-regular.svg","89889688147bd7575d6327160d64e760"],
    ["fonts/glyphicons-halflings-regular.ttf","e18bbf611f2a2e43afc071aa2f4e1512"],
    ["fonts/glyphicons-halflings-regular.woff","fa2772327f55d8198301fdb8bcfc8158"],
    ["fonts/glyphicons-halflings-regular.woff2","448c34a56d699c29117adc64c43affeb"],
    ["js/app.js","92375b050fecdcace3f9904ad15d7441"],
    ["js/bootstrap.js","fb81549ee2896513a1ed5714b1b1a0f0"],
    ["js/bootstrap.min.js","5869c96cc8f19086aee625d670d741f9"],
    ["js/npm.js","ccb7f3909e30b1eb8f65a24393c6e12b"],
    ["js/share.js","731c9a89d1bcc6d4f4de2daa6b7425ca"],["js/style.js","eeb973bfc941b43e7a4d608802c2ea01"],["webfonts/fa-brands-400.eot","9b6c8da3c489424e2b3e9c9fb6314b37"],["webfonts/fa-brands-400.svg","b5472631dbace30d549357ec325b9c62"],["webfonts/fa-brands-400.ttf","947b9537bc0fecc8130d48eb753495a1"],["webfonts/fa-brands-400.woff","7b464e274bc331f9a765d765359635a5"],["webfonts/fa-brands-400.woff2","48461ea4e797c9774dabb4a0440d2f56"],["webfonts/fa-regular-400.eot","7422060ca379ee9939d3b687d072acad"],["webfonts/fa-regular-400.svg","b5a61b229c9c92a6ac21f5b0e3c6e9f1"],["webfonts/fa-regular-400.ttf","73fe7f1effbf382f499831a0a9f18626"],["webfonts/fa-regular-400.woff","381af09a1366b6c2ae65eac5dd6f0588"],["webfonts/fa-regular-400.woff2","949a2b066ec37f5a384712fc7beaf2f1"],["webfonts/fa-solid-900.eot","70e65a7d34902f2c350816ecfe2f6492"],["webfonts/fa-solid-900.svg","38508b2e7fac045869a86a15936433f7"],["webfonts/fa-solid-900.ttf","0079a0ab6bec4da7d6e16f2a2e87cd71"],["webfonts/fa-solid-900.woff","815694de1120d6c1e9d1f0895ee81056"],["webfonts/fa-solid-900.woff2","14a08198ec7d1eb96d515362293fed36"]

    
];

self.addEventListener('install',function(e){
    e.waitUntil(
        caches.open(cacheName).then(function(cache){
            return cache.addAll(filesToCache);
        })
    );
});
self.addEventListener('fetch',function(e){
    e.respondWith(
        caches.match(e.request).then(function(response){
            return response || fetch(e.request);
        })
    );
});