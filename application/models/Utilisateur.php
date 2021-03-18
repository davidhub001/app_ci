<?php
class Utilisateur extends CI_Model{
    public $nom;
    public $prenom;
    public function __construct(){
        parent::__construct();
    }
    public function getById(){
        $query = $this->db->get('utilisateur');
        return $query->result();
    }
    public function insert($data){
        $this->nom=$data['nom'];
        $this->prenom=$data['prenom'];
        return $this->db->insert('utilisateur',$this);
    }
    public function update($data,$id){
        $this->nom=$data['nom'];
        $this->prenom=$data['prenom'];
        return $this->db->update('utilisateur',$this,array('id'=>$id));
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('utilisateur'); 
    }
}