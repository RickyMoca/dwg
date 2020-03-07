<div class="col-md-10 mx-auto">
    <div class="card">
        <div class="card-header header-elements-inline bg-dark">
            <h3 class="card-title">
                <a href="<?= base_url('todo/todolist') ?>" class="text-light">
                    <i class="icon-arrow-left16 icon-2x mr-2"></i></a>
                Back to my todos
            </h3>

            <button class="btn sm-light" id="pilih"><i class="icon-paste2 icon-1x"></i> Copy</button>
        </div>
        <div id="message"></div>
        <div class="card-body bg-light">

            <div class="col-md-12">

                <h1><a href="<?= base_url(); ?>todo/gantiStats?ids=<?= $detail['id_todos'] ?>" class="text-success">
                        <?php if ($detail['status'] == '0') { ?>
                            <i class="icon-checkbox-unchecked2 icon-2x mr-2">
                            <?php } else { ?>
                                <i class="icon-checkbox-checked2 icon-2x mr-2"></i>
                            <?php }; ?>

                            </i></a><strong> <?= $detail['subject_todos']; ?></strong>
                </h1>

                <span class="badge badge-light badge-striped badge-striped-right badge-icon border-right-teal-300"><i class="icon-user"></i> From : Mohamad Ricky</span>
                <span class="badge badge-light badge-striped badge-striped-right badge-icon border-right-teal-300"><i class="icon-calendar"></i> 24/05/2020</span>

            </div>

            <hr>

            <div class="col-md-12 border-bottom-2 bg-primary border-warning py-2">
                <h5 id="message"><i class="icon-bubble-dots3 mr-2"></i> <?= $detail['message_todos']; ?></h5>
            </div>
            <div class="col-md-12 border-bottom-2 bg-light border-dark py-2">
                <h5><i class="mi-reply mr-2"></i></h5>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="text" class="form-control bg-light form-control-md border-bottom-1" placeholder="Reply here . . . . . ">
                        <div class="form-control-feedback form-control-feedback-md">
                            <a href=""><i class="mi-reply mi-2x text-dark"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $('#pilih').on('click', function() {
        var copyText = document.getElementById("message");
        copyText.select();
        document.execCommand("message");

        $.jGrowl('Data Successfuly Copy to Clipboard', {
            theme: 'alert-styled-left bg-dark'
        });



    })
</script>