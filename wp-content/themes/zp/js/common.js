$(function(){$(".slider-wrap").slideDown(),$(".popup-with-move-anim").magnificPopup({type:"inline",fixedContentPos:!1,fixedBgPos:!0,overflowY:"auto",closeBtnInside:!0,preloader:!1,midClick:!0,removalDelay:300,mainClass:"my-mfp-slide-bottom"}),$(".service-item h4").equalHeights(),$(".new-item-text").equalHeights(),$(".link-item").equalHeights(),$(".slide-content").equalHeights(),$(".new-item").equalHeights(),$(".sf-menu").after("<div id='my-menu'>"),$(".sf-menu").clone().appendTo("#my-menu"),$("#my-menu").find("*").attr("style",""),$("#my-menu").find("ul").removeClass("sf-menu"),$("#my-menu").mmenu({extensions:["widescreen","theme-white","effect-menu-slide","pagedim-black"],navbar:{title:"Меню"}});var e=$("#my-menu").data("mmenu");e.bind("closed",function(){$(".toggle-mnu").removeClass("on")}),$(".mobile-mnu").click(function(){var e=$("#my-menu").data("mmenu");e.open();var n=$(this).find(".toggle-mnu");return n.toggleClass("on"),$(".main-mnu").slideToggle(),!1});var n=$(".slider");n.owlCarousel({loop:!0,items:1,itemClass:"slide-wrap",nav:!0,navText:""}),$(".next").click(function(){n.trigger("next.owl.carousel")}),$(".prev").click(function(){n.trigger("prev.owl.carousel")}),$(".top-line .sf-menu").superfish({cssArrows:!1,hoverClass:"no-class",delay:800}),Modernizr.svg||$("img[src*='svg']").attr("src",function(){return $(this).attr("src").replace(".svg",".png")}),$("form").submit(function(){var e=$(this);return $.ajax({type:"POST",url:"/mail.php",data:e.serialize()}).done(function(){$(".success").addClass("visible"),setTimeout(function(){e.trigger("reset"),$(".success").removeClass("visible"),$.magnificPopup.close()},3e3)}),!1});try{$.browserSelector(),$("html").hasClass("chrome")&&$.smoothScroll()}catch(s){}$("img, a").on("dragstart",function(e){e.preventDefault()})});