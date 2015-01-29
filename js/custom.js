// Custom JS for data app

function listPosts(data){

	var output = '<form class="ui-filterable"><input id="searchposts" data-type="search"></form>';

	output += '<ul data-role="listview" data-filter="true" data-input="searchposts">';

	$.each(data.posts, function(key, val){
		output += '<li>';
		output += '<a href="#blogpost" onclick = showPost(' + val.id + ')">';
		output += '<h3>' + val.title + '</h3>';
		var str = val.excerpt;
		var paraInfo = str.slice(0, 120); 
		output += '<p>' + paraInfo + '</p>';
		output += '</a>';
		output += '</li>';
	});

	output += '</ul>';
	$('#postlist').html(output);
}