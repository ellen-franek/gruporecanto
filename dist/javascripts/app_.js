var App=function(){function e(){var e=$("footer"),o=parseInt(e.position().top+e.outerHeight(!0)),t=$(".barra-fixa"),s=$(window);o<=s.scrollTop()+s.height()?(t.removeClass("fix slideInUp"),t.hasClass("slideInDown")||t.addClass("slideInDown")):(t.removeClass("slideInDown"),t.hasClass("fix")||t.addClass("fix"),t.hasClass("slideInUp")||t.addClass("slideInUp"))}return{init:function(){$(".plano-saude-carousel.owl-carousel").owlCarousel({loop:!0,margin:10,dots:!1,nav:!0,mouseDrag:!0,animateIn:"fadeIn",responsive:{0:{items:2},768:{items:3},1200:{items:4}}}),$(".workshop-carousel.owl-carousel").owlCarousel({loop:!0,items:4,dots:!0,nav:!1,mouseDrag:!0,animateIn:"fadeIn",responsive:{0:{items:1},768:{items:2},1200:{items:4}}}),$(".lista-de-workshop").on("click",".item",function(){var e=$(this).find(".btn").data("rel");console.log(e),$("#"+e).toggleClass("active")}),$(".timeline-carousel.owl-carousel").owlCarousel({loop:!0,items:1,dots:!1,nav:!0,mouseDrag:!0,animateIn:"fadeIn",responsive:{0:{items:2},768:{items:3},1200:{items:5}}}),$(".slide.owl-carousel").owlCarousel({loop:!0,items:1,margin:0,dots:!0,nav:!1,mouseDrag:!0,animateIn:"fadeIn",autoplay:!0}),$(".slide-nossa-historia.owl-carousel").owlCarousel({loop:!1,items:1,margin:0,dots:!1,nav:!0}),$(".slide-especialistas.owl-carousel").owlCarousel({loop:!0,items:1,autoHeight:!0,margin:0,dots:!0,nav:!0,autoplay:!0,animateIn:"fadeIn"}),$(".slide-sos.owl-carousel").owlCarousel({loop:!0,items:1,margin:0,nav:!0,dots:!1,animateIn:"bounceInRight",animateOut:"bounceOutLeft"}),$(".slide-videos.owl-carousel").owlCarousel({loop:!0,responsiveClass:!0,responsive:{0:{items:1,nav:!1,dots:!0,margin:0},640:{items:2,dots:!1,nav:!0,margin:10},768:{items:3,dots:!1,nav:!0,margin:20}}}),$(".slide-membros.owl-carousel").owlCarousel({loop:!0,responsiveClass:!0,autoHeight:!0,autoplay:!0,responsive:{0:{items:1,nav:!1,dots:!0,margin:10},640:{items:3,dots:!1,nav:!0,margin:10},768:{items:4,dots:!1,nav:!0,margin:20}}}),$("div[id^='estrutura-images--'").length>0&&$("div[id^='estrutura-images--'").lightGallery({selector:".lightgallery",thumbnail:!0,animateThumb:!0,showThumbByDefault:!0}),$(".btn__unidade").on("click",function(e){e.preventDefault();var o=$(this).data("rel");$("."+o).trigger("click")}),$(".slide-videos").lightGallery({selector:".video a"}),$(".slide-nossa-historia").lightGallery({selector:".lightgallery_depoimentos"}),$(".btn_depoimentos").on("click",function(e){e.preventDefault(),$(".lightgallery_depoimentos").trigger("click")}),$(".icon-menu-mobile").on("click",function(){$("header .gruporecanto-menu").slideToggle(),$(this).toggleClass("changeIcon")}),wScreen=$(window).width(),firstShow=$(".conteudo-tabs:nth-child(2)").show(),$(window).width()<768&&(firstShow=$(".conteudo-tabs:nth-child(2)").hide()),$(".tripe-terapia .menu-tabs a").on("click",function(e){e.preventDefault();var o=$(this).data("tab"),t=$(".tab-"+o);console.log(t.text()),wScreen>768&&($(".conteudo-mob").remove(),$(".tripe-terapia .conteudo-tabs").hide(),t.fadeIn()),conteudoTabMob=$(this).find(".conteudo-mob"),textConteudo=t.html(),wScreen<768&&(firstShow=$(".menu-tab a:nth-child(2)").trigger("click"),$(".conteudo-tabs").hide(),$(".box-tab").append('<div class=".conteudo-mob"></div>'),$(".conteudo-mob").html(textConteudo),conteudoTabMob.slideToggle())}),$(".section-tabs .menu-tabs a").click(function(e){e.preventDefault(),valorMenu=$(this).attr("data-tab"),conteudoTab=$(this).parents(".container-tabs").find(".conteudo-tabs.tab-"+valorMenu),$(".section-tabs .conteudo-tabs").hide(),conteudoTab.fadeIn(),conteudoTabMob=$(this).find(".conteudo-mob"),textConteudo=conteudoTab.html(),wScreen<768&&(firstShow=$(".menu-tab a:nth-child(2)").trigger("click"),$(".conteudo-tabs").hide(),$(".box-tab").append('<div class=".conteudo-mob"></div>'),$(".conteudo-mob").html(textConteudo),conteudoTabMob.slideToggle())}),$(".opt-card").click(function(){$(this).parents(".item-card").find(".conteudo-card").slideToggle()}),scrollDown=$(window).scrollTop(),itemBarH=$(".barra-fixa").height(),itemBar=$(".barra-fixa"),itemBar.css("bottom","-"+itemBarH+"px"),console.log(itemBarH),$(window).scroll(function(){scrollUp=$(window).scrollTop(),itemBar.css("bottom","0")}),$(".button-see-more").text(),$(".button-see-more").text("Ver mais"),$(".button-see-more").click(function(e){e.preventDefault(),$(".img-text").toggleClass("show-content")}),$(".button-see-more").click(function(e){e.preventDefault(),$(".item-banner").toggleClass("show-content")}),$(".button-see-more").click(function(e){"Ver mais"==$(this).text()?$(this).text("Resumir"):$(this).text("Ver mais")}),$("body.category").length>0&&$("html, body").animate({scrollTop:$(".list-noticias").first().offset().top},1500),$(document).scroll(e),$(window).resize(e)}}}();