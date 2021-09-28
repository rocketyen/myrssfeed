<?php

    $flux = [ 'https://www.jeuxactu.com/rss/ja.rss',
            'https://www.jeuxactu.com/rss/tests.rss',
            'https://www.jeuxactu.com/rss/ps5.rss',
            'https://www.jeuxactu.com/rss/tips.rss',
            'https://www.jeuxactu.com/rss/sorties.rss'
            ];

            setcookie('flux', $flux[4],time()+3600);
            setcookie('flux1',$flux[4],time()+3600);
            setcookie('flux2',$flux[4],time()+3600);
            $rss = simplexml_load_file($_COOKIE['flux']);
            $rss2 = simplexml_load_file($_COOKIE['flux']);
            $rss3 = simplexml_load_file($_COOKIE['flux']);
?>