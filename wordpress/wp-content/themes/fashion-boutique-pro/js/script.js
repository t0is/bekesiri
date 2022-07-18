/* ===============================================
  Open header search
=============================================== */

function spa_salon_pro_open_search_form() {

  jQuery('.header-search .search-form').addClass('is-open');
  jQuery('body').addClass('no-scrolling');
  setTimeout(function(){
     jQuery('.search-form  #header-searchform input#header-s').filter(':visible').focus();
     jQuery('.close-search-form').show();
  }, 100);

  return false;
}

jQuery( ".header-search a.open-search-form").on("click", spa_salon_pro_open_search_form);

/* ===============================================
  Close header search
=============================================== */

function spa_salon_pro_close_search_form() {
  jQuery('.header-search .search-form').removeClass('is-open');
  jQuery('body').removeClass('no-scrolling');
  jQuery('.close-search-form').hide();
}

jQuery( ".header-search a.close-search-form").on("click", spa_salon_pro_close_search_form);

/* ===============================================
	TRAP TAB FOCUS ON MODAL SEARCH
============================================= */

jQuery('.search-form #searchform #search').on('keydown', function (e) {
  if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('.search-form #searchform :input.search-submit').focus();
  }
});

jQuery('.search-form #searchform :input.search-submit').on('keydown', function (e) {
  if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('.search-form a.close-search-form').focus();
  }
});

jQuery('.search-form a.close-search-form').on('keydown', function (e) {
  if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('.search-form #searchform #search').focus();
  }
});

/* ===============================================
	OWL CAROUSEL SLIDER SECTION 
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#slider .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: true,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: false,
    dots:true,
    navText:["<div class='nav-btn fas fa-arrow-left' </div>","<div class='nav-btn  fas fa-arrow-right' </div>"],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/* ===============================================
  OWL CAROUSEL FEATURED CATEGORY SECTION
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#featured_category1 .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 2
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/* ===============================================
  OWL CAROUSEL FEATURED CATEGORY SECTION
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#featured_category2 .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/* ===============================================
  OWL CAROUSEL REVIEW SECTION
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#reviews .owl-carousel');
    owl.owlCarousel({
    margin:30,
    nav: true,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: false,
    dots:true,
    navText:["<div class='nav-btn fas fa-arrow-left' </div>","<div class='nav-btn  fas fa-arrow-right' </div>"],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      },
      1200: {
        items: 1
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/* ===============================================
  OWL CAROUSEL  LATEST NEWS CATEGORY SECTION
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#latest_news .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    navText:["<div class='nav-btn fas fa-chevron-left' </div>","<div class='nav-btn  fas fa-chevron-right' </div>"],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      },
      1200: {
        items: 3
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});


/* ===============================================
  OWL CAROUSEL BRANDS SECTION
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#brands1 .owl-carousel');
    owl.owlCarousel({
    margin:0,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/* ===============================================
  OWL CAROUSEL BRANDS SECTION
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('#brands2 .owl-carousel');
    owl.owlCarousel({
    margin:0,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 3
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});


/* ===============================================
  SCROLL TO TOP BUTTON
=============================================== */
var btn = jQuery('#button_scroll');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});


/* ===============================================
 PRELOADER
=============================================== */

jQuery(window).load(function(){
  jQuery('.cssloader').fadeOut('slow',function(){jQuery(this).remove();});
});


/* ===============================================
  OPEN Menu
============================================= */

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

/* ===============================================
 STICKY HEADER
=============================================== */
  
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("site-navigation");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("fix-sticky")
  } else {
    navbar.classList.remove("fix-sticky");
  }
}


/* ===============================================
 PRODUCTS IMAGE HOVER EFFECTS
=============================================== */

 jQuery(".hover").mouseleave(
    function () {
      jQuery(this).removeClass("hover");
    }
  );

jQuery( document ).ready(function(){
    jQuery('.now').css("width", function(){
        return jQuery(this).attr("data")
    })
});


/* ===============================================
  CATEGORIES  DROPDOWN
============================================= */

jQuery(document).ready(function(){
  jQuery(".product-cat").hide();
    jQuery("button.product-btn").click(function(){
        jQuery(".product-cat").toggle();
    });
});