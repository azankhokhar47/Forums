<?php
session_start();
echo"Loging you out. plz wait....";

session_destroy();
header("loction: /forum")
?>