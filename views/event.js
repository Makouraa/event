function ModifSelect()
{
	if(document.getElementById('selectmodif').value=="Date")
	{
		document.getElementById('newval').type="date";
	}
	else if (document.getElementById('selectmodif').value=="Heure")
	{
		document.getElementById('newval').type="time";
	}
	else
	{
		document.getElementById('newval').type="text";
	}
	
}