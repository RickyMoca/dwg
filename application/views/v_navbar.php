 <body>
     <!-- Main navbar -->
     <div class="navbar navbar-expand-md navbar-dark">
         <div class="navbar-brand wmin-0 ml-3 mr-md-auto">
             <a href=" index.html" class="d-inline-block">
                 <img src="<?= base_url(); ?>assets/vendor/images/logo_light.png" alt="">
             </a>
         </div>

         <div class="d-md-none">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                 <i class="icon-menu3"></i>
             </button>
         </div>

         <div class="collapse navbar-collapse" id="navbar-mobile">
             <ul class="navbar-nav ml-md-auto">
                 <li class="nav-item dropdown dropdown-user">
                     <a href="#" class="navbar-nav-link" data-toggle="dropdown">
                         <img src="<?= base_url(); ?>assets/vendor/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
                         <span>Victoria</span>
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" id="oke">
                         <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                         <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                         <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                         <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
     <!-- /main navbar -->


     <!-- Secondary navbar -->
     <div class="navbar navbar-expand-md navbar-light navbar-sticky">
         <div class="text-center d-md-none w-100">
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-navigation">
                 <i class="icon-arrow-down15"></i> Menu <i class="icon-arrow-down15"></i>
             </button>
         </div>



         <div class="navbar-collapse collapse" id="navbar-navigation">
             <!-- QUERY MENU -->
             <?php

                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>

             <!-- LOOPING MENU -->
             <?php foreach ($menu as $m) : ?>

                 <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                 <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1 
                                ORDER BY `user_sub_menu`.`position` ASC
                        ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                 <?php foreach ($subMenu as $sm) : ?>
                     <ul class="navbar-nav">
                         <?php if ($title == $sm['title']) : ?>
                             <li class="nav-item active">
                             <?php else : ?>
                             <li class="nav-item">
                             <?php endif; ?>
                             <a class="navbar-nav-link" href="<?= base_url($sm['url']); ?>">
                                 <i class="<?= $sm['icon']; ?> mr-1"></i> <?= $sm['title']; ?></a>
                             </li>
                     </ul>
                     <!--/header nav links-->
                 <?php endforeach; ?>
             <?php endforeach; ?>

         </div>
     </div>
     <?= $this->session->flashdata('message'); ?>
     <!-- /secondary navbar -->