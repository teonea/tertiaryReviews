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

$('#subject_id').on('change',function(e){
	console.log(e);

	var school_id = $('#school_id').val();
	var sub_id = e.target.value;
	//ajax
	$.get('/ajax-course?sub_id=' + sub_id + "&school_id=" + school_id, function(data){
		//success data
		$('#course_id').empty();
		
		$.each(data, function(index, coursesObj){
			$('#course_id').append('<option value="'+coursesObj.id+'">'+coursesObj.courseName+'</option>');
		});

		if(!data.length) {
			$('#course_id').append('<option>No courses listed. You have to list the course first.</option>');
		}
		
		
	}); 

});