<?php

include 'functions.php';

if(!isset($_GET["token"])){

    redirect("index.php", "Token Missing from the URL", "error");

}