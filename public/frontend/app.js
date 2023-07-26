
 $(Document).ready(function(){
    $(window).scroll(function(){
       $(".slideup").each(function(){
          var x=$(this).offset().top;
          var y=$(window).scrollTop();
          if(x < y + 550){
             $(this).addClass("slide");
          }
       });
    });
   })