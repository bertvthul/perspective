(function( $ ) {
 	var currentScrollTop = $(document).scrollTop();
 	var windowHeight=$(window).height();
 	var windowWidth=$(window).width();
    $.fn.perspective = function() {
 
        this.filter( "[data-perspective]" ).not('.noperspective').each(function() {
        	
        	var elpostop=$( this ).parent('.perspectiveWrapper').offset().top;
            var elheight=$( this ).parent('.perspectiveWrapper').outerHeight();
            
            
            if((elpostop > currentScrollTop && elpostop < (currentScrollTop+windowHeight)) 
            || 
            (((elpostop+elheight) > currentScrollTop) && ((elpostop+elheight) <(currentScrollTop+windowHeight)))
            ||
            (elpostop <= currentScrollTop && (elpostop+elheight) >= (currentScrollTop+windowHeight))
            ){
            	//in screen
            	var elposleft=$( this ).parent('.perspectiveWrapper').offset().left;
            	var elwidth=$( this ).parent('.perspectiveWrapper').outerWidth();
            	var perspective=parseInt($(this).attr("data-perspective"));
            	
            	
            	var elcenterpointx = (((elpostop + (elheight/2))-currentScrollTop)/windowHeight)-0.5;
            	var elcenterpointy = (((elposleft + (elwidth/2))-0)/windowWidth)-0.5;
            	$(this).html(elcenterpointx);
            	$(this).css('top',((perspective*1.2)*elcenterpointx)+'px');
            	
            	$(this).css('left',((perspective*1.2)*elcenterpointy)+'px');
            	
           } else {
           		//out of screen
           		
           }
        });
 
        return this;
 
    };
 	
 	
 	 $.fn.animateScroll = function() {
 		currentScrollTop = $(document).scrollTop();
 		//windowHeight=$(window).height();
 		$("[data-perspective]" ).perspective();
 	};
	 	
	 	
	$(document).ready(function(){
		
		if($( "[data-perspective]" ).length){
			
			
			
			
			$( "[data-perspective]" ).each(function(){
				//var eloffsetleft=$(this).position().left;
				$( this ).wrap('<div class="perspectiveWrapper" style="position:relative;"></div>');
				
				$(this).parent('.perspectiveWrapper').width($(this).width());
				$(this).parent('.perspectiveWrapper').height($(this).height());
				//$(this).parent('.perspectiveWrapper').css('margin-left',(eloffsetleft)+'px');
				
				$( "[data-perspective]" ).css('position','absolute');
				
				$(this).after('<div class="perspectiveBg"></div>');
				$(this).parent('.perspectiveWrapper').find('.perspectiveBg').width($(this).width());
				$(this).parent('.perspectiveWrapper').find('.perspectiveBg').height($(this).height());
				
				
				//$(this).parent('.perspectiveWrapper').css('background',$(this).css('background'));
				
				
				$(this).css('opacity','1');
				
				
				var perspective=parseInt($(this).attr("data-perspective"));
				$(this).css('z-index',perspective);
				perspective=1+(perspective/700);
				$(this).css('transform','scale('+perspective+')');
				
			});
			$( "[data-perspective]" ).perspective();
			
			//scroll
			$(document).scroll(function(){
				
				//windowScrolled();
				$().animateScroll();
			});
			
		} else {
			console.log('perspective: No elements found to perspective in.');
		}
	});
 	
}( jQuery ));


