<?php
require_once('vendor/smarty/smarty/libs/Smarty.class.php');

class Smarty_init extends Smarty {

    public function __construct() {
        parent::__construct();

        $this->setTemplateDir('smarty/templates');
        $this->setConfigDir('smarty/configs');
        $this->setCompileDir('smarty/templates_c');
        $this->setCacheDir('smarty/cache');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }
}