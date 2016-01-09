<?php
namespace Controllers;

/**
*
*/
class ExampleController extends \Core\Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->exampleModel = new \Models\ExampleModel();
    }

    public function displayExample()
    {
    	$texts = $this->exampleModel->getTexts();
        
        $data['title'] = $texts['title'];
        $data['main_p'] = $texts['main_p'];

        $this->view->load('example_view', $data);
    }
}
