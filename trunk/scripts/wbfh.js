$(document).ready(function() {
	$('#section_sel li a').mouseover(sectionOnMouseOver);
	$('#section_sel li a').mouseout(sectionOnMouseOut);

	$('#search_input').css('font-style', 'oblique');
	$('#search_input').val('искать на сайте');
	$('#search_input').mouseover(resetSearchInput);

    jQuery('#wbcarousel').jcarousel({
        // Configuration goes here
        scroll: 1,
        //wrap: "circular"
    });
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

function resetSearchInput()
{
	$('#search_input').css('font-style', 'normal');
	if ($('#search_input').val() == 'искать на сайте')
		$('#search_input').val('');
};

function sectionOnMouseOver()
{
	if ($(this).parent().hasClass('section_selected_elem') == false)
	{
		$(this).parent().addClass('sectionSelected');
		$(this).css('color', 'white');
	}
};

function sectionOnMouseOut()
{
	if ($(this).parent().hasClass('section_selected_elem') == false)
	{
		$(this).parent().removeClass('sectionSelected');
		$(this).css('color', 'black');
	}
};

function goToForum()
{
	window.location.href="http://forum.wbfree.net/";
};

function downloadClick()
{
	window.location.href="http://whereat.wbfree.net/wb.zip";
};

function showForum()
{
	$('#news_topics').hide();
	$('#forum_topics').show();

	$('#forum_selector').css('cursor', 'auto');
	$('#forum_selector').css('margin-top', '0');
	$('#forum_selector').css('padding-top', '10px');

	$('#news_selector').css('border-left', '0');
	$('#news_selector').css('cursor', 'pointer');
	$('#news_selector').css('margin-top', '2px');
	$('#news_selector').css('padding-left', '7px');
	$('#news_selector').css('padding-top', '8px');
};

function showNews()
{
	$('#news_topics').show();
	$('#forum_topics').hide();

	$('#forum_selector').css('cursor', 'pointer');
	$('#forum_selector').css('margin-top', '2px');
	$('#forum_selector').css('padding-top', '8px');

	$('#news_selector').css('cursor', 'auto');
	$('#news_selector').css('margin-top', '0');
	$('#news_selector').css('border-left', '1px solid #858510');
	$('#news_selector').css('padding-left', '6px');
	$('#news_selector').css('padding-top', '10px');
};
