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
    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
        <?php if(validation_errors()) { ?>
            <div class="alert alert-danger"><?= validation_errors();?></div>
        <?php } ?>
        <?php if(isset($msg) && $msg != '') { ?>
            <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php } ?>


         
                    <?php foreach ($events as $event) { ?>
                        
                            <div class="panel panel-primary">
                            <div class="panel-heading"><?php echo $event->eventname; ?>@<?php echo $event->eventvenue; ?></div>
                            <div class="panel-body">
                            <a href="<?php echo base_url('/event/delete') . '/' . $event->eventId; ?>" class="btn btn-primary pull-right">Delete</a>
                            </div>
</div>
                           
                    <?php } ?>
              
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/student/login'); ?>" class="btn btn-primary">Login</a>
            </div>
            <?php } ?>
    </div>
</section>

