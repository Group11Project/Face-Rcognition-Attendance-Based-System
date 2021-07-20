<?php


?>
<?php

//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['admin_id']) || (trim($_SESSION['admin_id']) == '')) { ?>

<?php
}
$session_id=$_SESSION['admin_id'];
$user_query = mysqli_query($db,"select * from admin where admin_id = '$session_id'")or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query,MYSQLI_ASSOC);
$user_username = $user_row['username'];
?>