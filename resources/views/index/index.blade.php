<!DOCTYPE HTML>
<html>
<head>
    <title>Shiba Inu Pipi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/components/favicon.png') }}" title="Favicon">

    <!-- css files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- /css files -->

    <!-- font files -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- /font files -->

    <!-- js files -->
    <script src="js/modernizr.custom.js"></script>
    <!-- /js files -->

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top cl-effect-20">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">柴犬皮皮</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><span data-hover="主页">主页</span></a></li>
                            <li><a href="#events"><span data-hover="在想">在想</span></a></li>
                            <li><a href="#footer"><span data-hover="感谢">感谢</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Banner Section -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="images/index/banner1.jpg" alt="First slide">
            </div>
            <div class="item">
                <img class="second-slide" src="images/index/banner2.jpg" alt="Second slide">
            </div>
            <div class="item">
                <img class="third-slide" src="images/index/banner3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /Banner Section -->

    <!-- Events -->
    <section class="our-events slideanim" id="events">
        <a href="/posts">
            <h3 class="text-center slideanim">每日一句</h3>
        </a>
        <p class="text-center slideanim">我需要三件东西：爱情友谊和图书。然而这三者之间何其相通！炽热的爱情可以充实图书的内容，图书又是人们最忠实的朋友。</p>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="event-info">
                        <h4 class="text-center slideanim">May 30th</h4>
                        <p class="eve slideanim"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 很多教程或者书会告诉你，你一定要一个字符一个字符的把代码敲上去，这样掌握的才能更加牢固，那么其实这样的说法或做法是完全错误的。 自学编程，就一定要按照正确的方法，久经考验——复制粘贴。你一定要抓住重点是什么：重点绝不是一个一个的字符。猴子也能敲键盘，但是……</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="event-info">
                        <h4 class="text-center slideanim">July 8th</h4>
                        <p class="eve slideanim"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 魅力，难道只是看脸吗？《摩登家庭》开播近十年，它告诉我们幸福家庭就是那吵吵闹闹又温馨包容的，同时它也告诉我们，爱情并不都是轰轰烈烈感天动地的。 在剧里，Gloria就是一道完美的风景。她前凸后翘，女人味十足，回眸一笑引得无数男人为之驻足，靠外表就已经是……</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="event-info">
                        <h4 class="text-center slideanim">July 29th</h4>
                        <p class="eve slideanim"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 总结一些有关写简历、投简历、面试套路的问题，岂止于程序员面试。有的人可能之前没参加过面试，或者好久没参加面试，所以会紧张、会害怕，这是很正常的，人们对于没经历过的事情难免会有这种情绪，会害怕被拒绝，但是我们最后还是要去的，要有信心，不要被……</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Events -->

    <!-- Footer Section -->
    <section id="footer" class="footer">
        <h4 class="text-center">多谢捧场，多谢关注~~~</h4>
        <div class="copyright">
            <p> &copy; 2018 - By Shiba Inu Pipi</p>
        </div>
    </section>
    <!-- /Footer Section -->

    <!-- Back To Top -->
    <a href="#0" class="cd-top">Top</a>
    <!-- /Back To Top -->

    <!-- js files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- js for gallery -->
    <script src="js/darkbox.js"></script>
    <!-- /js for gallery -->
    <!-- js for back to top -->
    <script src="js/main.js"></script>
    <!-- /js for back to top -->
    <!-- js for nav-smooth scroll -->
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            });
        })
    </script>
    <!-- /js for nav-smooth scroll -->
    <!-- js for slide animations -->
    <script>
        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    </script>
    <!-- /js for slide animations -->
    <!-- /js files -->
</body>
</html>
