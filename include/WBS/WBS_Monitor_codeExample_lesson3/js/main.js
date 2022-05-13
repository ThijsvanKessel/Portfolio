function updateShows() {
	$.ajax({
		type: "POST",
		url: "includes/update_shows_db.php",
		data: $("#update-shows-form").serialize(),

			success: function(data){				
				var alert = document.getElementById("SaveNotification");
				alert.style.display = "block";
			}
	});
}


$(document).ready(function(){

	//Onclick: Update shows in DB
	$("#js-update-shows").on("click", function(){
		updateShows();
	});

});