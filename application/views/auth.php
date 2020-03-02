<body>
  <!-- Page content -->
  <div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content area -->
      <div class="content d-flex justify-content-center mt-5">
        <div class="login-form">
          <div class="card mb-0">
            <div class="card-body">
              <div class="text-center mb-3">

                <i class="icon-lock icon-2x text-slate-300 border-slate-200 border-3 rounded-round p-2 mb-2 mt-1"></i>
                <!-- <h5 class="mb-0">Login to your account</h5> -->
                <span class="d-block text-muted">Enter your credentials below</span>
                <small><?= $this->session->flashdata('message'); ?></small>
              </div>

              <!-- Login form -->
              <?= $load_content ?>
              <!-- /login form -->

            </div>
          </div>
        </div>
      </div>
      <!-- /content area -->

    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->