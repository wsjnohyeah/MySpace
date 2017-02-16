$(document).ready(function() {
   $('.button-collapse').sideNav(); 
   
   $("#verify").submit(function(e) {
		var title = $("#post-title").val()
		var content = $("#post-content").val();
		if(title == "" || content == ""){
				e.preventDefault();
				alert("please don't post blank information ;)");
		}
	});
});

function delete_confirmation(origin_id,origin_url){
	if(confirm("Are you sure to delete?")){
		var id = origin_id.substr(5);
		var url = origin_url + id;
		location.href = url;
	}
}