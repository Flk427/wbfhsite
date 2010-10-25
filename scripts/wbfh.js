$(document).ready(function() {
	//$('#section_sel li a').css('color', 'red');

	//$('.h_menu li a').css('color', 'red');
	$('#part_sel li a').mouseover(partOnMouseOver);
	//$('.h_menu li a').mouseover(function() {
	//	$(this).addClass('sectSelected');
	//	$(this).css('color', 'red');
	//});
	$('#part_sel li a').mouseout(partOnMouseOut);
});

function home()
{
	/*
	var i;
	for(i=0;i<document.links.length;i++)
	{
		if(document.links[i].hash=="#home")
		{
			window.location.replace(document.links[i].href);
			break;
		}
	}
	*/
	window.location.replace("#");
};

function partOnMouseOver()
{
	if ($(this).parent().hasClass('part_selected_elem') == false)
	{
		$(this).parent().addClass('partSelected');
		$(this).css('color', 'white');
	}
	/* не работает
	else
	{
		$(this).parent().css('background-image', '');
		$(this).css('color', 'white');
	}
	*/
};

function partOnMouseOut()
{
	if ($(this).parent().hasClass('part_selected_elem') == false)
	{
		$(this).parent().removeClass('partSelected');
		$(this).css('color', 'black');
	}
	/* не работает
	else
	{
		$(this).parent().css('background-image', 'images/hover_sub_menu.gif');
		$(this).css('color', 'black');
	}
	*/
};
