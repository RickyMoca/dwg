<!-- Page content -->
<div class="page-content pt-0">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content mt-3">
            <div class="col-md-10 mx-auto text-center"> <?= $this->session->flashdata('message'); ?></div>
            <div class="row mx-auto">
                <?= $load_content; ?>
            </div>
        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->