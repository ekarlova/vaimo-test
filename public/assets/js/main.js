'use strict';

(function ($) {

  //Cart ajax
  $.ajax({
    type : "GET",
    url : "cart/get",
    dataType: 'json',
    success: function (response) {
      var cart = $('#cart');
      $('.amount', cart).html(response.totalItems);
      $('.sum', cart).append(response.totalPrice);
      $.each(response.items, function( key, value ) {
        $('.cart-items ul', cart).prepend(
          '<li>'+
          '<img src="' + value.imgSrc + '" alt="">' +
          '<span class="name"><strong>'+ value.name + '</strong>' +value.qty + '&nbsp;x&nbsp;&euro;&nbsp;' + value.price +'</span>' +
          '<button class="remove">x</button>' +
          '</li>'
        );
      });
    }
  });

  //Newsletter form validation ajax
  $("#form-newsletter").submit(function (e) {
    e.preventDefault();
    var $validationMessage = $('#validation-message');
    $validationMessage.removeClass().addClass('in-process').html('Subscribing to newsletter');
    $validationMessage.show();
    var getNewsletter = function() {
      $.ajax({
        type : "GET",
        url : "newsletter/subscribe",
        dataType: 'json',
        data: {'email':$("#subscribe").val()},
        error: function (response) {
          if (response.status == '422') {
            $validationMessage.removeClass().addClass('failed').html('Email verification failed...');
          }
          else {
            $validationMessage.removeClass().addClass('success').html('Subscription successful.');
          }
        }
      });
    };
    setTimeout(getNewsletter, 2000);
  });

  //Hide cart
  function hideCart() {
    $('.cart-items').removeClass('visible');
    $('.cart-button').removeClass('active');
  }

  //Show cart
  function showCart() {
    $('.cart-items').addClass('visible');
    $('.cart-button').addClass('active');
  }

  //Hide Nav
  function hideNav() {
    $('#main-nav .nav-container').removeClass('visible');
    $('#mobile-nav').removeClass('active');
  }

  //Show Nav
  function showNav() {
    $('#main-nav .nav-container').addClass('visible');
    $('#mobile-nav').addClass('active');
  }

  //Show and hide cart and menu on buttons click
  if (window.matchMedia("(max-width: 768px)").matches) {
    $('.cart-button').on('click', function() {
      if ($(this).hasClass('active')) {
        hideCart();
      }
      else {
        hideNav();
        showCart();
      }
    });

    $('#mobile-nav').on('click', function() {
      if ($(this).hasClass('active')) {
        hideNav();
      }
      else {
        hideCart();
        showNav();
      }
    });
  }
  $(window).on('resize', function() {
    hideCart();
    hideNav();
  });

})(jQuery);