theObjects = document.getElementsByTagName("object"); 
for (var i = 0; i < theObjects.length; i++) { 
theObjects[i].outerHTML = theObjects[i].outerHTML; 
} 

var urlAddress = "http://www.rvf.com/";
var pageName = "Ressorts RVF";
function addToFavorites(anchor)
{
if (window.external)
{
window.external.AddFavorite(anchor.getAttribute('href'), anchor.getAttribute('title'));
}
}

function more(x)
{
var elmt = document.getElementById(x);
 if (elmt.className == "expandable")
 	{
 elmt.className = "expanded";
 	}
 else
 	{
 elmt.className = "expandable";
 	}
}


