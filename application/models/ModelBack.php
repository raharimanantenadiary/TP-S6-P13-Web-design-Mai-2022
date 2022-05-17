<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ModelBack extends CI_Model{

    public function login($nom,$mdp)
	{
		$sql ="select * from admin where loginAdmin=%s and mdpAdmin = sha1(%s) ";
		$sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($mdp));
        $check = false;
		$query = $this->db->query($sql);
		$row = $query->result_array();
			if (count($row)>0) {
				$check = true;
		}
		return $check;
	}

    public function insertActu($titre,$image,$information,$source,$pays){
        $sql="insert into actualite values(null,%s,%s,%s,%s,%s)";
        	$sql = sprintf($sql,
            $this->db->escape($titre),
            $this->db->escape($image),
            $this->db->escape($information),
            $this->db->escape($source),
            $this->db->escape($pays));
            
            $this->db->query($sql);
    }
    
    public function deleteActu($id){
        $sql="delete from actualite where idActualite =%s ";
        $sql = sprintf($sql,$this->db->escape($id));
        $this->db->query($sql);
    }
   
    //  public function getCategorie(){
       
    //    $sql = "SELECT * FROM categorie";
    //     $sql=sprintf($sql);
    //     $query = $this->db->query($sql);
    //     $client = array();
    //     foreach ($query->result_array() as $key) {
    //         $client[] = $key;
    //     }
    //     return $client;
    // }
    //  public function getCat($categorie){
       
    //    $sql = "SELECT idCategorie FROM categorie where categorie='%s'";
    //     $sql=sprintf($sql,$categorie);
    //     $query = $this->db->query($sql);
        
    //     return $query;
    // }

    // public function getActu(){
       
    //    $sql = "SELECT a.idActu,a.daty,c.categorie,a.titre,a.resume,a.contenu,a.url FROM actu as a join categorie as c on a.idCategorie=c.idCategorie ";
    //     $sql=sprintf($sql);
    //     $query = $this->db->query($sql);
    //     $client = array();
    //     foreach ($query->result_array() as $key) {
    //         $client[] = $key;
    //     }
    //     return $client;
    // }

    // public function getFiche($url,$idActu){
       
    //    $sql = "SELECT a.idActu,a.daty,c.categorie,a.titre,a.resume,a.contenu FROM actu as a join categorie as c on a.idCategorie=c.idCategorie where url='%s' and idActu='%s' ";
    //     $sql=sprintf($sql,$url,$idActu);
    //     $query = $this->db->query($sql);
    //     $client = array();
    //     foreach ($query->result_array() as $key) {
    //         $client[] = $key;
    //     }
    //     return $client;
    // }

    //  function createUrlSlug($urlString){
    //     $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
    //     return $slug;
    //  }
   
    //  public function ajoutActu($daty,$categorie,$titre,$resume,$contenu){
    //     $slug=$this->createUrlSlug($titre);
    //     $req="INSERT INTO actu values (null,%s,%s,%s,%s,%s,%s)";
    //     $sql = sprintf($req,$this->db->escape($daty),$this->db->escape($categorie),$this->db->escape($titre),$this->db->escape($resume),$this->db->escape($contenu),$this->db->escape($slug));
    //     $this->db->query($sql);
    // }
    
}
?>