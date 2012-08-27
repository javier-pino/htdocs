<div id="main" align="center">

        <div id="search-reservation" class="inner">
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
                      <input type="text" id="datepicker" value="" readonly name="date_reserve"/>
                      <input id="datereserve" name="datereserve" type="hidden" value="" />
                  </li>
                  <li>para</li>
                  <li>
                      
                    <select name="time_reserve" id="time_reserve" size="1">
                        <option value="">Seleccione la hora</option>
                        <?php foreach($times_arr as $times): ?>
                        <option value="<?php echo $times; ?>" ><?php echo $times; ?></option>
                        <?php endforeach; ?>
                    </select>
                      
                  </li>
                </ul> 
        </div>
        
        <form action="" method="post">
        <div id="filterbox">
        
        <div id="top_filterbox"><div id="title_filterbox"><p>FILTRA - tus - <strong>RESULTADOS</strong></p></div></div>
        
        <div id="middle_filterbox">
        <div id="municipalityfilter">
        <h3 class="municipalityfilter">Municipios</h3>
        </div>
        <ul id="check-municipality">
            <?php foreach($citys as $citys_array): ?>
                <li>
                    <input type="checkbox" class='check' id="municipio[<?php echo $citys_array['id'];?>]" name="municipio" value="<?php echo $citys_array['name'];?>"/>
                    <label for="municipio[<?php echo $citys_array['id'];?>]" id="label-municipio[<?php echo $citys_array['id'];?>]">
                        <?php echo $citys_array['name'];?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <div id="foodfilter">
        <h3 class="foodfilter">Especialidad</h3>
        </div>      
        
        <ul id="check-food">
            <?php foreach ($cuisine as $cuisine_array): ?>
                <li>
                    <input type="checkbox" class='check' id="foodtype[<?php echo $cuisine_array['id'];?>]" name="foodtype" value="<?php echo $cuisine_array['name'];?>"/>
                    <label for="foodtype[<?php echo $cuisine_array['id'];?>]" id="label-foodtype[<?php echo $cuisine_array['id'];?>]">
                        <?php echo $cuisine_array['name'];?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        
        </div>        
        
        <div id="bottom_filterbox"></div>
                
        </div>
        </form>
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
                            <?php foreach($team['dates'] as $dates_arr): ?>
                                <li>><a href="<?php echo base_url("reservas/establishment/view/".$team['url_title']."/02?f=".urlencode($dates_arr['date_url'])."#reserve_process");?>"><?php echo $dates_arr['date_available'];?></a></li>
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
                            <?php foreach($team['dates'] as $dates_arr): ?>
                                <li><a href="<?php echo base_url("reservas/establishment/view/".$team['url_title']."/02?f=".urlencode($dates_arr['date_url'])."#reserve_process");?>"><?php echo $dates_arr['date_available'];?></a></li>
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

</div>   <!-- FIN DEL MAIN--> 
