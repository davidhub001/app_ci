<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{	echo "API JSON";
		echo "ajouter dans l' url l' id du video http://localhost/admin/api/youtube/-3Jbd0OuDWU";
	}
	public function youtube($id){
		//recupere le titre video youtube et le couverture
		$url = "https://www.googleapis.com/youtube/v3/videos?key=AIzaSyBGvc4eKzwx28sg7bYhp7OSA2nVsEWEDOw&part=snippet,contentDetails&id=$id";
		$resultat=json_decode(file_get_contents($url));
		echo "Titre : ".$resultat->items[0]->snippet->title. "</br>";
		echo "Url couverture :" .$resultat->items[0]->snippet->thumbnails->high->url."</br>";
		echo "<iframe width='420' height='345' src='https://www.youtube.com/embed/$id'></iframe>";
	}
}