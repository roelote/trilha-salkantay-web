$(document).ready(function() {
   $('.menj li:has(ul)').hover(
      function(e)
      {
         $(this).find('ul').fadeIn();
      },
      function(e)
      {
         $(this).find('ul').fadeOut();
      }
   );
});


$(function(){$('.packages,.csc,.recurs1,.recurs2,.recurs2 img,.recurs2 iframe').corner("8px");});
$(function(){$('.packages a,.content h2,.atable img').corner("3px");});
$(function(){$('.packages a img').corner("right 5px");});
$(function(){$('.fenl h2,.sidebar,h1').corner("top");});


$(document).ready(function () {
  $(".lang a, .pri a, .projetosocial").fadeTo(0.4, 1);
  $(".lang a, .pri a, .projetosocial").hover(
    function () {
      $(this).fadeTo("fast", 0.4);
    },
    function () {
      $(this).fadeTo("normal", 1);
    }
  );
});

$().ready(function() {
		$('.kwicks').kwicks({
			max : 700,
			spacing : 2
		});
	});
	
$(function() {
	$('.print').click(function() {
		var container = $(this).attr('rel');
		$('.' + container).printArea();
		return false;
	});	
});	



$(document).ready(function()
{
	$(".tab_content").hide();
	$("ul.tabs li:first").addClass("active").show();
	$(".tab_content:first").show();

	$("ul.tabs li").click(function()
       {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();

		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn();
		return false;
	});
});




$(document).ready(function()
{
	$(".tab_content2").hide();
	$("ul.tabs2 li:first").addClass("active").show();
	$(".tab_content2:first").show();

	$("ul.tabs2 li").click(function()
       {
		$("ul.tabs2 li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content2").hide();

		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn();
		return false;
	});
});



$(document).ready(function()
{
	$(".tab_content3").hide();
	$("ul.tabs3 li:first").addClass("active").show();
	$(".tab_content3:first").show();

	$("ul.tabs3 li").click(function()
       {
		$("ul.tabs3 li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content3").hide();

		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn();
		return false;
	});
});