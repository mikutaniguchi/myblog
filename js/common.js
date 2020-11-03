$(document).ready(function () {
  $('.drawer').drawer();
});


$(function () {

  $(window).resize(function () {
    var winWidth = $(window).outerWidth();
    var navUA = navigator.userAgent;
    // 画面幅が639px以下、または UAがiPhone 又は Androidスマートフォンの時
    if (winWidth <= 639 || navUA.indexOf('iPhone') > 0 || navUA.indexOf('Android') > 0 && navUA.indexOf('Mobile') > 0) {
      // SP時の処理
      return;
    } else {
      var drawer = $('.drawer');
      drawer.hide();
      //スクロールが100に達したらボタン表示
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          drawer.fadeIn();
        } else {
          drawer.fadeOut();
        }
      });
    }
  }).resize();


});
