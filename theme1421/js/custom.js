$(document).ready(function(){
													 
// ---------------------------------------------------------
// Tabs
// ---------------------------------------------------------
$(".tabs").each(function(){

		$(this).find(".tab").hide();
		$(this).find(".tab-menu li:first a").addClass("active").show();
		$(this).find(".tab:first").show();

});

$(".tabs").each(function(){

		$(this).find(".tab-menu a").click(function() {

				$(this).parent().parent().find("a").removeClass("active");
				$(this).addClass("active");
				$(this).parent().parent().parent().parent().find(".tab").hide();
				var activeTab = $(this).attr("href");
				$(activeTab).fadeIn();
				return false;

		});

});


// ---------------------------------------------------------
// Tabs Advanced
// ---------------------------------------------------------
$(".tabs-adv").each(function(){

		$(this).find(".tab-adv").hide();
		$(this).find(".tab-menu-adv li:first a").addClass("active").show();
		$(this).find(".tab-adv:first").show();

});

$(".tabs-adv").each(function(){

		$(this).find(".tab-menu-adv a").click(function() {

				$(this).parent().parent().find("a").removeClass("active");
				$(this).addClass("active");
				$(this).parent().parent().parent().parent().find(".tab-adv").hide();
				var activeTabAdv = $(this).attr("href");
				$(activeTabAdv).fadeIn();
				return false;

		});

});


// ---------------------------------------------------------
// Toggle
// ---------------------------------------------------------

$(".toggle").each(function(){

		$(this).find(".box").hide();

});

$(".toggle").each(function(){

		$(this).find(".trigger").click(function() {

				$(this).toggleClass("active").next().stop(true, true).slideToggle("normal");

				return false;

		});

});



// ---------------------------------------------------------
// Social Icons
// ---------------------------------------------------------

$(".social-networks li a").tooltip({ effect: 'slide', position: 'bottom center', opacity: .5 });


});