<?php
/* Vista: box_reserve_02.php
 * Modulo de reserva (Widget)
 * Recibe datos de reserva y disponibilidades
 * Controlador: reservation
 * Metodo: second_step
 */
if (!empty($date)){
    $fecha_reserva = $date;
    $time_reserva = $time;
    $party_size = 2;
}else{
    $fecha_reserva = '';
    $time_reserva = '';
    $party_size = $reservas[0]['value'];
}
?>
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
                    minDate: new Date(<?php echo $date_ini; ?>),
                    maxDate: new Date(<?php echo $date_fin; ?>),
                    beforeShowDay: unavailable,
			onSelect: function(dateText, inst) {
				$('#nextdatebutton').removeClass('nextdatebutton').addClass('nextdate_activebutton');
				
				$("#datereserve").val(dateText);
				//alert(dateText);
				inline: true
			} 
			
		});
		
	});
        
        //var unavailableDates = ['31-08-2012','9-5-2011','14-5-2011','15-5-2011'];
        
        var unavailableDates = [<?php echo $unavailableDates_aux; ?>];
        

            function unavailable(date) {
                dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
                if ($.inArray(dmy, unavailableDates) < 0) {
                return [true,"","Disponible"];
                } else {
                return [false,"","Agotada"];
            }
        }

</script>

<div id="select-reservation-inner" class="select-reservation-inner">
    <p align="center" class="top_rightbox">REALIZA UNA<BR  /> <span class="green">- RESERVA -</span></p>

    
    <div id="rightbox_reserveform">
    <form id="reserve_form" action="#" method="post" name="reserve_form">
        <ol>
            <li>
                <span class="white_text">Nº de personas: </span><span class="green"><?php echo $party_size;?>  <span class="edit right reservebutton"> Editar</span></span>
                <input name="number_people" type="hidden" value="<?php echo $party_size;?>" />
            </li>
            
            <li>
                <span class="white_text">Fecha </span><?php echo $fecha_reserva;?>
                <input id="datereserve" name="datereserve" type="hidden" value="<?php echo $fecha_reserva;?>" />
                <input name="time_reserve" id="time_reserve" type="hidden" value="<?php echo $time_reserva;?>" />
            </li>
        </ol>
        <div id="datepicker" style="margin-left:23px;"></div>
        
    </form>
    </div>
    
    <div id="reserve" class="reserve">
    <a class="nextdatebutton" id="nextdatebutton"></a>
    </div> 
    
    <div id="discount">
    	<p>25%</p>            
    </div>  
    <div id="info_discount">
    	<p>de descuento sobre el consumo</p>         
    </div> 

</div> 