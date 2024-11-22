var moreNumber = 5;
jQuery('.list-data:nth-child(n + ' + (moreNumber + 1) + ')').addClass('is-hidden');
jQuery('.list-btn').on('click', function() {
  jQuery('.list-data.is-hidden').slice(0, moreNumber).removeClass('is-hidden');
  if (jQuery('.list-data.is-hidden').length == 0) {
    jQuery('.list-btn').fadeOut();
  } 
});
jQuery(function() {
  var list = jQuery(".list li").length;  
    if (list < moreNumber) {
      jQuery('.list-btn').addClass('is-btn-hidden');
  }
});
