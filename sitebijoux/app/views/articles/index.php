<?php require  APPROOT .'/views/inc/header.php';?>

  <section class="price_section layout_padding">
      <div class="container">
          <div class="heading_container  d-flex justify-content-between">
            <div class="col-md-3">
              <h2>
                  Our Articles
              </h2>
            </div>
          </div>
          <div class="price_container">
          <?php foreach($data['articles'] as $article): ?>

              <div class="box ">
                  <div class="name">
                      <h6>
                      <?php echo $article->name_prod ;?>
                      </h6>
                  </div>
                  <div class="img-box">
                      <img style="width: 250px; border-radius:5px;" src="../public/images/<?php echo $article->image; ?>"  alt="">
                  </div>
                  <div class="detail-box">
                      <h5>
                          $<span> <?php echo $article->prix ;?></span>
                      </h5>
                  </div>
              </div>
         <?php endforeach;?>

          </div>

      </div>
  </section>
  

<?php require  APPROOT .'/views/inc/footer.php';?>
