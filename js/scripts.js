$(function(){

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
});