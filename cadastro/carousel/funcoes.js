	
	$( document ).ready( function(){
		$( ".carousel_" ).cycle({ 
			fx:'carousel',
			reverse:false,	
			allowWrap:true,  // loop = sim ou não
			carouselVertical:false,
			carouselFluid:false, // responsivo
			pager:".pager",
			next:".next",
			prev:".prev",
			carouselVisible:5,
			speed:700,
			timeout:1000

		 });
	} );


