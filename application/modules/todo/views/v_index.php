<div class="col-md-5">
    <div class="card">
        <div class="card-body bg-dark text-center card-img-top" style="background-image: url(assets/vendor/images/backgrounds/panel_bg.png); background-size: contain;">
            <div class="card-img-actions d-inline-block mb-3">
                <img class="img-fluid rounded-circle" src="<?= base_url(); ?>assets/vendor/images/placeholders/pic.png" width="170" height="170" alt="">
                <div class="card-img-actions-overlay rounded-circle">
                    <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                        <i class="icon-plus3"></i>
                    </a>
                    <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                        <i class="icon-link"></i>
                    </a>
                </div>
            </div>

            <?php $name = $this->session->userdata('name');
            $date = $this->session->userdata('date_created') ?>
            <h6 class="font-weight-semibold mb-0"><?= $name ?></h6>
            <span class="d-block opacity-75">Member since <?= date('d F Y', $date); ?></span>

            <div class="list-icons list-icons-extended mt-3">
                <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Google Drive"><i class="icon-google-drive"></i></a>
            </div>
        </div>

        <div class="card-body">
            <ul class="nav nav-sidebar mb-2">
                <li class="nav-item">
                    <a href="login_advanced.html" class="nav-list active">
                        <i class="icon-cogs mr-2"></i>
                        Edit Profile
                    </a>
                </li>

                <li class="nav-item-divider"></li>

                <li class="nav-item">
                    <a href="#schedule" class="nav-list">
                        <i class="icon-calendar3 mr-2"></i>
                        My assignment
                        <span class="badge bg-danger badge-pill">29</span>
                    </a>
                </li>

                <li class="nav-item-divider"></li>

                <li class="nav-item">
                    <a href="login_advanced.html" class="nav-list">
                        <i class="icon-switch2 mr-2"></i>
                        Logout
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>

<div class="col-md-7">

    <div class="card-body bg-light text-center">
        <h3> Welcome to App <strong>Digital Winning</strong></h3>
        <h2><?= $name ?></h2>
    </div>

</div>