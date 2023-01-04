<div class="hero_area">
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>">
          <img src="<?php echo URLROOT; ?>/images/logoo.png" style="width: 110px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link " style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/pages/about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/articles/index"> Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/pages/contact"> Contact</a>
              </li>
            
          <?php if(isset($_SESSION['user_id'])) : ?>
            <?php if($_SESSION['user_id'] == 7) : ?>
               <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/articles/dashbord"> Dashbord</a>
              </li> 
              <?php endif; ?>
            <li class="nav-item">
            <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/users/logout"> Logout</a>
            </li>
            
           <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" style="font-size: 1.25em ;" href="<?php echo URLROOT; ?>/users/login"> Admin</a>
              </li>
            <?php endif; ?>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
</div>
