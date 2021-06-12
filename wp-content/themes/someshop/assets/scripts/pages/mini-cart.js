$(document).ready(function(){
  $('.prod-cart').click(function(){
    $('.prod-cart-body').removeClass('hide');
  })
  $('.cart-body-close').click(function(){
    $('.prod-cart-body').addClass('hide');
  })
});