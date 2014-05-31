<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Study Hacker</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<?php /*
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Download</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    */?>
    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- <h1 class="brand-heading">Grayscale</h1> -->
                        <p class="intro-text">インターネットや<br/>スマートフォンには、<br/>学びの形を変える力がある。</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>STUDY HACKERは<br/>勉強法の<br/>キュレーションサイト</h2>
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center minHeight">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="icon-box ib-user"><span class="glyphicon glyphicon-user"></span></div>
                    <div class="icon-box ib-appreview"><p>アプリ<br/>レビュー</p></div>
                    <div class="icon-box ib-bookreview"><p>参考書<br/>レビュー</p></div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>みなさんの少し先輩の<br/>現役東大生・京大生たちが、<br/>大量のアンケートをもとに、<br/>
                ほんとうに役に立つ<br/>
                    学習アプリやWebサービス、<br/>実際に使った<br/>オススメの参考書を紹介します。</p>
            </div>
            <div id="mes-box" class="col-lg-8 col-lg-offset-2">
                <p>わたしたちと<br>みなさんで、新しい<br>学びの形をつくろう</p>
            </div>
        </div>
    </section>

    <section id="" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>これまでだれも<br/>見たことがない、<br/>わたしたちの<br/>世代の新しい学びを。</p>
            </div>
            <div id="be-sh-box" class="col-lg-8 col-lg-offset-2">
                <!-- be a study hacker -->
                <img id="be-sh-img" src="img/logo.png" alt="Be a STUDY HACKER">
            </div>
        </div>
    </section>

    <section id="application" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <img src="img/takarabako.png" alt="宝箱">
                <p>メルマガ登録で
                    <ul>
                        <li>iPad mini （2名様)</li>
                        <li>iPod Touch（8名様)</li>
                        <li>Amazonギフト券 1000円分（8名様)</li>
                    </ul>
                    一挙プレゼント！</p>
            </div>
            <div id="application-form" class="col-lg-8 col-lg-offset-2">
                <form role="form">
                    <div class="form-group">
                        <label>メールアドレス</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>学校名</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class=""> 性別
                        <label class="radio-inline">
                            <input type="radio" name="radio-sex" value="male">男性
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="radio-sex" value="female">女性
                        </label>
                    </div>
                    <div class=""> 学年
                        <label class="radio">
                            <input type="radio" name="radio-grade" value="jh">中学生
                        </label>
                        <label class="radio">
                            <input type="radio" name="radio-grade" value="h1">高校1年生
                        </label>
                        <br/>
                        <label class="radio">
                            <input type="radio" name="radio-grade" value="h2">高校2年生
                        </label>
                        <label class="radio">
                            <input type="radio" name="radio-grade" value="h3">高校3年生
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info btn-lg">　　登録　　</button>
                </form>
                    <a href="http://studyhacker.net/">登録せずにサイトへ移動する→</a>
            </div>
        </div>
    </section>

    <section id="footer">
    </section>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
