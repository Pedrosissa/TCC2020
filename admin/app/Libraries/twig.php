<?php

$date_foo = new Twig\TwigFunction('datefoo', function(){
    return date('Y');
});

$url = new \Twig\TwigFunction('url', function(){
    return URL;
});

$pathcss = new \Twig\TwigFunction('pathcss', function(){
    return PATH_CSS;
});

$pathjs = new \Twig\TwigFunction('pathjs', function(){
    return PATH_JS;
});

$pathimg = new \Twig\TwigFunction('pathimg', function(){
    return PATH_IMG;
});

$session = new \Twig\TwigFunction('session', function($session){
    $sess = new Session();
    if($sess->get_userdata($session) === NULL){
        header("Location: " . URL . "login");
    }else{
        
        $token = md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
        if($sess->get_userdata('user_token', 'user_token') != $token){
            $sess->destroy();
            header("Location: " . URL . "login");
        }else{
            $hasuser = new User_model();
            if(@!$hasuser->getHasUser($sess->get_userdata($session)['user_id'])){
                $sess->destroy();
                header("Location: " . URL . "login");
            }
        
        }
    }
});

$has_session = new \Twig\TwigFunction('has_session', function($session){
    $sess = new Session();
    if($sess->get_userdata($session) !== NULL){

        $token = md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

        if($sess->get_userdata('user_token', 'user_token') != $token){
            $sess->destroy();
            header("Location: " . URL . "login");
        }else{
            $hasuser = new User_model();
            if(@!$hasuser->getHasUser($sess->get_userdata($session)['user_id'])){
                $sess->destroy();
                header("Location: " . URL . "login");
            }else{
                header("Location: " . URL . "");
            }

        }


    }
});

$username = new \Twig\TwigFunction('username', function($session){
    $user = new Session;
    return $user->get_userdata($session, 'user_name');
    
});

return [
    $date_foo,
    $url,
    $pathcss,
    $pathjs,
    $pathimg,
    $session,
    $has_session,
    $username,
];