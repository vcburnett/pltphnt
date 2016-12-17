$( document ).ready(function() {

	var browserWindow = $(window);
	var browserH = browserWindow.height();
	var browserW = browserWindow.width();

	var headerHome = $("#home-header");
	var headerContent = $("#header-content");
	var headerBorderBottom = $("#hero-bottom-border");

	var mainMenu = $("#main-menu");
	var mainMenuBackground = $("#main-menu .internal-wrapper");
	var mobileMenuBtn = $("#menu-btn-mobile");
	var mainMenuWrapper = $("#main-menu-wrapper");
	var menuLinks = $(".menu-links a");

	var logoMobile = $("#logo-mobile");

	var clientContainer = $(".client-container");
	var clientContent = $(".client-content");

	var headerCS = $("#cs-img-header");

	var headerHomeH, headerContentH, headerBorderBottomH;

	function updateElements() {
		console.log("moved!");

		// Hero content position
		var heroTop;
		headerHomeH = headerHome.height();
		headerContentH = headerContent.height();
		headerBorderBottomH = headerBorderBottom.height();
		heroPTop = ((headerHomeH - (headerContentH + headerBorderBottomH))/2) + (headerBorderBottomH/2);
		headerContent.css("margin-top", heroPTop*.5);

		clientContainer.height(clientContainer.width());
		clientContent.height(clientContent.width());
	}

	// ON RESIZE
	browserWindow.on("resize", function() {
		updateElements();
	}).trigger("resize");

	// ON SCROLL
	$(window).on('scroll', function() {
	    var yScroll = window.pageYOffset;
	    var scrollTrigger = 75;	// set to whatever you want it to be

	    console.log("yScroll = " + yScroll);

	    if(yScroll > scrollTrigger) {
			mainMenu.removeClass("main-menu");
			mainMenu.addClass("scroll-menu");
			logoMobile.css("opacity", 100);
	    } else {
			mainMenu.addClass("main-menu");
			mainMenu.removeClass("scroll-menu");
			logoMobile.css("opacity", 0);
	    }

	    headerHome.css("background-position", "center " + yScroll*.7 + "px");
	    headerCS.css("background-position", "center " + yScroll*.8 + "px");
	});	

	//Scroll links
    $(".scroll").click( function(event) {

        //get the full url - like mysitecom/index.htm#home
        var full_url = this.href;
        console.log("Full URL: " + full_url);

        //split the url by # and get the anchor target name - home in mysitecom/index.htm#home
        var parts = full_url.split("#");
        var trgt = "#" + parts[1];

       console.log("Taget anchor: " + trgt);

        //get the top offset of the target anchor
        var trgt_offset = $(trgt).offset();
        var trgt_top = trgt_offset.top - 80;
        console.log("trgt_top " + trgt_top);

        //goto that anchor by setting the body scroll top to anchor top
        if (trgt == "#contact-us") {
	        trgt_top = trgt_top+240;
	        $('html, body').animate({
				scrollTop:trgt_top},
				1000,
				"easeInOutCubic"
			);
			$("a.mm-link-selected").removeClass("mm-link-selected");
			$("a#link-" + parts[1]).addClass("mm-link-selected");
			return false;
        } else {
	        $('html, body').animate({
				scrollTop:trgt_top},
				1000,
				"easeInOutCubic"
			);
			$("a.mm-link-selected").removeClass("mm-link-selected");
			$("a#link-" + parts[1]).addClass("mm-link-selected");
			return false;
		}
    });

    // Mobile Menu button
    mobileMenuBtn.click(function() {
    	if (mainMenuWrapper.css("display") == "none") {
    		mainMenuBackground.css("background-color", "rgba(31,82,120,.92)");
    		mainMenuWrapper.css("display", "block");
    		mainMenuBackground.height(browserWindow.height());
    	} else {
    		mainMenuBackground.css("background-color", "transparent");
    		mainMenuWrapper.css("display", "none");
    		mainMenuBackground.height("auto");
    	}
    });

    if (browserWindow.width() <= 670) {
    	menuLinks.click(function() {
    		mainMenuBackground.css("background-color", "transparent");
    		mainMenuWrapper.css("display", "none");
    		mainMenuBackground.height("auto");
    	});
    }

	$("#contact").submit(function(e) {
		e.preventDefault();

		var form = $(this);
		var returnmessage = $(form).find(".returnmessage");

		console.log(form);

		var name = $(form).find('input[name="name"]').val().trim();
		var email = $(form).find('input[name="email"]').val().trim();
		var message = $(form).find('textarea[name="message"]').val().trim();
		$(returnmessage).empty(); // To empty previous error/success message.
		$(returnmessage).removeClass('error');
		$(returnmessage).removeClass('success');
		// Checking for blank fields.
		if (name == '' || email == '' || message == '') {
			$(returnmessage).append('Please Fill Required Fields');
			$(returnmessage).addClass('error');
		} else {
		// Returns successful data submission message when the entered information is stored in database.
			$.post("contact-form.php",
				$(form).serializeArray(),
				function(data) {
					$(returnmessage).append(data[1]); // Append returned message to message paragraph.
					if (data[0] == "success") {
						$(returnmessage).addClass('success');
						$(form)[0].reset(); // To reset form fields on success.
					} else {
						$(returnmessage).addClass('error');
					}
				}
			);
		}
	});

	$("#cv-form").submit(function(e) {
		e.preventDefault();

		var form = $(this);
		var returnmessage = $(form).find(".returnmessage");

		var name = $(form).find('input[name="name"]').val().trim();
		var email = $(form).find('input[name="email"]').val().trim();
		var position = $(form).find('input[name="position"]').val().trim();

		$(returnmessage).empty(); // To empty previous error/success message.
		$(returnmessage).removeClass('error');
		$(returnmessage).removeClass('success');
		// Checking for blank fields.
		if (name == '' || email == '' || position == '') {
			$(returnmessage).append('Please Fill Required Fields');
			$(returnmessage).addClass('error');
		} else {
			// Returns successful data submission message when the entered information is stored in database.
			$.post("contact-form.php",
				$(form).serializeArray(),
				function(data) {
					$(returnmessage).append(data[1]); // Append returned message to message paragraph.
					if (data[0] == "success") {
						$(returnmessage).addClass('success');
						$(form)[0].reset(); // To reset form fields on success.
					} else {
						$(returnmessage).addClass('error');
					}
				}
			);
		}
	});

});