function deleteCartInCheckoutPage(){ 

    $jq(".checkout-cart-index a.btn-remove2,.checkout-cart-index a.btn-remove").click(function(event) {
        event.preventDefault();
               if(!confirm(confirm_content)){
            return false;
        }
   
        
    });
   
    return false;
}
function slideEffectAjax() {
      $jq('.top-cart-contain').mouseenter(function() {
            $jq(this).find(".top-cart-content").stop(true, true).slideDown();
        });

        $jq('.top-cart-contain').mouseleave(function() {
            $jq(this).find(".top-cart-content").stop(true, true).slideUp();
        });
}
function deleteCartInSidebar() {

    if(is_checkout_page>0) return false;
    $jq('#cart-sidebar a.btn-remove, #mini_cart_block a.btn-remove').each(function(){});
}  

$jq(document).ready(function(){
    slideEffectAjax();
});


/*-------- End Cart js -------------------*/


jQuery.extend( jQuery.easing,
{

	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},

});

(function(jQuery){
     jQuery.fn.extend({
         accordion: function() {       
            return this.each(function() {
		
				function activate(el,effect){
					
					
					jQuery(el).siblings( panelSelector )[(effect || activationEffect)](((effect == "show")?activationEffectSpeed:false),function(){
jQuery(el).parents().show();
					
					});
					
				}
				
            });
        }
    }); 
})(jQuery);

jQuery(function($) {
	$('.accordion').accordion();
	
	$('.accordion').each(function(index){
		var activeItems = $(this).find('li.active');
		activeItems.each(function(i){
			$(this).children('ul').css('display', 'block');
			if (i == activeItems.length - 1)
			{
				$(this).addClass("current");
			}
		});
	});
	
});



/*-------- End Nav js -------------------*/	

if (typeof $magik_jq != 'function'){
	if (typeof jQuery == 'undefined'){
		var msg = 'Please include jquery first. jQuery 1.5.0 is recommended!';
		if (console.log){
			console.log(msg);
		} else {
			alert(msg);
		}
	} else {
		$magik_jq = jQuery.noConflict();
	}
}


//<![CDATA[
$magik_jq(document).ready(function($){
	(function(element){
			$element = $(element);
			itemNav = $('.item-nav',$element);
			itemContent = $('.pdt-content',$element);
			btn_loadmore = $('.btn-loadmore',$element);
			ajax_url="http://www.magikcommerce.com/producttabs/index/ajax";
			catids = '39';
			label_allready = 'All Ready';
			label_loading = 'Loading ...';


			function setAnimate(el){
				$_items = $('.item-animate',el);
				$('.btn-loadmore',el).fadeOut('fast');
				$_items.each(function(i){
					$(this).attr("style", "-webkit-animation-delay:" + i * 300 + "ms;"
			                + "-moz-animation-delay:" + i * 300 + "ms;"
			                + "-o-animation-delay:" + i * 300 + "ms;"
			                + "animation-delay:" + i * 300 + "ms;");
			        if (i == $_items.size() -1) {
			            $(".pdt-list", el).addClass("play");
			            $('.btn-loadmore', el).fadeIn(i*0.3);
			        }
				});
			}
			setAnimate($('.tab-content-actived',$element));

			itemNav.click(function(){
				var $this = $(this);
				if($this.hasClass('tab-nav-actived')) return false;
				itemNav.removeClass('tab-nav-actived');
				$this.addClass('tab-nav-actived');
				var itemActive = '.'+$this.attr('data-href');
				itemContent.removeClass('tab-content-actived');
				$(".pdt-list").removeClass("play");$(".pdt-list .item").removeAttr('style');
				$('.item',$(itemActive, $element)).addClass('item-animate').removeClass('animated');
				$(itemActive, $element).addClass('tab-content-actived');

				contentLoading = $('.content-loading',$(itemActive, $element));
				isLoaded = $(itemActive, $element).hasClass('is-loaded');
				if(!isLoaded && !$(itemActive, $element).hasClass('is-loading')){
					$(itemActive, $element).addClass('is-loading');
					contentLoading.show();
					pdt_type = $this.attr('data-type');
					catid = $this.attr('data-catid');
					orderby = $this.attr('data-orderby');
					$.ajax({
						type: 'POST',
						url: ajax_url,
						data:{
							numberstart: 0,
							catid: catid,
							orderby: orderby,
							catids: catids,
							pdt_type: pdt_type
						},
						success: function(result){
							if(result.listProducts !=''){
								$('.pdt-list',$(itemActive, $element)).html(result.listProducts);
								$(itemActive, $element).addClass('is-loaded').removeClass('is-loading');
								contentLoading.remove();
								setAnimate($(itemActive, $element));
								setResult($(itemActive, $element));
							}
						},
						dataType:'json'
					});
				}else{
					$('.item', itemContent ).removeAttr('style');
					setAnimate($(itemActive, $element));
				}
			});
			function setResult(content){
				$('.btn-loadmore', content).removeClass('loading');
				itemDisplay = $('.item', content).length;
				$('.btn-loadmore', content).parent('.pdt-loadmore').attr('data-start', itemDisplay);
				total = $('.btn-loadmore', content).parent('.pdt-loadmore').attr('data-all');
				loadnum = $('.btn-loadmore', content).parent('.pdt-loadmore').attr('data-loadnum');
				if(itemDisplay < total){
					$('.load-number', content).attr('data-total', (total - itemDisplay));
     				if((total - itemDisplay)< loadnum ){
     					$('.load-number',  content).attr('data-more', (total - itemDisplay));
     				}
				}
				if(itemDisplay == total){
					$('.load-number', content).css({display: 'none'});
					$('.btn-loadmore', content).addClass('loaded');
					$('.load-text', content).text(label_allready);
				}else{
					$('.load-text', content).text(label_loadmore);
				}
			}
			btn_loadmore.on('click.loadmore', function(){
				var $this = $(this);
				itemActive = '.'+$this.parent('.pdt-loadmore').attr('data-href');
				$(".pdt-list").removeClass("play");$(".pdt-list .item").removeAttr('style');
				$('.item',$(itemActive, $element)).addClass('animated').removeClass('item-animate');
				if ($this.hasClass('loaded') || $this.hasClass('loading')){
					return false;
				}else{
					$this.addClass('loading'); $('.load-text', $this).text(label_loading);
					numberstart = $this.parent('.pdt-loadmore').attr('data-start');
					catid = $this.parent('.pdt-loadmore').attr('data-catid');
					pdt_type = $this.parent('.pdt-loadmore').attr('data-type');
					orderby = $this.parent('.pdt-loadmore').attr('data-orderby');
					$.ajax({
						type: 'POST',
						url: ajax_url,
						data:{
							numberstart: numberstart,
							catid: catid,
							orderby: orderby,
							catids: catids,
							pdt_type: pdt_type
						},
						success: function(result){
							if(result.listProducts !=''){
								animateFrom = $('.item',$(itemActive, $element)).size();
								$(result.listProducts).insertAfter($('.item',$(itemActive, $element)).nextAll().last());
								setAnimate($(itemActive, $element));
								setResult($(itemActive, $element));
							}
						},
						dataType:'json'
					});
				}
				return false;
			});
	})('#magik_producttabs1');
});
//]]>


/*-------- End Product Tabs js -------------------*/

/*============= Responsive Nav =============*/
(function($){
    $.fn.extend({

   accordion: function(options) {
        
		var defaults = {
			accordion: 'true',
			speed: 300,
			closedSign: '[+]',
			openedSign: '[-]'
		};

		var opts = $.extend(defaults, options);

 		var $this = $(this);

 		$this.find("li").each(function() {
 			if($(this).find("ul").size() != 0){
 				$(this).find("a:first").after("<em>"+ opts.closedSign +"</em>");

 				if($(this).find("a:first").attr('href') == "#"){
 		  			$(this).find("a:first").click(function(){return false;});
 		  		}
 			}
 		});


  		$this.find("li em").click(function() {
  			if($(this).parent().find("ul").size() != 0){
  				if(opts.accordion){
  					//Do nothing when the list is open
  					if(!$(this).parent().find("ul").is(':visible')){
  						parents = $(this).parent().parents("ul");
  						visible = $this.find("ul:visible");
  						visible.each(function(visibleIndex){
  							var close = true;
  							parents.each(function(parentIndex){
  								if(parents[parentIndex] == visible[visibleIndex]){
  									close = false;
  									return false;
  								}
  							});
  							if(close){
  								if($(this).parent().find("ul") != visible[visibleIndex]){
  									$(visible[visibleIndex]).slideUp(opts.speed, function(){
  										$(this).parent("li").find("em:first").html(opts.closedSign);
  									});
  									
  								}
  							}
  						});
  					}
  				}
  				if($(this).parent().find("ul:first").is(":visible")){
  					$(this).parent().find("ul:first").slideUp(opts.speed, function(){
  						$(this).parent("li").find("em:first").delay(opts.speed).html(opts.closedSign);
  					});
  					
  					
  				}else{
  					$(this).parent().find("ul:first").slideDown(opts.speed, function(){
  						$(this).parent("li").find("em:first").delay(opts.speed).html(opts.openedSign);
  					});
  				}
  			}
  		});
    }
});
})(jQuery);


(function(jQuery){
     jQuery.fn.extend({
         accordionNew: function() {       
            return this.each(function() {
            	
            	var jQueryul						= jQuery(this),
					elementDataKey			= 'accordiated',
					activeClassName			= 'active',
					activationEffect 		= 'slideToggle',
					panelSelector			= 'ul, div',
					activationEffectSpeed 	= 'fast',
					itemSelector			= 'li';
            	
				if(jQueryul.data(elementDataKey))
					return false;
													
				jQuery.each(jQueryul.find('ul, li>div'), function(){
					jQuery(this).data(elementDataKey, true);
					jQuery(this).hide();
				});
				
				jQuery.each(jQueryul.find('em.open-close'), function(){
					jQuery(this).click(function(e){
						activate(this, activationEffect);
						return void(0);
					});
					
					jQuery(this).bind('activate-node', function(){
						jQueryul.find( panelSelector ).not(jQuery(this).parents()).not(jQuery(this).siblings()).slideUp( activationEffectSpeed );
						activate(this,'slideDown');
					});
				});
				
				var active = (location.hash)?jQueryul.find('a[href=' + location.hash + ']')[0]:jQueryul.find('li.current a')[0];

				if(active){
					activate(active, false);
				}
				
				function activate(el,effect){
					
					jQuery(el).parent( itemSelector ).siblings().removeClass(activeClassName).children( panelSelector ).slideUp( activationEffectSpeed );
					
					jQuery(el).siblings( panelSelector )[(effect || activationEffect)](((effect == "show")?activationEffectSpeed:false),function(){
						
						if(jQuery(el).siblings( panelSelector ).is(':visible')){
							jQuery(el).parents( itemSelector ).not(jQueryul.parents()).addClass(activeClassName);
						} else {
							jQuery(el).parent( itemSelector ).removeClass(activeClassName);
						}
						
						if(effect == 'show'){
							jQuery(el).parents( itemSelector ).not(jQueryul.parents()).addClass(activeClassName);
						}
					
						jQuery(el).parents().show();
					
					});
					
				}
				
            });
        }
    }); 
})(jQuery);
jQuery(document).ready(function () {
	
	jQuery("ul.accordion li.parent, ul.accordion li.parents, ul#magicat li.open").each(function(){
        jQuery(this).append('<em class="open-close">&nbsp;</em>');
      });
	
	jQuery('ul.accordion, ul#magicat').accordionNew();
	
	jQuery("ul.accordion li.active, ul#magicat li.active").each(function(){
		jQuery(this).children().next("div").css('display','block');
	});
	
});

/*============= End Left Nav =============*/