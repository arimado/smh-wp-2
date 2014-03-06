var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

showLeftPush.onclick = function() {
    classie.toggle( this, 'active' );
    classie.toggle( body, 'cbp-spmenu-push-toright' );
    classie.toggle( menuLeft, 'cbp-spmenu-open' );
};



jQuery(document).ready(function() {

	// Increase Font Script

	var fontSizes = ['1em', '1.2em', '.8em', '.9em']; 
	var fontButton = '.article-txt-ctrl a'; 
	var fontSetting = 0; 
	var articleContent = '.article-post-content p'; 

	jQuery(fontButton).click(function(){
		if (fontSetting < 3) {
			fontSetting++;
			console.log(fontSetting);
			jQuery(articleContent).css({'font-size':fontSizes[fontSetting]});
		} else {
			fontSetting = 0;
			jQuery(articleContent).css({'font-size':fontSizes[fontSetting]});
			console.log(fontSetting);
		}
		

	});

	// Recommended C hover 
	jQuery(".recommendedc-prev").click(function(){
	     window.location=jQuery(this).find(".recommendedc-prev-title a").attr("href"); 
	     return false; 
	});

});
