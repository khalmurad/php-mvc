<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php'; //route-ni joylashuvini aniqlash
        $this->routes =  include($routesPath); //$routes ga uni tenglashtirish
    }

    /**
     * SO'ROV QATORINI QAYTARADI
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * ROUTENI ISHGA TUSHIRADI
     */
    public function run()
    {
        //so'rov qatorini olish
        $uri = $this->getURI();
        
        //kelgan so'rovni routes.php-dan tekshirish
        //news              =>  news/index
        //$this->routes     =   routes.php joylashgan joy
        //$uriPattern       =   news
        //$path             =   news/index
        foreach ($this->routes as $uriPattern => $path) //news => news/index
        {
            // $uriPattern va $path-ni taqqoslaymiz
            if (preg_match("~$uriPattern~", $uri))
            {
                echo '+';
            }
        }
    }
}