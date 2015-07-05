 <!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Test</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type='text/javascript' src='js/scroll.js'></script>
    <script src="js/jquery.vide.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript"> 
    $(document).ready(function () {
        $("#slide1").vide("video/taxi.mp4",{
          volume: 0,
          playbackRate: 1,
          muted: true,
          loop: true,
          autoplay: true,
          position: "50% 50%" // Alignment
      });
        $('#slide1 video').fadeOut(0).delay(200).fadeIn(800);
    });              
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
</head>
  <body>
   
    <header>
        <div class="navbar navbar-default" role="navigation">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-header">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a  href="">LOGO<!-- <img class="col-sm-6 col-xs-2" src=""> --></a>
                    </div>

                    <div class="collapse navbar-collapse" id="nav-header">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="menu"><a  href="#slide1">Home</a></li>
                            <li class="menu"><a href="#slide2">About us</a></li>
                            <li class="menu"><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                  </div>
        </div>
    </header>
 <!--/header -->
    
    
    <div class="container-fluid" >
        <div class="row" id="slide1">
        <!-- preload autoplay="autoplay" -->
        <!--<video autoplay="autoplay" loop="loop" > 
            <source src="video/taxi.mp4" type="video/mp4" />
        </video> -->
        </div>
        <div class="container">
            <div class="row logo-main">
                <div class="col-sm-4 col-xs-4"></div>
                <div class="col-sm-4 col-xs-4">
                    LOGO
                    <!-- <img id="logo" class="img-responsive" src="images/logo.png"> -->
                </div>
                <div class="col-sm-4 col-xs-4"></div>
            </div>
        </div>
    </div>
    <!-- end of first block with big img -->

    <div class="container">
        <div class="white-block" id="slide2">
            <div class="page-name">
                <h2>About us</h2>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <p><span>A</span>aaa
                    </p>
                </div>
                <div class="col-sm-6">
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row" id="slide3">
            
        </div>

        <div class="container">
            <div class="row" id="slide4">
                <div class="col-sm-1 col-xs-2"></div>
                 <img class="img-responsive img-impose col-sm-10 col-xs-8" src="images/computer.png">
                <div class="col-sm-1 col-xs-2"></div>
            </div>

            <div class="white-block">
                <div id="contact" class="page-name">
                    <h2>Contact</h2>
                </div>

                <div class="col-sm-1 col-xs-1"></div>
                <div class="col-sm-10 col-xs-10">
                </div>
                <div class="col-sm-1 col-xs-1"></div>

                <div class="clearfix"></div>

                <div class="col-sm-5 col-xs-12 top-blocks">
                    <div class="boxes">
                        <div class="blocks first-block"></div>
                        <div class="blocks second-block"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-7 col-xs-12 top-blocks">
                    <div class="boxes">
                        <div class="blocks first-block pad"></div>
                        <div class="blocks second-block pad"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>

                <div class="col-sm-12 col-xs-12">
                    <div class="boxes">
                        <div class="blocks first-block pad2"></div>
                        <div class="blocks second-block pad2"></div>
                    </div>
                </div>      
            </div>
        </div>
    </div>

<footer>
        <div id="footer" class="container-fluid">
            <a class="navbar-brand footer-logo" href="index.html"><img class="col-sm-6 col-xs-10" src=""></a>
            <p class="navbar-right copyright">copyright &copy; 2015  / TAXI</p>
        </div>
    </footer>
  </body>
</html>