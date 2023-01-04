<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>creat an acount</h2>
            <p>please fill this form to register with us</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                <div class="form-group">
                    <label for="name"> Name: <sup>*</sup></label>
                    <input type="text" name="name" id="" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                    <div class="invalid-feedback"><?php echo $data['name_err']; ?></div>
                </div>
                <div class="form-group">
                    <label for="email"> Email: <sup>*</sup></label>
                    <input type="email" name="email" id="" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <div class="invalid-feedback"><?php echo $data['email_err']; ?></div>
                </div>
                <div class="form-group">
                    <label for="password">Password : <sup>*</sup></label>
                    <input type="password" name="password" id="" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                    <div class="invalid-feedback"><?php echo $data['password_err']; ?></div>
                </div>
                <div class="form-group">
                    <label for="confirm_password"> Confirm password: <sup>*</sup></label>
                    <input type="password" name="confirm_password" id="" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                    <div class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account login?</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>