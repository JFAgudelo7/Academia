$(function(){

    $('.artista img').addClass('img-circle');

    //Cambiar opciones de menu
    $("#home a:contains('Inicio')").parent().addClass('active'); 
    $("#eventos a:contains('Eventos')").parent().addClass('active');
    $("#contacto a:contains('Contacto')").parent().addClass('active');
    $("#registro a:contains('Registro')").parent().addClass('active');
    $("#tienda a:contains('Tienda')").parent().addClass('active');
    
    
    //Desplegar menus automaticamente
    $('ul.nav li.dropdown').hover(      
    function(){
        //Funcion despliegue
        $('.dropdown-menu', this).fadeIn();
    },
    function(){
        //funcion de contraccion
        $('.dropdown-menu', this).fadeOut('fast');
    }
    );
    
    $("[data-toggle='tooltip']").tooltip({ animation: true});
    
  $('.galeria img').on('click', function(){
    $('#modal').modal({
      show: true

    })

    var mysrc = this.src.substr(0, this.src.length-7) + '.jpg'; //foto-1.jpg
    $('#imagenmodal').attr('src', mysrc);

    $('#imagenmodal').on('click', function(){
      $('#modal').modal('hide');
    })
  });

});