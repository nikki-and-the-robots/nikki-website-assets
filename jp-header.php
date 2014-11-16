<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="ja">
<head>
    <title>Joyride Laboratories</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="joyride, laboratories, labs, videogames, videospiele, independent, indie, berlin, nikki, robots" />
    <meta name="description" content="Joyride Laboratories | Berlin" />
    <meta name="robots" content="all" />

    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />


    <link rel="stylesheet" media="all" href="/joyride.css" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="Joyride RSS Feed" href="/blog/?feed=rss2" />
    <link rel="alternate" type="application/atom+xml" title="Joyride Atom Feed" href="/blog/?feed=atom" />

    <script type="text/javascript" language="JavaScript">

        function preloadImages() {
            var imgs = ['pony-aqua.png', 'pony-green.png', 'pony-orange.png', 'pony-pink.png', 'pony-purple.png', 'pony-red.png', 'link-download-over', 'link-greenlight-over.png', 'link-buy-over.png', 'link-facebook-over', 'link-indiedb-over', 'link-vimeo-over', 'nikki_tshirt_over.png', 'banner-se-over.png', 'dot-aqua.png', 'dot-green.png', 'dot-pink.png', 'dot-red.png', 'dot-white.png'];

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
</head>
<body onload="javascript:preloadImages()">

<div style="font-size:x-large;font-weight:bold;color:white;width:780px;padding:10px;border:2px solid darkred;margin:1em auto;background-color:#444;">
    The Joyride Labs no longer actively work on this project. A lot of the information on this website is outdated. See <a style="color:#aaa;" href="http://joyridelabs.de/blog/?p=1557">this blog post</a> to find out more.
</div>
