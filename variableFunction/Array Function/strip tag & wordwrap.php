<?php

// $str = "Hello <b>World</b>, Hello <i> Earth</i>";
// echo strip_tags($str,"<b>");


$str = "Hello This is Beautiful World";
echo wordwrap($str, 4,"<br>",TRUE);

?>