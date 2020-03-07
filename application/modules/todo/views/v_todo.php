<div class="col-md-10 mx-auto">
    <div class="card">
        <div class="card-header header-elements-inline bg-dark">

            <h3 class="card-title"><i class="mi-turned-in mi-2x mr-2"></i>On Hold Parcel Ninja</h3>
            <a href="#" data-toggle="modal" data-target="#m_addtodo" class="text-light"><i class="mi-queue mi-2x mr-1"></i></a>

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



<!-- Primary modal  Add User-->
<div id="m_addtodo" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">

                <h6 class="modal-title"><i class="icon-file-plus2 mr-1 icon-2x"></i> Creat new todo</h6>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body">

                <form class="user" method="post" action="<?= base_url('todo/addtodo'); ?>">
                    <div class="form-group">
                        <small class="mb-1 badge badge-light">Subject Your Todos</small>
                        <input type="text" class="form-control" id="subject" name="subject" value="<?= set_value('name'); ?>">
                    </div>

                    <div class="form-row mb-4">
                        <div class="col-6">
                            <small class="mb-1 badge badge-light">Select yout todo assign to ?</small>


                            <select id="id_user" name="user_recived" class="form-control">
                                <option selected="true"></option>
                                <?php foreach ($Vuser as $u) : ?>
                                    <option value="<?= $u['id']; ?>"><?= $u['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-6">
                            <small class="mb-1 badge badge-light">Due Date</small>

                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                                <input type="text" name="duedate" class="form-control daterange-single" value="">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <small class="mb-1 badge badge-light">Please enter your message todo</small>

                        <textarea type="text-area" class="form-control" id="message" name="message" placeholder="Enter name" value=""> </textarea>
                        <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn bg-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-slate-600">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Primary modal -->


<script src="<?= base_url(); ?>assets/js/custom.js"></script>
<script>
    $(document).ready(function() {

        refreshData();
        $('.daterange-single').daterangepicker({
            singleDatePicker: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });
</script>