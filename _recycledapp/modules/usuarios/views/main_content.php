<div id="main" align="center">

<div id="containerslider">
<div id="searchbox"><span class="first_title">¿A dónde quieres ir?</span> <span id="second_title">Más de <strong>50 Restaurantes</strong> para reservar</span><span id="greenanchor">&nbsp;&nbsp;</span>
<form id="search-form" method="GET" action="<?php echo base_url('reservas/establishment/search');?>">

                                  <input type="text" name="q" value="" />

                 <a class="submit" onClick="document.getElementById('search-form').submit()"></a>

                                </form></div>
<div id="title_csbutton">DISPONIBLES PARA HOY</div>
<div id="coin-slider">
    
        <?php foreach($home_list as $team): ?>
            <img src="<?php echo $image_url.$team['image'][0]['route'];?>" alt=""><span><strong class="extra-wrap"><strong class="text1"><?php echo anchor(base_url().'reservas/establishment/view/'.$team['url_title'],$team['local_name'])?></strong><strong class="bot"><?php echo $team['cuisine'];?></strong><strong class="restime">
                        <?php foreach($team['times'] as $time_array):
                                
                                    echo " | <a href='". base_url("reservas/establishment/view/".$team['url_title']."/02?f=".urlencode($time_array['date_url'])."&t=".urlencode($time_array['time'])."#reserve_process") . "'>" .  $time_array['time']. "</a> ";
                                
                                
                         endforeach; echo " | ";?>
                    </strong></strong><?php echo anchor(base_url().'reservas/establishment/view/'.$team['url_title'], ' ', array('class' => 'link3', 'title' => 'Ver disponibilidad'));?></span>
        <?php endforeach; ?>
    
                
    </div>
        
        <div id="more_resbutton" style="position:relative"><?php echo anchor(base_url().'reservas/establishment/', '', array('class' => 'more_resbutton moveright', 'title' => 'Ver más reservas'));?></div>       
        
        </div>
        
		<form id="res-form" method="get" action="restaurant_list.html">
        <div id="search-reservation">
                <p>¿QUIERO RESERVAR PARA?</p>   
                <ul>
                    <li>
                    
                        <select name="party_size" id="party_size" size="1">
                            <option value="">¿Cuantos?</option>
                            
                            <option value="2" >2 personas</option>
                            
                            <option value="3" >3 personas</option>
                            
                            <option value="4" >4 personas</option>
                            
                            <option value="5" >5 personas</option>
                            
                            <option value="6" >6 personas</option>
                            
                            <option value="7" >7 personas</option>
                            
                            <option value="8" >8 personas</option>
                            	              
                        </select>
                  </li>
                  <li>el</li>
                  <li>
                      <input type="text" id="datepicker" value="" readonly name="d"/>		                  
                  </li>
                  <li>para</li>
                  <li>
                      
                          <select name="time" id="time" size="1">
    <option value="">Seleccione la hora</option>
    <option value="dinner" >Cena</option>
    <option value="lunch" >Almuerzo</option>
    
    
    <option value="11:30 AM" >11:30 AM</option>
    
    <option value="12:00 PM" >12:00 PM</option>
    
    <option value="12:30 PM" >12:30 PM</option>
    
    <option value="1:00 PM" >1:00 PM</option>
    
    <option value="1:30 PM" >1:30 PM</option>
    
    <option value="2:00 PM" >2:00 PM</option>
    
    <option value="2:30 PM" >2:30 PM</option>
    
    <option value="3:00 PM" >3:00 PM</option>
    
    <option value="3:30 PM" >3:30 PM</option>
    
    <option value="4:00 PM" >4:00 PM</option>
    
    <option value="4:30 PM" >4:30 PM</option>
    
    <option value="5:00 PM" >5:00 PM</option>
    
    <option value="5:30 PM" >5:30 PM</option>
    
    <option value="6:00 PM" >6:00 PM</option>
    
    <option value="6:30 PM" >6:30 PM</option>
    
    <option value="7:00 PM" >7:00 PM</option>
    
    <option value="7:30 PM" >7:30 PM</option>
    
    <option value="8:00 PM" >8:00 PM</option>
    
    <option value="8:30 PM" >8:30 PM</option>
    
    <option value="9:00 PM" >9:00 PM</option>
    
    <option value="9:30 PM" >9:30 PM</option>
    
    <option value="10:00 PM" >10:00 PM</option>
                            
</select>
                      
                  </li>                 
                </ul>
            <div id="view">
            <a class="submit" onClick="document.getElementById('res-form').submit()"></a>
            </div>   
        </div>
        
        </form>
    
        <div id="box2">
        
        <div id="top_box"><div id="title_box">Encuentra tu restaurante ideal</div></div>
        
        <div id="middle_box">
        <div id="municipality">
        <h3 class="municipality">Municipio</h3>
            <?php foreach($citys as $citys_array): ?>
                    <p><?php echo $citys_array['name'];?></p>
            <?php endforeach; ?>
        
        
        </div>             
        <div id="food"><h3 class="food">Especialidad</h3>
        
            <?php foreach($cuisine as $cuisine_array): ?>
                        <p><?php echo $cuisine_array['name'];?></p>
            <?php endforeach; ?>
        
        </div>
        
        <div id="more_reserved"><h3 class="more_reserved">Lo más reservado</h3>
            
            <?php foreach($bottom_list as $more_reserved): ?>
            <span><strong class="extra-wrap"><a href="<?php echo base_url('reservas/establishment/view/'.$more_reserved['url_title']);?>"><strong class="text1"><?php echo $more_reserved['local_name'];?></strong></a><strong class="bot"><?php echo $more_reserved['cuisine'];?></strong><strong class="dir1"><?php echo $more_reserved['location'];?></strong></strong><a class="link4" href="<?php echo base_url('reservas/establishment/view/'.$more_reserved['url_title']);?>"></a></span>
            <?php endforeach; ?>
        
        <span class="last">
        <div id="view_more" style="position:relative"><a class="view_more moveright2" href="#">Ver Más reservas</a></div> </span>    
        </div>    
        
        <div id="view_all"><span id="greenanchor" class="anchor_left">&nbsp;&nbsp;</span><a href="<?php echo base_url('reservas/establishment/');?>">VER TODOS LOS RESTAURANTES DISPONIBLES PARA RESERVAR</a></div>
            
        </div>
        
        </div>
        <div id="bottom_box"></div>
                
        </div>

</div>   <!-- FIN DEL MAIN--> 