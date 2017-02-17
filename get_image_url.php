<?php
$search = $_POST['search'];
$res = json_decode(file_get_contents("http://www.splashbase.co/api/v1/images/search?query=$search"));
$res = $res->images[0]->url;
print $res;
?>