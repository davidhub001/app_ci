<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
    public function index(){
        echo '<center>curl en php</center></br>';
        echo '<center>CURL signifie Client URL et c’est une bibliothèque qui vous permet d’effectuer des requêtes HTTP en PHP.est un moyen d’accéder à une URL à partir de notre code pour en obtenir une réponse HTML. Il vous permet de vous connecter à d’autres URL et d’utiliser leurs réponses dans notre code. Dans ce tutoriel PHP | CURL, nous allons découvrir ce concept en détail.</center>';
        // Récupérer le contenu de la page Web à partir de l'url.
        $url = "http://localhost/admin/"; 
        // Initialisez une session CURL.
        $ch = curl_init();  
        // Récupérer le contenu de la page
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        //Saisir l'URL et la transmettre à la variable.
        curl_setopt($ch, CURLOPT_URL, $url); 
        //Désactiver la vérification du certificat puisque waytolearnx utilise HTTPS
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //Exécutez la requête 
        $result = curl_exec($ch); 
        //Afficher le résultat
        echo $result;  
    }
    public function post_curl(){
        echo "<center>Requête POST avec cURL en PHP

        Une requête POST est généralement effectuée pour envoyer les données collectées par l’utilisateur à un serveur.</center></br>";
        $data = array(
            'v' => 'tgbNymZ7vqY',
            'test' => 'enjana'
         );
          $url = "http://localhost/admin/curl/result_curl";
         
         $ch = curl_init ();
            curl_setopt_array ($ch,  array(CURLOPT_URL => $url,
                            CURLOPT_POST => true,
                            CURLOPT_POSTFIELDS => $data,
                            CURLOPT_RETURNTRANSFER => true)
                        );
         $response = curl_exec ($ch); 
         
         if(!$response){
                 die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
             }
            else{
                echo $response;
            }
         curl_close($ch);

    }

    public function get_curl(){
        echo "<center>Requête GET avec cURL en PHP

        Une requête GET récupère les données d’un serveur. Il peut s’agir du code HTML d’un site Web, d’une réponse API ou d’autres ressources.</center>";

        $url = 'http://localhost/admin/api/youtube/-3Jbd0OuDWU';
        $crl = curl_init();
        
        curl_setopt($crl, CURLOPT_URL, $url);
        curl_setopt($crl, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($crl);
        
        if(!$response){
            die('Error: "' . curl_error($crl) . '" - Code: ' . curl_errno($crl));
        }else{
            var_dump($response);
        }
        curl_close($crl);
    }
    public function result_curl(){
        echo "resultat du post_curl </br>";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
}