<?php
session_start();
if(!isset($_SESSION['deo'])){
header('Location: ../');
exit();	
}
?>