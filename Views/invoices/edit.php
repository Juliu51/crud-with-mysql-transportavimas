  <?php include("../menu.php")?>
 <?php include("../../Controller/invoiceController.php")?>
 <div class="wrapper bg-dark text-white p-5 mb-5">
     <h1 class="text-center">Uzsakymo <?= "$invoice->id" ?> redagavimas</h1>
 <form action="./invoices.php" method="post" class="m-5">
Iš
<input type="text" placeholder="Is Kokios Salies" name="start" value="<?= $invoice->start?>">
Į
<input type="text" placeholder="I Kokia Sali" name="stop" value="<?= $invoice->stop?>">
Data
<input type="date" placeholder="Data Kada paimti" name="date" value="<?= $invoice->date?>"> Ar apdrausti siunta?
<input type="checkbox" placeholder="Siuntos Draudimas" name="insured"  value="<?= $invoice->insured?>"> 

<button type="submit" name="update" value="<?=$invoice->id?>" class="btn btn-secondary m-3"> Pakeist </button>

    </form>

    <?php include("../footer.php")?>