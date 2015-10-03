<!DOCTYPE html>
<html>
  <head>
      <title>Academia International College</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>
      @include('pages/navigation')
      @include('pages/head')
        @yield('content')
      @include('pages/footer')
  </body>


  <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery-ui.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!------- Angular Js ------------>
  <script src="{{ asset('js/angular.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('js/main.js') }}" ></script>

   <script type="text/javascript">
       /*sliderInt=1;
       sliderNext=2;*/
      $(document).ready(function() {

          /*$('#slider>.page#1').fadeIn(300);*/
          /*startSlider();*/

          $('.dropdown-toggle').dropdown();
          /*$('#myPopOver').popover();*/

          $('nav li ul').hide();
          $('nav li').hover(function()
          {
              $('ul', this).slideDown('fast');
          }, function()
          {
              $('ul', this).slideUp('fast');
          });

          /*function display_icon()
          {
              $('.left-arrow').show();
          }*/

      });/*End of Document Ready Function */
      /*function startSlider(){
          count=$('#slider>.page').size();
          loop=setInterval(function(){

              if(sliderNext > count){
                  sliderNext =1;
                  sliderInt =1;
              }

              $('#slider>.page#1').fadeOut(300);
              $('#slider>.page#'+sliderNext).fadeIn(300);
              sliderInt=sliderNext;
              sliderNext=sliderNext+1;
          },3000);


      }*/


   </script>
</html>
