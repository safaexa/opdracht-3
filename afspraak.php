//afspraken maken

<?php
include 'db.php';


class Afspraak {
   private $db;

   public function __construct() {
       $this->db = new DB(); // Initialiseer de database verbinding
   }

   public function addAfspraak($naam, $achternaam, $datum, $tijd, $tandarts) {
       $sql = "INSERT INTO afspraak(naam, achternaam, datum, tijd, tandarts) VALUES (?, ?, ?, ?, ?)";
       return $this->db->execute($sql, array($naam, $achternaam, $datum, $tijd, $tandarts));
   }

   public function getAllAfspraak() {
       $sql = "SELECT * FROM afspraak";
       $stmt = $this->db->execute($sql);
       return $stmt ? $this->db->fetchAll($stmt) : [];
   }

   public function updateAfspraak($naam, $achternaam, $datum, $tijd, $tandarts, $afspraakID) {
    $sql = "UPDATE afspraak SET naam=?, achternaam=?, datum=?, tijd=?, tandarts=?,ee WHERE afspraakID=?";
    return $this->db->execute($sql, array($naam, $achternaam, $datum, $tijd, $tandarts, $afspraakID));
}


   public function deleteAfspraak($afspraakID) {
       $sql = "DELETE FROM afspraak WHERE afspraakID = ?";
       return $this->db->execute($sql, array($afspraakID));
   }
}
?>