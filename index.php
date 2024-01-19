<?php
$page=filter_input(INPUT_GET,'page');
if ($page=='cv'){
    require './page/cv.php';
}
elseif ($page=='contact'){
    require './page/contact.php';
}

elseif ($page=='hobby'){
    require './page/hobby.php';
}
elseif ($page=='home'){
    require './page/home.php';
}
else require './page/404.php'