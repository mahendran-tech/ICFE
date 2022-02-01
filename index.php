<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawsome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- jqquery cdn -->
      <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script src="style.js"></script> 
    <!-- css file link -->
    <link rel="stylesheet" href="style.css">
    <style>
       @media only screen and (min-width:768)
            {
        .dropdown:hover .dropdown-menu{display:block;}
            } 
    </style>
    <title>ICEF</title>
</head>
<body>
 <div class="container-fluid">
      <div class="main-container">
      <section class="menu-bar">
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top sub-container">
    <div
      class="container d-flex justify-content-center justify-content-md-between"
    >
      <div class="contact-info d-flex align-items-center">
        <span class="d-flex align-items-center ms-4 text-white"
          ><i class="fas fa-phone-volume"></i> &nbsp<small class="text-white"
            >call us: 91-76694 09022</small
          ></span
        >
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <span class="d-flex align-items-center ms-4 text-white"
          ><i class="fab fa-whatsapp"></i>&nbsp
          <span class="fs-10 text-white">+91-73054 77495</span></span
        >
        <span class="d-flex align-items-center ms-4 text-white"
          ><i class="far fa-envelope"></i> &nbsp<span class="fs-6 text-white">
            info@icrmdr.com</span
          ></span
        >
        <button class="btn btn-orange d-flex align-items-center ms-4">
          <i class="fas fa-laptop"></i>Virtual Registration
        </button>
      </div>
    </div>
  </div>
  <nav
    class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
    style="margin-top: 48px; height: 70px"
  >
    <div class="container menu-bar">
      <a class="navbar-brand" href="#"
        ><img src="./img/Logoicef.jpg" alt="">
        <a class="hero navbar-brand d-block">
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse align-self-end"
        id="navbarNavDropdown"
      >
        <ul class="navbar-nav ms-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle "
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false" >
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="Aboutus.php">ABOUT ICRTMDR</a>
              </li>
              <li>
                <a class="dropdown-item" href="sample.php">Another action</a>
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink1"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Speaker
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Registration
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink2"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Journal
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink3"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Awards
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Contact
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
      <!-- content -->
 <div class="container-fluid bg-contatent ">
      <div class="row ">
<div class="container">
  <div class="info-frontpage">
  <h4>4th International Conferrence</h4>
  <p class="front-font">Recent Trends In Multi-Disciplinary Research</p>
  <h5>Organized By:</h5>
  <h5>Institute For Engineering Research and Publication(IFERP)</h5>
    <div class=" ">

      <button class="btn btn-success fw-bold p-2 px-4 my-3">23rd & 24th Dec-2021 | MALDIVES</button>
</div>
  </div>
 
 
</div>
</div>
      </div>
      
      <!-- end content -->

       <!-- center of content container -->
           <div class="container bg-light cont-al" style="height:auto; ">
                    <div class="mb-4">

                      <h3 class="text-center fw-bold mb-2 text1-dark">Recent Trends In Multidisciplinary Research & Practice</h3>
                    </div>

                <div class="container-fluid d-flex align-items-center justify-content-around row bd-highlight mb-3  mx-auto" aria-hidden="true" ">
                     
                       <div class="mb-auto p-2 bd-highlight col-sm-12 col-md-6 col-lg-3">
                          <div class="cont-border ms-5" >
                            <p><i class="fas fa-calendar-alt fa-2x mx-2"></i><span class="fw-bold"> Date</span></p>
                            <p class="text1-dark fw-bold fs-self">23rd & 24 Dec 2021</p>
                          </div>
                        </div>
                       <div class="p-2 bd-highlight col-sm-12 col-md-6 col-lg-3">
                        <div class="cont-border" >
                          <p><i class="fas fa-portrait fa-2x mx-2"></i><span class="fw-bold">Commitee Number</span></p>
                          <p class="text1-dark fw-bold fs-self">Apply to become member</p>
                         </div>
                       </div>
                       <div class="p-2 bd-highlight col-sm-12 col-md-6 col-lg-3 "> 
                         <div class="cont-border" >
                            <p><i class="far fa-address-card fa-2x mx-2"></i><span class="fw-bold">Research Assistance
                            </span> </p>
                             <p class="text1-dark fw-bold fs-self">Apply For Guidance</p>
                          </div>
                      </div>
                       <div class="p-2 bd-highlight col-sm-12 col-md-6 col-lg-3">
                          <div class="cont-border-no">
                              <p> <i class="fas fa-cloud-upload-alt fa-2x mx-2"></i> <span class="fw-bold">Upload</span></p>
                              <p class="text1-dark fw-bold fs-self">Submit Abstract</p>
                          </div>
                      </div>
                     
                </div>
                <div class="d-grid gap-2  justify-content-md-center ">
                  <button class="btn btn-design btn-pos">Resigter</button>
                </div>  
           </div>
                
       <!-- end date container -->

       <!--  conferrance information -->
         <div class=" container margin-t" style="margin-top:300px" height="auto">
         <h2 class="text-dark text-center">Conferrance Information</h2>
            <div class="row">
              <div class="col-md-12 col-lg-6">
                   <div class="card">
                     <div class="card-title"></div>
                     <div class="card-body">
                     <p class="text-dark">
                     The central motive of the 4th International Conference on Recent Trends

                      in Multi-Disciplinary Research (ICRTMDR-21), is to address challenges
                      associated with the effective dispensation of all the latest knowledge
                        being generated in the fields of engineering and technology.
                     </p>
                     <p class="text-dark">
                     With technology progressing at an accelerated pace, young scholars,
                      students, and researchers in the early stages of their career are finding

                      it harder than ever to keep up. This conference aims at helping them
                      get up-to-speed with all the latest advancements.
                    </p>
                     </div>
                     <div class="card-img d-flex justify-content-around">

                       <div>
                         <p class="ms-5 fw-bold text-blue">Organized by</p>
                         <img src="./img/logo2.png" alt="" width="150px" height="100" style="margin-left:50px;">
                         <h5 class="text1-dark ms-5"> IFERP</h5>
                       </div>
                       <div>
                         <p class=" fw-bold text-blue">GO-Host by</p>
                         <img src="./img/host-logo 1" alt="" width="100px" height="100px"> 
                         <h6 class="text1-dark"> MI College, Maldives</h6>
                       </div>
                     </div>
                   </div>
              </div>
          
                  <div class="col-md-12 col-lg-6">
                    <div class="card">
                      <div class="card-title">
        
                      </div>
                      <div class="card-body">
                        <img src="./img/Rectangle 48.png" alt="img" width="100%" height="400px">
                      </div>
                    </div>
                  </div>
                  </div>
          </div>   
<!-- contant for publication -->
              <div class="container margin-val" >
                <div class="row">
                  <div class="col-12">
                    <h2 class="text-dark text-center my-4">Proceedings & Publications</h2>
                    <p class="text-dark text-center mt-2">All the accepted papers of the “4th International Conference on Recent Trends in</p>
                    <p class="text-dark text-center mt-0">Multi-Disciplinary Research (ICRTMDR-21) ” will be published by IFERP in a proceeding book with <span class="text-success fw-bold">ISBN “978-93-92105-26-5”</span></p>
                    
                  </div>
                </div>
              </div>
               <!-- Proceedings & Publications -->
              <div class="container">

                     <div class="row col-sm-12  justify-content-evenly align-item-center">
                                          <div class="col-md-2 text-center img-pad">
                                              <img src="./img/Rectangle 12.png" alt="iferp" style="width: 195px !important;border: 1px solid #e5e5e5;">
                                          </div>
                                          <div class="col-md-2 text-center img-pad">
                                             <img src="./img/scopus 1.png" alt="Image"
                                              style="width:180px !important;padding: 16px;border: 1px solid #e5e5e5;">
                                          </div>
                                          <div class="col-md-2 text-center img-pad">
                                              <img src="./img/ei compendix 1.png" alt="Image" style="width: 180px !important;height:100px !important;  border: 1px solid #e5e5e5;">
                                          </div>
                                          <div class="col-md-2 text-center img-pad">
                                              <img src="./img/google-scholar 1.png" alt="Image" style="width:180px !important;border: 1px solid #e5e5e5;">
                                          </div>
                                          <div class="col-md-2 text-center img-pad">
                                              <img src="./img/Rectangle 16.png" alt="Image" style="width:180px !important;border: 1px solid #e5e5e5;">
                                          </div>
                        </div>
             </div>
       <!-- text -->
       <!-- speaker content -->
       <div class="container">
              <h2 class="text-center text-dark">Keynote Speakers</h2>
              <div class="row d-flex justify-content-around">
                    <div class="col-lg-8">
                      <div class="row">

                     
                <!-- first card -->
                   <div class="col-md-12 col-lg-6 mb-1 d-flex text-center justify-content-center">
                         <div class="container1">
                            <div class="card-spk">
                              <div class="top-spk"></div>
                              <div class="top-left-spk"></div>
                              <div class="top-right-spk"></div>
                              <div class="bot-right-spk"></div>
                              <div class="bot-but-spk"></div>
                                   <img src="./img/Sigamoney 1.png" alt="">
                                <h5>Dr. Sigamoney Naicker</h5>
                                <h5 class="text-blue">Chief Director Inclusive</h5>
                                  <h4 class="text-blue">Education</h4>
                                  <p class="font-des">Western Cape Education Department,</p>
                                  <p class="font-des">South Africa</p>
                            </div>
                      </div>
                      
                   </div>
                  <!-- first card end -->
                  <!-- second card  -->
                  <div class="col-md-12 col-lg-6 mb-1  d-flex text-center justify-content-center">
                         <div class="container2">
                            <div class="card-spk">
                              <div class="top-spk"></div>
                              <div class="top-left-spk"></div>
                              <div class="top-right-spk"></div>
                              <div class="bot-right-spk"></div>
                              <div class="bot-but-spk"></div>
                                   <img src="./img/Ellipse 1.png" alt="">
                                <h5>Prof. Yehia Abdel Aziz</h5>
                                <h5 class="text-blue">Dynamics and Control </h5>
                                  <h4 class="text-blue">Education</h4>
                                  <p class="font-des">Western Cape Education Department,</p>
                                  <p class="font-des">South Africa</p>
                            </div>
                      </div>
                      
                   </div>
                  <!-- second card end -->
            
                  </div>
                    </div>
                </div>  
       </div> 
              <!-- single card -->
              <div class="container">
              <h2 class="text-center text-dark">Guest of Honor</h2>
                <div class="row d-flex justify-content-around">


                <div class="col-md-12 col-lg-6 mb-1 text-center d-flex justify-content-around ">
                         <div class="container3">
                            <div class="card-spk">
                              <div class="top-spk"></div>
                              <div class="top-left-spk"></div>
                              <div class="top-right-spk"></div>
                              <div class="bot-right-spk"></div>
                              <div class="bot-but-spk"></div>
                                   <img src="./img/Ellipse 2.png" alt="">
                               <div class="font-des"></div>
                                   <h5 class="fw-bold">Dr. Sigamoney Naicker</h5>
                                <h5 class="text-blue">Chief Director Inclusive</h5>
                                  <h4 class="text-blue">Education</h4>
                                  <p class="font-des">Western Cape Education Department,</p>
                                  <p class="font-des">South Africa</p>
                            </div>
                      </div>
                   </div>
                </div>
              </div>
              <!-- card secont column -->
        <div class="container">
        <div class="row d-flex justify-content-around">
                    <div class="col-lg-8">
                      <div class="row">

                     
                <!-- first card -->
                   <div class="col-md-12 col-lg-6 mb-1 d-flex text-center justify-content-center">
                         <div class="container1">
                            <div class="card-spk">
                              <div class="top-spk"></div>
                              <div class="top-left-spk"></div>
                              <div class="top-right-spk"></div>
                              <div class="bot-right-spk"></div>
                              <div class="bot-but-spk"></div>
                                   <img src="./img/Sigamoney 1.png" alt="">
                                <h5>Dr. Sigamoney Naicker</h5>
                                <h5 class="text-blue">Chief Director Inclusive</h5>
                                  <h4 class="text-blue">Education</h4>
                                  <p class="font-des">Western Cape Education Department,</p>
                                  <p class="font-des">South Africa</p>
                            </div>
                      </div>
                      
                   </div>
                  <!-- first card end -->
                  <!-- second card  -->
                  <div class="col-md-12 col-lg-6 mb-1  d-flex text-center justify-content-center">
                         <div class="container2">
                            <div class="card-spk">
                              <div class="top-spk"></div>
                              <div class="top-left-spk"></div>
                              <div class="top-right-spk"></div>
                              <div class="bot-right-spk"></div>
                              <div class="bot-but-spk"></div>
                                   <img src="./img/Ellipse 1.png" alt="">
                                <h5>Prof. Yehia Abdel Aziz</h5>
                                <h5 class="text-blue">Dynamics and Control </h5>
                                  <h4 class="text-blue">Education</h4>
                                  <p class="font-des">Western Cape Education Department,</p>
                                  <p class="font-des">South Africa</p>
                            </div>
                      </div>
                      
                   </div>
                  <!-- second card end -->
            
                  </div>
                    </div>
                </div> 
        </div>
              <!--end card secont column  -->
       <

             <!-- impartent date -->
             <div class="container">
             <h2 class="text-dark text-center">Important Dates</h2>
               <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="text-center date-design">
                        <p class="text-brown">Early Bird Registration</p>
                        <p class="text-brown"> date</p>
                           <p class="text-green-color"> <i class="fas fa-calendar-alt"></i> <span class="text-green-color">16 Nov 2021</span></p>    
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                     <div class="text-center date-design">
                        <p class="text-brown">Abstract Submission</p>
                        <p class="text-brown"> date</p>
                           <p class="text-green-color"> <i class="fas fa-calendar-alt"></i>  <span class="text-green-color">19 Dec 2021</span></p>    
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">

                    <div class="text-center date-design">
                        <p class="text-brown">Full Paper Submission</p>
                        <p class="text-brown"> date</p>
                           <p class="text-green-color"> <i class="fas fa-calendar-alt"></i>  <span class="text-green-color">20 Dec 2021</span></p>    
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="text-center date-design">
                        <p class="text-brown">Registration Deadline </p>
                        <p class="text-brown"> date</p>
                           <p class="text-green-color"> <i class="fas fa-calendar-alt"></i>  <span class="text-green-color">20 Dec 2021</span></p>    
                      

               </div>
             </div>
             <!-- end impartent date  -->
        <!-- News Letter -->
        <section id="newsletter">
        <div class="container">
               <h2  class="text-dark text-center">Newsletter</h2>
              <p class="text-dark text-center p-0"> Subscribe to our newsletter and get all latest updates about our events and conferrences</p>
               <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-12 text-dark d-grid gap-2  justify-content-lg-center-x ">
               
                     <div class="input-group mb-3  media-adjest">
                         <input type="text" class="form-control" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                           <button class="btn btn-design btn-col text-white" type="button" id="button-addon2">Subscribe</button>
                    </div>
          </div>

               </div>
        </div>
        </section>
           <!-- End News letter -->



        <!-- Conference Cheif Members -->

    <div class="container mb-5">
        <h2  class="text-dark text-center">Conference Cheif Members</h2>
          <div class="row">
            <!-- first card -->
            <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                      <div class="card card-d" style="width: 18rem;">
                      <img src="./img/ahmed 1.png" class="card-img-top" alt="img">
                      <div class="card-body card-body-d">
                        <h5 class="card-title text-dark">Dr. Akbar Ahmad</h5>
                        <p class="card-text"> <h5 class="text-blue">Conference Chair</h5>
                        <h4 class="text-blue ">Principal Dean,</h4>
                        <p class="text-brown">MI College, Maldives</p>
                      </p>
                    </div>
                    </div>
                    </div>
                    <!-- end first card -->
                     <!-- second card -->
                     <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                      <div class="card card-d" style="width: 18rem;">
                      <img src="./img/ahmed 1 (1).png" class="card-img-top" alt="img">
                      <div class="card-body card-body-d">
                        <h5 class="card-title text-dark">Mr. Mohamed Haleem</h5>
                        <p class="card-text"> <h5 class="text-blue">Conference Convener</h5>
                        <h4 class="text-blue">CEO</h4>
                        <p class="text-brown">MI College, Maldives</p>
                      </p>
                    </div>
                    </div>
                    </div>
                    <!-- end second card -->
                      <!-- thired card -->
                      <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                      <div class="card card-d" style="width: 18rem;">
                      <img src="./img/ahmed 1.png" class="card-img-top" alt="img">
                      <div class="card-body card-body-d">
                        <h5 class="card-title text-dark">Dr. Akbar Ahmad</h5>
                        <p class="card-text"> <h5 class="text-blue">Conference Chair</h5>
                        <h4 class="text-blue">Principal Dean,</h4>
                        <p class="text-brown">MI College, Maldives</p>
                      </p>
                    </div>
                    </div>
                    </div>
                    <!-- end thired card -->
         </div>
         <!-- second row card -->
        
         <div class="row">
            <!-- first card -->
                  <div class="col-sm-12 col-md-6 col-lg-4 text-center ">
                      <div class="card card-d" style="width: 18rem;">
                      <img src="./img/ahmed 1 (2).png" class="card-img-top" alt="img">
                         <div class="card-body card-body-d">
                        <h5 class="card-title text-dark">Mr. Mony Murugadhas</h5>
                        <p class="card-text"> <h5 class="text-blue">Conference Co Chair</h5>
                        <h4 class="text-blue">Director Admin,</h4>
                        <p class="text-brown">MI College, Maldives</p>
                      </p>
                      
                          </div>
                    </div>
                    </div>
                 
                    <!-- end first card -->
                     <!-- second card -->
                     <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                     <div class="card card-d" style="width: 18rem;">
                      <img src="./img/ahmed 1 (3).png" class="card-img-top" alt="img">
                      <div class="card-body card-body-d">
                        <h5 class="card-title text-dark">AMs. Lamya Abdul Hadhee</h5>
                        <p class="card-text"> <h5 class="text-blue">Conference Co Convener</h5>
                        <h5 class="text-blue">Rector</h5>
                        <p class="text-brown">MI College, Maldives</p>
                      </p>
                    </div>
                    </div>
                    </div>
                    <!-- end second card -->
                      <!-- thired card -->
                      <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                      <div class="card card-d" style="width: 18rem;">
                      <img src="./img/ahmed 1 (4).png" class="card-img-top" alt="img">
                      <div class="card-body card-body-d">
                        <h5 class="card-title text-dark">Ms. Maneesha</h5>
                        <p class="card-text"> <h5 class="text-blue">Conference Patron</h5>
                        <h4 class="text-blue">Organizing Secretary</h4>
                        <p class="text-brown">MI College, Maldives</p>
                      </p>
                    </div>
                    </div>
                    </div>
                    <!-- end thired card -->
         </div>
          <!--end second row card -->

  </div>

        <!--End Conference Cheif Members -->  

        <!-- =========Our associate======== -->
        <div class="container mb-5">
        <h2  class="text-dark text-center">Our Associates</h2>
          <div class="row">
            <!--  -->
             <div class="col-sm-12 col-md-6 col-lg-3 associate-img">
                <div class="">
                   <img src="./img/scopus (1) 1.png" alt="">
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 associate-img">
             <div class="">
                   <img src="./img/img2.png" alt="img">
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 associate-img">
             <div class="">
                   <img src="./img/spring 1.png" alt="">
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 associate-img">
             <div class="">
                   <img src="./img/ica 1.png" alt="">
                </div>
             </div>
                 
          </div>
        </div>
  <!-- =========End Our associate======== -->

  <!-- ====== Essential download page =====-->
     <div class="container mb-5">
     <h2  class="text-dark text-center">Essential Downloads</h2>
         <div class="row d-flex justify-content-around  ">
           <div class="col-lg-9">
             <div class="row g-4 text-center">

             
             <div class="col-md-6 col-sm-12 col-lg-4  ">
                  <div class=" card-design">
                    <div class="card-body-design">
                    <h4 class="text1-dark fw-bold">Conference Poster</h4>
                        <button class="btn-1  btn-icon">
                          <span>Download</span><i class="bi bi-download fw-bold bi-custom"></i>
                        
                        </button>
                    </div>
                   

                  </div>
             </div>
             <!-- second download -->
             <div class="col-md-6 col-sm-12 col-lg-4">
                  <div class="card-design">
                    <div class="card-body-design">
                    <h4 class="text1-dark fw-bold">Conference Brochure</h4>
                        <button class="btn-1  btn-icon">
                          <span>Download</span><i class="bi bi-download fw-bold bi-custom"></i>
                        </button>
                    </div>
                   

                  </div>
             </div>
             <!-- thired down -->
             <div class="col-md-6 col-sm-12 col-lg-4">
                  <div class="card-design">
                    <div class="card-body-design">
                    <h4 class="text1-dark">Conference PPT</h4>
                        <button class="btn-1  btn-icon">
                          <span>Download</span><i class="bi bi-download fw-bold bi-custom"></i>
                        </button>
                    </div>
                   

                  </div>
             </div>
      </div>
         <!-- =====row 2 for download page -->
            <div class="row mt-4 g-4">
              <div class="col-md-6 col-sm-12 col-lg-4">
                  <div class="card-design">
                    <div class="card-body-design">
                    <h4 class="text1-dark fw-bold">Sample Abstract</h4>
                        <button class="btn-1  btn-icon">
                          <span>Download</span><i class="bi bi-download fw-bold bi-custom"></i>
                        </button>
                    </div>
                   

                  </div>
             </div>
                  <!-- content 2 -->
                  <div class="col-md-6 col-sm-12 col-lg-4">
                  <div class="card-design">
                    <div class="card-body-design">
                    <h4 class="text1-dark fw-bold">Registration Form</h4>
                        <button class="btn-1  btn-icon">
                          <span>Download</span><i class="bi bi-download fw-bold bi-custom"></i>
                        </button>
                    </div>
                   

                  </div>
             </div>
             <!-- content6 -->
             <div class="col-md-6 col-sm-12 col-lg-4">
                  <div class="card-design essential-design">
                    <div class="card-body-design">
                    <h4 class="card-title text1-dark fw-bold">Sample Full Paper</h4>
                        <button class="btn-1  btn-icon">
                          <span>Download</span><i class="bi bi-download fw-bold bi-custom"></i>
                        </button>
                    </div>
                   

                  </div>
             </div>




             </div>
           </div>
             <!-- end row -->
            </div>
     </div>

  <!-- ====== end download page =====-->
        

  <!-- =========venu content========== -->
  <div class="container">
  <h2  class="text-dark text-center p-0">Our Associates</h2>
  <p class="text-dark text-center p-0">The Maldives officially the Republic of Maldives, is a small island nation in South Asia, situated in the Arabian Sea
of the Indian Ocean. It lies southwest of Sri Lanka and India, about 700 kilometres (430 mi) from the Asian continent's mainland.

The chain of 26 atolls stretches from Ihavandhippolhu Atoll in the north to Addu Atoll in the south to the equator</p>
     <div class="row">
     <div class="col-md-6 col-sm-12 col-lg-3 p-0">
          <div class="card card-img-pos">
             <div class="card-body ">
                <img src="./img/Rectangle 19.png" alt="" class="card-img">
             </div>
          </div>   
     </div>
     <div class="col-md-6 col-sm-12 col-lg-3">
          <div class="card card-img-pos">
             <div class="card-body ">
                <img src="./img/Rectangle 19 (2).png" alt="" class="card-img">
             </div>
          </div>   
     </div>
     <div class="col-md-6 col-sm-12 col-lg-3">
          <div class="card card-img-pos">
             <div class="card-body ">
                <img src="./img/Rectangle 19.png" alt="" class="card-img">
             </div>
          </div>   
     </div>
     <div class="col-md-6 col-sm-12 col-lg-3">
          <div class="card card-img-pos">
             <div class="card-body ">
                <img src="./img/Rectangle 19 (3).png" alt="" class="card-img">
             </div>
          </div>   
     </div>
  </div>
     
 <!-- =========End venu content========== -->

 <!-- ========testimonial1 =======-->
<div class="container mb-5">
<h2  class="text-dark text-center">Glimpses of Our Conferences</h2>
<div class="container carousel-con">
         <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
       <div class="row">
              <div class="col-lg-4">
          <div class="single-box">
            <div class="text-area">
            <div class="image-area">
              <img src="./img/Rectangle 19 (4).png" class="d-block w-100" alt="...">
            </div>
            </div>
          </div>
       </div>
      <div class="col-lg-4">
          <div class="single-box">
            <div class="text-area">
            <div class="image-area">
              <img src="./img/Rectangle 19 (5).png" class="d-block w-100" alt="...">
            </div>
          </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="single-box">
            <div class="image-area">
              <img src="./img/Rectangle 19 (6).png" class="d-block w-100" alt="...">
            </div>
          </div>
      </div>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="10000">
       <div class="row">
              <div class="col-lg-4">
          <div class="single-box">
            <div class="image-area">
              <img src="./img/Rectangle 19 (4).png" class="d-block w-100" alt="...">
            </div>
          </div>
       </div>
      <div class="col-lg-4">
          <div class="single-box">
            <div class="image-area">
              <img src="./img/Rectangle 19 (4).png" class="d-block w-100" alt="...">
            </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="single-box">
            <div class="image-area">
              <img src="./img/Rectangle 19 (4).png" class="d-block w-100" alt="...">
            </div>
          </div>
      </div>
      </div>
    </div>
    </div>
     
    <div class="carousel-item" data-bs-interval="2000">
      
    </div>
    </div>
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>
</div>
         </div>

</div>

 <!-- ========End testimonial1 =======-->

 <!-- text testimonial -->
 <div class="container mb-5 mt-0">
 <h2  class="text-dark text-center p-0">Testimonials</h2>
 <div class="container carousel-con">
         <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators indicators-change" id="indicator-change">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
       <div class="row">
         <div class="col-lg-4">
             <div class="single-box-test">
               <div class="text-area-p">
                       <p class="text1-dark lead text-center"> <span >"</span> The conference was amazing.
                            I have learnt many new
                            things. The entire session was
                            wonderful. Looking forward to attend
                            more of your conferences<span>"</span> </p>
                        <div class="image-area-img">
                        <img src="./img/Ellipse 4.png" class="d-block w-100" alt="...">
                       </div>
                      <h5 class="text-blue fw-bold"  style="text-align:center;">Tran Choi</h5>
                      <p class="text-brown mx-auto" style="text-align:center;">Malai University, Malaysia</p>

                </div>
              </div>
         </div>
         <div class="col-lg-4">
             <div class="single-box-test">
               <div class="text-area-p">
                    
                       <p class="text1-dark text-center lead"> <span >"</span> The conference was amazing.
                            I have learnt many new
                            things. The entire session was
                            wonderful. Looking forward to attend
                            more of your conferences<span>"</span> </p>
                          
                        <div class="image-area-img">
                        <img src="./img/Ellipse 4 (1).png" class="d-block w-100" alt="...">
                       </div>
                      <h5 class="text-blue fw-bold"  style="text-align:center;">Tran Choi</h5>
                      <p class="text-brown mx-auto" style="text-align:center;">Malai University, Malaysia</p>

                </div>
              </div>
         </div>
      <!--  -->
         <div class="col-lg-4">   
             <div class="single-box-test">
               <div class="text-area-p">
                       <p class="text1-dark lead text-center"> <span >"</span> 
                       The conference was amazing.<br>

                                  I have learnt many new
                                  things. The entire session was
                                  wonderful. Looking forward to attend
                                  more of your conferences<span>"</span> </p>
                        <div class="image-area-img">
                        <img src="./img/Ellipse 4 (2).png" class="d-block w-100" alt="...">
                       </div>
                      <h5 class="text-blue fw-bold"  style="text-align:center;">Tran Choi</h5>
                      <p class="text-brown mx-auto" style="text-align:center;">Malai University, Malaysia</p>

                </div>
              </div>
         </div>
      <!--  -->
      <!-- start -->
      
      <!-- end -->
    </div>
    </div>
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button> -->
</div>
</div>
 </div>


 <!-- text testimonial -->
<!-- ++++++++++++++++++++++contact us++++++++++++++++++++ -->
<div class="container mb-5">
<h2  class="text1-dark text-center">Contact Us</h2>
              <p class="text1-dark text-center p-0 fw-bold">Please feel free to contact us for any information, all the queries will be answered<br>
by the conference secretariat within 24 hrs.</p>
        <div class="row shadow-pro">
              <div class="col-sm-12 col-md-5 col-lg-7">
              <h3 class="text1-dark fw-bold text-center mb-4">Get In Touch</h3>
              <div class="row">
                <form action="#" method="post">
                  <div class="row mb-2">
                  <div class="col-sm-6">
                      <div class="form-group  text1-dark fw-bold">
                           <label for="name" class="form-label">Name*</label>
                           <input type="text" class="form-control" id="name" placeholder="Enter your name" aria-label="First name">
                      </div>
                   </div>
                      <div class="col-sm-6">
                      <div class="form-group  text1-dark fw-bold">
                      <label for="email" class="form-label">Email Address*</label>
                        <input type="email" class="form-control" placeholder="Enter your email" id="email" aria-label="Last name">
                      </div>
                      </div>
                  </div>
                  <div class="row mb-2">
                  <div class="col-sm-6">
                      <div class="form-group  text1-dark fw-bold">
                           <label for="number" class="form-label">Mobile Number</label>
                           <input type="number" class="form-control" id="numbar" placeholder="Enter tour mobile number" aria-label="First name">
                      </div>
                   </div>
                      <div class="col-sm-6">
                      <div class="form-group text1-dark fw-bold">
                      <label for="country" class="form-label">Country*</label>
                        <select id="country" name="country" class="form-control text1-dark" required>
                                 <option value="">-- Select Country --</option>
                                 <option value="Afghanistan">Afghanistan</option>
                                 <option value="Åland Islands">Åland Islands</option>
                                 <option value="Albania">Albania</option>
                                 <option value="Algeria">Algeria</option>
                                 <option value="American Samoa">American Samoa</option>
                                 <option value="Andorra">Andorra</option>
                                 </select>
                      </div>
                      </div>
                  </div>
                  <div class="row mb-5">
                      <div class="col-sm-12 ">
                         <div class="form-group text1-dark fw-bold">
                            <label for="message">Message*</label>
                            <textarea class="form-control" name="message" rows="5" required></textarea>
                         </div>
                      </div>
                  </div>
                  <div class="text-center mb-5">
                    <button type="submit" class="p-2 btn-design">Send Message</button>
                  </div>
                </form>
                </div>

           </div>
  
              <div class="col-sm-12 col-md-4 col-lg-5 text1-dark">
                 <h3 class="text1-dark fw-bold mt-5 ">Inquiries</h3>
                 <div class="touch-text">
                   <p>Abstracts, Registrations and Payments Inquiries <br>

                         <span class="fw-bold"> Program Manager (IFERP)</span></p>
                         <p>
                         <i class="fas fa-phone touch-icon fw-bold"></i> Call/Whatsapp: <span class="text1-dark fw-bold"> +91 73054 77495<span>
                         </p>
                         <p><i class="far fa-envelope-open touch-icon fw-bold"></i> Mail Id:<span class="text1-dark fw-bold"> info@icrtmdr.com</span></p>
                         <p><i class="far fa-question-circle touch-icon fw-bold"></i> Help:<span class="text1-dark fw-bold"> helpdesk@technoarete.org</span></p>
                        <h3 class="text1-dark fw-bold ">Venue</h3>
                        <div class="mapouter ms-5"><div class="gmap_canvas"><iframe width="301" height="224" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><style>.mapouter{position:relative;text-align:right;height:224px;width:301px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:224px;width:301px;}</style></div></div>
                        </div>
                       
              </div>
        </div>
</div>
<!-- ============end contact us -->

<!-- footer content -->
   <section class="footer-sec">
    
   </section>

<!-- end footer content -->





      </div> 
 </div>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>