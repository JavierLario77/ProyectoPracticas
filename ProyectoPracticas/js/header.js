$(function(){
    $('.menu-movil').on('click',function(){
        $('.navegacion-principal').slideToggle();
      });
      $('.comentario').on('click',function(){
        $('.comentarios-ocultos').slideToggle();
      });
      var map = L.map('mapa').setView([37.396551, -1.943228], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([37.396551, -1.943228]).addTo(map)
            .bindPopup('Aquí estamos!')
            .openPopup();
  });