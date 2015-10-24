/**
 * Particleground sho kurazono

 */

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
    dotColor: '#ededed',
    lineColor: '#ededed',
    density:5000
  });

}, false);


$(document).ready(function() {
  var menu = $("#menu");
  var origOffsetY = menu.offset().top;
  function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
      $("#menu").addClass("navbar-fixed-top");
    } else {
      $("#menu").removeClass("navbar-fixed-top");
    }
  }
  document.onscroll = scroll;
});
if(!navigator.userAgent.match(/(iPhone|iPad|Android)/)){



$('.centerpoint').slick({
      autoplay:true,
      centerMode: true,
      infinite:true,
      autoplaySpeed:6000,
      slidesToShow:3
    });
}
/*
// jQuery plugin example:
$(document).ready(function() {
  $('#particles').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  $('.intro').css({
    'margin-top': -($('.intro').height() / 2)
  });
});
*/
$(window).on('load resize', function(){
    var w = $(window).width();
    if (w <= 768) {
      $(function(){
      $(".menuImg").click(function(){
      var doc =  $(document).height();
      $("#layerMenu").fadeIn("fast");
       $('.navBar').css({
          height:380
        });
      });

      $("#closeMenu").click(function(){
     $('.navBar').css({
        height:140
        });

      $("#layerMenu").fadeOut("fast");
      });
            });
    } else {
       $('#layerMenu').css({
          display: 'block'
        });
    }
});

