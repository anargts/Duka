
$(document).ready(function(){
	$( '#jms-slideshow' ).jmslideshow();
	$('.social li').tooltip();
  $('.horse_bair li').tooltip();
  $('.race_fin .item img').tooltip();
	$('.dropdown-toggle').dropdown();
	$('.carousel').carousel({
			interval: false
		});
  $(document).SlideInMenu();
	$('.social li .up a').click(function () {
			$('body').scrollTop(0);
	});
	$('.social a.back_top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	$('#myCarousel .item ul li.race_information:odd').css('background','#f5f5f5');
  $('#myCarousel .item ul li.soon_single:odd').css('padding','20px 0px 0 10px');
  $('#myCarousel .item ul li.soon_single:even').css('clear','left');
  $('.ended_information ul li:even').css('clear','left');
  $(document).ready(function(){
        $('.news_thumb img').load(function(){
            $("#tiles").masonry({
          columnWidth: 1,
        itemSelector: '#tiles li'
        });
        });
        $("#tiles").masonry({
          columnWidth: 1,
        itemSelector: '#tiles li'
        });
    }); 
  var parentWidth;

  $('.mobile-top-menu .mobile-menu-item').click( function() {
    parentWidth =  $(this).width();
    $(this).siblings().animate({
      width : '0%'
    } , 200);
    $(this).removeClass('shrinked').addClass('expanded').animate({
      width : '99%'
    } , 400);

    var $this = $(this);
    $(this).find('div.menu-item-child, a.shrink').fadeIn( function() {
      var childHeight = $this.find('div.menu-item-child').height();
      if ( childHeight > $this.height() ) $this.animate({height : childHeight},200);
    });

  });

  $('.mobile-top-menu a.shrink').click( function(e) {
    var childHeight = $(this).parent().find('div.menu-item-child').height(),
    parentHeight = 40,
    $this;
    if ( childHeight > parentHeight ) {
      $this = $(this);
      $(this).parent().animate({height : parentHeight} , 200, function() {
        $this.parent().find('div.menu-item-child, a.shrink').fadeOut();
        $this.parent().siblings().addBack().removeClass('expanded').addClass('shrinked').animate({
          width : parentWidth
        } , 200);
      });
    } else {
      $(this).parent().find('div.menu-item-child, a.shrink').fadeOut();
      $(this).parent().siblings().addBack().removeClass('expanded').addClass('shrinked').animate({
        width : parentWidth
      } , 200);
    }
    e.stopPropagation();
    return false;
  });
});
jQuery(function(){
  jQuery('#search-button').click(function(e){
    e.preventDefault();
    if(jQuery(this).hasClass('active')){
      jQuery(this).removeClass('active')
      jQuery('#hiddenform').slideUp('fast');
    }
    else{
      jQuery(this).addClass('active')
      jQuery('#hiddenform').slideDown('fast');
      jQuery('#hiddenform1').slideUp('fast');
      jQuery('#login-button').removeClass('active');
    }
    
  });
});

jQuery(function(){
  jQuery('#login-button').click(function(e){
    e.preventDefault();
    if(jQuery(this).hasClass('active')){
      jQuery(this).removeClass('active')
      jQuery('#hiddenform1').slideUp('fast');
    }
    else{
      jQuery(this).addClass('active')
      jQuery('#hiddenform1').slideDown('fast');
      jQuery('#hiddenform').slideUp('fast');
      jQuery('#search-button').removeClass('active');
    }
    
  });
});

jQuery(function(){
  jQuery('span.hidden_close').click(function(e){
      jQuery('#hiddenform').slideUp('fast');
      jQuery('#hiddenform1').slideUp('fast');
      jQuery('#login-button').removeClass('active');
      jQuery('#search-button').removeClass('active');
  });
});

jQuery(function(){
  jQuery('.btn-login').click(function(e){
    e.preventDefault();
    if(jQuery(this).hasClass('active')){
      jQuery(this).removeClass('active')
      jQuery('.login_error').slideUp('fast');
    }
    else{
      jQuery(this).addClass('active')
      jQuery('.login_error').slideDown('fast');
    }    
  });
});

