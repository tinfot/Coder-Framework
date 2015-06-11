<?php

class Site extends Controller{
    
    public function actionIndex($name = 'Coder Framework'){
        $this->render('index',[
            'name' => $name,
        ]);
    }
    
    public function actionLogin(){
        $this->renderPartial('login',[
            'name' => 'Coder Framework',
        ]);
    }
    
    public function actionLoginSave(){
        if(isset($_POST['Login'])){
            if($_POST['Login']['username'] == $_POST['Login']['password'] && $_POST['Login']['password'] == 'admin'){
                $user = array('id'=>1,'username'=>'admin');
                Session::_set('User', $user);
                $this->redirect(['index']);
            }else{
                echo '登录失败';
            }
        }
    }
    
    public function actionLogout(){
        Session::_unset('User');
        $this->redirect(['login']);
    }
    
}
