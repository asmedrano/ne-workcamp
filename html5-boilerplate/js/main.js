$(function(){

	$(".facebook-btn").click(function(e){
		e.preventDefault();
		fb_share();
	});

	$(".tweet-btn").click(function(e){
		e.preventDefault();
		twitter_share();	
	});

});


function fb_share() {
	var url= location.href;
	var title= document.title;
	window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(url)+'&t='+encodeURIComponent(title),'sharer','toolbar=0,status=0,width=626,height=436');
	return false;
}

function twitter_share(){

	var url= location.href;
	var title= document.title;
	window.open('http://twitter.com/home?status='+encodeURIComponent(url),'sharer','toolbar=0,status=0,width=626,height=436');
	return false;

}
