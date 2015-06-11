<?php
class Model {

    protected $dao;

    function __construct($dao) {
        $this->dao = $dao;
    }

}
?>