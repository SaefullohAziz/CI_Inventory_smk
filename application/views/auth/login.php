  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center py-5">

      <div class="col-xl-5 col-lg-7 col-md-10 sm-11 py-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Page!</h1>
                    <hr>
                  </div>
                  <?php if(isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                  } ?>
                  <form class="user" action="<?= base_url('auth/index'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." name="email" value="<?= set_value('email'); ?>" autofocus>
                      <?= form_error('email', '<small class="text-danger pl-3">' , '</small>'); ?> 
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                      <?= form_error('password', '<small class="text-danger pl-3">' , '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-info btn-user btn-block">
                      Login
                    </button>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>