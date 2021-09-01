<?php
include('../../Models/Invoice.php');
 if(isset($_GET['invoice'] )){
    header("location:../invoices/invoice.php?id=".$_GET['invoice']);
    die;
}
if(!isset($_POST['create']) &&
    !isset($_GET['edit']) &&
    !isset($_POST['update']) &&
    !isset($_POST['delete'])){
      $all = Invoices::all();
    }

if(isset($_POST['create'] )){
    $post = new Invoices();
    $post->store();
    header("location:./invoices.php");
    die;
}

if(isset($_POST['update'] )){
    $update = new Invoices();
    $update-> update();
    header("location:./invoices.php");
    die;
}

if(isset($_POST['delete'] )){
    $destroy = new Invoices();
    $destroy->destroy($_POST['delete']);
    header("location:./invoices.php");
    die; 
}


if(isset($_GET['edit'] )){
    
        $invoice = Invoices::find($_GET['edit']);

    }



?>