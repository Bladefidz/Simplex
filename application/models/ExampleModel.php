<?php
namespace Models;

/**
*
*/
class ExampleModel extends \Core\Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getTexts() {
        $res = ['title' => 'Simplex Example View', 'main_p' => 'this is example page'];
        return $res;
    }
}
