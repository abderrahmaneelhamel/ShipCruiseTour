<?php
ob_start();
require_once '../app/Controllers/HomeController.php';
$home = new HomeController();
$pages = ['login','signuppage','test','test2','test3'];
if(isset($_GET['page'])){
    if($_GET['page']==="dachBoard"){
        $home->dachboard();
    }elseif($_GET['page']==="cruises"){
        $page = $_GET['page'];
        $home->dh($page);
    }elseif($_GET['page']==="ship"){
        $page = $_GET['page'];
        $home->dh($page);
    }elseif($_GET['page']==="home"){
        $home->home();
    }elseif($_GET['page']==="port"){
        $page = $_GET['page'];
        $home->dh($page);
    }elseif($_GET['page']==="reservation"){
        $home->dhR();
    }elseif($_GET['page']==="reservations"){
        $home->reservations();
    }elseif($_GET['page']==="booking"){
        $home->book();
    }elseif($_GET['page']==="disconnect"){
        $home->disconnect();
    }elseif($_GET['page']==="signuppage"){
        $home->signup();
    }elseif($_GET['page']==="login"){
        $home->login();
    }elseif($_GET['page']==="addNew"){
        $home->addNew();
    }elseif($_GET['page']==="addShip"){
        $home->addNewS();
    }elseif($_GET['page']==="addPort"){
        $home->addNewP();
    }elseif(strpos($_SERVER['REQUEST_URI'], "editpage?id-cruise=") == true){
        $ID = str_replace("/public/editpage?id-cruise=","",$_SERVER['REQUEST_URI']);
        $home->edit($ID);
    }elseif(strpos($_SERVER['REQUEST_URI'], "delete?id-cruise=") == true){
        $ID = str_replace("/public/delete?id-cruise=","",$_SERVER['REQUEST_URI']);
        $del= new delete;
        $del->delete($ID);
    }elseif(strpos($_SERVER['REQUEST_URI'], "Rd?id=") == true){
        $ID = str_replace("/public/Rd?id=","",$_SERVER['REQUEST_URI']);
        $del= new delete;
        $del->deleteR($ID);
    }elseif(strpos($_SERVER['REQUEST_URI'], "bd?id=") == true){
        $ID = str_replace("/public/bd?id=","",$_SERVER['REQUEST_URI']);
        $del= new delete;
        $del->deleteB($ID);
    }elseif(strpos($_SERVER['REQUEST_URI'], "sd?id=") == true){
        $ID = str_replace("/public/sd?id=","",$_SERVER['REQUEST_URI']);
        $del= new delete;
        $del->deleteS($ID);
    }elseif(strpos($_SERVER['REQUEST_URI'], "pd?id=") == true){
        $ID = str_replace("/public/pd?id=","",$_SERVER['REQUEST_URI']);
        $del= new delete;
        $del->deleteP($ID);
    }elseif(strpos($_SERVER['REQUEST_URI'], "Re?id=") == true){
        $ID = str_replace("/public/Re?id=","",$_SERVER['REQUEST_URI']);
        $home->editR($ID);
    }elseif(strpos($_SERVER['REQUEST_URI'], "ticket?id=") == true){
        $id = str_replace("/public/ticket?id=","",$_SERVER['REQUEST_URI']);
        require("../app/Controllers/bookingController.php");
        $ticket = new bookingController;
        $ticket->ticket($id);
    }elseif(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        $home->index0('dachBoard');
    }
}else{
    header('location:home');
}
?>