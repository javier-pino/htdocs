<?php
//sleep(3);

//print_r ($_POST['opciones'][1]['value']);die
//var_dump ($_POST); die;

//echo $opciones;
?>
<script>
    
$(function() 
 {
		
    //	carousel options
            $('#foo1').carouFredSel(
            {
                    prev: '#prev1',
                    next: '#next1',
                    scroll: 1,
                    auto: false
             });				

            $('#foo2').carouFredSel(
            {
                    prev: '#prev2',
                    next: '#next2',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo3').carouFredSel(
            {
                    prev: '#prev3',
                    next: '#next3',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo4').carouFredSel(
            {
                    prev: '#prev4',
                    next: '#next4',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo5').carouFredSel(
            {
                    prev: '#prev5',
                    next: '#next5',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo6').carouFredSel(
            {
                    prev: '#prev6',
                    next: '#next6',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo7').carouFredSel(
            {
                    prev: '#prev7',
                    next: '#next7',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo8').carouFredSel(
            {
                    prev: '#prev8',
                    next: '#next8',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo9').carouFredSel(
            {
                    prev: '#prev9',
                    next: '#next9',
                    scroll: 1,
                    auto: false
            });	
            
            $('#foo10').carouFredSel(
            {
                    prev: '#prev10',
                    next: '#next10',
                    scroll: 1,
                    auto: false
            });	
            
            $( "#datepicker" ).datepicker(
            {                 
                onChange: function(dateText, inst) {
                    $("#datereserve").val(dateText);
                } 

            });

});

</script>
<div id="resultbox" class="resultbox">
        
        <div id="top_resultbox"><div id="title_resultbox"><p>RESTAURANTES</p></div></div>
        
        <div id="middle_resultbox">
        
        <table align="center" cellpadding="10" cellspacing="0">
            <?php 
                $tr = 1;
                $foo = 1;
            ?>
            <?php foreach($list as $team): ?>
                <?php if ($tr === 0){?>
        <tr class="odd">
        <td>
        <img src="<?php echo $image_url.$team['image'][0]['route'];?>" width="161" height="97"/><a href="<?php echo base_url("reservas/establishment/view/".$team['url_title']);?>"><span class="restaurant_name"><?php echo $team['local_name'];?></span></a>
        <span class="municipalitylist"><?php echo $team['city_name'];?></span>
        <p><?php echo strip_tags($team['detail']);?></p>
           
            
                <div class="list_carousel">
                    <a id="prev<?php echo $foo;?>" class="prev" href="#" style="display: block; position: absolute;">
                    <span></span>
                    </a>
                        <ul id="foo<?php echo $foo;?>">
                            <?php foreach($team['times'] as $time_array): ?>
                                <li><a href="<?php echo base_url("reservas/establishment/view/".$team['url_title']."/02?f=".urlencode($time_array['date_url'])."&t=".urlencode($time_array['time'])."#reserve_process");?>"><?php echo trim($time_array['time']);?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <a id="next<?php echo $foo;?>" class="next" href="#" style="display: block; position: absolute;margin-top: -14px;margin-left: 500px;">
                    <span></span>
                    </a>
                        <div class="clearfix"></div>		
                </div>
            
           
        </td>
        </tr>
        <?php $tr = 1;}else{ ?>
        <tr class="even">
        <td>
        <img src="<?php echo $image_url.$team['image'][0]['route'];?>" width="161" height="97"/><a href="<?php echo base_url("reservas/establishment/view/".$team['url_title']);?>"><span class="restaurant_name"><?php echo $team['local_name'];?></span></a>
        <span class="municipalitylist"><?php echo $team['city_name'];?></span>
        <p><?php echo strip_tags($team['detail']);?></p>
           
            
                <div class="list_carousel">
                    <a id="prev<?php echo $foo;?>" class="prev" href="#" style="display: block; position: absolute;">
                    <span></span>
                    </a>
                        <ul id="foo<?php echo $foo;?>">
                            <?php foreach($team['times'] as $time_array): ?>
                                <li><a href="<?php echo base_url("reservas/establishment/view/".$team['url_title']."/02?f=".urlencode($time_array['date_url'])."&t=".urlencode($time_array['time'])."#reserve_process");?>"><?php echo trim($time_array['time']);?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <a id="next<?php echo $foo;?>" class="next" href="#" style="display: block; position: absolute;margin-top: -14px;margin-left: 500px;">
                    <span></span>
                    </a>
                        <div class="clearfix"></div>		
                </div>
            
           
        </td>
        </tr>
         <?php $tr = 0; $foo++;}  endforeach; ?>
        </table>
        
        </div>
        
        <div id="bottom_resultbox"></div>
                
        </div>
