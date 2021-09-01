<?php include("../menu.php")?>
 <?php include("../../Controller/invoiceController.php")?>
    <div class="wrapper bg-dark text-white p-5 mb-5">
            <a class="btn btn-primary" href="http://localhost/crud%20with%20mysql%20transportavimas/Views/invoices/create.php">Sukurti uzsakyma</a>
    <table class="table text-white-50"> 
    <tr>
            <th>Uzsakymo numeris</th> 
            <th>Is kur</th> 
            <th>I kur</th> 
            <th>Data</th> 
            <th class="text-center">Apdrausta</th> 
            <th>Placiau</th> 
            <th>Redaguoti</th> 
             <th>Istrinti</th> 
        </tr>

        <?php foreach ($all as $invoice) {?>
            <tr class="text-white">
                
            <td> <?=$invoice->id  ?> </td>
            <td> <?= $invoice->start  ?> </td>
            <td> <?= $invoice->stop  ?> </td>
            <td> <?= $invoice->date  ?> </td>
                <td class="text-center"> 
                    <input class="checkbox" type="checkbox" name="" id="" <?=$invoice->checkBoxActivation()?> disabled>
                </td>
                <td>
                    <a class="btn btn-primary" href="../routes/routes.php?id=<?= $invoice->id  ?>">Placiau</a>
                </td>
                <td>
                    <a class="btn btn-secondary" href="./edit.php?edit=<?= $invoice->id  ?>">Redaguoti</a>
                </td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?=$invoice->id?>"  >Istrinti</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
        
    <?php include("../footer.php")?>





