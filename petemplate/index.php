<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>

<html lang="<?php echo $this->language; ?>" >

    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/960_24_col.css" type="text/css" />

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/modernizr-2.0.6.min.js"></script>
    </head>

    <body>
<!--        <jdoc:include type="modules" name="top" /> 
        <jdoc:include type="component" />
        <jdoc:include type="modules" name="bottom" /> -->
          <div id="container" class="container_24">
            <header>
                <div class="grid_7">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" />
                </div>
                <div class="grid_10 prefix_1 suffix_5">
                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/tagline.jpg" />
                </div>

                <div class="grid_10 prefix_1">
                    <input type="text" value="Search Site" id="search-box" />
                </div>
                <div class="grid_5">
                    <a href="#" id="btn-search" class="header-button">Search All Articles</a>
                </div>

                <div class="grid_24" id="wrap-top-menu">
                    <ul id="top-menu">
                        <li class="menu-item"><a href="#">Dr. Jon</a></li>
                        <li class="menu-item"><a href="#">Puppies</a></li>
                        <li class="menu-item"><a href="#">Dogs</a></li>
                        <li class="menu-item"><a href="#">Cats</a></li>
                        <li class="menu-item"><a href="#">Kittens</a></li>
                        <li class="menu-item"><a href="#">Health</a></li>
                        <!-- <li class="menu-item"><a href="#">Shop</a></li> -->
                    </ul>

                </div>

                <div class="container_24" id="banner">

                    <div class="grid_17" id="featured">
                        <h3 class="grid_6 prefix_10 suffix_5">Featured Article</h3>
                        <h2 class="grid_6 prefix_10">Behavior Of The Senior Cat</h2>
                        <div class="grid_6 prefix_10">
                            <div class="controls">
                                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/arrow-prev.png" />
                                <a href="#" id="btn-featured-prev">Previous</a>
                                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/dot-selected1.png" />
                                <a href="#" id="btn-featured-next">Next</a>
                                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/arrow-next.png" />
                            </div>
                        </div>
                    </div>
                    <div class="grid_7" id="links">
                        <h3>Popular Links</h3>
                        <ul>
                            <li><a href="#" class="text">Puppies</a></li>
                            <li><a href="#" class="text">English Bulldog</a></li>
                            <li><a href="#" class="text">Golden Retriever</a></li>
                            <li><a href="#" class="text">Pet Names</a></li>
                            <li><a href="#" class="text">Nutrition</a></li>
                            <li><a href="#" class="text">Breeds</a></li>
                            <li><a href="#" class="text">Adoption</a></li>
                            <li><a href="#" class="text">Behavior</a></li>
                        </ul>
                    </div>
                    <div class="grid_17" id="newsletter">
                        <h2>Sign up for Dr. Jon's FREE Newsletter</h2>
                        <span>Receive practical tips and health alerts. Enjoy heartwarming stories, photos &amp; more.</span>
                        <div id="wrap-newsletter">
                            <input type="text" placeholder="Enter your email address" />
                            <a href="#" class="header-button" id="btn-subscribe">Subscribe Now!</a>
                        </div>
                    </div>
                    <div class="grid_7" id="follow">
                        <span class="text">Follow Us On</span>
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/ic-facebook.jpg" />
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/ic-twitter.jpg" />
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/ic-rss.jpg" />
                    </div>
                </div>

            </header>
            <div id="main" role="main">
                <div class="article-title grid_10">PetPlace - Today's Features</div>
                <div class="article-date grid_5 prefix_3">September 18, 2011</div>
                <div class="article-body grid_17">

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et velit quis ante semper interdum eget a est. Donec faucibus massa id libero pharetra vitae feugiat lectus laoreet. Aliquam vel sapien arcu. Proin vulputate accumsan vestibulum. In hac habitasse platea dictumst. Cras imperdiet lobortis faucibus. Maecenas sodales pellentesque aliquam.
        Phasellus auctor turpis eget sem hendrerit euismod. Integer adipiscing, eros sit amet ullamcorper vehicula, ante nisi varius nulla, imperdiet convallis sem orci facilisis tortor. Vestibulum ut scelerisque justo. Fusce nec aliquet nulla. Fusce ac odio dui. Maecenas leo augue, congue in convallis nec, viverra sit amet nunc. Nam non mauris et nibh ornare dignissim. Etiam consectetur aliquet neque, quis adipiscing lectus tincidunt nec. Integer commodo semper ante.
        Aliquam semper facilisis dapibus. Phasellus at erat leo. Integer ultrices ante a nisl condimentum ut semper quam auctor. Vestibulum et felis libero. Curabitur ante ante, blandit eget pretium at, pretium bibendum ante. Donec eu felis id dui malesuada imperdiet at facilisis urna. Aenean cursus vehicula augue, quis gravida nisi ultricies sit amet.</p>

        <p>Nullam tincidunt placerat lectus nec convallis. Donec ante nisi, dignissim non tristique vitae, sollicitudin quis orci. Phasellus erat elit, vehicula eu accumsan varius, vehicula sed leo. Pellentesque cursus orci sapien. Duis lobortis gravida tellus, ut iaculis augue bibendum vel. Morbi eu mi nulla, sed consequat turpis. Nam varius vulputate fermentum. Vivamus ut pretium ligula. Nunc non mauris neque.
        Quisque tempor justo orci. Fusce tincidunt quam eget risus pellentesque at imperdiet velit imperdiet. Mauris lobortis lobortis porttitor. Praesent pharetra semper pellentesque. Donec diam lorem, bibendum quis venenatis eu, suscipit ac quam. Etiam adipiscing eleifend nunc non tristique. Suspendisse potenti. Sed dictum pulvinar mi, sit amet imperdiet dui facilisis ut. Aenean lectus nunc, sagittis ut vehicula vitae, scelerisque sed justo.</p>
                </div>
            </div>
            <footer>

            </footer>
          </div> <!--! end of #container -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


        <!-- scripts concatenated and minified via ant build script-->
            <script defer src="js/plugins.js"></script>
        <script defer src="js/script.js"></script>
        <!-- end scripts-->


            <script> // Change UA-XXXXX-X to be your site's ID
        window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
        Modernizr.load({
            load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
        });
        </script>


          <!--[if lt IE 7 ]>
            <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
            <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
          <![endif]-->
    </body>

</html>

