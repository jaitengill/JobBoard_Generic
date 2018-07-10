        <footer class="text-center-xs space--xs ">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="list-inline">
                            <li>
                                <a href="#">
                                    <span class="h6 type--uppercase">All Jobs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="h6 type--uppercase">FAQ</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="h6 type--uppercase">Resources</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="h6 type--uppercase">How to post?</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 text-right text-center-xs">
                        <ul class="social-list list-inline list--hover">
                            <li>
                                <a href="#">
                                    <i class="socicon socicon-google icon icon--xs"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="socicon socicon-twitter icon icon--xs"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="socicon socicon-facebook icon icon--xs"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="socicon socicon-instagram icon icon--xs"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of row-->
                <div class="row">
                    <div class="col-md-7">
                        <span class="type--fine-print">&copy;
                            <span class="update-year"></span> <?php _e(APP_NAME); ?></span>
                        <a class="type--fine-print" href="#">Privacy Policy</a>
                        <a class="type--fine-print" href="#">Legal</a>
                    </div>
                    <div class="col-md-5 text-right text-center-xs">
                        <a class="type--fine-print" href="#">support@<?php _e(APP_NAME); ?></a>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </footer>
    
    </div> <!-- /container -->
    
    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
        <i class="stack-interface stack-up-open-big"></i>
    </a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php _e(THEME_ASSETS); ?>js/bootstrap.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/holder.js"></script>
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <?php if (isset($filestyle)): ?>
        <script src="<?php _e(THEME_ASSETS); ?>js/bootstrap-filestyle.min.js"></script>
    <?php endif; ?>
    <?php if (isset($markdown)): ?>
        <script src="<?php _e(ASSET_URL); ?>bootstrap-markdown/js/markdown.js"></script>
        <script src="<?php _e(ASSET_URL); ?>bootstrap-markdown/js/to-markdown.js"></script>
        <script src="<?php _e(ASSET_URL); ?>bootstrap-markdown/js/bootstrap-markdown.js"></script>
    <?php endif; ?>
    
    <?php if (GA_TRACKING != ''): ?>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php _e(GA_TRACKING); ?>']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <?php endif; ?>

  

    <script src="<?php _e(THEME_ASSETS); ?>js/stack/jquery-3.1.1.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/flickity.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/easypiechart.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/parallax.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/typed.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/datepicker.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/isotope.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/ytplayer.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/granim.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/jquery.steps.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/countdown.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/twitterfetcher.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/spectragram.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/smooth-scroll.min.js"></script>
    <script src="<?php _e(THEME_ASSETS); ?>js/stack/scripts.js"></script>

  </body>
</html>