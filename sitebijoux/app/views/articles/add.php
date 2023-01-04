<!-- bootstrap css -->
<?php require  APPROOT .'/views/inc/header.php';?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- responsive style -->
   <link href="<?php echo URLROOT; ?>/css/responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/stylelogreg.css">
<div class="container col-md-8">
            <div class="col-md-3">
              <h2>
                  Add Articles
              </h2>
            </div>
            <div class="container-fluid my-5">
            <a href="<?php echo URLROOT; ?>/articles/dashbord" style="color:black"class="btn btn-secondary rounded-3 px- ml-2 mt-2">Back</a>
            <div class="row p-2">
                <div class="col-md-12">
                <form action="<?php echo URLROOT;?>/Articles/add/" method="post" enctype="multipart/form-data">

                        <div  class="form-outline mb-4">
                            <label class="form-label" for="exampleFormControlInput1" <?php echo (!empty($data['name_prod_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name_prod']; ?>">Product Name</label>
                            <input type="name" name="name" id="exampleFormControlInput1" class="form-control form-control-lg" placeholder="Product name" required>

                        </div>
                        <div  class="form-outline mb-4">
                            <label class="form-label" for="exampleFormControlInput1" <?php echo (!empty($data['prix_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['prix']; ?>">Product Price</label>
                            <input type="number" name="prix" id="exampleFormControlInput1" class="form-control form-control-lg" placeholder="Product price" required min=1>

                        </div>
                        <div  class="form-outline mb-4">
                            <label class="form-label" for="exampleFormControlInput1" <?php echo (!empty($data['quantite_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['quantite']; ?>">Product Quantity</label>
                            <input type="number" name="quantite" id="exampleFormControlInput1" class="form-control form-control-lg" placeholder="Product quantity" required min=1>

                        </div>
                        <div class="form-outline mb-4">
                            <label for="formFile" class="form-label  <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['image']; ?>">Product Image</label>
                            <input class="form-control form-control-lg" type="file" name="image" id="formFile" required>
                        </div>


                        <div class="col-12 d-flex justify-content-between">
                        <button type="submit" style="height: 45x; margin-top:10px; width: 80%" class="btn btn-lg btn-block">Add</button>
                        </div>


                </div>

                </form>
            </div>
        </div>
</div>
<?php require  APPROOT .'/views/inc/footer.php';?>
