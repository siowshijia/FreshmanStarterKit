
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
        <h3 class="ds-blue-title">ATTENDANCE POLICY</h3></hr>
        <ol>
            <li><p>
                The following NYP Assessment Regulation shall be applied to all modules, unless otherwise stated, that are given a letter-grade
                (i.e. modules that have letter grades of DIST, A, B, C, D and F) taken by students in a Semester:
                <br />
                Under the NYP Assessment Regulations, students who do not achieve 75% or above for attendance shall be allowed to continue with their studies and sit for assessment,
                but will have their final overall grade capped at ‘D’ with a corresponding grade point of 1.0 (50 marks) if they pass the module.
                <br /><br /></p>
            </li>
            <li><p>
                While NYP will send notifications on attendance to students and parents/guardians, students are strongly encouraged to check their attendance records frequently through the Student Attendance System. To help you keep track of your attendance,
                NYP has developed a mobile-friendly interface (https://attendance.nyp.edu.sg) where you can access using any of the web browsers in your mobile device.
                Alternatively, you can also continue to check your attendance records through the Student Portal.
                <br /><br /></p>
            </li>
            <li><p>
                The computation of your attendance rate will take into account approved absence with valid reasons, i.e. medical leave or other approved leave will not affect your attendance computation.
                <br /><br />
                The only absenteeism officially accepted are:<br />
                a.    Medical Leave<br />
                - Supported by an official medical certificate. Medical certificates must be obtained from a medical practitioner registered with the Singapore Medical Council or a
                dental practitioner registered with the Singapore Dental Council, who ought not be a family member. Medical certificates from Traditional Chinese Medicine (TCM) practitioners
                are not accepted.
                <br />
                b.    NYP Student Activities <br />
                - Representing Singapore/NYP at official events with prior approval from NYP
                <br />
                c.    Compassionate Leave<br />
                - Demise of immediate family members<br />
                d.    NS Obligations <br />
                - e.g. medical check-up at CMPB, reservist training
                <br />
                e.    GCE O Levels<br />
                - e.g. re-taking of GCE O-Level Examinations
                <br />
                f.     Public Transport Disruption
                <br />
                g.    ITE/Secondary School Graduation
                <br />
                h.    Statutory Obligations
                <br />
                - e.g. attend court hearings
                <br /><br />
            </li>
            <li><p>
                Please go to the Statement of Absence system in the <a href="http://myportal.nyp.edu.sg/portal/page/portal/Student_Portal/Student_Portal_DocumentLibrary/login.htm" target="_blank">myNYP Portal</a>
                to update your absence from classes. You must submit the original documentary evidence, including medical certificates,
                within the next two (2) working days following your absence to your school’s administration office.
                Once this is done, your absence will not be counted in the calculation of your attendance.</li>
            </p></li>
        </ol>
    </div>

    <div class="container-md">

            <form action="" method="post">
                <?php if (isset($error_msg)) { ?>
                    <div class="alert alert-danger text-center"><?php echo $error_msg; ?></div>
                <?php } ?>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name'); ?>">
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <label for="staff_number">Staff Number</label>
                    <input type="text" name="staff_number" id="staff_number" class="form-control" value="<?php echo set_value('staff_number'); ?>">
                    <span class="text-danger"><?php echo form_error('staff_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" value="<?php echo set_value('contact_number'); ?>">
                    <span class="text-danger"><?php echo form_error('contact_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="user_role" class="sr-only">User Role</label>
                    <select class="form-control" name="user_role">
                        <option selected disabled>Select Role</option>
                        <option value="Admin" <?php echo set_select('user_role', 'Admin'); ?>>Admin</option>
                        <option value="Event Manager" <?php echo set_select('user_role', 'Event Manager'); ?>>Event Manager</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('user_role'); ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Add</button>
                <a href="<?php echo base_url('/admin/staff/dashboard'); ?>" class="btn btn-primary btn-block m-t-sm">Back</a>
            </form>


        <table class="table table-bordered table-striped data-table">
            <thead>
                <tr>
                    <th>Quiz Name</th>
                    <th>Question 1</th>
                    <th>Answer</th>
                    <br>
                    <th>Question 2</th>
                    <th>Answer</th>
                    <br>
                    <th>Question 3</th>
                    <th>Answer</th>
                    <br>
                    <th>&nbsp;</th>




                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name'); ?>">
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
                <div class="form-group">
                    <label for="staff_number">Staff Number</label>
                    <input type="text" name="staff_number" id="staff_number" class="form-control" value="<?php echo set_value('staff_number'); ?>">
                    <span class="text-danger"><?php echo form_error('staff_number'); ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" value="<?php echo set_value('contact_number'); ?>">
                    <span class="text-danger"><?php echo form_error('contact_number'); ?></span>
                </div>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rewards as $reward) { ?>
                    <tr>
                        <td><?php echo $reward->reward_id; ?></td>
                        <td>
                            <img src="<?php echo base_url('/uploads/' . $reward->image); ?>" alt="<?php echo $reward->reward_name; ?>">
                        </td>
                        <td><?php echo $reward->reward_name; ?></td>
                        <td><?php echo $reward->cost_points; ?></td>
                        <td><?php echo $reward->quantity; ?></td>
                        <td><?php echo $reward->description; ?></td>
                        <td><?php echo $reward->expired_date; ?></td>
                        <td>
                            <a href="<?php echo base_url('/admin/reward/edit') . '/' . $reward->reward_id; ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo base_url('/admin/reward/delete') . '/' . $reward->reward_id; ?>" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</section>