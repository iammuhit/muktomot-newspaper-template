<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <title>মুক্তমত | মূল পাতা</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="bootstrap/js/html5.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/bootstrap/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/bootstrap/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/bootstrap/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/bootstrap/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/bootstrap/ico/favicon.png">
    </head>
    <body>

        <nav id="access" class="clearfix" role="navigation">
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#">মুক্তমত</a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li class="nav-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form pull-right">
                                <input class="span2" type="text" placeholder="ই-মেইল">
                                <input class="span2" type="password" placeholder="পাসওয়ার্ড">
                                <button type="submit" class="btn btn-success">সাইন ইন</button>
                            </form>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </nav> <!-- #access -->

        <div id="page" class="container-fluid">
            <div id="main" class="row-fluid clearfix">
                <div id="sidebar-left" class="span2 widget-area">
                    <aside id="archives" class="well sidebar-nav widget">
                        <h3 class="nav-header widget-title">ক্যাটেগরিসমূহ</h3>
                        <ul class="nav nav-list widget-content">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </aside> <!-- .widget -->

                    <aside id="meta" class="well sidebar-nav widget">
                        <h3 class="nav-header widget-title">Sidebar</h3>
                        <ul class="nav nav-list widget-content">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </aside> <!-- .widget -->
                </div> <!-- #sidebar-left .widget-area -->

                <div id="primary" class="span7">
                    <div id="content" role="main">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" class="clearfix">
                                    <header class="entry-header">
                                        <!--<hgroup>
                                            <h2 class="entry-title"><a href="" title="" rel="bookmark">Entry Title</a></h2>
                                            <h3 class="entry-format">Featured</h3>
                                        </hgroup>-->

                                        <h1 class="entry-title"><a href="#" title="" rel="bookmark"><?php the_title(); ?></a></h1>
                                        <div class="row-fluid">
                                            <div class="span11 entry-meta">
                                                <span class="sep">তারিখ ও সময়ঃ </span><a href="#" title="" rel="bookmark"><time class="entry-date" datetime="" pubdate>June 15, 2013</time></a>
                                                <span class="by-author"><span class="sep"> লেখকঃ </span><span class="author vcard"><a class="url fn n" href="#" title="View all posts by nurul amin" rel="author">মোহাম্মদ মোহিত</a></span></span>
                                            </div>
                                            <div class="span1 comments-link">
                                                <a href="#" title="">0</a>
                                            </div>
                                        </div>
                                    </header> <!-- .entry-header -->

                                    <!--<div class="entry-summary">

                                    </div> <!-- .entry-summary -->

                                    <div class="entry-content">
                                        <img class="post-thumbnail-left img-polaroid img-rounded pull-left" src="<?php echo get_template_directory_uri(); ?>/images/browser-icon-firefox.png" alt="" />
                                        <p>আজকের সব মিডিয়ার ই একটা বিশেষ সংবাদ "মানবতাবিরোধী অপরাধের মামলায় গ্রেপ্তার জামায়াতে ইসলামীর সেক্রেটারি জেনারেল আলী আহসান মোহাম্মাদ মুজাহিদ প্যারোলে মুক্তি পেয়েছেন।" তার মুক্তির কারন তারই ছোট ভাই দৈনিক সংগ্রামের ফরিদপুর জেলা প্রতিনিধি ও ফরিদপুর প্রেসক্লাবের সহ-সভাপতি আলী আশরাফ</p>
                                        <p>আজকের সব মিডিয়ার ই একটা বিশেষ সংবাদ "মানবতাবিরোধী অপরাধের মামলায় গ্রেপ্তার জামায়াতে ইসলামীর সেক্রেটারি জেনারেল আলী আহসান মোহাম্মাদ মুজাহিদ প্যারোলে মুক্তি পেয়েছেন।" তার মুক্তির কারন তারই ছোট ভাই দৈনিক সংগ্রামের ফরিদপুর জেলা প্রতিনিধি ও ফরিদপুর প্রেসক্লাবের সহ-সভাপতি আলী আশরাফ আজকের সব মিডিয়ার ই একটা বিশেষ সংবাদ "মানবতাবিরোধী অপরাধের মামলায় গ্রেপ্তার জামায়াতে ইসলামীর সেক্রেটারি জেনারেল আলী আহসান মোহাম্মাদ মুজাহিদ প্যারোলে মুক্তি পেয়েছেন।" তার মুক্তির কারন তারই ছোট ভাই দৈনিক সংগ্রামের ফরিদপুর জেলা প্রতিনিধি ও ফরিদপুর প্রেসক্লাবের সহ-সভাপতি আলী আশরাফ</p>
                                        <p>আজকের সব মিডিয়ার ই একটা বিশেষ সংবাদ "মানবতাবিরোধী অপরাধের মামলায় গ্রেপ্তার জামায়াতে ইসলামীর সেক্রেটারি জেনারেল আলী আহসান মোহাম্মাদ মুজাহিদ প্যারোলে মুক্তি পেয়েছেন।" তার মুক্তির কারন তারই ছোট ভাই দৈনিক সংগ্রামের ফরিদপুর জেলা প্রতিনিধি ও ফরিদপুর প্রেসক্লাবের সহ-সভাপতি আলী আশরাফ</p>
                                        <p>আজকের সব মিডিয়ার ই একটা বিশেষ সংবাদ "মানবতাবিরোধী অপরাধের মামলায় গ্রেপ্তার জামায়াতে ইসলামীর সেক্রেটারি জেনারেল আলী আহসান মোহাম্মাদ মুজাহিদ প্যারোলে মুক্তি পেয়েছেন।" তার মুক্তির কারন... <a href="#" class="more-link btn btn-small pull-right">বাকিটুকু পড়ুন <span class="meta-nav">&raquo;</span></a></p>
                                    </div> <!-- .entry-content -->

                                    <footer class="entry-meta">
                                        <span class="cat-links">
                                            <span class="entry-utility-prep entry-utility-prep-cat-links">ক্যাটেগরিসমূহঃ</span> <a href="#" title="" rel="category tag">খবর</a>, <a href="#" title="" rel="category tag">রাজ্নীতি</a>
                                        </span>

                                        <span class="sep"> | </span>

                                        <span class="tag-links">
                                            <span class="entry-utility-prep entry-utility-prep-tag-links">ট্যাগ্সমূহঃ </span> <a href="#" title="" rel="tag">খবর</a>, <a href="#" title="" rel="category tag">রাজ্নীতি</a>
                                        </span>

                                        <span class="edit-link pull-right"><a class="post-edit-link btn btn-small" href="#" title="">সম্পাদন করুন</a></span>
                                    </footer> <!-- .entry-meta -->
                                </article> <!-- #post-1 -->

                                <hr class="entry-devider" />
                            <?php endwhile; ?>
                        <?php endif; ?>                      
                    </div> <!-- #content -->

                    <div class="pagination pagination-centered">
                        <?php
                        global $wp_query;

                        $big = 999999999; // need an unlikely integer

                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'type' => 'list'
                        ));
                        ?>
                    </div>
                </div> <!-- #primary -->

                <div id="sidebar-right" class="span3 widget-area" role="complementary">
                    <aside id="archives" class="well sidebar-nav widget">
                        <h3 class="nav-header widget-title">Sidebar</h3>
                        <ul class="nav nav-list widget-content">
                            <li><a href="#"><i class="icon-hand-right"></i> Link</a></li>
                            <li><a href="#"><i class="icon-hand-right"></i> Link</a></li>
                            <li><a href="#"><i class="icon-hand-right"></i> Link</a></li>
                            <li><a href="#"><i class="icon-hand-right"></i> Link</a></li>
                        </ul>
                    </aside> <!-- .widget -->

                    <aside id="meta" class="well sidebar-nav widget">
                        <h3 class="nav-header widget-title">ক্যাটেগরিসমূহ</h3>
                        <ul class="nav nav-list widget-content">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li class="active"><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </aside> <!-- .widget -->
                </div> <!-- #sidebar-right .widget-area -->
            </div> <!-- #main -->

            <footer id="colophon" role="contentinfo">
                <div id="site-generator">
                    <span>
                        মুক্তমত &copy; সর্বসত্ত্ব সংরক্ষিত।<br />
                        ডেভেলপারঃ <a href="http://www.primitivesolution.com/" target="_blank">প্রাইমিটিভ সলুশন</a>
                    </span>
                </div>
            </footer> <!-- #colophon -->

        </div> <!-- #page -->


        <!-- Le javascript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/jquery_latest.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>
