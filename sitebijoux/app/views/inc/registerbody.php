<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/stylelogreg.css">

<section class="vh-100 m-5">
    <div class="container-fluid">
        <div class="row d-md-flex flex-column justify-content-center align-items-center">
            <div class="col-sm-6 text-black">

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem; margin-top: 10%;" action="<?php echo URLROOT; ?>/users/register" method="POST">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Creat An Acount</h3>
                        <div class="form-outline mb-4">
                            <input type="text" name="name" id="form2Example18" class="form-control form-control-lg  <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                            <div class="invalid-feedback"><?php echo $data['name_err']; ?></div>
                            <label class="form-label" for="form2Example18">Name</label>

                        </div>


                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form2Example18" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                            <div class="invalid-feedback"><?php echo $data['email_err']; ?></div>
                            <label class="form-label" for="form2Example18">Email address</label>

                        </div>


                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example28" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                            <div class="invalid-feedback"><?php echo $data['password_err']; ?></div>
                            <label class="form-label" for="form2Example28">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="confirm_password" id="" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                            <div class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></div>
                            <label class="form-label" for="form2Example28">Confirm password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button type="submit" class="btn btn-lg btn-block">Register</button>
                        </div>

                        <a href="<?php echo URLROOT; ?>/users/login" class="link-info">Have an account login?</a>

                    </form>

                </div>

            </div>
        </div>
    </div>
</section>