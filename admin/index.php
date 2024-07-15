<?php
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'list':
            include "list.php";
            break;
        case 'add':
            include "add.php";
            break;
        case 'bieudo':
            include "bieudo.php";
            break;
    }
} else {
    include "home.php";
}

// include "list.php";
include "footer.php";
