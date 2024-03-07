<body class="">
  <style>
    html, body{
      width:calc(100%);
      height:calc(100%);
    }
      body{
         
          /* background-image:url('<?= validate_image($_settings->info('cover')) ?>');
          background-repeat: no-repeat;
          background-size:cover; */
          background-color: rgb(143, 174, 202);
      }
      #logo-img{
          width:15em;
          height:15em;
          object-fit:scale-down;
          object-position:center center;
      }
      #cimg{
          width:15vw;
          height:20vh;
          object-fit:scale-down;
          object-position:center center;
      }
      .pass_type{
        cursor: pointer;
      }
  </style>
<div class="d-flex align-items-center justify-content-center ">
  <!-- /.login-logo -->
  <!-- <div class="d-flex  justify-content-center align-items-center col-lg-5">
      <center><img src="<?= validate_image($_settings->info('logo')) ?>" alt="System Logo" class="img-thumbnail rounded-circle" id="logo-img"></center>
      <div class="clear-fix my-2"></div>
  </div> -->
  <div class="d-flex  justify-content-center align-items-center col-lg-7 bg-gradient-light text-dark">
    <div class="card card-outline card-purple w-75">
      <div class="card-header text-center">
        <a href="./" class="text-decoration-none text-dark"><b>Create an Account - Client</b></a>
      </div>
      <div class="card-body">
        <form id="register-frm" action="" method="post">
          <input type="hidden" name="id">
          <div class="row">
            <div class="form-group col-md-6">
                <input type="text" name="firstname" id="firstname" placeholder="Enter First Name" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">First Name</small>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="middlename" id="middlename" placeholder="Enter Middle Name (optional)" class="form-control form-control-sm form-control-border">
                <small class="ml-3">Middle Name</small>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">Last Name</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                  <select name="gender" id="gender" class="custom-select custom-select-sm form-control-border" required>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <small class="ml-3">Gender</small>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="contact" id="contact" placeholder="Enter Contact" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">Contact Number</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <small class="ml-3">Address</small>
              <textarea name="address" id="address" rows="3" class="form-control form-control-sm rounded-0" placeholder="Enter Your Full Address"></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-md-6">
                <input type="email" name="email" id="email" placeholder="harryden@mail.com" class="form-control form-control-sm form-control-border" required>
                <small class="ml-3">Email</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                <div class="input-group">
                  <input type="password" name="password" id="password" placeholder="" class="form-control form-control-sm form-control-border" required>
                  <div class="input-group-append border-bottom border-top-0 border-left-0 border-right-0">
                    <span class="input-append-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                  </div>
                </div>
                <small class="ml-3">Password</small>
            </div>
            <div class="form-group col-md-6">
                <div class="input-group">
                  <input type="password" id="cpassword" placeholder="" class="form-control form-control-sm form-control-border" required>
                  <div class="input-group-append border-bottom border-top-0 border-left-0 border-right-0">
                    <span class="input-append-text text-sm"><i class="fa fa-eye-slash text-muted pass_type" data-type="password"></i></span>
                  </div>
                </div>
                <small class="ml-3">Confirm Password</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="" class="control-label">Avatar</label>
              <div class="custom-file">
                      <input type="file" class="custom-file-input rounded-0 form-control form-control-sm form-control-border" id="customFile" name="img" onchange="displayImg(this,$(this))">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
            </div>
          <div class="row">
          </div>
            <div class="form-group col-md-6 d-flex justify-content-center">
              <img src="<?php echo validate_image(isset($image_path) ? $image_path : "") ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-8">
              <a href="<?php echo base_url ?>" style="text-decoration:none;">Back</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-sm btn-flat btn-block" >Register</button>
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
              <div class="col-12 text-center">
              <a href="<?php echo base_url.'login.php' ?>" style="text-decoration:none;">Already have an Account</a>
              </div>
          </div>
        </form>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

</div>

<script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?= base_url ?>dist/js/adminlte.min.js"></script> -->
</body>
</html>