<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essai extends CI_Controller {

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
    public function __construct(){
        parent::__construct();
        $this->load->model('Utilisateur');
    }
	public function index()
	{
		echo "mot _de passe";
	}
    public function affiche(){
        $data['query']=$this->Utilisateur->getById();
        $this->load->view('essai',$data);
    }
    public function insert(){
        $valeur=array('nom'=>'moi',
                    'prenom'=>'ausi');
        $this->Utilisateur->insert($valeur);
    }
    public function update(){
        $valeur=array('nom'=>'moi',
                    'prenom'=>'ausi');
        $this->Utilisateur->update($valeur,2);
    }
    public function delete(){
        $this->Utilisateur->delete(3);
    }
}