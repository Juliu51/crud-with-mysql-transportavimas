  <?php include("../menu.php")?>
 <?php include("../../Controller/routeController.php")?>
 <div class="wrapper bg-dark text-white p-5 mb-5">
     <h1 class="text-center">Uzsakymo  redagavimas</h1>
 <form action="" method="post" class="m-5">
Iš
<input type="text" placeholder="Is Kokios Salies" name="adress" value="<?= $route->adress?>">
Į
<input type="number" placeholder="I Kokia Sali" name="weight" value="<?= $route->weight?>">
Data
<input type="tel" placeholder="Data Kada paimti" name="tel" value="<?= $route->tel?>"> 
<input type="hidden" name="id" value="<?=$_GET['id']?>">
<button type="submit" name="update"  class="btn btn-secondary m-3"> Pakeist </button>

    </form>

    <?php include("../footer.php")?>