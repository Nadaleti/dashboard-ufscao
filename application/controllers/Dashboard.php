<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index(){
    $this->load->view('dashboard/index');
    }

    public function dog_form(){
        $this->load->view('dashboard/dog-form');
    }

    public function dog_list(){
        $this->load->view('dashboard/dog-list');
    }

    public function dog_info() {
        $this->load->view('dashboard/dog-info');
    }

    public function ajudantes(){
        $this->load->view('dashboard/ajudantes');
    }
    
    public function eventos() {
        $this->load->view('dashboard/eventos');
    }
    
    public function parceiros(){
        $this->load->view('dashboard/parceiros');
    }
    
    public function parceiros_form(){
        $this->load->view('dashboard/parceiros-form');
    }
}
