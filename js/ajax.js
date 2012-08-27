
$(document).ready(function(){
    
    $('input[name=municipio],input[name=foodtype], select[name=party_size], input[name=date_reserve], select[name=time_reserve]').change( function ()
    {    
        var opciones = $('input[name=municipio],input[name=foodtype], select[name=party_size], input[name=date_reserve], select[name=time_reserve]').serializeArray();		

        $("div.resultbox").html("<div class='resultado'><img src='"+base_url+"css/img/loader_black_on_white.gif' width='24' height='24' style='margin-right:322px; margin-top:200px' /></div>").show();

        $("div.resultbox").load(base_url+"reservas/establishment/list_query", {opciones:opciones});
        			

    });
    $("#select-reservation").delegate(".reservebutton","click", function(){
    //alert("Hola");

            $("div.select-reservation-inner").load(base_url+"reservas/reservation/loader");

            $("#select-reservation").load(base_url+"reservas/reservation/first_step");

    });
    $("#select-reservation").delegate(".next_activebutton","click", function(){

            
            var reserva = $('#reserve_form').serializeArray();
            $("div.select-reservation-inner").load(base_url+"reservas/reservation/loader");
            $.post(base_url+"reservas/establishment/get_bookings/widget/"+team, {reservas:reserva}, function(data){
                    //var bookings = data;
                    var tmp=data;
                    
                    $("#select-reservation").load(base_url+"reservas/reservation/second_step", {reservas:reserva,bookings:tmp});
            });
    });
    $("#select-reservation").delegate(".nextdate_activebutton","click", function(){

            var reserva = $('#reserve_form').serializeArray();
            $("div.select-reservation-inner").load(base_url+"reservas/reservation/loader");
            
            $.post(base_url+"reservas/establishment/get_times/widget/"+team, {reservas:reserva}, function(data){
                    //var bookings = data;
                    var tmp=data;
                    //alert (tmp);
                    $("#select-reservation").load(base_url+"reservas/reservation/third_step", {reservas:reserva,times:tmp});
            });

            

    });
    
    if (box == 02) {
	var reserva = $('#reserve_form').serializeArray();
            $("div.select-reservation-inner").load(base_url+"reservas/reservation/loader");
            
            $.post(base_url+"reservas/establishment/get_times/widget/"+team, {reservas:reserva}, function(data){
                    //var bookings = data;
                    var tmp=data;
                    //alert (tmp);
                    $("#select-reservation").load(base_url+"reservas/reservation/third_step", {reservas:reserva,times:tmp});
            });
    }
    
    $("#select-reservation").delegate(".number_people","change", function(){

            $('#nextbutton').removeClass('nextbutton').addClass('next_activebutton');
            //alert("value changed"); 

    });
    $("#select-reservation").delegate(".finish_activebutton","click", function(){

            var reserva = $('#reserve_form').serializeArray();

            alert("Datos de Reserva: \nNum de personas: " + document.reserve_form.number_people.value + "\nFecha: " + document.reserve_form.date_reserve.value + "\nHora: " + document.reserve_form.time_reserve.value); 

    });
    $('.moveright').hover(function(){
                            $(this).animate({
                            left: 730
                            },{
                            queue: true,
                            duration: 200
                            })
                            }, function(){
                            $(this).animate({
                            left: 725
                            },{
                            queue: false,
                            duration: 200
                    })
                    });	

    $('.moveright2').hover(function(){
                            $(this).animate({
                            left: 52
                            },{
                            queue: true,
                            duration: 200
                            })
                            }, function(){
                            $(this).animate({
                            left: 47
                            },{
                            queue: false,
                            duration: 200
                    })
                    });	

    $('.moveleft').hover(function(){
                            $(this).animate({
                            left: 785
                            },{
                            queue: false,
                            duration: 200
                            })
                            }, function(){
                            $(this).animate({
                            left: 790
                            },{
                            queue: false,
                            duration: 200
                    })
                    });	
	
});