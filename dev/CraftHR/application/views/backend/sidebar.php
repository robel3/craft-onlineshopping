        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                        <?php 
                        $id = $this->session->userdata('user_login_id');
                        $basicinfo = $this->employee_model->GetBasic($id); 
                        ?>                
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url(); ?>assets/images/users/<?php echo $basicinfo->em_image ?>" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
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
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <!-- <li> <a href="<?php echo base_url(); ?>" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a></li> -->
                        <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
                         <li> <a href="<?php echo base_url(); ?>dashboard/Employeedashbord" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashbord </span></a></li>
                          <li> <a href="<?php echo base_url(); ?>attendance/Emp_Attendance" ><i class="mdi mdi-gauge"></i><span class="hide-menu">Attendance </span></a></li>
                       <!--  <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url(); ?>employee/view?I=<?php echo base64_encode($basicinfo->em_id); ?>" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employees </span></a>
                       
                        </li> -->
                         <!--  <li><a href="<?php echo base_url(); ?>attendance/Save_Attendance">Add Attendance </a></li> -->                                                                   
                        <?php } else { ?>
                       
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Employees </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>employee/Employees">Employees </a></li>
                           
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Attendance </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>attendance/Attendance">Attendance List </a></li>
                                <!-- <li><a href="<?php echo base_url(); ?>attendance/Save_Attendance">Add Attendance </a></li> -->
                               <!--  <li><a href="<?php echo base_url(); ?>attendance/Attendance_Report">Attendance Report </a></li> -->
                            </ul>
                        </li>
                       
                       
                        
                      
                        
                        <!--  -->
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>