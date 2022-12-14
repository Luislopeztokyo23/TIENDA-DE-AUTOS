(function () {
    "use strict";
    document.addEventListener('DOMContentLoaded', function (){
    var map = L.map('mapa').setView([19.613358666893284, -99.33936936042262], 10);

         L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
           attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
         }).addTo(map);

         L.marker([19.613358666893284, -99.33936936042262]).addTo(map)
           .bindPopup('Tenis.<br> UTFV.')
           .openPopup();
    });
})();