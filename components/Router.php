<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php'; //route-ni joylashuvini aniqlash / location to route
        $this->routes =  include($routesPath); //$routes ga uni tenglashtirish / equalization to $route
    }

    /**
     * SO'ROV QATORINI QAYTARADI / RETURN THE REQUEST LINE
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * ROUTENI ISHGA TUSHIRADI / RUN TO ROUTE
     */
    public function run()
    {
        //so'rov qatorini olish / get the request string
        $uri = $this->getURI();
        
        //kelgan so'rovni routes.php-dan tekshirish / check the incoming request from routes.php
        //news              =>  news/index
        //$this->routes     =   routes.php joylashgan joy / where routes.php is located
        //$uriPattern       =   news
        //$path             =   news/index
        foreach ($this->routes as $uriPattern => $path) //news => news/index
        {
            // $uriPattern va $path-ni taqqoslaymiz / Let's compare $uriPattern and $path
            if (preg_match("~$uriPattern~", $uri))
            {
                echo '+';
            }
        }
    }
}
