<?php
session_start();
if (!empty($_POST['check'])) {
    if (!empty($_POST['captcha'])) {
    	if ($_POST["captcha"] === $_SESSION["captcha"]) {
    		?><h3 class="success">SUCCESSFUL: Correct captcha code.</h3><?php
		} else {
			?><h3 class="error">ERROR: Incorrect captcha code.</h3><?php
		}
    } else {
    	?><h3 class="error">ERROR: Complete captcha code.</h3><?php
    }
}
?>