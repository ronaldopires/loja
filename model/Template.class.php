<?php

Class Template extends SmartyBC{
    function __construct(){
        parent:: __construct();

        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache/');

    }
}


?>