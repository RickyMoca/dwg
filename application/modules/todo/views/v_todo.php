<div class="col-md-10 mx-auto">
    <div class="card">
        <div class="card-header header-elements-inline bg-dark">

            <h3 class="card-title"><i class="mi-turned-in mi-2x mr-2"></i>Konfirmasi Ninja</h3>
            <a href="" class="text-light"><i class="mi-queue mi-2x mr-1"></i></a>

        </div>
        <div id="message"></div>
        <div class="card-body bg-light">

            <!-- Header Tabs -->
            <ul class="nav nav-tabs nav-tabs-highlight-dark nav-justified col-md-7">
                <li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">
                        <i class="icon-user mr-1"></i>My Todos
                        <span class="badge bg-dark badge-pill ml-2" id="bg-1"></span></a>
                </li>
                <li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">
                        <i class="icon-clipboard2 mr-1"></i>Completed
                        <span class="badge bg-success badge-pill ml-2" id="bg-2"></span></a>
                </li>
                <li class="nav-item"><a href="#tab3" class="nav-link" data-toggle="tab">
                        <i class="mi-block mr-1"></i>No Response
                        <span class="badge bg-danger badge-pill ml-2" id="bg-3"></span></a>
                </li>
            </ul>
            <!--/Header Tabs -->


            <!-- tabs content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1">No data</div>

                <div class="tab-pane fade" id="tab2">No data</div>

                <div class="tab-pane fade" id="tab3">No data</div>
            </div>
            <!-- /tabs content -->

        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/js/custom.js"></script>
<script>
    $(document).ready(function() {
        refreshData();
    });
</script>