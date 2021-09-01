<?php include("../menu.php")?>
 <?php include("../../Controller/routeController.php")?>


 <div class="wrapper bg-dark text-white p-5 mb-5">
     <h1 class="text-center">Naujo uzsakymo kurimas</h1>
    <form action="" method="post" class="m-5">
  <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Tikslus pristatymo adresas</label>
            <div class="col-sm-4">
    <input type="text" placeholder="Miestas, gatves, butas" name="adress">
 </div>
 </div>
 <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Svoris</label>
            <div class="col-sm-4">
    <input type="number" placeholder="kg" name="weight">
 </div>
 </div>
 <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Tel. numeris</label>
            <div class="col-sm-4">
    <input type="tel" placeholder="86xxxxxxxx" name="tel">
 </div>
 </div>
 <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <button type="submit" name="create"  class="btn btn-secondary m-5" > Itraukti i uzsakyma </button>
    </form>

    <?php include("../footer.php")?>
