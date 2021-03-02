<?PHP
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
    $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $redirect_url");
   exit();
} 
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>KICKSTARTER TRX</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <meta name="description" content="Инвестиции в торговлю на криптовалютных биржах">
    <meta name="keywords" content="высокодоходные инвестиции, линей, заработок в интернете, криптовалюты, торговля">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style_KICKSTARTERTRX.css" />
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script-KICKSTARTERTRX.js"></script>
</head>
<body>
    <div class="preloader">
        <img src="assets/img/logobig.png" class="preload_logo" alt="">
        <div class="preloadBlock">
            <div class="wave__main"></div>
            <div class="wave__back"></div>
        </div>
        <div class="preloadBlock2">
            <div class="wave__main"></div>
            <div class="wave__back"></div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg_menu">
            <a href="/"><img class="my-0 ml-md-5 mr-md-5 logo_head" src="assets/img/logo.png" alt=""></a>
            <button class="navbar-toggler" style="border:none;" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/about.html">About us</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link bounty_link" href="ppt.pdf" target="_blank">PPT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Wallet_link" href="pages/Wallet.html">Wallet</a>
                    </li>
                    <!--li class="nav-item">
              <a class="nav-link" href="/pages/reviews">Reviews</a>
            </li-->
                    <li class="nav-item">
                        <a class="nav-link" href="pages/support.html">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/faq.html">FAQ</a>
                    </li>
                </ul>
                <div class="dropdown show mr-md-3">
                    <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="flags/flag(en).png" alt="">
              </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/?lng=en"><img src="flags/flag(en).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=ru"><img src="flags/flag(ru).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=de"><img src="flags/flag(de).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=pt"><img src="flags/flag(pt).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=vi"><img src="flags/flag(vi).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=ko"><img src="flags/flag(ko).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=zh"><img src="flags/flag(zh).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=ar"><img src="flags/flag(ar).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=fr"><img src="flags/flag(fr).png" alt=""></a>
                        <a class="dropdown-item" href="/?lng=fa"><img src="flags/flag(fa).png" alt=""></a>
                    </div>
                </div>
                <a class="btn btn-reg-KICKSTARTER TRX mr-md-3" href="pages/reg.html">registration</a>
                <a class="btn btn-login-KICKSTARTER TRX" href="pages/login.html">To come in</a>
            </div>
        </nav>
    </header>
    <main role="main" class="main">

        <div class="jumbotron main_image">
            <div class="decorationOne">
                <div class="decBlock">
                    <div class="wave__main"></div>
                    <div class="wave__back"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/img/woman_1.png" class="woman_main" height="800px" alt="woman">
                    </div>
                    <div class="col-md-6">
                        <h1 class="main-heading">
                            <p class="KICKSTARTER TRX_head">KICKSTARTER TRX</p> - an easy and safe way to increase your capital.</h1>
                        <div class="bonus_main_block">
                            <div class="bonus_main_block_info">
                                Register and get a TRX 109350000 bonus to your account! </div>
                            <div class="bonus_main_block_ref">
                                <div class="bonus_main_block_ref_text">
                                    + TRX 150 for each active partner! </div>
                            </div>
                        </div>
                        <div clas="social-block">
                            <a href="//t.me/kickstartertrx.com" class="soc-link" target="_blank"><img src="assets/img/svg/telegram.svg" alt="telegram"></a>
                            <!--a href="//vk.com" class="soc-link" target="_blank"><img src="assets/img/svg/vk.svg" alt="vk"></a-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style>
            .limits_color {
                color: white;
            }
        </style>
        <div class="linedec">
            <div class="container">
                <div class="payments">
                    <img src="assets/img/pay/pay-2.png" alt="">
                    <img src="assets/img/pay/pay-4.png" alt="">
                    <img src="assets/img/pay/pay-5.png" alt="">
                    <img src="assets/img/pay/pay-6.png" alt="">
                    <img src="assets/img/pay/pay-7.png" alt="">
                    <img src="assets/img/pay/pay-8.png" alt="">
                    <img src="assets/img/pay/pay-9.png" alt="">
                    <img src="assets/img/pay/pay-10.png" alt="">
                    <img src="assets/img/pay/pay-11.png" alt="">
                    <img src="assets/img/pay/pay-12.png" alt="">
                    <img src="assets/img/pay/pay-13.png" alt="">
                    <img src="assets/img/pay/pay-14.png" alt="">
                    <img src="assets/img/pay/pay-15.png" alt="">
                    <img src="assets/img/pay/pay-16.png" alt="">
                    <img src="assets/img/pay/pay-17.png" alt="">
                    <img src="assets/img/pay/pay-20.png" alt="">

                </div>
            </div>
            <!-- /container -->
        </div>
        <div class="linedec">
            <div class="container">
                <div class="ref_block">
                    <h3>Percentage of the partner's investment amount</h3>
                    <div class="ref_line">
                        <div class="ref_line_block">1%</div>
                        <div class="ref_line_block">1%</div>
                        <div class="ref_line_block">1%</div>
                        <div class="ref_line_block">1% </div>
                    </div>
                </div>
                <div class="ref_block_bonus text-center">
                    <h3>1% bonus for EACH active reffral till 20 level</h3>
                </div>
            </div>
            <!-- /container -->
        </div>
        <div class="container">
            <h3 class="calc-head">Profit Level calculator</h3>
            <div class="calculated_main">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="calc_info" id="calc_main">
                            <h3>FINAL PROFIT:</h3>
                            <div class="calc_info_about">
                                <div class="d-flex justify-content-between flex-column flex-md-row align-items-center">
                                    <div>DAY</div>
                                    <div class="calc_info_about_value" id="day">0</div>
                                </div>
                            </div>
                            <div class="calc_info_about">
                                <div class="d-flex justify-content-between flex-column flex-md-row align-items-center">
                                    <div>A WEEK</div>
                                    <div class="calc_info_about_value" id="week">0</div>
                                </div>
                            </div>
                            <div class="calc_info_about">
                                <div class="d-flex justify-content-between flex-column flex-md-row align-items-center">
                                    <div>MONTH</div>
                                    <div class="calc_info_about_value" id="month">0</div>
                                </div>
                            </div>
                            <div class="calc_info_about">
                                <div class="d-flex justify-content-between flex-column flex-md-row align-items-center">
                                    <div>YEAR</div>
                                    <div class="calc_info_about_value" id="year">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-control calc_form">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 payb" data-ps="RUB">
                                    <input id="1" type="radio" name="ps" value="">
                                    <label for="1" class="planBox">      
                      <img src="assets/img/ruble.svg" alt="">            
                          RUB
                      </label>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 payb" data-ps="USD">
                                    <input id="2" type="radio" name="ps" value="">
                                    <label for="2" class="planBox">                
                      <img src="assets/img/dollar.svg" alt="">  
                          USD
                      </label>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 payb" data-ps="BTC">
                                    <input id="3" type="radio" name="ps" value="">
                                    <label for="3" class="planBox">     
                      <img src="assets/img/pay/pay-7.png" alt="">             
                          BTC
                      </label>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 payb" data-ps="ETH">
                                    <input id="4" type="radio" name="ps" value="">
                                    <label for="4" class="planBox">          
                      <img src="assets/img/pay/pay-10.png" alt="">        
                          ETH
                      </label>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 payb" data-ps="DOGE">
                                    <input id="5" type="radio" name="ps" value="">
                                    <label for="5" class="planBox">              
                      <img src="assets/img/pay/pay-9.png" alt="">    
                          DOGE
                      </label>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 payb" data-ps="BCH">
                                    <input id="6" type="radio" name="ps" value="">
                                    <label for="6" class="planBox">             
                      <img src="assets/img/pay/pay-15.png" alt="">     
                          BCH
                      </label>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 payb" data-ps="XRP">
                                    <input id="7" type="radio" name="ps" value="">
                                    <label for="7" class="planBox">           
                      <img src="assets/img/pay/pay-16.png" alt="">       
                          XRP
                      </label>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-2 payb" data-ps="TRX">
                                    <input id="8" type="radio" name="ps" value="">
                                    <label for="8" class="planBox">              
                      <img src="assets/img/pay/pay-20.png" alt="">    
                          TRX
                      </label>
                                </div>
                            </div>
                            <input type="text" class="form-control form_input" placeholder="Enter the amount" id="summ-dep">
                            <button class="form-control btn btn_form" onclick="calculation()">Calculate profit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
        <script>
            function round_mod(value, precision) {
                var precision_number = Math.pow(1, precision);
                return Math.round(value * precision_number) / precision_number;
            }

            function calculation() {
                var ps = $(".payb.active").attr("data-ps");
                var amount = parseFloat($("#summ-dep").val());
                var curr_amount = 0;
                var $percent = 0;
                var profit_day = 0;
                var profit_week = 0;
                var profit_month = 0;
                var profit_year = 0;
                var newamo = 0,
                    $min, $precision = 4;
                switch (ps) {
                    case "USD":
                        newamo = parseFloat(amount);
                        $min = 1;
                        break;

                    case "BTC":
                        newamo = parseFloat((amount * 53439.70));
                        $min = 0.0008;
                        $precision = 8;
                        break;
                    case "ETH":
                        newamo = parseFloat((amount * 1735.81));
                        $min = 0.006;
                        $precision = 8;
                        break;
                    case "LTC":
                        newamo = parseFloat((amount * 202.06));
                        $min = 0.018;
                        $precision = 8;
                        break;
                    case "XRP":
                        newamo = parseFloat((amount * 0.59202));
                        $min = 0.005;
                        $precision = 8;
                        break;
                    case "DOGE":
                        newamo = parseFloat((amount * 0.05776));
                        $min = 100;
                        $precision = 8;
                        break;
                    case "DASH":
                        newamo = parseFloat((amount * 284.82));
                        $min = 0.006;
                        $precision = 8;
                        break;
                    case "TRX":
                        newamo = parseFloat((amount * 0.053));
                        $min = 100;
                        $precision = 8;
                        break;
                    case "BCH":
                        newamo = parseFloat((amount * 613.59));
                        $min = 0.005;
                        $precision = 8;
                        break;

                    default:
                        newamo = parseFloat(amount / 70);
                        $min = 70;
                        break;
                }

                curr_amount = newamo;

                if (curr_amount >= 0.0005 && curr_amount < 100) {
                    $percent = 10;
                } else if (curr_amount >= 100 && curr_amount < 200) {
                    $percent = 22;
                } else if (curr_amount >= 200 && curr_amount < 300) {
                    $percent = 33;
                } else if (curr_amount >= 300) {
                    $percent = 44;
                }

                if (amount > 10000000) {
                    amount = 10000000;
                    $("#summ-dep").val(amount);
                }

                if (amount >= $min) {
                    var profit_day = round_mod(Number(amount / 100 * $percent), $precision);
                    var profit_week = round_mod(parseFloat(profit_day * 7).toFixed(10), $precision);
                    var profit_month = round_mod(parseFloat(profit_day * 30.5).toFixed(10), $precision);
                    var profit_year = round_mod(parseFloat(profit_day * 365).toFixed(10), $precision);
                }



                $("#valute_limit").html($min + " " + ps);

                if (ps == "RUB")
                    ps = 'P';

                $(".valute_ps").html(ps);

                $("#day").html(profit_day);
                $("#week").html(profit_week);
                $("#month").html(profit_month);
                $("#year").html(profit_year);

                return false;
            }

            $("#summ-dep").on("change keyup", calculation);

            $(".payb").click(function() {
                $(".payb").removeClass('active');
                $(this).addClass('active');
                var newamo, $min, $precision, amount = 0;

                var ps = $(this).attr("data-ps");
                $("input[name=ps]").val(ps);
                switch (ps) {
                    case "USD":
                        newamo = parseFloat(amount);
                        $min = 1;
                        break;

                    case "BTC":
                        newamo = parseFloat((amount * 53439.70));
                        $min = 0.0008;
                        $precision = 8;
                        break;
                    case "ETH":
                        newamo = parseFloat((amount * 1735.81));
                        $min = 0.006;
                        $precision = 8;
                        break;
                    case "LTC":
                        newamo = parseFloat((amount * 202.06));
                        $min = 0.018;
                        $precision = 8;
                        break;
                    case "XRP":
                        newamo = parseFloat((amount * 0.59202));
                        $min = 0.005;
                        $precision = 8;
                        break;
                    case "DOGE":
                        newamo = parseFloat((amount * 0.05776));
                        $min = 100;
                        $precision = 8;
                        break;
                    case "DASH":
                        newamo = parseFloat((amount * 284.82));
                        $min = 0.006;
                        $precision = 8;
                        break;
                    case "TRX":
                        newamo = parseFloat((amount * 0.053));
                        $min = 100;
                        $precision = 8;
                        break;
                    case "BCH":
                        newamo = parseFloat((amount * 613.59));
                        $min = 0.005;
                        $precision = 8;
                        break;

                    default:
                        newamo = parseFloat(amount / 70);
                        $min = 70;
                        break;
                }

                $("#summ-dep").val($min);
                calculation();
            });

            setTimeout(calculation, 4000);
        </script>

        <div class="container">
            <h3 class="stat-head">PROJECT STATISTICS</h3>
            <h3 class="stat-head" style="margin-top:10px; font-size:3vw;font-weight:300;">Start date: <span style="font-weight:900;">23/02/2021</span></h3>
            <div class="row">
                <div class="col-lg-8">
                    <div class="static">
                        <div class="d-flex justify-content-center flex-column flex-md-row justify-content-center">
                            <div class="image_static image_static_invest">Total replenished <span>54 060 USD</span></div>
                            <div class="image_static image_static_withdraw">Total output <span>22 418 USD</span></div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="image_static image_static_users">Total users <span>4356</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="stat_ref">
                        <h4>TOP REFERERS</h4>
                        <div class="stat_list">

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>1</div>
                                <div>ElenaMLM</div>
                                <div>599 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>2</div>
                                <div>ramil</div>
                                <div>169 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>3</div>
                                <div>iPlaneta</div>
                                <div>124 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>4</div>
                                <div>VEY6</div>
                                <div>97 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>5</div>
                                <div>investmonik</div>
                                <div>80 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>6</div>
                                <div>Oracle</div>
                                <div>79 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>7</div>
                                <div>VIPMonitor</div>
                                <div>64 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>8</div>
                                <div>Michael</div>
                                <div>62 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>9</div>
                                <div>Eldar007</div>
                                <div>58 people</div>
                            </div>

                            <div class="stat_list_item d-flex justify-content-between flex-md-row align-items-center">
                                <div>10</div>
                                <div>natalya</div>
                                <div>47 people</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </main>

    <footer style="position:static;">
        <div class="container-fluid footer">
            <div class="d-flex justify-content-between flex-md-row">
                <div class="footer_left">
                    <div class="footer_links_left d-flex justify-content-between flex-md-row align-items-center">
                        <a href="/">home</a>
                        <a href="/pages/about">About us</a>
                        <a href="/pages/Wallet">Wallet</a>
                    </div>
                    <div class="mail_footer"><img src="assets/img/mail.svg" alt=""><a href="mailto:support@KICKSTARTER TRX.org">support@KICKSTARTER TRX.org</a></div>
                </div>
                <div class="logo_footer">
                    <img src="assets/img/logo-KICKSTARTER TRX-big_1.png" alt="">
                </div>
                <div class="footer_right">
                    <div class="footer_links_right d-flex justify-content-between flex-md-row align-items-center">
                        <a href="/pages/support">Support</a>
                        <a href="/pages/faq">FAQ</a>
                        <a href="/pages/rules">rules</a>
                    </div>
                    <div class="KICKSTARTER TRX_footer">Copyright 2020-2021 KICKSTARTER TRX LTD. All rights reserved </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>

</html>