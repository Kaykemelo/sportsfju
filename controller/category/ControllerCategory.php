<?php
require 'model/category/ModelCategory.php';

class ControllerCategory{

    public function getList(){

        $obj = new ModelCategory();

        $aCategory = $obj->getDataCategory();
        include 'view/category/List.php';
    }

}



?>