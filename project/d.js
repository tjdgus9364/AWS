$(document).ready(function () {
  $('a').hover(function () {
    $(this).css({
         background: 'blue',
         color: 'white'
    });

   },function() {
    $(this).css({
         background:'',
         color: ''
    });
   });
  });
