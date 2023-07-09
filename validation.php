<?php

include 'functions.php';

class TokenHandler {
    public function checkToken() {
        if (!isset($_GET["token"])) {
            $redirectHandler = new RedirectHandler();
            $redirectHandler->redirect("index.php", "Token Missing from the URL", "error");
        }
    }
}

class AuthorizationHandler {
    public function checkAuthorization() {
        if (!isset($_SESSION['EMAIL'])) {
            $redirectHandler = new RedirectHandler();
            $redirectHandler->redirect("index.php", "You are not authorized to access this page", "error");
        }
    }
}