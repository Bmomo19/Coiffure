<?php

session_start();
include('../../config/config.php');
if (isset($_GET['p'])and!empty($_GET['p'])){
	$_session['cpt']=1;
	$_session['p']=$_GET['P'];
	echo session['cpt'].'<br>';
	echo session['cpt'].'<br>';
}

?>
