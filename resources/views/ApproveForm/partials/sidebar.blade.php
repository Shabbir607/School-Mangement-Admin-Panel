<!---<style>
   .main-sidebar{
    background-color: black;
   }
   .brand-text{
    color:  #ffc205;
    font-weight: bold;
    font-family: arial;
    letter-spacing: 1px;
   }
   .user-panel{
    display: flex;
    align-items: center;
    margin: 10px 0 15px 0;
    padding: 10px 15px;
   }
   .user-panel img{
    border-radius: 50%;
    margin-right: 10px
   }
   .mt-2 span{
    color: #ffc205;
   }

</style>-->
<!---<aside class="main-sidebar sidebar-dark-primary elevation-4">-->
    <!-- Brand Logo -->
   <!--- <a href="index3.html" class="brand-link">
      <img src="{{asset('dashboard-assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Logo Name</span>
    </a>-->

    <!-- Sidebar -->
<!--    <div class="sidebar"> -->
      <!-- Sidebar user panel (optional) -->
     <!--    <div class="user-panel">
           
             <img src="{{$profile_picture}}" alt="User Image">
             <a href="#" class="">{{$name}}</a>
           
        </div>-->

      <!-- SidebarSearch Form -->
    <!--   <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
     <!--  <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">-->
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <!-- Home  -->

              <!--  <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    Home
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>-->
              <!--   <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href= "{{ route('home_present')}}" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Present Form</span>
                            
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home_leave')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Leave Form</span>
                            
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home_request_form')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Request Form</span>
                            
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home_Stationary')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Statinary Form</span>
                            
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home_Purchase')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Purchase Form</span>
                            
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home_booking')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Booking Form</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home_cctv')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>CCTV Form</span>
                            
                            </p>
                        </a>
                    </li>
                </ul>
            </li>-->

            <!-- Setting -->
             <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    Setting
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Setting</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('setting_Language')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Language</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('setting_stationary')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Stationary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('setting_book')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Room Booking</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('setting_cctv')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>CCTV</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
              -->

             <!-- Employee -->
              <!--<li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    Employee
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Setting</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('schoollater')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>School Letter</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('notification')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Notification</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('group')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Group</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('schoolinfo')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>School Information</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('payroll')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Payroll</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('leavetype')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Leave Type</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Information</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('workingTime')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Working Time</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('employeeList')}}" 
                                class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Employee List</p>
                                </a>
                            </li>
            
                            <li class="nav-item">
                                <a href="{{ route('leavetype')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Leave Type</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('nationality')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Nationality</p>
                                </a>
                            </li>
                        
                            <li class="nav-item">
                                <a href="{{ route('education')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Education</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('attendance')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Attendence</p>
                                </a>
                            </li>
                        
                            <li class="nav-item">
                                <a href="{{ route('homeroom')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>HoomRoom</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('document')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Document</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Document</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            
                            <li class="nav-item">
                                <a href="{{ route('visadocument')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Visa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('workdocument')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Work Permit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contract')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Contract</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('teachingdocument')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Teaching License</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('schooldocument')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>School Document</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
-->

            <!-- My Website -->

                <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    My Website
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Setting</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('myWeb_menu')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Website Menu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('myWeb_info')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Website Information</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Information</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('myWeb_contect')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Website</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> -->


            <!-- Student -->
            <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    Student
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Setting</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('studentLevel')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('studentclassroom')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Class Room</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Information</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('stuinfocurrent')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Current Student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('stuinfoalumni')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Alumni</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>-->

             <!-- Stationary -->
              <!--     <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    Stationary
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Setting</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sbrand')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Brand</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('scategory')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sunit')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Unit</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Information</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sitem')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Product List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('simport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Import Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ssale')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Sale</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sapprove')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Approve</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sbillimport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>In The Completion of The Import</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sbroken')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Defective Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('srefund')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Return</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Report</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('ssalereport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Disbursement Report</p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('simportreport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Product Import Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sbrokenreport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Report a Defective Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('summaryreport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Inventory Report</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>-->

            <!-- Academic -->
           <!--      <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    Academic
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Setting</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('ac_Subject')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Subject</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ac_Level')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ac_ClassRoom')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Class Room</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Information</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('ac_InfoAfter')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>After School</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ac_InfoIntrov')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Intervention</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('homeclassroom')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Homeroom Teacher</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Report</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('ac_Rep_After')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>After School</p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('ac_Rep_Introv')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Intervention</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> -->
            

            <!-- Product Form -->

            <!--  <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link" class="col-1">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Setting</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('probrand')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Brand</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('prounit')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Unit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('procategory')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Information</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('proitem')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('proimport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Import</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('prosale')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Sale</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('proapprove')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Approve</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('probillimport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>In The Completion of The Import</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('probroken')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Broken</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('prorefund')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>CN Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('proecommerce')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Ecommerce</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                   

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Report</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('prosalereport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Disbursement Report</p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('proimportreport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Product Import Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('probrokenreport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Report a Defective Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('summaryreport')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Inventory Report</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>-->

             <!-- Approve Form Sidebar -->

            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <!--   <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                        Approve Form
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview main">
                    <li class="nav-item child">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Waiting List</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub">
                            <li class="nav-item">
                                <a href="{{ route('present_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Present Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('leave_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Leave Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('request_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Request Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('stationary_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Stationary Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('purchase_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Purchase Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('booking_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Booking Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('cctv_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>CCTV Form</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item child">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Approved</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub">
                            <li class="nav-item">
                                <a href="{{ route('approve_present_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Present Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('approve_leave_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Leave Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('approve_request_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Request Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('approve_stationary_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Stationary Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('approve_purchase_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Purchase Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('approve_booking_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Booking Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('approve_cctv_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>CCTV Form</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item child">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                            <span>Rejected</span>
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview sub">
                           <li class="nav-item">
                                <a href="{{ route('rej_present_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Present Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('rej_leave_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Leave Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('rej_request_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Request Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('rej_stationary_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Stationary Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('rej_purchase_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Purchase Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('rej_booking_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Booking Form</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('rej_cctv_form')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>CCTV Form</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
           
        
      </nav>-->
      <!-- /.sidebar-menu -->
      <!--</div>-->
    <!-- /.sidebar -->
    
  <!--</aside>-->

<style>
    .sidebar-menu > li {
    font-size: 1.143rem;
    position: relative;
    margin: 5px 0px;
    padding-left: 20px;
    padding-right: 30px;
    border-radius: 0;
    border-left: 0px solid transparent;
}
    </style>


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">	
			<!-- Logo -->
			<a href="index.html" class="logo">
			  <!-- logo-->
			  <div class="logo-mini">
				  <span class="light-logo"><img src="{{asset('dashboard-assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      </span>
			  </div>
			  <div class="logo-lg">
              <span class="brand-text font-weight-light">Logo Name</span>
			  </div>
			</a>	
		</div> 
		<div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
			<div class="d-flex align-items-center justify-content-between">			
				<div class="image d-flex align-items-center">
				    <img src="{{$profile_picture}}" class="rounded-0 me-10" alt="User Image">
					<div>
						<h4 class="mb-0 fw-600">{{$name}}</h4>
						<p class="mb-0">Super Admin</p>
					</div>
				</div>
				<div class="info">
					<a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
					<div class="dropdown-menu dropdown-menu-end">
					  <a class="dropdown-item" href="extra_profile.html"><i class="ti-user"></i> Profile</a>
					  <a class="dropdown-item" href="mailbox.html"><i class="ti-email"></i> Inbox</a>
					  <a class="dropdown-item" href="contact_app_chat.html"><i class="ti-link"></i> Conversation</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="auth_login.html"><i class="ti-lock"></i> Logout</a>
					</div>
				</div>
			</div>
	    </div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				
          		<!---- Home Menu ---->							
					<li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>   Home
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('home_present')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Present Form</a></li>
							<li><a href="{{ route('home_leave')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Form</a></li>
							<li><a href="{{ route('home_request_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Request Form</a></li>
							<li><a href="{{ route('home_Stationary')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statinary Form</a></li>
							<li><a href="{{ route('home_Purchase')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Purchase Form</a></li>
                            <li><a href="{{ route('home_booking')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Booking Form</a></li>
							<li><a href="{{ route('home_cctv')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CCTV Form</a></li>

                        
                        </ul>
					</li>			
                
                <!---- Setting Menu ---->		
                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>  Setting
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="{{ route('setting_Language')}}""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Language</a></li>
							<li><a href="{{ route('setting_stationary')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Stationary</a></li>
							<li><a href="{{ route('setting_book')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Room Booking</a></li>
							<li><a href="{{ route('setting_cctv')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CCTV</a></li>
						</ul>
					</li>			


                    <!---- Employee Menu ---->									
					<li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Employee
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                    <!---- Employee Sub Menu Setting Menu ---->		
                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Setting
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('schoollater')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>School Letter</a></li>
							<li><a href="{{ route('notification')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Notification</a></li>
							<li><a href="{{ route('group')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Group</a></li>
							<li><a href="{{ route('schoolinfo')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>School Information</a></li>
							<li><a href="{{ route('payroll')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Payroll</a></li>
                            <li><a href="{{ route('leavetype')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Type</a></li>

                            </li>	
                        </ul>
					</li>	


                        <!---- Employee Sub Menu Information Menu ---->		
                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Information
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('workingTime')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Working Time</a></li>
							<li><a href="{{ route('employeeList')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Employee List</a></li>
							<li><a href="{{ route('leavetype')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Type</a></li>
							<li><a href="{{ route('nationality')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nationality</a></li>
							<li><a href="{{ route('education')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Education</a></li>
                            <li><a href="{{ route('attendance')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Attendence</a></li>
                            <li><a href="{{ route('homeroom')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>HoomRoom</a></li>
                            <li><a href="{{ route('document')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Document</a></li>

                            </li>	
                        </ul>
					</li>	


                    
                        <!---- Employee Sub Menu DOCUMENT Menu ---->		
                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Document
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('visadocument')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Visa</a></li>
							<li><a href="{{ route('workdocument')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Work Permit</a></li>
							<li><a href="{{ route('contract')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contract</a></li>
							<li><a href="{{ route('teachingdocument')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Teaching License</a></li>
							<li><a href="{{ route('schooldocument')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>School Document</a></li>
                           

                            </li>	
                        </ul>
					</li>	


                    
                            </li>	
                        </ul>
					</li>			

                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>My Website
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">

                                              
                        <!---- Employee Sub Menu DOCUMENT Menu ---->		
                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Setting
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('myWeb_menu')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Visa</a></li>
							<li><a href="{{ route('myWeb_info')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Website Information</a></li>
							
                           

                            </li>	
                        </ul>
					</li>

                              <!---- Employee Sub Menu Information Menu ---->		
                              <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Information
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('myWeb_contect')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Website</a></li>

                           

                            </li>	
                        </ul>
					</li>
                        
                        </ul>
					</li>			
                

                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Student
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">
                            
						    <!---- Student Sub Menu Setting Menu ---->		
                            <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Setting
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('studentLevel')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Level</a></li>
							<li><a href="{{ route('studentclassroom')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Class Room</a></li>

                           

                            </li>	
                        </ul>
					</li>
                        
                       
						    <!---- Student Sub Menu Setting Menu ---->		
                            <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Information
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('stuinfocurrent')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Current Student</a></li>
							<li><a href="{{ route('stuinfoalumni')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Alumni</a></li>

                           

                            </li>	
                        </ul>
					</li>
                    
                        
                        </ul>
					</li>	

                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Stationary
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">
                            
								    <!---- Stationary Sub Menu Setting Menu ---->		
                                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Setting
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('sbrand')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Brand</a></li>
							<li><a href="{{ route('scategory')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Category</a></li>
							<li><a href="{{ route('sunit')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Unit</a></li>

                           

                            </li>	
                        </ul>
					</li>
                        

                    				    <!---- Stationary Sub Menu Information Menu ---->		
                                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Information
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('sitem')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product List</a></li>
							<li><a href="{{ route('simport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Import Products</a></li>
							<li><a href="{{ route('ssale')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sale</a></li>
							<li><a href="{{ route('sapprove')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approve</a></li>
							<li><a href="{{ route('sbillimport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>In The Completion of The Import</a></li>
							<li><a href="{{ route('sbroken')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Defective Product</a></li>
							<li><a href="{{ route('srefund')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Return</a></li>

                           

                            </li>	
                        </ul>
					</li>
                        

                    			    <!---- Stationary Sub Menu Information Menu ---->		
                                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Report
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('ssalereport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Disbursement Report</a></li>
							<li><a href="{{ route('simportreport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Import Report</a></li>
							<li><a href="{{ route('sbrokenreport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Report a Defective Product</a></li>
							<li><a href="{{ route('summaryreport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inventory Report</a></li>


                           

                            </li>	
                        </ul>
					</li>
                        
                        </ul>
					</li>	

                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Academic
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">
                            
						
                    			    <!---- Stationary Sub Menu Information Menu ---->		
                                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Setting
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('ac_Subject')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Subject</a></li>
							<li><a href="{{ route('ac_Level')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Level</a></li>
							<li><a href="{{ route('ac_ClassRoom')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Class Room</a></li>
                            </li>	
                        </ul>
					</li>

                        
                           			    <!---- Stationary Sub Menu Information Menu ---->		
                                           <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Information
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('ac_InfoAfter')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>After School</a></li>
							<li><a href="{{ route('ac_InfoIntrov')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Intervention</a></li>
							<li><a href="{{ route('homeclassroom')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Homeroom Teacher</a></li>
                            </li>	
                        </ul>
					</li>


                                        			    <!---- Stationary Sub Menu Information Menu ---->		
                                                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Report
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('ac_Rep_After')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>After School</a></li>
							<li><a href="{{ route('ac_Rep_Introv')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Intervention</a></li>

                            </li>	
                        </ul>
					</li>

                        </ul>
					</li>	

                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">
                            
						                                   			    <!---- Stationary Sub Menu Information Menu ---->		
                                                                           <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Setting
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('probrand')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Brand</a></li>
							<li><a href="{{ route('prounit')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Unit</a></li>
							<li><a href="{{ route('procategory')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Category</a></li>

                            </li>	
                        </ul>
					</li>


                    				                                   			    <!---- Stationary Sub Menu Information Menu ---->		
                                                                                       <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Information
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('proitem')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product</a></li>
							<li><a href="{{ route('proimport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Import</a></li>
							<li><a href="{{ route('prosale')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sale</a></li>
							<li><a href="{{ route('proapprove')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approve</a></li>
							<li><a href="{{ route('probillimport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>In The Completion of The Import</a></li>
							<li><a href="{{ route('probroken')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Broken</a></li>
							<li><a href="{{ route('prorefund')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CN Product</a></li>
							<li><a href="{{ route('proecommerce')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ecommerce</a></li>

                            </li>	
                        </ul>
					</li>

                               				                                   			    <!---- Stationary Sub Menu Information Menu ---->		
                                                                                                  <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Report
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
							<li><a href="{{ route('prosalereport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Disbursement Report</a></li>
							<li><a href="{{ route('proimportreport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Import Report</a></li>
							<li><a href="{{ route('probrokenreport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Report a Defective Product</a></li>
							<li><a href="{{ route('summaryreport')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inventory Report</a></li>
						

                            </li>	
                        </ul>
					</li>

                        
                        </ul>
					</li>	

                    <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>     Approve Form
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>
						<ul class="treeview-menu">
                            
						
                               				                                   			    <!---- Stationary Sub Menu Information Menu ---->		
                                                                                                  <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Waiting List
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
						<li><a href="{{ route('present_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Present Form</a></li>
							<li><a href="{{ route('leave_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Form</a></li>
							<li><a href="{{ route('request_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Request Form</a></li>
							<li><a href="{{ route('stationary_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statinary Form</a></li>
							<li><a href="{{ route('purchase_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Purchase Form</a></li>
                            <li><a href="{{ route('booking_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Booking Form</a></li>
							<li><a href="{{ route('cctv_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CCTV Form</a></li>


                            </li>	
                        </ul>

                                                       				                                   			    <!---- Stationary Sub Menu Information Menu ---->		

                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Approved
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
						<li><a href="{{ route('approve_present_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Present Form</a></li>
							<li><a href="{{ route('approve_leave_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Form</a></li>
							<li><a href="{{ route('approve_request_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Request Form</a></li>
							<li><a href="{{ route('approve_stationary_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statinary Form</a></li>
							<li><a href="{{ route('approve_purchase_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Purchase Form</a></li>
                            <li><a href="{{ route('approve_booking_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Booking Form</a></li>
							<li><a href="{{ route('approve_cctv_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CCTV Form</a></li>


                            </li>	
                        </ul>


                        
                        <li class="treeview">
						<a href="#">
                        <img src="{{asset('dashboard-assets/images/button.png')}}" alt="logo" width="15px">	<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Rejected
							<span class="pull-right-container">
                            <img src="{{asset('dashboard-assets/images/arrow-down-sign-to-navigate.png')}}" alt="logo" width="10px">
							</span>
						</a>

                        
						<ul class="treeview-menu">
                            
						<li><a href="{{ route('rej_present_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Present Form</a></li>
							<li><a href="{{ route('rej_leave_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Form</a></li>
							<li><a href="{{ route('rej_request_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Request Form</a></li>
							<li><a href="{{ route('rej_stationary_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statinary Form</a></li>
							<li><a href="{{ route('rej_purchase_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Purchase Form</a></li>
                            <li><a href="{{ route('rej_booking_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Booking Form</a></li>
							<li><a href="{{ route('rej_cctv_form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CCTV Form</a></li>


                            </li>	
                        </ul>
                        
                        </ul>
					</li>	

			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="#" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">View Full Report</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best CRM App here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">Techleet solutions</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>