var moreNum = 5;
$('.list li:nth-child(n + ' + (moreNum + 1) + ')').addClass('hidden');
$('.button').on('click', function() {
    $('.list li.hidden').slice(0, moreNum).removeClass('hidden');
    if ($('.list li.hidden').length == 0) {
        $('.button').fadeOut();
    }
});
