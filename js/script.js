// アコーディオン
$(function () {
  $('.accordion__bottom').hide();
  // $('.accordion__bottom').first().show();

  $('.accordion__top').click(function () {
    if ($(this).hasClass('accordion__top--active')) {
      $(this).next('.accordion__bottom').slideUp('fast');
      $(this).removeClass('accordion__top--active');
    } else {
      $(this).next('.accordion__bottom').slideDown('fast');
      $(this).addClass('accordion__top--active');
    }
  });
});

// タブ
$(function () {
  let tabs = $('.tab');
  $('.tab').on('click', function () {
    $('.tab--active').removeClass('tab--active');
    $(this).addClass('tab--active');
    const index = tabs.index(this);
    console.log(index);
    $('.contents').removeClass('contents--show').eq(index).addClass('contents--show');
  });
});
