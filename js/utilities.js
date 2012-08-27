/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
    Created on : 13/03/2012, 11:50:45 PM
    Author     : Javier Pino
    Description: Contiene las funciones de javascript que utilizará eventos
*/

var lock = false;

/** Funciones que se ejecutan al cargar el documento*/
$(function() {

   setAllTeamsRowHeight();
   hideFooterSocialNetwork();
   
   //Si la imagen cambia de tamaño, entonces corregir el main
   
   $(window).resize(function() {		
		 if (lock !== false) 
			clearTimeout(lock);
	        lock = setTimeout(fixMainSize, 500);
   });
   
});


/** Funciones que se ejecutan cuando la página está cargada ya*/
$(window).load(function () {
	fixMainSize();		
});

/** Esta función, que modifica el tamaño de las ordenes para que todas las promos tengan el mismo alto.*/
function setAllTeamsRowHeight () {
    $('div.all_team_row').each(function() {
        
        var height = 0;
        var information = $(this).find('.block_little_promo_top');

        //Se calcula el maximo tamaño para la fila
        information.each(
            function () {
                var current = $(this).height();
                if (current > height)
                    height = current;                        
            }
        );

        //Se coloca esa altura a todos los de la fila
        information.each(function() {
            $(this).css('min-height', height);            
        });

    });
}

/** Esta función esconde la barra de redes sociales*/
function hideFooterSocialNetwork () {

    //Asignar el evento al footer
    $('div.footer_like_hide > span').click(function () {
       
        //Esconder el div
        $('div.footer_like_spacer').remove();
        $('div.footer_like_banner').remove();

        $.post(
            '/account/setNoMoreSocialLinks.php'
        )
        
    });
}


/** Esta función, que modifica el tamaño del main para que nunca se dañe la página */
function fixMainSize () {
   
	var $body = $('body');	
	var $main = $('div#main');
	
	//Calcular la diferencia entre la pagina
	var size = $(window).height() - $body.height();	
		
	//Si la diferencia es positiva entonces esa diferencia se le suma al tamaño actual del div	
	if (size > 0) {		
		$main.css('min-height', $main.height() + size);				
	}	
	//No se hace nada cuando el tamaño es menor    	
}








