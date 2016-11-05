<!DOCTYPE html>
<html>

<div id="FionaNavigation">
<ul> 

<li<?php if ($thisPage=="Home")
echo " id=\"currentpage\""; ?>>
<a href="Fiona-home.php"></a></li>

<li<?php if ($thisPage=="Services")
echo " id=\"currentpage\""; ?>>
<a href="Fiona-index.php"></a></li>

<li<?php if ($thisPage=="Masseurs")
echo " id=\"currentpage\""; ?>>
<a href="massage-team.php"></a></li>

<li<?php if ($thisPage=="Contact")
echo " id=\"currentpage\""; ?>>
<a href="Fiona-Contact.php"></a></li>


</ul>
</div>
</html>
