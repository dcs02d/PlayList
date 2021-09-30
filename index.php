<html>
 <head>
  <title>The Play List</title>
 </head>
 <body>
The play list<br><BR><br>
<h3>
<li>Tune often and always with a Capo</li>
<li>Get a note before Singing</li>
<li>Chin up and open when singing</li>
</h3>

<div>
 <?php 
 
foreach (preg_grep('~\.(htm|html)$~', scandir('./')) as $f) 
{
    if ($f !== '.' and $f !== '..' and $f !== 'AA_Template.html') {
        echo "<A href=\"$f\">$f</a><br><br>\n";
    }
}


?> 
</div>    
</body>
</html>