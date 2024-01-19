<?php
$page=filter_input(INPUT_GET,'page');
if ($page=='cv'){
    require './page/cv.php';
}
elseif ($page=='contact'){
    require './form/contact.php';
}

elseif ($page=='hobby'){
    require './page/hobby.php';
}
elseif ($page=='home'){
    require './page/home.php';
}
elseif ($page=='traitement') {
    require './form/traitement.php';
}
else require './page/404.php';