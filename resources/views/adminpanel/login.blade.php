<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/public/admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/owl.carousel.css">
    <link rel="stylesheet" href="/public/admin/css/owl.theme.css">
    <link rel="stylesheet" href="/public/admin/css/owl.transitions.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="c/public/admin/ss/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/normalize.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/main.css">
    <!-- morrisjs CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/public/admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/public/admin/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/form/all-type-forms.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="/public/admin/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="/public/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="/" class="btn btn-primary">Вернуться на сайт</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
              <form method="post">
                @csrf
                <div class="hpanel">
                    <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" placeholder="login" title="login" required="" value="" name="email" id="username" class="form-control">
                                <span class="help-block small">Ваш логин от админ панели</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Пароль</label>
                                <input type="password" title="Пароль" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Ваш пароль от админ панели</span>
                            </div>

                            <button class="btn btn-success btn-block loginbtn">Авторизироваться</button>
                    </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © 2023</p>
            </div>
        </div>
    </div>

    <!-- jquery
    ============================================ -->
    <script src="/public/admin/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="/public/admin/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="/public/admin/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="/public/admin/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="/public/admin/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="/public/admin/js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="/public/admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="/public/admin/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="/public/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/public/admin/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="/public/admin/js/metisMenu/metisMenu.min.js"></script>
    <script src="/public/admin/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
    ============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="/public/admin/js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="/public/admin/js/main.js"></script>
</body>

</html>
