<?php

    $flux = [ 'https://www.jeuxactu.com/rss/ja.rss',
            'https://www.jeuxactu.com/rss/tests.rss',
            'https://www.jeuxactu.com/rss/ps5.rss',
            'https://www.jeuxactu.com/rss/tips.rss',
            'https://www.jeuxactu.com/rss/sorties.rss'
            ];

           

            $rss = simplexml_load_file($_COOKIE['flux']);
            $rss2 = simplexml_load_file($_COOKIE['flux1']);
            $rss3 = simplexml_load_file($_COOKIE['flux2']);
?>