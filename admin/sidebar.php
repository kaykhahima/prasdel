   <ul class="sidebar navbar-nav">
       <li class="nav-item <?php if($pageTitle == 'Dashboard'){echo 'active';}?>">
           <a class="nav-link" href="dashboard">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span>
           </a>
       </li>
       <li class="nav-item <?php if($pageTitle == 'Organisations'){echo 'active';}?>">
           <a class="nav-link" href="organisations">
               <i class="fas fa-fw fa-city"></i>
               <span>Organisations</span></a>
       </li>
       <li class="nav-item <?php if($pageTitle == 'Institutions'){echo 'active';}?>">
           <a class="nav-link" href="institutions">
               <i class="fas fa-fw fa-university"></i>
               <span>Institutions</span></a>
       </li>
       <li class="nav-item dropdown <?php if($pageTitle == 'Home Page'
                                          || $pageTitle == 'About Us Page'
                                          || $pageTitle == 'Contact Page'
                                          || $pageTitle == 'Testimonials'
                                          || $pageTitle == 'Privacy Policy'
                                          || $pageTitle == 'FAQs'
                                            )
{echo 'active';}?>">
           <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-file"></i>
               <span>Pages</span>
           </a>
           <div class="dropdown-menu" aria-labelledby="pagesDropdown">
               <a class="dropdown-item <?php if($pageTitle == 'Home Page'){echo 'active';}?>" href="home"><i class="fas fa-fw fa-angle-right"></i> Home Page</a>
               <a class="dropdown-item <?php if($pageTitle == 'About Us Page'){echo 'active';}?>" href="about"><i class="fas fa-fw fa-angle-right"></i> About Us</a>
               <a class="dropdown-item <?php if($pageTitle == 'Contact Page'){echo 'active';}?>" href="contact"><i class="fas fa-fw fa-angle-right"></i> Contact</a>
               <a class="dropdown-item <?php if($pageTitle == 'Testimonials'){echo 'active';}?>" href="testimonials"><i class="fas fa-fw fa-angle-right"></i> Testimonials</a>
               <a class="dropdown-item <?php if($pageTitle == 'Privacy Policy'){echo 'active';}?>" href="privacy-policy"><i class="fas fa-fw fa-angle-right"></i> Privacy Policy</a>
               <a class="dropdown-item <?php if($pageTitle == 'FAQs'){echo 'active';}?>" href="faqs"><i class="fas fa-fw fa-angle-right"></i> FAQs</a>
           </div>
       </li>
       <li class="nav-item <?php if($pageTitle == 'Profile Settings'){echo 'active';}?>">
           <a class="nav-link" href="settings">
               <i class="fas fa-fw fa-cog"></i>
               <span>Settings</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="logout">
               <i class="fas fa-fw fa-sign-out-alt"></i>
               <span>Logout</span></a>
       </li>
   </ul>
