<div id="main" align="center">

        <div id="box_restaurant">
        
            <div id="top_box_restaurant"><div id="title_box_restaurant"><?php echo $team[0]['local_name'];?></div>
                <a class="back_search moveleft" href="<?php echo base_url('reservas/establishment')?>"></a>
            </div>
        
       
         <div id="bottom_box_restaurant">
                <?php if ($slider === 0){?>
             
             
                 <?php $count_array = 3;
                         for ($i=0; $i<$count_array;$i++)
                         { 
             
                                switch ($i) {
                                case 0:?>
                                    <div id="img_min" class="left">
                                        <img src="<?php echo $image_url.$team[0]['multimedia'][$i]['route'];?>" width="328" height="200" />
                                    </div>
                            <?php break;
                                case 1: ?>
                                    <div id="img_min" class="center">
                                        <img src="<?php echo $image_url.$team[0]['multimedia'][$i]['route'];?>" width="328" height="200" />
                                    </div>
                            <?php break;
                                case 2: ?>
                                    <div id="img_min" class="right">
                                        <img src="<?php echo $image_url.$team[0]['multimedia'][$i]['route'];?>" width="328" height="200" />
                                    </div>
                            <?php break;
                                }
             
             
                         } ?>        
             
                 <?php }else{?>

                    <div class="wrapper">
                        <div class="list_carousel">
                            <ul id="foo0">
                     <?php $count_array = count($team[0]['multimedia']);
                     for ($i=0; $i<$count_array;$i++){ ?>
                         <li><img src="<?php echo $image_url.$team[0]['multimedia'][$i]['route'];?>" width="328" height="200" /></li>
                     <?php } ?>
                            </ul>				
                        </div>
                    </div> 
                  <?php }?>
                </div>                
        </div>
        <a name="reserve_process"></a>
        <div id="detail_restaurant">
            <div id="detail_left">
            
            	<div id="top_detail_left">
            		<div id="title_detail_left"><p><strong>DETALLES</strong></p></div>                
                </div>
                
                <div id="middle_detail_left">
                
                    <div id="municipality_detail_left">
                        <h3 class="municipality_detail_left">Municipio</h3><br  />
                        <span><? echo $team[0]['city_name'];?></span>
                    </div>
                
                    <div id="food_detail_left">
                        <h3 class="food_detail_left">Especialidad</h3><br  />
                        <span><? echo $team[0]['cuisine'];?></span>
                    </div>
                
                    <div id="address_detail_left">
                        <h3 class="address_detail_left">- Restaurant -</h3><br  />
                        <span><? echo $team[0]['location'];?></span>
                    </div>
                
                </div>
                
                <div id="bottom_detail_left"></div>
            </div>
            
            <div id="description-view">            
            	<div id="title_description_view"><p>¿PORQUÉ NOS GUSTA?</p> </div>
                <p>
                <ul>
                    <? echo $team[0]['description'];?>
                </ul>
                </p>   
            </div>
            
            <div id="select-reservation">
                <?php $this->load->view('box_reserve_'.$box);?>
            </div>
            
            
		</div>

</div>   <!-- FIN DEL MAIN-->     