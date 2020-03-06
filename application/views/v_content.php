<!-- Page content -->
<div class="page-content pt-0">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content mt-3">
            <div class="col-md-10 mx-auto text-center">
                <div data-alert="okebro"></div>
            </div>
            <div class="row mx-auto">
                <?= $load_content; ?>
            </div>
        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<?= $this->session->flashdata('message');  ?>;

<!-- /page content -->
<script>
    $(document).ready(function() {
        new Noty({
            layout: 'topRight',
            text: 'You have been logout',
            type: 'alert'
        }).show();
    });
</script>