<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LEGAL WEAPON 4</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/tooltip-box.css" />

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">legalease</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll">These are your Results</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Results of our Analysis:</h2>
                <div class="row">
                    <div class="row-fluid">
   <span class="tooltipp tooltip-effect-1"><span class="tooltipp-item"><div class="span2 offset1">
   <div class="liability-badge"><img width="100" src="img/result-badges/Liability.png"></div>
    <div class="nuclear"><img width="100" src="img/result-badges/Nuclear.png"></div>
   <div class="payment"><img width="100" src="img/result-badges/Payment.png"></div>
    </div></span><span class="tooltipp-content clearfix"><span class="tooltipp-text">This is the test content</span></span></span>
    
    <span class="tooltipp tooltip-effect-1"><span class="tooltipp-item"><div class="span2">
    <div class="pr-commercial"> <img width="100" src="img/result-badges/PhotoRights_Commercial.png"></div>
    <div class="pr-noncommercial"><img width="100" src="img/result-badges/PhotoRights_NonCommercial.png"></div>
    <div class="pr-modify"><img width="100" src="img/result-badges/PhotoRights_Modify.png"></div>
    </div></span><span class="tooltipp-content clearfix"><span class="tooltipp-text">This is the test content</span></span></span>
    
    <span class="tooltipp tooltip-effect-1"><span class="tooltipp-item"><div class="span2">
    <div class="full-privacy"><img width="100" src="img/result-badges/Privacy_Full.png"></div>
    <div class="quarter-privacy"><img width="100" src="img/result-badges/Privacy_OneQuarter.png"></div>
    <div class="three-privacy"><img width="100" src="img/result-badges/Privacy_ThreeQuarters.png"></div>
    </div></span><span class="tooltipp-content clearfix"><span class="tooltipp-text">This is the test content</span></span></span>
    
    <span class="tooltipp tooltip-effect-1"><span class="tooltipp-item"><div class="span2">
    <div class="refund-30"><img width="100" src="img/result-badges/Refund_30.png"></div>
    <div class="refund-60"><img width="100"src="img/result-badges/Refund_60.png"></div>
    <div class="refund-90"><img width="100"src="img/result-badges/Refund_90.png"></div>
    </div></span><span class="tooltipp-content clearfix"><span class="tooltipp-text">This is the test content</span></span></span>
    
    <span class="tooltipp tooltip-effect-1"><span class="tooltipp-item"><div class="span2">
    <div class="third-party-some"><img width="100" src="img/result-badges/ThirdParty_Bite.png"></div>
    <div class="third-party-all"><img width="100" src="img/result-badges/ThirdParty_Full.png"></div>
    </div></span><span class="tooltipp-content clearfix"><span class="tooltipp-text">This is the test content</span></span></span>
</div>
                    
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 results">
                    <?php echo file_get_contents('temp_text_files/'.$_GET['text']); ?>
                </div>
            </div>
        </div>
    </section>




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Legal Weapon 4 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Get it on Git</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
	<script src="js/wordsmith.js"></script>
	<script src="js/replacetxt.js"></script>
	<script src="js/reformatted-dictionary.js"></script>


	


	<script>
	$(function() {
	$('.results').wordsmith();
});
var lastPos = null,
    timer = 0;

function clear() {
    lastPos = null;
};

window.onscroll = checkScrollSpeed;

function checkScrollSpeed(){
    var newPos = window.scrollY;
    if ( lastPos != null ){ // && newPos < maxScroll 
        var delta = newPos -  lastPos;
        console.log(delta); // this is the result
    }
    lastPos = newPos;
    timer && clearTimeout(timer);
    timer = setTimeout(clear, 30);
};

$( document ).ready(function() {
   if ($('span.badge-nuke-easteregg').length){
        $(".nuclear").css("display", "block");
    }
     if ($('span.badge-payment-renew').length){
        $(".payment").css("display", "block");
    }
     if ($('span.badge-photo-by-nd').length){
        $(".pr-commercial").css("display", "block");
    }
     if ($('span.badge-photo-by-nc-sa').length){
        $(".pr-noncommercial").css("display", "block");
    }
     if ($('span.badge-photo-by-nc').length){
        $(".pr-modify").css("display", "block");
    }
     if ($('span.badge-privacy-register').length){
        $(".full-privacy").css("display", "block");
    }
     if ($('span.badge-privacy-hacked').length){
        $(".quarter-privacy").css("display", "block");
    }
     if ($('span.badge-privacy-unidentifiable').length){
        $(".three-privacy").css("display", "block");
    }
     if ($('span.badge-refund-30').length){
        $(".refund-30").css("display", "block");
    }
    if ($('span.badge-refund-30').length){
        $(".refund-60").css("display", "block");
    }
    if ($('span.badge-refund-30').length){
        $(".refund-90").css("display", "block");
    }
        if ($('span.badge-3rd-youshare').length){
        $(".third-party-some").css("display", "block");
    }
        if ($('span.badge-3rd-advertising').length){
        $(".third-party-all").css("display", "block");
    }
    if ($('span.badge-liable-deleteourstuff').length){
        $(".liability-badge").css("display", "block");
    }
});

	</script>
</body>

</html>
