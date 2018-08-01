<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $view_name; ?></h1>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section class="section-base">
    <div class="container-md">
        <?php if(validation_errors()) { ?>
            <div class="alert alert-danger"><?= validation_errors();?></div>
        <?php } ?>
        <?php if(isset($msg) && $msg != '') { ?>
            <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php } ?>

        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
            <div class="m-b-md">
            <a href="<?php echo base_url('/admin_event/adminCreate')?>" class="btn btn-primary">Add Event</a>
            </div>

            <table class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Staff Number</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>User Role</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach ($events as $event) { ?>
                        <tr>
                            <td><?php echo $event->eventname; ?></td>
                            <td><?php echo $event->eventvenue; ?></td>
                            <td><?php echo $event->eventDatetime; ?></td>
                            <td><?php echo $event->eventCategory; ?></td>
                            <td><?php echo $event->description; ?></td>
                            <td><?php echo $event->eventId; ?></td>
                            <td>
                            <a href="<?php echo base_url('/admin_event/Update') . '/' . $event->eventId; ?>" class="btn btn-primary">Edit</a>   
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>
