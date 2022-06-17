<?php
session_start();
require "config.php";
session_destroy();
 echo "you have successfully logged out";
 header("Location:login.php");
?>
<!--
<script>
    alert("you have successfully logged out");
    window.location='login.php';
</script>
-->
