<?php

class Site extends Controller{
    
    public function actionIndex(){
        echo 'Hello World!';
    }
    
    public function actionLogin($v1,$v2,$v3){
        echo $v1;
        echo $v2;
        echo $v3;
        echo 'Login';
    }
    
    public function actionError($error=null){
        echo $error;
    }
}
