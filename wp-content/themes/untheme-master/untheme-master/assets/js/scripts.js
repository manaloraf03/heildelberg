jQuery(function($){
//  Header not transparent on scroll
$(window).on("scroll", function() {
      if($(window).scrollTop()) {
            $('nav').removeClass('navbar-transparent');
      }

      else {
            $('nav').addClass('navbar-transparent');
      }
});
// off canvas header
$("button#my-btn").click(function(){
      $("#my-canvas-left").addClass("show");
      $(".my-canvas-overlay").addClass("show");console.log('asd');
});
$(".my-canvas-overlay").click(function(){
      $("#my-canvas-left").removeClass("show");
      $(".my-canvas-overlay").removeClass("show");console.log('asd');
});
$(".my-canvas-close").click(function(){
      $("#my-canvas-left").removeClass("show");
      $(".my-canvas-overlay").removeClass("show");console.log('asd');
});

});