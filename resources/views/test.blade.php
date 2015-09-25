
<!doctype html>
<html>
    <head>
        <title>Karthik Janarthanan</title>

         <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
<!--  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
<!--
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
-->

        {!! Html::style('css/app.css') !!}


        {!! Html::script('js/app.js') !!} <!--Contains jquery and bootstrap-->
        {!! Html::script('js/parallax.min.js') !!}
        {!! Html::script('js/isotope.pkgd.min.js') !!}
        {!! Html::script('js/script.js') !!}
        <!--Page developed using Laravel 5.1-->


            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    </head>
    <body data-spy="scroll" >
        <section id="home-page"  class="parallax-window" data-parallax="scroll" data-image-src="./image/objects.jpg">
            <div class="container">

                <div class="home-box">
                     <div class="slogan">
						<div class="left_bord"></div>
						<div class="slogan_text">The name is</div>
						<div class="right_bord"></div>
                          <h1>Karthik Janarthanan</h1>
                    <span>Computer Science Graduate student at Unversity at Buffalo.</span>
                     <span>Professional experience of 3+ years in Web Development and programming.</span>
					</div>


                <a class="button" title="" data-slide="2"></a>

                </div>

<!--               <a href="#contact" class="fa fa-angle-down page-scroll"></a>-->
            </div>
        </section>
        <header class="navbar navbar-default ">
            <nav class="" id="myNavBar" >
              <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">K J</a>
                </div>
                <div>
                  <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#home-page">Home</a></li>
                      <li><a href="#about">About Me</a></li>
                      <li><a href="#projects">Projects</a></li>
                      <li><a href="#contact">Contact</a></li>
                   </ul>
                  </div>
                </div>
              </div>
            </nav>
        </header>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">About Me</h2>
<!--                        <h3 class="section-subheading text-muted">Feel free to leave a message</h3>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-push-8">
                         <img class="profilepic" src="./image/profilepic.jpg" alt="" width="180">
                    </div>
                    <div class="col-sm-8 col-sm-pull-4">
                        <h3>Karthik Janarthanan</h3>
<!--                        Hello I'm Karthik, -->
                        <h4><strong>Programmer &amp; Web Developer</strong></h4>
                        <p> I'm a senior graduate majoring in Computer Science at the University at Buffalo, SUNY.
<br><br>As a computer science professional, I'm passionate about visualizing and building solutions to simplify and improve our activities. From my prior experiences, I have realized having a good knowledge on the latest technology is essential to build better solutions. <br><br>Currently I'm seeking full-time opportunities(starting Jan 2016 ) that will allow me to effectively utilize the diverse skills that I have gained through my academic and professional experiences, at the time enhances my opportunities to explore new technologies.

 </p>
                    </div>

                </div>
            </div>
        </section>
        <section id="projects">
            <div class="container">
            <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Portfolio</h2>
<!--                        <h3 class="section-subheading text-muted">Feel free to leave a message</h3>-->
                    </div>
                </div>
            <div class="row">
                <div class="projects-filter">

                    <a href="#" data-filter="*" class="current">All</a>
                    <a href="#" data-filter=".ds">Distributed Systems</a>
                    <a href="#" data-filter=".ir">Information Retrival</a>
                    <a href="#" data-filter=".ml">Machine learning</a>
                    <a href="#" data-filter=".os">Operating System</a>
                    <a href="#" data-filter=".other">Others</a>

                </div>
            </div>

<div class="expander clearfix" >
    </div>
            <div class="row">
            <div class="projects-container">


                <div class="os">
                    <a class="expand-view" href="" data-id="1">
                        <img src="./image/os3.jpg" alt="OS/161"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>OS/161: Design and Implementation of working System Software using Kernel Programming</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>
                <div class="ds">
                    <a class="expand-view" href="" data-id="2">
                        <img src="./image/dynamo3.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Amazon's Dynamo styled Key-Value Storage</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>

                <div class="ml">
                    <a class="expand-view" href="" data-id="3">
                        <img src="./image/neural1.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Handwritten Digits Classification using Neural Network</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>

                <div class="ir">
                    <a class="expand-view" href="" data-id="4">
                        <img src="./image/newsroom2.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>NewsRoom</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>

                    </a>
                </div>

                <div class="ds">
                    <a class="expand-view" href="" data-id="5">
                        <img src="./image/chord1.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Distributed HashTable using Chord Protocol</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>

                <div class="ml">
                    <a class="expand-view" href="" data-id="6">
                        <img src="./image/svm.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Logistic Regression and SVM</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>

                <div class="ds">
                    <a class="expand-view" href="" data-id="7">
                        <img src="./image/fifo1.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Group Messenger with Total and FIFO Ordering Guarantees</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>

                <div class="ml">
                    <a class="expand-view" href="" data-id="8">
                        <img src="./image/classification.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Classification and Regression</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>
                <div class="ir">
                    <a class="expand-view" href="" data-id="9">
                        <img src="./image/ir3.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>News Indexer</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>
                <div class="other">
                    <a class="expand-view" href="" data-id="10">
                        <img src="./image/parser1.png" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Object Oriented Top-Down Parser</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>
                <div class="other">
                    <a class="expand-view" href="" data-id="11">
                        <img src="./image/secure2.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>Secure Client Group Interaction System</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>
                <div class="other">
                    <a class="expand-view" href="" data-id="12">
                        <img src="./image/optimx1.jpg" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>OptimX</h4>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                            <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                        </div>


                    </a>
                </div>
            </div>
            </div>
            </div>
        </section>


        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Contact Me</h2>
                        <h3 class="section-subheading text-muted">Feel free to leave a message</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contactForm"  >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group  input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                        <input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" data-validation-required-message="Please enter your name." aria-invalid="false">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group  input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                        <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" data-validation-required-message="Please enter your email address." aria-invalid="false">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group  input-group">
                                         <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                        <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone"  data-validation-required-message="Please enter your phone number." aria-invalid="false">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
<!--                                        <span class="input-group-addon"><i class="fa fa-pencil-square-o fa-fw"></i></span>-->
                                        <textarea class="form-control" placeholder="Your Message *" id="message" name="message" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="back-top-wrap">
	       <a href="#home-page" class="scrollto"><i class="back-top fa fa-chevron-up"></i></a>
        </div>
        <footer>
            <div class="social social-footer">
                <ul><li><a href="https://www.linkedin.com/in/karthikjanarthanan" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/karthik-j" target="_blank"><i class="fa fa-lg fa-github"></i></a></li>
                    <li><a href="https://twitter.com/karthikj30" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="https://google.com/+KarthikJanarthanan" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
                    <li><a href="#"  target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                </ul>
                <p class="">Connect with me</p>
                </div>
        </footer>

    </body>
</html>
