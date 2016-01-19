$(document).ready(function(){
	$('.follow-button').click(function(){
		var buttonToChange = $(this);
		var whoToFollow = $(this).attr('uid');
		var dataFollow = $(this).attr("data-follow");
		$.ajax({
			url: '/process_follow.php',
			type: 'POST',
			data: {
				'uid_to_follow' : whoToFollow,
				'follow_type' : dataFollow
			},
			success: function(result){
				var buttonToChange = $( "[uid="+whoToFollow+"]" );
		        		if((buttonToChange).hasClass("btn-success")){
		        			//We need to remove btn-primary to change the color of the button
		        			buttonToChange.removeClass("btn-success");
		        			//Add btn-default to make it grey
		        			buttonToChange.addClass("btn-danger");
		        			//Change data-follow to unfollowed
		        			buttonToChange.attr("data-follow", "unfollowed");		        			
		        			//Chnage the button text
		        			buttonToChange.html('Unfollow');
		        		}else{
		        			//Exact opposite of above
		        			buttonToChange.addClass("btn-success");
		        			buttonToChange.removeClass("btn-danger");		        			
		        			buttonToChange.attr("data-follow", "followed");
		        			buttonToChange.html('Follow');
		        		}

			}
		})
	})
})