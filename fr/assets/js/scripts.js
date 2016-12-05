$( document ).ready(function() {

	//Variables
	var browser = $( window );
	var wrapper = $( "#wrapper" );
	var footer = $( "footer" );

	var wrapperHeight, footerHeight, browserHeight;

	function elementsUpdate() {
		browserHeight = browser.outerHeight();
		footerHeight = footer.outerHeight(true);
		wrapperHeight = wrapper.outerHeight(true);
		console.log("browser = " + browserHeight);
		console.log("footer = " + footerHeight);
		console.log("wrapper = " + wrapperHeight);
		var delta = browserHeight - ( wrapperHeight + footerHeight );
		if (delta > 0) {
			footer.addClass("footer-fixed");
		} else {
			footer.removeClass("footer-fixed");
		}
		console.log("delta = " + delta);
	};

	browser.on("load", function() {
		elementsUpdate();
	});
	browser.resize(function() {
		elementsUpdate();
	});

});