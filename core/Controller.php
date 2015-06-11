<?php

class Controller {

    private $view = 'views/';
    private $extention = '.php';
    protected $templete = 'views/layouts/';
    protected $headerLayout = 'header';
    protected $footerLayout = 'footer';

    public function __call($name, $arguments) {
        throw new CException(get_class($this) . " cannot find the requested method {$name}", 404);
    }

    public function render($_viewFile_, $_data_ = null, $_return_ = false) {
        $controller = get_class($this);
        $filename = $this->view . strtolower($controller) . '/' . $_viewFile_ . $this->extention;
        if (file_exists($filename)) {
            if (is_array($_data_)) {
                extract($_data_, EXTR_PREFIX_SAME, 'data');
            }
            if ($_return_) {
                return file_get_contents($filename);
            } else {
                include_once($this->templete . $this->headerLayout . $this->extention);
                include_once($filename);
                include_once($this->templete . $this->footerLayout . $this->extention);
            }
        } else {
            throw new CException("{$controller} cannot find the requested view {$_viewFile_}", 404);
        }
    }

    public function renderPartial($_viewFile_, $_data_ = null, $_return_ = false) {
        $controller = get_class($this);
        $filename = $this->view . strtolower($controller) . '/' . $_viewFile_ . $this->extention;
        if (file_exists($filename)) {
            if (is_array($_data_)) {
                extract($_data_, EXTR_PREFIX_SAME, 'data');
            }
            if ($_return_) {
                return file_get_contents($filename);
            } else {
                include_once($filename);
            }
        } else {
            throw new CException("{$controller} cannot find the requested view {$_viewFile_}", 404);
        }
    }

    public function redirect($url, $statusCode = 302) {
        if (is_array($url)) {
            $route = isset($url[0]) ? $url[0] : '';
            $url = $this->createUrl($route, array_splice($url, 1));
        }
        header('Location: index.php?c=' . $url, true, $statusCode);
    }

    public function createUrl($route, $params = array(), $ampersand = '&') {
        if ($route === ''){
            $route = strtolower(get_class($this)) . '/index';
        }
        if (strpos($route, '/') === false) {
            $route = strtolower(get_class($this)) . '/' . $route;
        }
        foreach($params as $parmeName => $paramValue){
            $route .= '&'.$parmeName.'='.$paramValue;
        }
        return $route;
    }
}
