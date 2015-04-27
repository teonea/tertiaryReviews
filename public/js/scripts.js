$( "button" ).click(function() {
  $( ".notification_msg" ).hide( "slow" );
});

  
$('.starrr:eq(0)').on('starrr:change', function(e, value){
  if (value) {
    $('.your-choice-was').show();
    $('.choice').text(value);
  } else {
    $('.your-choice-was').hide();
  }
});
  
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");