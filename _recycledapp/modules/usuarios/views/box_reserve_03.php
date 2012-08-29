<?php
//sleep(2);
//var_dump ($_POST);die;

//print_r(array_keys($_POST['reservas'][0]));

//echo $_POST['reservas'][0]['name'].": ";
$time = $_POST['reservas'][2]['value'];
$a=0;

//$time_available['times'][0]['time']; echo '<br />';

//echo $i_count; die;

?>
<style type="text/css">
tbody .timepickerrow td {
	background-color: #009933;
	font-weight:bold;
        width: 72px;
}

tbody .timepickerrow td.active_time {
color: white;
background-color: #464646;
}

tbody .timepickerrow {
	height:23px;
}

</style>
<div id="select-reservation-inner" class="select-reservation-inner">
    <p align="center" class="top_rightbox">REALIZA UNA<BR  /> <span class="green">- RESERVA -</span></p>

    
    <div id="rightbox_reserveform">
    <form id="reserve_form" action="#" method="post" name="reserve_form">
        <ol>
            <li>
                <span class="white_text">Nº de personas: </span><span class="green"><?php echo $_POST['reservas'][0]['value'];?> <span class="edit right reservebutton"> Editar</span></span>
                 <input id="number_people" name="number_people" type="hidden" value="<?php echo $_POST['reservas'][0]['value'];?>" />
            </li>
            
            <li>
                <span class="white_text">Fecha: </span><span class="green"><?php echo $_POST['reservas'][1]['value'];?> <span class="edit right next_activebutton"> Editar</span></span>
                <input id="date_reserve" name="date_reserve" type="hidden" value="<?php echo $_POST['reservas'][1]['value'];?>" />
            </li>
            
            <li>
                <span class="white_text">Horario </span>
            </li>
        </ol>
        
        <table id="timetable" style="width: 250px; color: white; text-align: center; display: table; " cellspacing="8">
        <tbody>
        
        
        <?php
        $k =0;
        for ($i=0;$i<$i_count;$i++){ 
        if ($k == 0){ ?>
                <tr class="timepickerrow">
                <?php } $k++;
                ?>

                <td id="timepickercell-<?php echo $i;?>" onclick="timeSelect(<?php echo $i;?>);" class="timepickercell<?php if ($time == $time_available['times'][$i]['time']) { echo ' active_time'; $a=1; } ?>"><a href="#reserve_process" class="timepickerlink"><?php echo $time_available['times'][$i]['time'];?></a>
                <?php 
        if ($k == 3){ ?>
                </tr>
        <?php 
        $k=0;
        }
        }
        ?>
        
        </tbody>
        </table>
        <input name="time_reserve" id="time_reserve" type="hidden" value="<?php echo $time;?>" />
        
    </form>
    </div>
    
    <div id="reserve" class="reserve">
    <a id="finish_reserve" <?php if ($a==1){ ?>class="finish_activebutton" <?php } else {?> class="nexthourbutton"<?php }?>></a>
    </div> 
    
    <div id="discount">
    <p>25%</p>            
    </div>
    <div id="info_discount">
    	<p>de descuento sobre el consumo</p>         
    </div> 

</div> 
<script type="text/javascript">

function timeSelect(time_id) {	  
	  
		//$('.timepickercell').css('background-color', '#262626');
		//$('#timepickercell-' + time_id).css('background-color', '#464646');
		
		//activacion de la hora activa
		$('.timepickercell').removeClass('active_time');
		$('#timepickercell-' + time_id).addClass('active_time');
		
		//fin de la activacion de hora activa...
		
		var timeval = $('#timepickercell-' + time_id + ' > a').html();
		timeval = timeval.replace('p.m.', 'P.M.');
		timeval = timeval.replace('a.m.', 'A.M.');
		$('#label3 option:selected').val(timeval);
		//alert(timeval);
		$("#time_reserve").val(timeval);
		
		$('#finish_reserve').removeClass('nexthourbutton').addClass('finish_activebutton');
		//$('.validoffer').show();
};

</script>