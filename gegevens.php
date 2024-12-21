<?php
include 'db.php';


class Patient {
   private $db;

   public function __construct() {
       $this->db = new DB(); // Initialiseer de database verbinding
   }

   public function getGeschiedenisById($GeschiedenisID) {
    $sql = "SELECT * FROM patient WHERE patientID = ?";
    $stmt = $this->db->execute($sql, array($GeschiedenisID));
    return $stmt ? $stmt->fetch(PDO::FETCH_ASSOC) : null;
   }

   public function addPatient($naam, $achternaam, $geboortedatum, $woonadres, $telefoonnummer, $email, $verzekeringnummer) {
       $sql = "INSERT INTO patient (naam, achternaam, geboortedatum, woonadres, telefoonnummer, email, verzekeringnummer) VALUES (?, ?, ?, ?, ?, ?, ?)";
       return $this->db->execute($sql, array($naam, $achternaam, $geboortedatum, $woonadres, $telefoonnummer, $email, $verzekeringnummer));
   }

   public function getAllPatient() {
       $sql = "SELECT * FROM patient";
       $stmt = $this->db->execute($sql);
       return $stmt ? $this->db->fetchAll($stmt) : [];
   }

   public function updatePatient($naam, $achternaam, $geboortedatum, $woonadres, $telefoonnummer, $email, $verzekeringnummer, $patientID) {
    $sql = "UPDATE patient SET naam=?, achternaam=?, woonadres=?, telefoonnummer=?, email=?, verzekeringnummer=?,ee WHERE patientID=?";
    return $this->db->execute($sql, array($naam, $achternaam, $geboortedatum, $woonadres, $telefoonnummer, $email, $verzekeringnummer, $patientID));
}


   public function deletePatient($patientID) {
       $sql = "DELETE FROM patient WHERE patientID = ?";
       return $this->db->execute($sql, array($patientID));
   }
}
?>