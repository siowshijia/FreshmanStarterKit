<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title text-center"><?php echo $view_name; ?></h1>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section class="section-base">
    <div class="container-xs">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
            <form action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                    <label for="quiz_name">Quiz Name</label>
                    <input type="text" name="quiz_name" id="quiz_name" class="form-control" placeholder="Quiz Name">
                </div>
                <div class="form-group">
                    <label for="quiz_description">Quiz Description</label>
                    <textarea name="quiz_description" cols="40" rows="4" id="quiz_description" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="question_1">Question 1</label>
                    <textarea name="question_1" cols="40" rows="3" id="question_1" class="form-control" placeholder="Question 1"></textarea>
                </div>
                <div class="form-group">
                    <label for="answer_1">Answer</label>
                    <input type="text" name="answer_1" id="answer_1" class="form-control" placeholder="Answer to Question 1">
                </div>
                <div class="form-group">
                    <label for="question_2">Question 2</label>
                    <textarea name="question_2" cols="40" rows="3" id="question_2" class="form-control" placeholder="Question 2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="answer_2">Answer</label>
                    <input type="text" name="answer_2" id="answer_2" class="form-control" placeholder="Answer to Question 2">
                </div>
                <div class="form-group">
                    <label for="question_3">Question 3</label>
                    <textarea name="question_3" cols="40" rows="3" id="question_3" class="form-control" placeholder="Question 3"></textarea>
                </div>
                <div class="form-group">
                    <label for="answer_3">Answer</label>
                    <input type="text" name="answer_3" id="answer_3" class="form-control" placeholder="Answer to Question 3">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Add</button>
                <a href="<?php echo base_url('/admin/quiz/dashboard'); ?>" class="btn btn-primary btn-block m-t-sm">Back</a>
            </form>
        <?php } else { ?>
            <div class="text-center">
                <h4>Please login to view this page.</h4>
                <a href="<?php echo base_url('/staff/login'); ?>" class="btn btn-primary">Login</a>
            </div>
        <?php } ?>
    </div>
</section>