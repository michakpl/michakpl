$(function(){
       $("nav.headNav div.navItem p a").each(function(){
               if ($(this).prop("href") == window.location.href){
                       $(this).parent().parent().addClass("active");
               }
       });

   	$("pre").each(function(){
   		$(this).addClass("prettyprint linenums");
	});
});