
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
                     <span>Professional experience of 4+ years in Web Development and programming.</span>
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
                        <p>Integer a lacus at sem suscipit euismod a eu elit. Donec dapibus mauris nec sapien convallis venenatis. Nullam sagittis feugiat sapien ut suscipit. Nullam tristique sodales ipsum, in blandit massa. Morbi sollicitudin lorem est, sed iaculis tortor luctus eget.
<br><br>
Proin sem tellus, consectetur vel venenatis quis, consequat nec nibh. Ut sit amet turpis non libero sodales rhoncus et non sem. Proin dapibus eleifend nisi, gravida hendrerit enim consectetur eu. </p>
                    </div>

                </div>
            </div>
        </section>
        <section id="projects">
            <div class="projects-filter">

                <a href="#" data-filter="*" class="current">All Categories</a>
                <a href="#" data-filter=".people">People</a>
                <a href="#" data-filter=".places">Places</a>
                <a href="#" data-filter=".food">Food</a>
                <a href="#" data-filter=".objects">Objects</a>

            </div>
<div class="expander clearfix" style="display: block;">
    </div>
            <div class="projects-container">

                <div class="objects">
                    <a class="expand-view" href="http://demo.mythemeshop.com/onepage/?portfolio=title-of-the-project-goes-here" data-id="71">
                        <img src="./image/200x200.png" alt="image"/>
                        <div class="overlay">
                            <div class="overlay_container">
                                <h4>TITLE OF THE PROJECT GOES HERE</h4>
                                <p>Duis cursus, augue tempus venenatis fermentum, massa tellus posuere augue, sit amet consectetur ante</p>
                                <span class="button"><i class="fa fa-search-plus"></i>View More</span>
                            </div>
                        </div>

                        <div class="loader" style="display:none"><i class="fa fa-spinner fa-spin"></i></div>
                    </a>
                </div>
                <div class="people places">
                    <img src="./image/200x200.png" alt="image">
                </div>

                <div class="food">
                    <img src="./image/200x200.png" alt="image">
                </div>

                <div class="people places">
                    <img src="./image/200x200.png" alt="image">
                </div>

                <div class="places objects">
                    <img src="./image/200x200.png" alt="image">
                </div>

                <div class="people food objects">
                    <img src="./image/200x200.png" alt="image">
                </div>

                <div class="food objects">
                    <img src="./image/200x200.png" alt="image">
                </div>

                <div class="food">
                    <img src="./image/200x200.png" alt="image">
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
                <ul>
                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-stack-overflow"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-skype"></i></a></li>
                </ul>
                <p class="">Connect with me</p>
                </div>
        </footer>

    </body>
</html>
