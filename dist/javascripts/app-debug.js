var App = function() {

    function  slidesWorkshop(){
        $('.workshop-carousel.owl-carousel').owlCarousel({
            loop:true, 
            items:4,
            dots: true,
            nav: false,
            mouseDrag: true,
            animateIn: 'fadeIn',
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200: {
                    items:4,
                }
            }
        });
    }
    function  slidesTimeline(){
        $('.timeline-carousel.owl-carousel').owlCarousel({
            loop:true, 
            items:1,
            dots: false,
            nav: true,
            mouseDrag: true,
            animateIn: 'fadeIn',
            responsive:{
                0:{
                    items:2,
                },
                768:{
                    items:3,
                },
                1200: {
                    items:5,
                }
            }
        });
    }
    // SLIDE Banner Topo
    function  slidesBannerTop(){
        $('.slide.owl-carousel').owlCarousel({
            loop:true, 
            items:1,
            margin:0,
            dots: true,
            nav: false,
            mouseDrag: true,
            animateIn: 'fadeIn',
            autoplay: true
        });
    }
    function slideEspecialistas(){
        $('.slide-especialistas.owl-carousel').owlCarousel({
            loop:true, 
            items:1,
            autoHeight:true,
            margin:0,
            dots: true,
            nav: true,
            autoplay: true,
            animateIn: 'fadeIn'
        });
    }
    function slideSos(){
        $('.slide-sos.owl-carousel').owlCarousel({
            loop:true, 
            items:1,
            margin:0,
            nav: true,
            dots: false,
            animateIn: 'bounceInRight',
            animateOut: 'bounceOutLeft'
        });
    }
    function slideVideos(){
        $('.slide-videos.owl-carousel').owlCarousel({
            loop:true, 
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots: true,
                    margin: 0
                },
                640:{
                    items:2,
                    dots: false,
                    nav:true,
                    margin: 10
                },
                768:{
                    items:3,
                    dots: false,
                    nav:true,
                    margin: 20
                }
            }
        });
    }
    function slideMembros(){
        $('.slide-membros.owl-carousel').owlCarousel({
            loop:true, 
            responsiveClass:true,
            autoHeight: true,
            autoplay: true,
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots: true,
                    margin: 10
                },
                640:{
                    items:3,
                    dots: false,
                    nav:true,
                    margin: 10
                },
                768:{
                    items:4,
                    dots: false,
                    nav:true,
                    margin: 20
                }
            }
        });
    }
    function slideHistoria(){
        $('.slide-nossa-historia.owl-carousel').owlCarousel({
            loop:false, 
            items:1,
            margin:0,
            dots: false,
            nav: true
        });
    }

    // LIGHTGALLERY
    function activeLg(){
        // $('.list-cards .flex').lightGallery({
        //     selector: '.item-card'
        // });
        if($("div[id^='estrutura-images--'").length > 0) {
            $("div[id^='estrutura-images--'").lightGallery({
                selector: '.lightgallery',
                thumbnail:true,
                animateThumb: true,
                showThumbByDefault: true
            }); 
        }
        
        $('.btn__unidade').on('click', function(e){
            e.preventDefault();
            var r = $(this).data('rel');
            $("." + r).trigger('click');
        });

        $('.slide-videos').lightGallery({
            selector: '.video a'
        });
        $('.slide-nossa-historia').lightGallery({
            selector: '.lightgallery_depoimentos'
        });
        
        $('.btn_depoimentos').on('click', function(e){
            e.preventDefault();
            $(".lightgallery_depoimentos").trigger('click');
        });

        // $('.flex-part.video').lightGallery();
    }
    // MENU MOBILE
    function menuMob(){
        $('.icon-menu-mobile').on('click', function(){
            $('header .gruporecanto-menu').slideToggle();
            $(this).toggleClass('changeIcon');
        });
    }

    //BARRA BOTTOM
    function showBarBottom(){
        scrollDown = $(window).scrollTop();
        itemBarH = $('.barra-fixa').height();
        itemBar = $('.barra-fixa');
        itemBar.css('bottom','-'+itemBarH+'px'); 
        console.log(itemBarH);
        $(window).scroll(function () {
            scrollUp = $(window).scrollTop();
            itemBar.css('bottom','0');
        });
    }

    // BUTTON SEE MORE
    function buttonSeeMore(){
        var textResumir = $('.button-see-more').text();
        var textVer = $('.button-see-more').text('Ver mais');

        // pagina equipe
        $('.button-see-more').click(function(e){
            e.preventDefault();
            $('.img-text').toggleClass('show-content');
        });
        
        // pagina tratamento
        $('.button-see-more').click(function(e){
            e.preventDefault();
            $('.item-banner').toggleClass('show-content');
        });

        // mudar o texto quando clicar
        $('.button-see-more').click(function(e){
            var t = $(this).text();
            if(t == 'Ver mais') {
                $(this).text('Resumir');
            }else {
                $(this).text('Ver mais');
            }
        });
        

    }
    //TABS
    function tabsContent(){
        
        wScreen = $(window).width();
        firstShow = $('.conteudo-tabs:nth-child(2)').show();
        if( $(window).width() < 768){firstShow = $('.conteudo-tabs:nth-child(2)').hide();}
    
        // TAB TRIPÉ
        $('.tripe-terapia .menu-tabs a').on('click', function(e){
            e.preventDefault();
            var valorMenu = $(this).data('tab');
            var conteudoTab = $('.tab-' + valorMenu);
            console.log(conteudoTab.text());
            if(wScreen > 768){
                $('.conteudo-mob').remove();
                $('.tripe-terapia .conteudo-tabs').hide();
                conteudoTab.fadeIn();
            }

            // mobile
            conteudoTabMob = $(this).find('.conteudo-mob');
            textConteudo = conteudoTab.html();
          
            if(wScreen < 768){
                firstShow = $('.menu-tab a:nth-child(2)').trigger('click');
                $('.conteudo-tabs').hide();
                $('.box-tab').append('<div class=".conteudo-mob"></div>');
                $('.conteudo-mob').html(textConteudo);
                conteudoTabMob.slideToggle();
            }
        });

        // TABS GREEN
        $('.section-tabs .menu-tabs a').click(function(e){
            e.preventDefault();
            
            valorMenu = $(this).attr('data-tab');
            conteudoTab = $(this).parents('.container-tabs').find('.conteudo-tabs.tab-'+valorMenu);
            $('.section-tabs .conteudo-tabs').hide();
            conteudoTab.fadeIn();

            // mobile
            conteudoTabMob = $(this).find('.conteudo-mob');
            textConteudo = conteudoTab.html();
          
            if(wScreen < 768){
                firstShow = $('.menu-tab a:nth-child(2)').trigger('click');
                $('.conteudo-tabs').hide();
                $('.box-tab').append('<div class=".conteudo-mob"></div>');
                $('.conteudo-mob').html(textConteudo);
                conteudoTabMob.slideToggle();
            }

        });
        
    }
    
    // ACCORDION HOME
    function accordionCard(){
        $('.opt-card').click(function(){
            $(this).parents('.item-card').find('.conteudo-card').slideToggle();
        });
    }

    // MASCARA FORMULÁRIO
    function maskForm(){
        $(document).ready(function(){
            $('.telefone-mask').mask('(00) 0 0000-0000');
        });

        $("#cpfcnpj").keydown(function(){
            try {
                $("#cpfcnpj").unmask();
            } catch (e) {}
            
            var tamanho = $("#cpfcnpj").val().length;
            
            if(tamanho < 11){
                $("#cpfcnpj").mask("999.999.999-99");
            } else if(tamanho >= 11){
                $("#cpfcnpj").mask("99.999.999/9999-99");
            }
            
            // ajustando foco
            var elem = this;
            setTimeout(function(){
                // mudo a posição do seletor
                elem.selectionStart = elem.selectionEnd = 10000;
            }, 0);
            // reaplico o valor para mudar o foco
            var currentValue = $(this).val();
            $(this).val('');
            $(this).val(currentValue);
        });
    }

    function barraFixa(){
        var $conteudo = $('footer'),
            $bottomConteudo = parseInt($conteudo.position().top + $conteudo.outerHeight(true)),
            $barraFixa = $('.barra-fixa'),
            $window = $(window),
            $scrollTop = $window.scrollTop(),
            $windowHeight = $window.height();

            //se o bottom do conteudo for menor ou igual a altura do topo + altura da janela
            if ( ($bottomConteudo <= ( $scrollTop + $windowHeight)) ) {
                //remove as classes fixa e slide
                $barraFixa.removeClass('fix slideInUp');
                //se a barra de atendimento não tiver a classe slide down
                if (!$barraFixa.hasClass('slideInDown')){
                    //adicione a classe slide down
                    $barraFixa.addClass('slideInDown');
                }
            } else {
                //quando o topo do conteudo for maior que a altura do topo + altura da janela
                //remova o slide down
                $barraFixa.removeClass('slideInDown');
                //se a barra de atendimento não tiver a classe fix
                if (!$barraFixa.hasClass('fix') ){
                    //adicione a classe fix
                    $barraFixa.addClass('fix');
                }
                //se a barra de atendimento não tiver a classe slide up
                if (!$barraFixa.hasClass('slideInUp')){
                    //adicione a class slide up
                    $barraFixa.addClass('slideInUp');
                }
            }
        }

    function workshopItens() {
        $('.lista-de-workshop').on('click', '.item', function() {
            var target = $(this).find('.btn').data('rel');
            console.log(target);
            $('#' + target).toggleClass('active');
        });
    }
    
    function scrollDownCategoryPage() {
        var categoryPage = $('body.category');
        if(categoryPage.length > 0) {
            $('html, body').animate({
                scrollTop: ($('.list-noticias').first().offset().top)
            },1500);
        }
    }
    return {
        init: function() {
            slidesWorkshop();
            workshopItens();
            slidesTimeline();
            slidesBannerTop();
            slideHistoria();
            slideEspecialistas();
            slideSos();
            slideVideos();
            slideMembros();
            activeLg();
            menuMob();
            tabsContent();
            accordionCard();
            showBarBottom();
            buttonSeeMore();
            scrollDownCategoryPage();
            // maskForm();
            $(document).scroll(barraFixa);
            $(window).resize(barraFixa); 
        }
    }
}()