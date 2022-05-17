<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Actualite extends CI_Model{

    // public function insert($nom,$mail)
    // {
    //     $sql = "INSERT INTO Client VALUES(null,%s,%s)";
    //     $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($mail));	
	// 	$query = $this->db->query($sql);
    // }
    // public function listDevis($id){
    //     $sql = " select client.nom as nomClient,appareil.nom as nomAppareil,appareil.puissance as puissance,appareil.quantite as quantite,appareil.debut as debut,appareil.fin as fin,devis.daty as daty,besoins.consJour as consJ,besoins.consNuit as consN,besoins.TotalCons as consT from devis join maison on devis.id_maison = maison.id join client on client.id = devis.id_client join appmaison on appmaison.id_maison = maison.id join besoins on besoins.id = devis.id_besoins join appareil on appmaison.id_appareil=appareil.id where client.id =".$id;
    //     $query = $this->db->query($sql);
	// 	$devis = array();
	// 	foreach ($query->result_array() as $key) {
	// 		$devis[] = $key;
	// 	}
	// 	return $devis; 
    // }

    // public function getIdOlona(){
    //     $sql = "select max(id) as id from client";
    //     $query = $this->db->query($sql);
	// 	$devis = null;
	// 	foreach ($query->result_null as $key) {
	// 		$devis = $key['id'];
	// 	}
	// 	return $devis;
    // }
   
  
    // public function getIdBesoin(){
    //     $sql = "select max(id) as id from besoins";
    //     $query = $this->db->query($sql);
	// 	$devis = null;
	// 	foreach ($query->result_array() as $key) {
	// 		$devis = $key['id'];
	// 	}
	// 	return $devis;
    // }
    // public function insertBesoin($consJ,$consN,$consT){
    //     $sql = "INSERT INTO besoins VALUES(null,%s,%s,%s)";
    //     $sql = sprintf($sql,$consJ,$consN,$consT);	
	// 	$query = $this->db->query($sql);
    // }
  
    // public function getIdAppMaison(){
    //     $sql = "select max(id) as id from appareil";
    //     $query = $this->db->query($sql);
	// 	$devis = null;
	// 	foreach ($query->result_array() as $key) {
	// 		$devis = $key['id'];
	// 	}
	// 	return $devis;
    // }
    // public function insertDevis(){
    //     $idOlona = $this->getIdOlona();
    //     $idMaison= $this->getIdMaison();
    //     $idBesoin = $this->getIdBesoin();
    //     $sql = "INSERT INTO devis VALUES(null,%s,%s,%s,(select current_date))";
    //     $sql = sprintf($sql,$idMaison,$idOlona,$idBesoin);	
	// 	$query = $this->db->query($sql);
    // }

    public function getListeActu(){
        $sql="select * from actualite";
        $query = $this->db->query($sql);
        $row = $query->result_array();
        return $row;
    }

    public function getListeActuUnique($id){
        $sql="select * from actualite where idActualite=%s ";
        $sql = sprintf($sql,$this->db->escape($id));
        $query = $this->db->query($sql);
        $row = $query->result_array();
        return $row;
    }

    
}
?>