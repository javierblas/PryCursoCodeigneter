<?php if( ! defined ('BASEPATH')) exit('error al intentar acceder');

    class DocCobroController extends CI_Controller{

        public function _construct(){
            parent::_construct();
            $this->load->model('');
        }

        public function index(){
            $this->load->view('DocCobroView');
        }
    }
?>