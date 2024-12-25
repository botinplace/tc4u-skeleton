<?php
namespace MainApp\Controllers;

use Core\Controller;

class IndexController extends Controller {
	function __construct($pagedata=[]){
		 parent::__construct($pagedata);
	}
	
    public function index() {
		$vars = [];
		$vars['mytasks_b'] = 'ПОКА!';
		$extra_vars = [];
		$extra_vars['authorconentblock'] = 'ПРИВЕТ!!!!!!';
		$this->render();
    }
	
	public function indexPost() {
		
		if(isset($_POST['afile'])){
			var_dump( $_POST['afile'] );
		}
		
		if(isset($_FILES)){
			var_dump( $_FILES );
		}
			
	}
}