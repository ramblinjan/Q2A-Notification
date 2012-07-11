$(document).ready(function(){
	$(document).mouseup(function (e)
	{
	    var container = $(".qa-notification-dialog");
	
	    if (container.has(e.target).length === 0)
	    {
	        container.hide();
	    }
	});
	
	$(".qa-notification-counter").click(function(){
		$(".qa-notification-dialog").show("slow");
	});
});
