<?php

class HomeController{
     function __construct ()
    {
        session_start();
        require "../autoloader.php";
    }
    public function index0(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        header("location:dachBoard");
    }
    public function index($page){
        if($_SESSION['user']==null){
            if(isset($_SESSION['admin'])){
                header("location: dachBoard");
            }else{
                header("location: login");
            }
        }
        include('../app/View/'.$page.'.php');
    }
    public function home(){
        require("bookingController.php");
        $cruise = new cruise;
        $resultat=$cruise->list();
        $list=new edit();
        $resultat1=$list->list1();
        $resultat2=$list->list2();
        $test = new dh;
        if(isset($_POST['search'])){
            $name = $_POST['date'];
            if($name===""){
                header("location: home#cruises");
            }else{
                $resultat = $test->search($name);
            }
        }
        if(isset($_POST['searchS'])){
            $name = $_POST['ship'];
            if($name===""){
                header("location: home#cruises");
            }else{
                $resultat = $test->searchS($name);
            }
        }
        if(isset($_POST['searchP'])){
            $name = $_POST['port'];
            if($name===""){
                header("location: home#cruises");
            }else{
                $resultat = $test->searchP($name);
            }
        }
        if(isset($_POST['itinarary'])){
            $id = $_POST['cruise'];
            $resultat0=$cruise->list1($id);
        }
        if(isset($_POST['contact'])){
            $namee = isset($_POST["name"]) ? $_POST["name"] : null;
            $phone = isset($_POST["phone"]) ? $_POST["phone"] : null;
            $email = isset($_POST["email"]) ? $_POST["email"] : null;
            $subject = isset($_POST["subject"]) ? $_POST["subject"] : null;
            $message = isset($_POST["message"]) ? $_POST["message"] : null;
            $contact = new addNew;
            $contact->contact($namee,$phone,$email,$subject,$message);
        }
        $r = 2;
        $book = new bookingController;
        $e = $book->booking();
        if(isset($e)){
            $r = $e;
        }   
        include('../app/View/home.php');
    }
    function reservations(){
        if($_SESSION['user']==null){
            header("location: login");
        }
        require("../app/Models/dh.php");
        $test = new dh;
        $resultat = $test->searchR($_SESSION['user']);
        if(isset($_POST['search'])){
            $name = $_POST['room'];
            if($name===""){
                header("location: reservations");
            }else{
                $resultat = $test->searchReservations($name,$_SESSION['user-id']);
            }
        }
        include('../app/View/reservations.php');
    }
    public function dh($page){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("../app/Models/dh.php");
        $test = new dh;
        $cruise = new cruise;
        $resultat = $test->dh($page);
        if(isset($_POST['itinarary'])){
            $id = $_POST['cruise'];
            $resultat0=$cruise->list1($id);
        }
        if(isset($_POST['search'])){
            $name = $_POST['search'];
            if($name===""){
                header("location: cruises");
            }else{
                $resultat = $test->search($name);
            }
        }
        include('../app/View/'.$page.'.php');
    }
    function dachboard(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("../app/Models/dh.php");
        if(isset($_POST['submit'])){
            $id = $_POST['cruise'];
        }else{
            $id = 1;
        }
        $test = new dh;
        $resultat1 = $test->stc();
        $resultat2 = $test->stc1();
        $resultat3 = $test->stc2();
        $resultat4 = $test->stc3();
        $resultat5 = $test->stc4();
        $resultat6 = $test->stc5();
        $resultat7 = $test->stc6($id);
        $list = new edit;
        $resultat8=$list->listR2();
        include('../app/View/dachBoard.php');
    }
    public function dhR(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("../app/Models/dh.php");
        $test = new dh;
        $resultat = $test->dhR();
        if(isset($_POST['search'])){
            $name = $_POST['search'];
            if($name===""){
                header("location: reservation");
            }else{
                $resultat = $test->searchR($name);
            }
        }
        include('../app/View/reservation.php');
    }
    public function book(){
        if($_SESSION['user']==null){
            header("location: login");
        }
        require("bookingController.php");
        require("../app/View/booking.php");
        $test = new bookingController;
        $test->booking();
    }
    public function addNew(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("addNewController.php");
        $list = new edit;
        $resultat1=$list->list3();
        $resultat2=$list->list2();
        $resultat6=$list->list2();
        require("../app/View/addNew.php");
        $test = new addNewController;
        $test->addNewController();
    }
    public function addNewS(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("addNewController.php");
        require("../app/View/addShip.php");
        $test = new addNewController;
        $test->addSController();
    }
    public function addNewP(){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("addNewController.php");
        require("../app/View/addPort.php");
        $test = new addNewController;
        $test->addPController();
    }
    public function edit($ID){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("editController.php");
        $list = new edit;
        $resultat=$list->list($ID);
        $resultat1=$list->list1();
        $resultat2=$list->list2();
        $resultat6=$list->list2();
        require("../app/View/editpage.php");
        $test = new editController;
        $test->editController($ID);
    }
    public function editR($ID){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("editController.php");
        $list = new edit;
        $resultat=$list->listR($ID);
        $resultat2=$list->listR2();
        $resultat3=$list->listR3();
        require("../app/View/editpageR.php");
        $test = new editController;
        $test->editRController($ID);
    }
    function signup(){
        require("signupController.php");
        require("../app/View/signuppage.php");
        $sign = new signupcontrol;
        $sign->signupcontrol();
    }
    function login(){
        require("loginController.php");
        if((isset($_SESSION['admin'])) OR (isset($_SESSION['user']))){
            require("disconnect.php");
            $dis = new disconnect;
            $dis->disconnect();
        }
        require("../app/View/login.php");
        $login = new loginController;
        $login->loginController();
    }
    function disconnect(){
        require("disconnect.php");
        $dis = new disconnect;
        $dis->disconnect();
    }
}
?>