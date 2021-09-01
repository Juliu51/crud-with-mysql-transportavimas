<?php
include('../../Models/route.php');
 if(isset($_GET['route'] )){
    header("location:../Routes/routes.php?id=".$_GET['route']);
    die;
}
if(!isset($_POST['create']) &&
    !isset($_GET['edit']) &&
    !isset($_POST['update']) &&
    !isset($_POST['delete'])){
      $all = Routes::all();
    }

if(isset($_POST['create'] )){
    $post = new Routes();
    $post->store();
    header("location:./Routes.php?id=".$_POST['id']);
    die;
}

if(isset($_POST['update'] )){
    $update = new Routes();
    $update-> update();
    header("location:./Routes.php?id=".$_POST['id']);
    die;
}

if(isset($_POST['delete'] )){
    $destroy = new Routes();
    $destroy->destroy($_POST['delete']);
    header("location:./Routes.php?id=".$_POST['id']);
    die; 
}


if(isset($_GET['edit'] )){
        $route = Routes::find($_GET['edit']);

    }



?>