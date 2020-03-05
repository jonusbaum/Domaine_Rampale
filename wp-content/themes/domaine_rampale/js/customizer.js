 $(document).ready(function(){

 	$(".menu-toggle").click(function () { 
       $("#menu_slide").css("left","0");  
    });
    $(".menu-close").click(function () { 
       $("#menu_slide").css("left","-350px"); 
    });

    $(".main-navigation li.menu-item-has-children").prepend('<span class="caret"></span>');

    $('.sub-menu').hide();
    $('.menu-item-has-children').on('click','.caret',function(e){
    	 
    	$(this).next().next("ul.sub-menu").toggle();
    });
 	
 	$(".reservation-widget #date_deb").before('<label class="hz_cal">Arrivée</label>'); 
 	$(".reservation-widget #date_dep").before('<label class="hz_cal">Départ</label>'); 

 	$(".wpml-ls-item-fr a span").replaceWith("FR");
 	$(".wpml-ls-item-en a span").replaceWith("EN");
 	$(".wpml-ls-item-es a span").replaceWith("ES");

	/* Set the width of the side navigation to 0 */
	//function closeNav() {
	//  $("#menu_slide").style.width = "0";
	//}

 });