$(window).scroll(function() {
if ($(this).scrollTop() > 200){  
    $('.top-scroll').addClass("shows");
  }
  else{
    $('.top-scroll').removeClass("shows");
  }
});
