<div class="col-md-5">
    <div class="card">
        <div class="card-body bg-dark text-center card-img-top" style="background-image: url(assets/vendor/images/backgrounds/panel_bg.png); background-size: contain;">
            <div class="card-img-actions d-inline-block mb-3">
                <img class="img-fluid rounded-circle" src="assets/vendor/images/demo/users/face11.jpg" width="170" height="170" alt="">
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
            <span class="d-block opacity-75">Member since <?= $date ?></span>

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
    <div class="card">
        <div class="card-body text-center card-img-top" style="background-image: url(assets/vendor/images/backgrounds/panel_bg.png); background-size: contain;">
            <div class="card-img-actions d-inline-block mb-3">
                <img class="img-fluid rounded-circle" src="assets/vendor/images/demo/users/face11.jpg" width="170" height="170" alt="">
                <div class="card-img-actions-overlay rounded-circle">
                    <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                        <i class="icon-plus3"></i>
                    </a>
                    <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                        <i class="icon-link"></i>
                    </a>
                </div>
            </div>


        </div>

    </div>
</div>

<!-- Content area -->
<div class="content">

    <!-- Checkboxes -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Checkboxes</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <p class="mb-3">The HTML input element <code>&lt;input type=checkbox></code> is an input element to enter an array of different values. The <code>value</code> attribute is used to define the value submitted by the checkbox. The <code>checked</code> attribute is used to indicate whether this item is selected. The <code>indeterminate</code> attribute is used to indicate that the checkbox is in an indeterminate state (on most platforms, this draws a horizontal line across the checkbox).</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-semibold">Left stacked default</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked>
                                Checked default
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Unchecked default
                            </label>
                        </div>

                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked disabled>
                                Disabled default
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Left inline default</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked>
                                Checked default
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Unchecked default
                            </label>
                        </div>
                    </div>

                    <div class="form-group pt-2">
                        <label class="font-weight-semibold">Left stacked styled</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                                Checked styled
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-styled" data-fouc>
                                Unchecked styled
                            </label>
                        </div>

                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-styled" disabled data-fouc>
                                Disabled styled
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-3 mb-md-2">
                        <label class="d-block font-weight-semibold">Left inline styled</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                                Checked styled
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input-styled" data-fouc>
                                Unchecked styled
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-semibold">Right stacked default</label>
                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Checked default
                                <input type="checkbox" class="form-check-input" checked>
                            </label>
                        </div>

                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Unchecked default
                                <input type="checkbox" class="form-check-input">
                            </label>
                        </div>

                        <div class="form-check form-check-right disabled">
                            <label class="form-check-label">
                                Disabled default
                                <input type="checkbox" class="form-check-input" checked disabled>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Right inline default</label>
                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Checked default
                                <input type="checkbox" class="form-check-input" checked>
                            </label>
                        </div>

                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Unchecked default
                                <input type="checkbox" class="form-check-input">
                            </label>
                        </div>
                    </div>

                    <div class="form-group pt-2">
                        <label class="d-block font-weight-semibold">Right stacked styled</label>

                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Checked styled
                                <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Unchecked styled
                                <input type="checkbox" class="form-check-input-styled" data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-right disabled">
                            <label class="form-check-label">
                                Disabled styled
                                <input type="checkbox" class="form-check-input-styled" checked disabled data-fouc>
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-3 mb-md-2">
                        <label class="d-block font-weight-semibold">Right inline styled</label>
                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Checked styled
                                <input type="checkbox" class="form-check-input-styled" checked data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Unchecked styled
                                <input type="checkbox" class="form-check-input-styled" data-fouc>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /checkboxes -->


    <!-- Radio buttons -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Radio buttons</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <p class="mb-3">Radio button is an element that can be turned on and off. Radio buttons are almost always grouped together in groups. Only one radio button within the same <code>radiogroup</code> may be selected at a time. The user can switch which radio button is turned on by selecting it with the mouse or keyboard. Other radio buttons in the same group are turned off. A label, specified with the <code>label</code> attribute may be added beside the radio button.</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-semibold">Left stacked default</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="unstyled-radio-left" checked>
                                Selected default
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="unstyled-radio-left">
                                Unselected default
                            </label>
                        </div>

                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" checked disabled>
                                Disabled default
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Left inline default</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio-unstyled-inline-left" checked>
                                Selected default
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio-unstyled-inline-left">
                                Unselected default
                            </label>
                        </div>
                    </div>

                    <div class="form-group pt-2">
                        <label class="font-weight-semibold">Left stacked styled</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input-styled" name="stacked-radio-left" checked data-fouc>
                                Selected styled
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input-styled" name="stacked-radio-left" data-fouc>
                                Unselected styled
                            </label>
                        </div>

                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input-styled" disabled data-fouc>
                                Disabled styled
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-3 mb-md-2">
                        <label class="d-block font-weight-semibold">Left inline styled</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input-styled" name="radio-inline-left" checked data-fouc>
                                Selected styled
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input-styled" name="radio-inline-left" data-fouc>
                                Unselected styled
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-semibold">Right stacked default</label>
                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Selected default
                                <input type="radio" class="form-check-input" name="unstyled-radio-right" checked>
                            </label>
                        </div>

                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Unselected default
                                <input type="radio" class="form-check-input" name="unstyled-radio-right">
                            </label>
                        </div>

                        <div class="form-check form-check-right disabled">
                            <label class="form-check-label">
                                Disabled default
                                <input type="radio" class="form-check-input" checked disabled>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Right inline default</label>
                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Selected default
                                <input type="radio" class="form-check-input" name="radio-unstyled-inline-right" checked>
                            </label>
                        </div>

                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Unselected default
                                <input type="radio" class="form-check-input" name="radio-unstyled-inline-right">
                            </label>
                        </div>
                    </div>

                    <div class="form-group pt-2">
                        <label class="font-weight-semibold">Right stacked styled</label>
                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Selected styled
                                <input type="radio" class="form-check-input-styled" name="stacked-radio-right" checked data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-right">
                            <label class="form-check-label">
                                Unselected styled
                                <input type="radio" class="form-check-input-styled" name="stacked-radio-right" data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-right disabled">
                            <label class="form-check-label">
                                Disabled styled
                                <input type="radio" class="form-check-input-styled" checked disabled data-fouc>
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-3 mb-md-2">
                        <label class="d-block font-weight-semibold">Right inline styled</label>
                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Selected styled
                                <input type="radio" class="form-check-input-styled" name="radio-inline-right" checked data-fouc>
                            </label>
                        </div>

                        <div class="form-check form-check-inline form-check-right">
                            <label class="form-check-label">
                                Unselected styled
                                <input type="radio" class="form-check-input-styled" name="radio-inline-right" data-fouc>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /radio buttons -->


    <!-- Custom Bootstrap inputs -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Custom Bootstrap inputs</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <p class="mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control. Custom checkboxes can also utilize the <code>:indeterminate</code> pseudo class when manually set via JavaScript (there is no available HTML attribute for specifying it).</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Left stacked checkboxes</label>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_unchecked" checked>
                            <label class="custom-control-label" for="custom_checkbox_stacked_unchecked">Custom checked</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked">
                            <label class="custom-control-label" for="custom_checkbox_stacked_checked">Custom unchecked</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_checked_disabled" checked disabled>
                            <label class="custom-control-label" for="custom_checkbox_stacked_checked_disabled">Custom checked disabled</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Left inline checkboxes</label>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_unchecked" checked>
                            <label class="custom-control-label" for="custom_checkbox_inline_unchecked">Custom checked</label>
                        </div>

                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_checked">
                            <label class="custom-control-label" for="custom_checkbox_inline_checked">Custom unchecked</label>
                        </div>
                    </div>

                    <div class="form-group pt-2">
                        <label class="d-block font-weight-semibold">Left stacked radios</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="custom-stacked-radio" id="custom_radio_stacked_unchecked" checked>
                            <label class="custom-control-label" for="custom_radio_stacked_unchecked">Custom selected</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="custom-stacked-radio" id="custom_radio_stacked_checked">
                            <label class="custom-control-label" for="custom_radio_stacked_checked">Custom unselected</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="custom_radio_stacked_checked_disabled" checked disabled>
                            <label class="custom-control-label" for="custom_radio_stacked_checked_disabled">Custom selected disabled</label>
                        </div>
                    </div>

                    <div class="form-group mb-3 mb-md-2">
                        <label class="d-block font-weight-semibold">Left inline radios</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="custom-inline-radio" id="custom_radio_inline_unchecked" checked>
                            <label class="custom-control-label" for="custom_radio_inline_unchecked">Custom selected</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="custom-inline-radio" id="custom_radio_inline_checked">
                            <label class="custom-control-label" for="custom_radio_inline_checked">Custom unselected</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Right stacked checkboxes</label>
                        <div class="custom-control custom-control-right custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_right_checked" checked>
                            <label class="custom-control-label" for="custom_checkbox_stacked_right_checked">Custom checked</label>
                        </div>

                        <div class="custom-control custom-control-right custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_right_unchecked">
                            <label class="custom-control-label" for="custom_checkbox_stacked_right_unchecked">Custom unchecked</label>
                        </div>

                        <div class="custom-control custom-control-right custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_stacked_right_checked_disabled" checked disabled>
                            <label class="custom-control-label" for="custom_checkbox_stacked_right_checked_disabled">Custom checked disabled</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Right inline checkboxes</label>
                        <div class="custom-control custom-control-right custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_right_checked" checked>
                            <label class="custom-control-label" for="custom_checkbox_inline_right_checked">Custom checked</label>
                        </div>

                        <div class="custom-control custom-control-right custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="custom_checkbox_inline_right_unchecked">
                            <label class="custom-control-label" for="custom_checkbox_inline_right_unchecked">Custom unchecked</label>
                        </div>
                    </div>

                    <div class="form-group pt-2">
                        <label class="d-block font-weight-semibold">Right stacked radios</label>
                        <div class="custom-control custom-control-right custom-radio">
                            <input type="radio" class="custom-control-input" name="custom-stacked-radio-right" id="custom_radio_stacked_right_checked" checked>
                            <label class="custom-control-label" for="custom_radio_stacked_right_checked">Custom selected</label>
                        </div>

                        <div class="custom-control custom-control-right custom-radio">
                            <input type="radio" class="custom-control-input" name="custom-stacked-radio-right" id="custom_radio_stacked_right_unchecked">
                            <label class="custom-control-label" for="custom_radio_stacked_right_unchecked">Custom unselected</label>
                        </div>

                        <div class="custom-control custom-control-right custom-radio">
                            <input type="radio" class="custom-control-input" id="custom_radio_stacked_right_checked_disabled" checked disabled>
                            <label class="custom-control-label" for="custom_radio_stacked_right_checked_disabled">Custom selected disabled</label>
                        </div>
                    </div>

                    <div class="form-group mb-3 mb-md-2">
                        <label class="d-block font-weight-semibold">Right stacked radios</label>
                        <div class="custom-control custom-control-right custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="custom-inline-radio-right" id="custom_radio_inline_right_checked" checked>
                            <label class="custom-control-label" for="custom_radio_inline_right_checked">Custom selected</label>
                        </div>

                        <div class="custom-control custom-control-right custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="custom-inline-radio-right" id="custom_radio_inline_right_unchecked">
                            <label class="custom-control-label" for="custom_radio_inline_right_unchecked">Custom unselected</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /custom Bootstrap inputs -->


    <!-- Colors -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Color options</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <p class="mb-3">Besides default color, both checkboxes and radio buttons support 5 additional contextual color classes and other custom colors from color system. Colors are adapted to use in different background colors of parent elements - dropdown menus, active list states, input group addons - all checkboxes and radios are white on dark backgrounds. To use, simply add <code>background</code> and <code>text</code> color classes to Uniform's <code>wrapperClass</code> options.</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3 mb-md-2">
                        <label class="font-weight-semibold">Checkboxes</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input-styled-primary" checked data-fouc>
                                        Primary checkbox
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input-styled-danger" checked data-fouc>
                                        Danger checkbox
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input-styled-success" checked data-fouc>
                                        Success checkbox
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input-styled-warning" checked data-fouc>
                                        Warning checkbox
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input-styled-info" checked data-fouc>
                                        Info checkbox
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input-styled-custom" checked data-fouc>
                                        Custom color
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3 mb-md-2">
                        <label class="font-weight-semibold">Radio buttons</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="radio-styled-color" class="form-check-input-styled-primary" checked data-fouc>
                                        Primary radio
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="radio-styled-color" class="form-check-input-styled-danger" data-fouc>
                                        Danger radio
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="radio-styled-color" class="form-check-input-styled-success" data-fouc>
                                        Success radio
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="radio-styled-color" class="form-check-input-styled-warning" data-fouc>
                                        Warning radio
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="radio-styled-color" class="form-check-input-styled-info" data-fouc>
                                        Info radio
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="radio-styled-color" class="form-check-input-styled-custom" data-fouc>
                                        Custom color
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /colors -->


    <!-- Switchery toggles -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Switchery toggles</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="font-weight-semibold">Default switchers</h6>
                    <p class="mb-3">You can add as many switches as you like, as long as their corresponding checkboxes have the same class. Select them and make new instance of the Switchery class for every of them.</p>

                    <div class="form-check form-check-switchery">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                            Checked switch
                        </label>
                    </div>

                    <div class="form-check form-check-switchery">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" data-fouc>
                            Unchecked switch
                        </label>
                    </div>

                    <div class="form-check form-check-switchery disabled">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" checked disabled data-fouc>
                            Checked disabled
                        </label>
                    </div>

                    <div class="form-check form-check-switchery disabled">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" disabled data-fouc>
                            Unchecked disabled
                        </label>
                    </div>


                    <h6 class="font-weight-semibold pt-3">Switcher colors</h6>
                    <p class="mb-3">You can change the default color of the switch to fit your design perfectly. According to the color system, any of its color can be applied to the switchery. Custom colors are also supported.</p>

                    <div class="form-check form-check-switchery">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery-primary" checked data-fouc>
                            Switch in <span class="font-weight-semibold">primary</span> context
                        </label>
                    </div>

                    <div class="form-check form-check-switchery">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery-danger" checked data-fouc>
                            Switch in <span class="font-weight-semibold">danger</span> context
                        </label>
                    </div>

                    <div class="form-check form-check-switchery">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery-info" checked data-fouc>
                            Switch in <span class="font-weight-semibold">info</span> context
                        </label>
                    </div>

                    <div class="form-check form-check-switchery">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery-warning" checked data-fouc>
                            Switch in <span class="font-weight-semibold">warning</span> context
                        </label>
                    </div>


                    <h6 class="font-weight-semibold pt-3">Left inline</h6>
                    <p class="mb-3">Switchery component also supports default option for <strong>left</strong> and <strong>right</strong> inline alignment. Just add <code>.form-check-inline</code> class to <code>.form-check-switchery</code> container. Default alignment is <strong>left</strong>.</p>

                    <div class="form-check form-check-switchery form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                            First input
                        </label>
                    </div>

                    <div class="form-check form-check-switchery form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                            Second input
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <h6 class="font-weight-semibold pt-3 pt-md-0">Sticked to the right</h6>
                    <p class="mb-3">Sometimes it's very useful to have switches on the right side of the container. Just add <code>.form-check-right</code> class to the <code>&lt;.form-check></code> container for the very right side switcher alignment.</p>

                    <div class="form-check form-check-right form-check-switchery">
                        <label class="form-check-label">
                            Checked switch
                            <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                        </label>
                    </div>

                    <div class="form-check form-check-right form-check-switchery">
                        <label class="form-check-label">
                            Unchecked switch
                            <input type="checkbox" class="form-check-input-switchery" data-fouc>
                        </label>
                    </div>

                    <div class="form-check form-check-right form-check-switchery disabled">
                        <label class="form-check-label">
                            Checked disabled
                            <input type="checkbox" class="form-check-input-switchery" checked disabled data-fouc>
                        </label>
                    </div>

                    <div class="form-check form-check-right form-check-switchery disabled">
                        <label class="form-check-label">
                            Unchecked disabled
                            <input type="checkbox" class="form-check-input-switchery" disabled data-fouc>
                        </label>
                    </div>


                    <h6 class="font-weight-semibold pt-3">Multiple labels</h6>
                    <p class="mb-3">Switchery can be used with single label or with multiple labels. To use, add <code>.switchery-double</code> class to the container. All sizing options are available for this switchery type as well.</p>

                    <div class="form-check form-check-switchery form-check-switchery-double">
                        <label class="form-check-label">
                            Enable
                            <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                            Disable
                        </label>
                    </div>

                    <div class="form-check form-check-switchery form-check-switchery-double">
                        <label class="form-check-label">
                            Enable
                            <input type="checkbox" class="form-check-input-switchery" data-fouc>
                            Disable
                        </label>
                    </div>

                    <div class="form-check form-check-switchery form-check-switchery-double disabled">
                        <label class="form-check-label">
                            Enable
                            <input type="checkbox" class="form-check-input-switchery" checked disabled data-fouc>
                            Disable
                        </label>
                    </div>

                    <div class="form-check form-check-switchery form-check-switchery-double disabled">
                        <label class="form-check-label">
                            Enable
                            <input type="checkbox" class="form-check-input-switchery" disabled data-fouc>
                            Disable
                        </label>
                    </div>


                    <h6 class="font-weight-semibold pt-3">Right inline</h6>
                    <p class="mb-3">You can also reverse inline alignment to <code>right</code> - just add default <code>.form-check-right</code> to any <code>.form-check</code> container and all inputs will be adjusted automatically.</p>

                    <div class="form-check form-check-switchery form-check-inline form-check-right">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                            First input
                        </label>
                    </div>

                    <div class="form-check form-check-switchery form-check-inline form-check-right">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input-switchery" checked data-fouc>
                            Second input
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /switchery toggles -->


    <!-- Bootstrap switch -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Bootstrap switch</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Switch states</h6>
                        <p>By default Bootstrap Switch supports standard attributes for checkboxes such as <code>disabled</code>, <code>checked</code> and <code>readonly</code> or use <code>true</code> or <code>false</code> in plugin options.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" checked>
                                        Checked switch
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" checked disabled>
                                        Checked disabled
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label">
                                        <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" readonly checked>
                                        Checked readonly
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label">
                                        <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch">
                                        Unchecked switch
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left disabled">
                                    <label class="form-check-label">
                                        <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" disabled>
                                        Unchecked disabled
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label">
                                        <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input form-check-input-switch" readonly>
                                        Unchecked readonly
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <h6 class="font-weight-semibold">Switch colors</h6>
                        <p>You can change the default color of the switch by choosing one of 6 predefined classes and use them in <code>data-on-color</code> and <code>data-off-color</code> attributes.</p>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="default" data-off-color="danger" checked>
                                        Default color
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="primary" data-off-color="default" checked>
                                        Primary color
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="danger" data-off-color="default" checked>
                                        Danger color
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="success" data-off-color="default" checked>
                                        Success color
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="warning" data-off-color="default" checked>
                                        Warning color
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input form-check-input-switch" data-on-text="On" data-off-text="Off" data-on-color="info" data-off-color="default" checked>
                                        Info color
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Switch sizes</h6>
                        <p>Default height is equal to input field height, but you can also choose one of 4 available sizes (large, small and mini) by changing <code>data-size</code> attribute.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input-switch" data-on-text="On" data-off-text="Off" data-size="large" checked>
                                        Large switch
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch" data-size="small" checked>
                                        Small switch
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" data-on-text="On" data-off-text="Off" class="form-check-input-switch" checked>
                                        Default switch
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <h6 class="font-weight-semibold">Label options</h6>
                        <p>Labels support any text or icon via <code>data-on-text</code> and <code>data-off-text</code> attributes. If no custom text specified, switch will display default on/off text.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" checked>
                                        Default text
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" data-on-color="warning" data-off-color="info" data-on-text="<i class='icon-link'></i>" data-off-text="<i class='icon-unlink'></i>" class="form-check-input-switch" checked>
                                        Icons only
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" data-on-color="danger" data-off-color="primary" data-on-text="Enable" data-off-text="Disable" class="form-check-input-switch" checked>
                                        Enable/Disable
                                    </label>
                                </div>

                                <div class="form-check form-check-switch form-check-switch-left">
                                    <label class="form-check-label d-flex align-items-center">
                                        <input type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="form-check-input-switch" checked>
                                        Online/Offline
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bootstrap switch -->

</div>
<!-- /content area -->