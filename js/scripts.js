/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

  $(function () {
    // bind filter button click

    $('#portfolio-flters li').on( 'click', function() {
      var filterValue = $( this ).data('filter');
      $('#portfolio-flters li').removeClass('filter-active');
      $( this ).addClass('filter-active');

      $('.item-list .portfolio-item').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.hide()
          var have=$buttonGroup.hasClass(filterValue)
          if (have || filterValue=='all') {
            $buttonGroup.fadeIn(500)
          }else{
            $buttonGroup.fadeOut(500)
          }
          //if(filterValue=='*'){}
        });
    });

    $(this).scroll(function () {
      if ($(this).scrollTop()>200) {
        $('.back-to-top').addClass('active').fadeIn('slow')
      }else{
        $('.back-to-top').removeClass('active').fadeOut('slow')
      }
    })
    $('.back-to-top').on('click',function(){
      $(this).scrollTop(0)
    })
  })