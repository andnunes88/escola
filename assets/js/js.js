$(document).ready(function(){
	alturaOpcoes = $(".caixa-listas").height()+2;
	/*** modal **/
	$("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
		
		
			
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        //$('#mascara').fadeIn(500); 
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show(); 
		$(window).scrollTop(0) ;
		$("#videoCanto").removeClass("videoCanto");
		
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
	
	/*** fim modal **/
	
});

//menu retratil
	 $(document).ready(function(){

     $("dd").hide();
     $("dt a").click(function(){
        $("dd:visible").slideUp("slow");
        $(this).parent().next().slideDown("slow");
        return false;
     });
});


/* Função que carrega script das abas */
        
        	$.abasSimples = function ()
        	{
        	
        		/* Guarda IDs dos elementos */
        	
        		var abas = 'p#abas';
        		var conteudos = 'ul#conteudos';
        		
        		/* Oculta todas as abas */
        		
        		$(conteudos + ' li').hide();
        		
        		/* Exibe a primeira aba */
        		
        		$(conteudos + ' li:first-child').show();
        		
        		/* Quando uma aba for clicada */
        		
        		$(abas + ' a').click(function()
        		{
        		
        			/* Remove todas as classes de todas as abas */
        		
        			$(abas + ' a').removeClass('selected');
        			
        			/* Acrescenta uma classe CSS marcando visualmente a aba como selecionada */
        			
        			$(this).addClass('selected');
        			
        			/* Oculta todas as abas abertas */
        			
        			$(conteudos + ' li').hide();
        			
        			/* Exibe a aba que foi clicada */
        			
        			$(conteudos +  ' ' + $(this).attr('href')).show();
        			
        			/* Fim :D */
        			
        			return false;
        			
        		}); 
        		
        	};
        	
        	/* Quando o documento estiver carregado… */

			$(document).ready(function()
			{
			
				/* Carrega a função das abas */
				
				$.abasSimples();
			
			});