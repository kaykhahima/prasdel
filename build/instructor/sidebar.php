   <ul class="sidebar navbar-nav">
       <li class="nav-item <?php if($pageTitle == 'Dashboard'){echo 'active';}?>">
           <a class="nav-link" href="dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
           </a>
       </li>
       <li class="nav-item <?php if($pageTitle == 'Courses'){echo 'active';}?>">
           <a class="nav-link" href="courses">
               <i class="fas fa-fw fa-book-open"></i>
               <span>Courses</span></a>
       </li>
       <li class="nav-item <?php if($pageTitle == 'Enrolled Students'){echo 'active';}?>">
           <a class="nav-link" href="enrolled-students">
               <i class="fas fa-fw fa-user-graduate"></i>
               <span>Enrolled Students</span></a>
       </li>
       <li class="nav-item <?php if($pageTitle == 'Profile Settings'){echo 'active';}?>">
           <a class="nav-link" href="settings">
               <i class="fas fa-fw fa-user"></i>
               <span>Profile</span></a>
       </li>
          <li class="nav-item <?php if($pageTitle == 'Change Password'){echo 'active';}?>">
           <a class="nav-link" href="change-password">
               <i class="fas fa-fw fa-user"></i>
               <span>Change Password</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="logout">
               <i class="fas fa-fw fa-sign-out-alt"></i>
               <span>Logout</span></a>
       </li>
   </ul>
