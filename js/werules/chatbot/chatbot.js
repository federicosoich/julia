// display/hide match mode
function aguaverdeTogleMatchMode(element)
{
	//debugger;
	var val = element.value;
	var name = element.name;
	name = name.substr(0, name.lastIndexOf("[")) + "[similarity]";
	var target = document.getElementsByName(name);
	if (val === 0)
		target[0].disabled = false;
	else
		target[0].disabled = true;
}

function aguaverdeTogleEnable(element)
{
	//debugger;
	// var val = element.value;
	// var name = element.name;
	// if (val == 0)
	// {
	// 	name = name.substr(0, name.lastIndexOf("[")) + "[similarity]";
	// 	var target = document.getElementsByName(name);
	// 	target[0].disabled = false;
	// }
	// else
	// {
	// 	name = name.substr(0, name.lastIndexOf("[")) + "[similarity]";
	// 	var target = document.getElementsByName(name);
	// 	target[0].disabled = true;
	// }
}

// display/hide reply mode
function aguaverdeTogleReplyMode(element)
{
	//debugger;
	var val = element.value;
	var name = element.name;
	name = name.substr(0, name.lastIndexOf("[")) + "[command_id]";
	var target = document.getElementsByName(name);
	if (val === 0)
		target[0].disabled = true;
	else
	{
		//target[0].classList.remove("aguaverde-disabled");
		//target[0].style = "";
		target[0].disabled = false;
	}
}