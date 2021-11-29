<?php
require_once("./Form.php");
$form = new Form("Sign in");

$form->finalizeTopSection();
$form->finalizeBottomSection();

print $form->getTopSection();
print $form->authForm("login.php");
print $form->getBottomSection();
?>
