<?php

class Controller {

    public function __call($name, $arguments) {
        $controller = new Site();
        $controller->actionError($name);
    }
    

}
