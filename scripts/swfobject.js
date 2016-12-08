
function run_flash(url,width,height) 
{ 
document.write('<object type="application/x-shockwave-flash" data="'+url+'" width="'+width+'" height="'+height+'" scale="noscale">\n'); 
document.write('<param name="movie" value="'+url+'" /><param name="scale" value="noscale" />\n'); 
document.write('<param name="wmode" value="transparent" />\n');
document.write('<p>Vous devez autoriser le contenu actif pour visualiser l\'animation</p>\n');
document.write('</object>\n');
}