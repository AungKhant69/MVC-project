<div class="container-fluid p-2 bg-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
        <div class="container-fluid bg-dark">
            <a class="navbar-brand text-white" href="<?php echo URLROOT; ?>">
                <img src="<?php echo URLROOT . "assets/imgs/phplogo.png" ?>" alt="" width="35" height="35" class="rounded ms-3">
                <span class="ms-3 ">PHP Guru</span>      
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav ms-auto me-3">         
         

          <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php if (getUserSession() != false) : ?>
                        <?php echo getUserSession()->name; ?>
                    <?php else: ?>
                        Guest
                    <?php endif; ?>               
              </a>
              <ul class="dropdown-menu bg-info-subtle">
                    <?php if (getUserSession() != false) : ?>
                            <li><a class="dropdown-item" href="<?php echo URLROOT . "user/logout" ?>">Logout</a></li>
                       
                       

                      <?php else : ?>
                            <li><a class="dropdown-item" href="<?php echo URLROOT . "user/login" ?>">Login</a></li>
                            <li><a class="dropdown-item" href="<?php echo URLROOT . "user/register" ?>">Register</a></li>
                    <?php endif; ?>
              </ul>
          </li>

          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Languages
              </a>
              <ul class="dropdown-menu bg-info-subtle">
                    <li><a class="dropdown-item" href="#">PHP</a></li>
                    <li><a class="dropdown-item" href="#">Python</a></li>
                    <li><a class="dropdown-item" href="#">C++</a></li>
              </ul>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</div>