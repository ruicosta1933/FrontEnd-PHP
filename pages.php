<?php

if(!isset($_GET['page'])){
    $_GET['page']=0;
}
    switch($_GET['page']) {
        case 1:
        require "contact.php";
    break;

        case 2:
        require "addProdPage.php";
    break;

        case 3:
        require "myProdsPage.php";
    break;

    case 4:
        require "editProdsPage.php";
    break;

    case 5:
        require "productDetail.php";
    break;

        default:
        include "main.php";
    break;

}


                        ?>