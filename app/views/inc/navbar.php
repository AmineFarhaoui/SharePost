<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3" aria-label="Fifth navbar example">
    <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <?php 
                    if (isset($_SESSION['user_id'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>/users/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-sm">
    <a class="navbar-brand mx-auto" href="#">Sharepost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="<?php echo URLROOT; ?>/pages/about">About</a>
        </li>
      </ul>
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
        if (isset($_SESSION['user_id'])) {
        ?>
            <li class="nav-item">
                <a class="nav-link active text-danger" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            </li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/users/register">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>