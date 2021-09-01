    <?php include("../menu.php")?>
 <?php include("../../Controller/invoiceController.php")?>


 <div class="wrapper bg-dark text-white p-5 mb-5">
     <h1 class="text-center">Naujo uzsakymo kurimas</h1>
    <form action="" method="post" class="m-5">
  <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Is Kokios Salies?</label>
            <div class="col-sm-4">
    <input type="text" placeholder="Salis" name="start">
 </div>
 </div>
 <div class="form-group row">
            <label class="col-sm-2 col-form-label" >I Kokia Sali ?</label>
            <div class="col-sm-4">
    <input type="text" placeholder="Salis" name="stop">
 </div>
 </div>
 <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Data Kada paimti</label>
            <div class="col-sm-4">
    <input type="date" placeholder="Data" name="date">
 </div>
 </div>
 <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Ar apdrausti siunta?</label>
            <div class="col-sm-4">
    <input type="checkbox"  name="insured">
 </div>
 </div>
    <button type="submit" name="create"  class="btn btn-secondary m-5"> Kurti uzsakyma </button>
    </form>

    <?php include("../footer.php")?>