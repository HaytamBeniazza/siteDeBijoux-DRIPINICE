<?php require  APPROOT . '/views/inc/header.php'; ?>
<!-- price section -->
<section class="price_section layout_padding">
    <div class="container">
        <?php flash('article_message'); ?>

        <div class="heading_container  d-flex justify-content-between">
            <a href="<?php echo URLROOT; ?> /articles/add" class="btn btn-warning pull-right" style=" font-size: 1em;">Add Product</i></a>

        </div>
        <div class="price_container" style=" display: flex;  flex-direction: column;">
            <?php foreach ($data['articles'] as $article) : ?>

                <div class="box " style="
    display: flex;
    flex-direction: row;
    justify-content: space-around;min-width: 100%;
    height: auto;
    padding: 0%;     margin-bottom: auto;">

                    <div class="name">
                        <h6>
                            <?php echo $article->name_prod; ?>
                        </h6>
                    </div>

                    <div class="detail-box">
                        <h5>
                            $<span> <?php echo $article->prix; ?></span>
                            <!-- <span> <?php echo $article->quantite; ?></span> -->
                        </h5>
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span> <?php echo $article->quantite; ?></span>
                        </h5>
                    </div>
                    <div class="img-box" style="width:auto ;">
                        <img src="<?php echo URLROOT; ?>/images/<?php echo $article->image; ?>" alt="">
                    </div>
                    <a href="<?php echo URLROOT; ?>/articles/edit/<?php echo $article->id_prod; ?>" class="btn" style=" font-size: 1em;"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M15.728 9.686l-1.414-1.414L5 17.586V19h1.414l9.314-9.314zm1.414-1.414l1.414-1.414-1.414-1.414-1.414 1.414 1.414 1.414zM7.242 21H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 21z" fill="rgba(241,160,14,1)" />
                        </svg> </a>
                    <a href="<?php echo URLROOT; ?>/articles/delete/<?php echo $article->id_prod; ?>" class="btn" style=" font-size: 1em;"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-9 3h2v6H9v-6zm4 0h2v6h-2v-6zM9 4v2h6V4H9z" fill="rgba(223,154,29,1)" />
                        </svg></a>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
<!-- end price section -->


<?php require  APPROOT . '/views/inc/footer.php'; ?>