<?php

/**
 * The Default Example Controller Class
 *
 * @author Faizan Ayubi
 */
use Framework\Controller as Controller;
use Framework\RequestMethods as RequestMethods;

class Home extends Controller {

    public function index() {
        $view = $this->getLayoutView();
        if(isset($_COOKIES["terms_cconditionagreed"])){
            $cookies = session_get_cookie_params();
            var_dump($cookies);
            $view->set($agree, "yes");
        }
        if(RequestMethods::post("usrfeed")=="yes"){
            $paths= array("/home", "/work", "/membership", "awards", "/contact");
            setcookie("terms_cconditionagreed","yes", mktime().time()+60*60*24*30 , $paths, "", false, true);
            $view->set($agree, "yes");
        }
    }

    public function work() {
    	
    }

    public function memberships() {
    	
    }

    public function awards() {
    	
    }

    public function contact() {
    	
    }
    public function denied() {
        
    }
}
