<?php include("../menu.php")?>
 <?php include("../../Controller/routeController.php")?>

    <div class="wrapper bg-dark text-white p-5 mb-5">
    <h1 class="text-center">Pristatymo forma</h1>        
    <a class="btn btn-primary" href="./create.php?id=<?=$_GET['id']?>&create">Sukurti pristatymo taską</a>
                        <table class="table text-white-50 m-2">
        <tr>
          
            <th>Tikslus pristatymo adresas</th> 
            <th>Svoris, KG</th> 
            <th>Kontaktinis numeris</th> 
            <th>Redaguoti</th> 
             <th>Istrinti</th> 
        </tr>

        <?php foreach (Routes::all() as $route) {?>
            <tr class="text-white">
                
           
            <td> <?= $route->adress  ?> </td>
            <td> <?= $route->weight  ?> </td>
            <td> <?= $route->tel  ?> </td>
                <td>
                    <a class="btn btn-secondary" href="./edit.php?id=<?=$_GET['id']?>&edit=<?= $route->id?>">Redaguoti</a>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?=$route->id?>">Istrinti</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
        
    <?php include("../footer.php")?>





