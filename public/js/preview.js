$('.btn_reset').click(function(e){
	e.preventDefault();
	document.location.href="news_list.php";
});    		  		

$(document).ready(function()
{
	$("#preview").keyup(function()
	{
		var box = $(this).val();
		var maxLen = 400;
		var main = box.length * 100;
		var value = (main / maxLen);
		var count = maxLen - box.length;
		var str = $("#preview").val();

		if(box.length <= maxLen)
		{
			$('#count').html(count);
			$('#bar').animate( {	"width": value+'%',}, 1); 
		}
		else
		{			
			$('#preview').val(str.substring(0, maxLen));
		}
		return false;
	});
});