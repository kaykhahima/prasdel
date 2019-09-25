 <?php include 'header.php';?>
 <!-- Header Section End -->

 <!-- Page Header Start -->
 <div class="page-header">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="inner-header">
                     <h3>Contact Us</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Contact Section Start -->
 <section id="contact" class="section">
     <div class="contact-form">
         <div class="container">
             <div class="row contact-form-area">
                 <div class="col-md-12 col-lg-6 col-sm-12">
                     <div class="contact-block">
                         <h2>Get in touch with us</h2>
                         <form id="contactForm">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                                         <div class="help-block with-errors"></div>
                                     </div>
                                     <div class="submit-button">
                                         <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                         <div id="msgSubmit" class="h3 text-center hidden"></div>
                                         <div class="clearfix"></div>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="col-md-12 col-lg-6 col-sm-12">
                     <div class="contact-right-area wow fadeIn">
                         <h2>Contact Address</h2>
                         <div class="contact-info">
                             <div class="single-contact">
                                 <div class="contact-icon">
                                     <i class="lni-map-marker"></i>
                                 </div>
                                 <p>Main Office: NO.22-23 Street Name- City,Country <br> Customer Center: NO.130-45 Streen Name- City, Country</p>
                             </div>
                             <div class="single-contact">
                                 <div class="contact-icon">
                                     <i class="lni-envelope"></i>
                                 </div>
                                 <p><a href="mailto:hello@tom.com">Customer Support: info@mail.com Technical Support: </a></p>
                                 <p><a href="mailto:tomsaulnier@gmail.com">support@mail.com</a></p>
                             </div>
                             <div class="single-contact">
                                 <div class="contact-icon">
                                     <i class="lni-phone-handset"></i>
                                 </div>
                                 <p><a href="#">Main Office: +880 123 456 789</a></p>
                                 <p><a href="#">Customer Supprort: +880 123 456 789</a></p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-12">
                     <div id="conatiner-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004080.414077152!2d-104.65693512785852!3d37.27559283318413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1530855407925" allowfullscreen=""></iframe>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Contact Section End -->

 <!-- Footer Section Start -->
 <?php include 'footer.php';?>
