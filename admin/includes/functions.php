<?php


function chechIfUserIsLogged($session) {
    if ($session == null) {
        header("Location:  http://localhost/TeamFlorence-master/index.php");
    }
}

function checkIfUserIsAdmin() {
    if ($_SESSION['group_id'] == 1) {
        return true;
    } else {
        return false;
    }
}

function checkIfUserIsUser() {
    if ($_SESSION['group_id'] == 2) {
        header("Location:  http://localhost/TeamFlorence-master/index.php");
    }
}

function checkUrl($url) {

    if (strstr($_SERVER['PHP_SELF'], $url)) {
        return true;
    } else {
        return false;
    }
}

function returnActive($url) {
    if (checkUrl($url) == true) {
        echo 'class="active"';
    }
}

function returnUsername($username) {
    if (isset($_POST['username'])) {
        return $username;
    }
}
