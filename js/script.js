$(document).ready(function(){
	$('.follow-button').click(function(){
		var currElement = $(this);
		var whoToFollow = $(this).attr('uid');
		console.log(whoToFollow)
		$.ajax({
			url: '/process_follow.php',
			type: 'post',
			content: {
				uid_to_follow:whoToFollow
			},
			success: function(result){
				console.log(result);
			}
		})
	})
})