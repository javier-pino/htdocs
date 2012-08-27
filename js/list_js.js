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
            {   minDate: '0',
                showOn: "both",
			buttonImage: base_url+"css/images/Calendar-256.png",
                        buttonText: "Muestra Calendario",
			buttonImageOnly: true,
                onChange: function(dateText, inst) {
                    $("#datereserve").val(dateText);
                } 

            });

});
