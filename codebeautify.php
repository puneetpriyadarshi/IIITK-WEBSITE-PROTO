﻿<? php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<title>base templates</title>';
echo '';
echo '<head>';
echo '';
echo '';
echo '';
echo '';
echo '<link rel="icon" href="iiitk-logo.webp" type="image/webp" sizes="16x16">';
echo '';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="icon" href="images/iiitk/iiitk-logo.webp" type="image/webp" sizes="16x16">';
echo '';
echo '<!-- bootstarp linkings-->';
echo '';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
echo '';
echo '';
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">';
echo '';
echo '<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>';
echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>';
echo '';
echo '<!--aos Library starting-->';
echo '<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />';
echo '<!--aos Library Ending-->';
echo '';
echo '<!--bootstarp linkings End-->';
echo '';
echo '<!--Custom css linkings-->';
echo '<link rel="stylesheet" type="text/css" href="assets/css/style.css">';
echo '<!-- Custom css linkings End-->';
echo '';
echo '<!--Font linking-->';
echo '<link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">';
echo '<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>';
echo '<!--Font linking End-->';
echo '';
echo '<!--Font awesome icon linking-->';
echo '';
echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">';
echo '';
echo '<!--Font awesome icon End-->';
echo '';
echo '';
echo '</head>';
echo '';
echo '<body onload="setTimeout(preLoader, 4000)">';
echo '';
echo '<div id="preloader">';
echo '<div class="preloader-container">';
echo '<img src="images/preloader/preloader.gif" class="preloader-gif" />';
echo '<p><u>';
echo 'WELCOME TO';
echo '</u>';
echo '</p>';
echo '<p>';
echo 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY, DESIGN AND MANUFACTURING, KURNOOL';
echo '</p>';
echo '</div>';
echo '</div>';
echo '';
echo '<!--Nav Bar Starting-->';
echo '';
echo '<nav>';
echo '<div class="logogsk">';
echo '<a href="index.html"><img src="images/iiitk/iiitk-logo.webp" width="50" height="50"></a>';
echo '</div>';
echo '<label for="btn" class="icon">';
echo '<span class="fa fa-bars"></span>';
echo '</label>';
echo '<input type="checkbox" id="btn">';
echo '<ul>';
echo '';
echo '<li><a class="nothing" href="index.html">Home</a></li>';
echo '<li>';
echo '<label for="btn-1" class="show">The Institute <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">The Institute</a>';
echo '<input type="checkbox" id="btn-1">';
echo '<ul>';
echo '<li><a href="about.html">About</a></li>';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-2" class="show">Director <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Director</a>';
echo '<input type="checkbox" id="btn-2">';
echo '<ul>';
echo '<li><a href="dir-profile.html">Director's Profile</a></li>';
echo '<li><a href="dir-message.html">Director's Message</a></li>';
echo '';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-3" class="show">Administration <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Administration</a>';
echo '<input type="checkbox" id="btn-3">';
echo '<ul>';
echo '<li><a href="visitor.html">Visitor</a></li>';
echo '<li><a href="https://iiitcouncil.com" target="_blank">IIIT Council</a></li>';
echo '<li><a href="act-statutes.html">Act and Statutes</a></li>';
echo '<li><a href="chairperson.html">Chairperson</a></li>';
echo '<li><a href="bog.html">Board of Governors</a></li>';
echo '<li><a href="finance-committee.html">Finance Committee</a></li>';
echo '<li><a href="bwc.html">Building and Work Committee</a></li>';
echo '<li><a href="senate.html">Senate</a></li>';
echo '<li><a href="admin-roles.html">Administrative Roles</a></li>';
echo '';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-4" class="show">Academics <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Academics</a>';
echo '<input type="checkbox" id="btn-4">';
echo '<ul>';
echo '<li>';
echo '<label for="btn-12" class="show">Departments <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Departments <i class="fa fa-angle-down" aria-hidden="true"></i></a>';
echo '<input type="checkbox" id="btn-12">';
echo '<ul>';
echo '';
echo '<li><a href="cse.html">Computer Science and Engineering</a></li>';
echo '<li><a href="dsc.html">Department of Science</a></li>';
echo '<li><a href="ece.html">Electronics and Communication Engineering</a></li>';
echo '<li><a href="mech.html">Mechanical Engineering</a></li>';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-13" class="show">Admissions <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Admissions <i class="fa fa-angle-down" aria-hidden="true"></i></a>';
echo '<input type="checkbox" id="btn-13">';
echo '<ul>';
echo '<li><a href="undergraduate.html">Undergraduate </a></li>';
echo '<li><a href="postgraduate.html">Postgraduate </a></li>';
echo '<li><a href="doctoral.html">Doctoral </a></li>';
echo '<li><a href="overview.html">Overview </a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a href="pdf/Academics/Academic calendar/Academic Calendar.pdf">Academic Calendar</a></li>';
echo '<li><a href="pdf/Academics/Holiday list/Holiday.pdf">Holiday List</a></li>';
echo '<li><a href="time-table.html">Time Table</a></li>';
echo '<li><a href="pdf/Academics/Fees/B-tech fee.pdf">B. Tech. Fee Structure(2019-2020)</a></li>';
echo '<li><a href="gold.html">Gold Medal Recipient</a></li>';
echo '<li>';
echo '<label for="btn-8" class="show">Circulars <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Circulars <i class="fa fa-angle-down" aria-hidden="true"></i></a>';
echo '<input type="checkbox" id="btn-8">';
echo '<ul>';
echo '<li><a href="pdf/Academics/Circulars/Provisional-certificate.pdf">Provisional Certificate </a></li>';
echo '<li><a href="pdf/Academics/Circulars/Medium-of-percent.pdf">Medium of Instruction </a></li>';
echo '<li><a href="pdf/Academics/Circulars/Cgpa-to-percentage.pdf">CGPA into Percentage </a></li>';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-10" class="show">Alumni <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Alumni <i class="fa fa-angle-down" aria-hidden="true"></i></a>';
echo '<input type="checkbox" id="btn-10">';
echo '<ul>';
echo '<li><a href="2019-passout.html">2019 Passouts </a></li>';
echo '';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-9" class="show">Application Forms for Different Purposes <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Application Forms for Different Purposes <i class="fa fa-angle-down" aria-hidden="true"></i></a>';
echo '<input type="checkbox" id="btn-9">';
echo '<ul>';
echo '';
echo '<li><a href="pdf/Academics/Admission form/EDUCATION VERIFICATION FORM.pdf">Edication Verification Form </a></li>';
echo '<li><a href="pdf/Academics/Admission form/CHANGE BRANCH.pdf"> Change of Branch </a></li>';
echo '<li><a href="pdf/Academics/Admission form/MAKE-UP EXAMINATION.pdf"> Form for Make-up Examination </a></li>';
echo '';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-11" class="show">Students <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Students <i class="fa fa-angle-down" aria-hidden="true"></i></a>';
echo '<input type="checkbox" id="btn-11">';
echo '<ul>';
echo '<li><a href="2016-admit.html">2016 Admitted Batch</a></li>';
echo '<li><a href="2017-admit.html">2017 Admitted Batch</a></li>';
echo '<li><a href="2018-admit.html">2018 Admitted Batch</a></li>';
echo '<li><a href="2019-admit.html">2019 Admitted Batch</a></li>';
echo '</ul>';
echo '</li>';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-5" class="show">Activities <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Activities</a>';
echo '<input type="checkbox" id="btn-5">';
echo '<ul>';
echo '<li><a href="workshop.html">Workshops</a></li>';
echo '<li><a href="placement-cell.html">Internship and Placement Cells </a></li>';
echo '<li><a href="newsletter.html">Institute Newsletter</a></li>';
echo '<li><a href="ssg.html">Social Service Group</a></li>';
echo '<li><a href="cultural-events.html">Cultural Events</a></li>';
echo '<li><a href="sports.html">Sports Activities</a></li>';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-6" class="show">Research <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Research</a>';
echo '<input type="checkbox" id="btn-6">';
echo '<ul>';
echo '<li><a href="research-project.html">Research Projects/Collaborations</a></li>';
echo '<li><a href="research-publication.html">Research Publications</a></li>';
echo '<li><a href="research-scholar.html">Research Scholars/Staffs</a></li>';
echo '</ul>';
echo '</li>';
echo '<li>';
echo '<label for="btn-7" class="show">Other Links <i class="fa fa-angle-down" aria-hidden="true"></i> </label>';
echo '<a href="">Other Links</a>';
echo '<input type="checkbox" id="btn-7">';
echo '<ul>';
echo '<li><a href="icc.html">ICC</a></li>';
echo '<li><a href="https://www.mhrd.gov.in/" target="_blank">MHRD</a></li>';
echo '<li><a href="https://josaa.nic.in/WebInfo/Page/Page?PageId=1&LangId=P" target="_blank">JOSAA</a></li>';
echo '<li><a href="logo-depiction.html">Depiction of our logo</a></li>';
echo '<li><a href="http://172.16.16.14:8081/" target="_blank">Central Library</a></li>';
echo '<li><a href="https://nad.gov.in/" target="_blank">National Academic Depository(NAD)</a></li>';
echo '<li><a href="carrer-opportunities.html">Carrer Opportunities</a></li>';
echo '<li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=927770" target="_blank">SB Collect</a></li>';
echo '<li><a href="anti-ragging.html">Anti Ragging</a></li>';
echo '<li><a href="achievements.html">Achievements</a></li>';
echo '<li><a href="press-release.html">Press Releases</a></li>';
echo '<li><a href="gallery.html">Gallery</a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a class="nothing" href="rti.html">RTI</a></li>';
echo '<li><a class="nothing" href="contact.html">Contact Us</a></li>';
echo '<li><a class="nothing" href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&hd=iiitk.ac.in&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank">IIITK MAIL</a></li>';
echo '</ul>';
echo '</nav>';
echo '';
echo '<script>';
echo '$('.icon').click(function() {';
echo '$('span').toggleClass("cancel");';
echo '});';
echo '</script>';
echo '<!--Nav Bar Ending-->';
echo '<!--Head introduction-->';
echo '';
echo '';
echo '';
echo '<section>';
echo '<div class="top-heading">';
echo '<div class="banner">';
echo '<div class="overlay">';
echo '<div class="heading" data-aos="fade-down">';
echo '<h1>';
echo 'INDIAN INSTITUTE OF INFORMATION TECHNOLOGY, DESIGN AND MANUFACTURING, KURNOOL';
echo '</h1>';
echo '</div>';
echo '<div class="container lower-heading" data-aos="fade-up">';
echo '<div class="row">';
echo '<div class="col-md-5 iiit">';
echo '<h2>ఇండియన్ ఇన్స్టిట్యూట్ ఆఫ్ ఇన్ఫర్మేషన్ టెక్నాలజీ, డిజైన్ అండ్ మాన్యుఫ్యాక్చరింగ్, కర్నూలు</h2>';
echo '</div>';
echo '<div class="col-md-2 container-logo">';
echo '<img class="logo" src="images/iiitk/iiitk-logo.webp">';
echo '</div>';
echo '<div class="col-md-5 iiit">';
echo '<h2>भारतीय सूचना प्रौद्योगिकी संस्थान, अभिकल्पना और विनिर्माण, कर्नूल</h2>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '';
echo '';
echo '<!--Head introduction Ending-->';
echo '';
echo '';
echo '<!-- Main content section Starting-->';
echo '<main>';
echo '';
echo '<div class="main-content">';
echo '<h2 class="content-heading" data-aos="fade-down">Heading</h2>';
echo '';
echo '<p>';
echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis lacus maximus, gravida ligula scelerisque, condimentum felis. Aenean at orci massa. Aliquam accumsan eget mi ut tincidunt. Donec quis ultricies sapien, a interdum libero.';
echo 'Duis enim';
echo 'mauris, varius sed orci sit amet, ornare fermentum nisi. Fusce facilisis, odio eget dignissim maximus, nulla arcu faucibus velit, non volutpat orci orci nec augue. Vivamus blandit purus diam. Curabitur id felis mi. Sed vel dolor ac lectus';
echo 'dapibus dignissim. Quisque rutrum eros eu nulla faucibus, et laoreet neque tempus. Sed ultricies odio ac pellentesque fermentum. Proin pharetra gravida libero, ut feugiat purus pretium at. Sed molestie, eros a tincidunt semper, risus elit';
echo 'scelerisque augue, congue tempor nisi tortor sed nisi. Mauris tempor arcu a porttitor tristique. Vivamus condimentum fermentum elit vitae efficitur. Etiam arcu ante, iaculis vitae egestas molestie, viverra placerat justo. Quisque felis';
echo 'ex, convallis id fermentum eget, condimentum sit amet lectus. Mauris bibendum et lorem sed tincidunt. Curabitur ac felis posuere, convallis quam at, semper turpis. Aliquam fringilla luctus massa, non rutrum ligula vestibulum vel. Maecenas';
echo 'convallis arcu vitae elit lacinia vehicula. Duis ut tellus mi. Donec ut rhoncus metus, placerat dictum neque. Maecenas ut risus ac mi rutrum consequat at eu erat. Integer id luctus neque. Proin semper hendrerit tempus. Sed elementum, nisi';
echo 'eget pellentesque suscipit, orci mauris sollicitudin tellus, quis vulputate leo mauris elementum neque. Phasellus nec fermentum sem. Sed tempus ante sed lacus imperdiet faucibus. Sed eget sollicitudin libero, ut venenatis magna. Integer';
echo 'facilisis sagittis magna eu mattis. Aliquam ante nulla, suscipit a nisl ac, aliquam tristique nisl. Etiam malesuada purus in leo ultricies placerat. Nulla consequat dapibus ligula quis pellentesque. Aliquam blandit, nibh id iaculis tincidunt,';
echo 'libero mi auctor ex, nec viverra tortor urna eu felis. Pellentesque sodales semper sagittis. Pellentesque varius felis in quam euismod consequat. Donec ultricies ante at ligula faucibus, sit amet suscipit ligula luctus. Vestibulum ante';
echo 'ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut ultrices libero eu elit mattis vulputate. Duis congue pulvinar dolor efficitur pulvinar. Duis tristique commodo enim ullamcorper fringilla. Class aptent taciti';
echo 'sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur id tincidunt augue. Quisque id dictum nunc. Morbi aliquam sapien at lacus tempus tincidunt. Curabitur eu suscipit justo. Etiam feugiat erat non aliquam commodo.';
echo 'Nullam ac laoreet massa, id malesuada nisl. Aenean nisl ligula, commodo a nulla vel, tincidunt vehicula lorem. Phasellus nec magna vel lorem porttitor interdum nec in elit. Integer ut velit lacinia, iaculis enim id, imperdiet augue. Lorem';
echo 'ipsum dolor sit amet, consectetur adipiscing elit. Duis quis nunc vulputate, gravida ex non, ullamcorper nisl. Suspendisse at velit quis eros tincidunt ornare.';
echo '</p>';
echo '</div>';
echo '';
echo '</main>';
echo '';
echo '';
echo '';
echo '<!-- Main content section Ending-->';
echo '';
echo '<footer data-aos="fade-up">';
echo '';
echo '<div class="footer-container" id="footer-section">';
echo '<div class="colour">';
echo '';
echo '';
echo '';
echo '<h2>Address</h2>';
echo '<p>';
echo 'Jagannathagattu Hill, Kurnool- 518 007, Andhra Pradesh, India.<br /> Phone: +91 - 8518 289114<br /> Fax: +91 - 8518 289127<br /> Email: office@iiitk.ac.in<br /> Work Hours: 9.00 AM to 5.45 PM<br />';
echo '</p>';
echo '';
echo '<iframe';
echo 'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d807.2173752198663!2d78.03587280561256!3d15.762002339033062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52358ddcfb659cb9!2sIIITDM%20Kurnool!5e0!3m2!1sen!2sin!4v1598777206384!5m2!1sen!2sin"';
echo 'width="95%" height="300px" frameborder="0" style="border:0; border-radius: 4px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
echo '';
echo '</div>';
echo '';
echo '';
echo '</div>';
echo '';
echo '<div class="down-links">';
echo '';
echo '<a href="">Director</a>';
echo '<a href="">Gallery</a>';
echo '<a href="">Privacy Policy</a>';
echo '<a href="">Terms & Conditions</a>';
echo '<a href="">Contact us</a>';
echo '<a href="">About us</a>';
echo '';
echo '</div>';
echo '';
echo '';
echo '';
echo '<div class="credits">';
echo '';
echo '<div class="social-links">';
echo '';
echo '<a target="_blank" href="https://www.facebook.com/Iiitdm-Kurnool-211133533006549/"><i class="fab fa-facebook-f socialplugs" aria-hidden="true"></i></a>';
echo '<a target="_blank" href="https://twitter.com/iiitdmkurnool"><i class="fab fa-twitter socialplugs" aria-hidden="true"></i></a>';
echo '<a target="_blank" href="https://www.youtube.com/channel/UCXUm4xE1QB6jkBMRBnmtguw"><i class="fab fa-youtube socialplugs" aria-hidden="true"></i></a>';
echo '</div>';
echo '';
echo '<p>Copyright © 2019, Indian Institute of Information Technology, Design and Manufacturing, Kurnool. All rights reserved.';
echo '</p>';
echo '</div>';
echo '';
echo '</footer>';
echo '<!--aos lib js star-->';
echo '<script src="https://unpkg.com/aos@next/dist/aos.js"></script>';
echo '<!--aos lib js end-->';
echo '<script>';
echo 'AOS.init({';
echo 'offset: 200,';
echo 'duration: 1000';
echo '});';
echo '</script>';
echo '<!-- scroll to top-->';
echo '<script src="https://unpkg.com/vanilla-back-to-top@7.2.1/dist/vanilla-back-to-top.min.js"></script>';
echo '<script>';
echo 'addBackToTop({';
echo 'scrollDuration: 300,';
echo 'diameter: 45,';
echo 'backgroundColor: '#2541B2',';
echo 'textColor: '#fff',';
echo 'zIndex: 2';
echo '})';
echo '</script>';
echo '<!-- scroll to top End-->';
echo '<script src="assets/js/main.js"></script>';
echo '</body>';
echo '';
echo '</html>';
echo '';
?>