<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/appybirthday-base-styles.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-inner">
            <header>Birthday Card App</header>
        </div>

        <div class="banner"></div>

        <div class="container-inner">
            <h3>Let's get started</h3>
            <h2>Fill out your friends details below</h2>
        </div>

        <div class="container-inner">
            <form name="" id="" action="" method="post" class="">

                <div class="grid grid-hl grid-vl">

                    <div class="unit size6of10">
                        <label for="person_fname">Your Friends Name:</label>
                        <input type="text" id="person_fname" placeholder="Ryan Gosling">
                    </div>

                    <div class="unit size4of10">
                        <select>
                            <!-- points given for creating a PHP loop? -->
                            <option>1
                            <option>2
                            <option>...
                        </select>
                        <select>
                            <option>January
                            <option>February
                            <option>...
                        </select>
                    </div>

                    <div class="unit size1of1">
                        <textarea style="width: 100%;">Your birthday message here</textarea>
                    </div>

                    <div class="unit size1of2">
                        <label for="person_sname">Your Friends email address:</label>
                        <input type="text" id="person_sname" placeholder="">
                    </div>

                    <div class="unit size1of2">
                        <div class="grid">
                            <div class="unit size1of3">twitter</div>
                            <div class="unit size1of3">facebook</div>
                            <div class="unit size1of3">
                                <button type="submit" value="Submit" class="">
                                    <span>Submit</span>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>

            </form>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
