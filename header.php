<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once('blog/wp-blog-header.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php wp_title( ' - ', true, 'right' ); ?>Joyride Laboratories - We make Nikki and the Robots!</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="joyride, laboratories, labs, videogames, videospiele, independent, indie, berlin, nikki, robots" />
    <meta name="description" content="Joyride Laboratories | Berlin" />
    <meta name="robots" content="all" />

    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />


    <link rel="stylesheet" media="all" href="/joyride.css" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="Joyride RSS Feed" href="http://feeds.feedburner.com/JoyrideLabs" />

    <script type="text/javascript" language="JavaScript">

        function preloadImages() {
            var imgs = ['pony-aqua.png', 'pony-green.png', 'pony-orange.png', 'pony-pink.png', 'pony-purple.png', 'pony-red.png', 'link-download-over.png', 'link-greenlight-over.png', 'link-buy-over.png', 'link-facebook-over.png', 'link-google-over.png', 'link-reddit-over.png', 'link-irc-over.png', 'link-indiedb-over.png', 'link-vimeo-over.png', 'link-youtube-over.png', 'link-feed-over.png', 'link-newsletter-over.png', 'link-twitter-over.png', 'nikki_tshirt_over.png', 'banner-se-over.png', 'dot-aqua.png', 'dot-green.png', 'dot-pink.png', 'dot-red.png', 'dot-white.png'];

            var iterate = function (i) {
                if (imgs.length > i) {
                    var img = new Image();
                    img.src = '/img/' + imgs[i];
//                     console.log("loading: " + img.src);
                    img.onLoad = function () {
                        iterate(i + 1);
                    }();
                };
            };
            iterate(0);
        };
    </script>
    <script type="text/javascript">
    /* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
    /* ]]> */
    </script>
</head>
<body onload="javascript:preloadImages()">

<div style="font-size:x-large;font-weight:bold;color:white;width:780px;padding:10px;border:2px solid darkred;margin:1em auto;background-color:#444;">
    The Joyride Labs no longer actively work on this project. A lot of the information on this website is outdated. See <a style="color:#aaa;" href="http://joyridelabs.de/blog/?p=1557">this blog post</a> to find out more.
</div>
