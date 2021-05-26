<?php require APPROOT . '/views/inc/header.php';?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Login</h2>
                <p>Please fill out this form to login</p>
                <form action="<?php echo URLROOT;?>/users/login" method="post">
                    <div class="form-group mb-3">
                        <label for="name">Email: <sup>*</sup></label>
                        <input type="email" name="email" value="<?php echo $data['email']?>" class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? 'is-invalid' : '';?>">
                        <span class="invalid-feedback"><?php echo $data['email_error']?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Password: <sup>*</sup></label>
                        <input type="password" name="password" value="<?php echo $data['password']?>" class="form-control form-control-lg <?php echo (!empty($data['password_error'])) ? 'is-invalid' : '';?>">
                        <span class="invalid-feedback"><?php echo $data['password_error']?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Login" class="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT?>/users/register" class="btn btn-light btn-block">No account? Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php';?>