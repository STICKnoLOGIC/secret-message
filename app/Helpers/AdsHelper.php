<?php

namespace App\Helpers;

class AdsHelper{
    //in Header
    const POPUNDER='<script src="https://godlessgirlsmoothly.com/ce/94/fb/ce94fbe3305c4444a5a3d9538f72ca4d.js"></script>';
    //anywhere clickable
    const SMARTLINK="https://godlessgirlsmoothly.com/cuj6e8318?key=385472db99ce0544ac7c31d67fc73d63"; 
    //before </body> tag
    const SOCIAL_BANNER='<script src="https://godlessgirlsmoothly.com/51/54/74/5154740d66983e4a92e96f8f54283fc4.js"></script>';
    //anywhere you put it inside of the body
    const NATIVE_BANNER='<script async="async" data-cfasync="false" src="https://godlessgirlsmoothly.com/bcb746976ca53f11f9d6d0db360d6a56/invoke.js"></script>
            <div id="container-bcb746976ca53f11f9d6d0db360d6a56"></div>';
    const BANNER_468x60=<<<'EOT'
        <script>
        atOptions = {
            'key' : '13fae104e4d885a1aa385bafbb8219b0',
            'format' : 'iframe',
            'height' : 60,
            'width' : 468,
            'params' : {}
        };
        </script>
        <script src="https://godlessgirlsmoothly.com/13fae104e4d885a1aa385bafbb8219b0/invoke.js"></script>
    EOT;
    const BANNER_300x250=<<<'EOT'
        <script>
        atOptions = {
            'key' : 'c2d94d26fd98640d8af46184deb6dba1',
            'format' : 'iframe',
            'height' : 250,
            'width' : 300,
            'params' : {}
        };
        </script>
        <script src="https://godlessgirlsmoothly.com/c2d94d26fd98640d8af46184deb6dba1/invoke.js"></script>
    EOT;
}   