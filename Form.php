<?php
require_once('./phpclasses-template/Template.php');


class Form extends Template {
    public function authForm($action) {
        $_return = '';

        $_return .= '<form method="POST" action="'.$action.'">'."\n";
        $_return .= '<input type="text" name="username">'."\n";
        $_return .= '<input type="password" name="pass">'."\n";
        $_return .= '<input type="submit">'."\n";
        $_return .= '</form>'."\n";

        return $_return;
    }
}

?>
