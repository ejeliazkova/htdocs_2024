<?php
include('include/init.php');
$theDate = date('Y-m-d H:i:s');

echo $theDate;
saveComment('this is a comment from an ajax request', 'maya', 1);
?>