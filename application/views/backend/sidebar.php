        <aside class="left-sidebar" style="background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                <!-- User profile -->
                        <?php 
                        $id = $this->session->userdata('user_login_id');
                        $basicinfo = $this->employee_model->GetBasic($id); 
                        ?>                
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url(); ?>assets/images/users/<?php echo $basicinfo->em_image ?>" alt="user" />
                        <!-- this is blinking heartbit-->
                        <!-- <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div> -->
                    </div>

                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5><?php echo $basicinfo->first_name.' '.$basicinfo->last_name; ?></h5>
                        <a href="<?php echo base_url(); ?>settings/Settings" class="dropdown-toggle u-dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="<?php echo base_url(); ?>login/logout" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" style="background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a href="<?php echo base_url(); ?>" ><i class="mdi mdi-gauge"></i><span class="hide-menu"><strong> <b>Dashboard </b></strong></span></a></li>
                        <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url(); ?>employee/view?I=<?php echo base64_encode($basicinfo->em_id); ?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"><strong> <b>Employees</b></strong> </span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-rocket"></i><span class="hide-menu"><strong> <b>Leave</b></strong></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>leave/Holidays"> <strong> <b>Holiday </b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmApplication"> <strong> <b>Leave Application </b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>leave/EmLeavesheet"><strong> <b> Leave Sheet </b></strong></a></li>
                            </ul>
                        </li> 
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu"><strong> <b>Projects</b></strong> </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Projects/All_Projects"><strong> <b>Projects</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/All_Tasks"> <strong> <b>Task List </b></strong></a></li>
                                <!--<li><a href="<?php #echo base_url(); ?>Projects/All_Tasks"> Field Visit</a></li>-->
                            </ul>
                        </li>                                                                       
                        <?php } else { ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-building-o"></i><span class="hide-menu"><strong> <b>Organization</b></strong> </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>organization/Department"><strong> <b>Department </b></strong></a></li>
                                <li><a href="<?php echo base_url();?>organization/Designation"><strong> <b>Designation</b></strong></a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"><strong> <b>Employees </b></strong></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>employee/Employees"><strong> <b>Employees</b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>employee/Disciplinary"><strong> <b>Disciplinary</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>employee/Inactive_Employee"><strong> <b>Inactive User</b></strong> </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu"><strong> <b>Attendance</b></strong> </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>attendance/Attendance"><strong> <b>Attendance List </b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>attendance/Save_Attendance"><strong> <b>Add Attendance </b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>attendance/Attendance_Report"><strong> <b>Attendance Report</b></strong> </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-off"></i><span class="hide-menu"><strong> <b>Leave </b></strong></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>leave/Holidays"> <strong> <b>Holiday</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/leavetypes"> <strong> <b>Leave Type</b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Application"> <strong> <b>Leave Application</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Earnedleave"> <strong> <b>Earned Leave </b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>leave/Leave_report"> <strong> <b>Report</b></strong> </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-briefcase-check"></i><span class="hide-menu"><strong> <b>Project </b></strong></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Projects/All_Projects"><strong> <b>Projects</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/All_Tasks"> <strong> <b>Task List</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>Projects/Field_visit"> <strong> <b>Field Visit</b></strong></a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu"><strong> <b>Payroll </b></strong></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!--<li><a href="<?php #echo base_url(); ?>Payroll/Salary_Type"> Payroll Type </a></li>-->
                                <li><a href="<?php echo base_url(); ?>Payroll/Salary_List"> <strong> <b>Payroll List</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>Payroll/Generate_salary"> <strong> <b>Generate Payslip</b></strong></a></li>
                                <li><a href="<?php echo base_url(); ?>Payroll/Payslip_Report"><strong> <b> Payslip Report</b></strong></a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-cash"></i><span class="hide-menu"><strong> <b>Loan </b></strong></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Loan/View"> <strong> <b>Grant Loan</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>Loan/installment"><strong> <b> Loan Installment</b></strong></a></li>
                            </ul>
                        </li>
                        
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu"><strong><b>Assets</b></strong> </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>Logistice/Assets_Category"> <strong><b>Assets Category</b></strong> </a></li>
                                <li><a href="<?php echo base_url(); ?>Logistice/All_Assets"> <strong> <b>Asset List</b></strong> </a></li>
                                <!--<li><a href="<?php #echo base_url(); ?>Logistice/View"> Logistic Support List </a></li>-->
                                <li><a href="<?php echo base_url(); ?>Logistice/logistic_support"><strong> <b>Logistic Support</b></strong> </a></li>
                            </ul>
                        </li>
                        
                        <li> <a href="<?php echo base_url()?>notice/All_notice" ><i class="mdi mdi-clipboard"></i><span class="hide-menu"><strong><b>Notice</b></strong> <span class="hide-menu"></a></li>
                        <li> <a href="<?php echo base_url(); ?>settings/Settings" ><i class="mdi mdi-settings"></i><span class="hide-menu"><strong><b>Settings</b></strong> <span class="hide-menu"></a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>