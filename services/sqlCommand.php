<?php

class MyComponentsSql {
    private $_dataBase;
    // CONNECTION A LA BASE DE DONNEES ET TRAITEMENT DES ERREURS
    public function connectDataBase($myDB){
    //    try {
            // CONNECTION A MYSQL
            $this->_dataBase = new PDO('mysql:host=localhost;dbname='.$myDB.';charset=utf8', 'root', '');

            // ACTIVE LA GESTION DES ERREURS : REMONTE DANS LE CODE LES EXCEPTIONS SQL 
            $this->_dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        // }
        // catch (Exception $e) {
	    //     // EN CAS D'ERREUR ON AFFICHE UN MESSAGE ET ON ARRETE TOUT
        //     die('Erreur : ' . $e->getMessage());
        // }
    }

    public function addNewPatient ($lastname,$firstname, $birthdate,$phone,$mail){
        $query = $this->_dataBase->prepare('INSERT INTO patients (lastname,firstname,birthdate,phone,mail) VALUES (:lastname, :firstname,:birthdate, :phone,:mail)');
        $query->bindParam(':lastname', $lastname);
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':birthdate',$birthdate);
        $query->bindParam(':phone',$phone);
        $query->bindParam(':mail',$mail);
        $query->execute();
        $query->closeCursor();
    }

    public function listPatients($page){
        $query = $this->_dataBase->prepare('select count(*) from patients');
        $query->execute();
        $result = $query->fetch();
        $query->closeCursor();
        $nbre_pages= ceil(intval($result[0]) / 5);
        $offset = ( $page * 5 ) - 5;
        $query = $this->_dataBase->prepare('select * from patients order by lastname LIMIT 5 OFFSET :offset');
        $query->bindParam(':offset', $offset, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return [$nbre_pages,$result];
    }

    public function getPatients(){
        $query = $this->_dataBase->prepare('select lastname,id from patients');
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }

    public function profilPatients($id){
        $query = $this->_dataBase->prepare('select * from patients where patients.id=:id');
        $query->bindParam(':id', intval($id));
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        if(!$result)
        {
            throw new ExceptionWithRedirect("Impossible de modifer le profil du patient !", 400, "liste-des-patients"); 
        }
        return $result;
    }

    public function profilRdvPatients($id){
        $query = $this->_dataBase->prepare("select appointments.id as idrdv, date_format(dateHour,'%Y-%m-%d') as dateRdv, date_format(dateHour,'%H:%i') as heureRdv, lastname, firstname, birthdate, phone, mail from patients LEFT JOIN appointments on patients.id=appointments.idPatients where patients.id=:id");
        $query->bindParam(':id', intval($id));
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        if(!$result)
        {
            throw new ExceptionWithRedirect("Impossible d'afficher' le profil du patient !", 400, "liste-des-patients"); 
        }
        return $result;
    }

    public function updatePatients($id,$lastname,$firstname,$birthdate,$phone,$mail){
        $query = $this->_dataBase->prepare('UPDATE patients set lastname=:lastname,firstname=:firstname,birthdate=:birthdate,phone=:phone,mail=:mail where patients.id=:id');
        $query->bindParam(':id', $id);
        $query->bindParam(':lastname', $lastname);
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':birthdate',$birthdate);
        $query->bindParam(':phone',$phone);
        $query->bindParam(':mail',$mail);
        $query->execute();
        $query->closeCursor();
    }

    public function searchPatient($nomPatient){
        $query = $this->_dataBase->prepare("SELECT * FROM patients WHERE LOWER(lastname) LIKE LOWER(:nomPatient)");
        $concat = $nomPatient.'%';
        $query->bindParam(':nomPatient',$concat);
        $query->execute();
        $patient = $query->fetchAll();
        $query->closeCursor();
        return ["1",$patient];
    }

    public function deletePatient($idPatient){
        $query = $this->_dataBase->prepare('DELETE FROM patients WHERE id=:idPatient');
        $query->bindParam(':idPatient', $idPatient);
        $query->execute();
        $query->closeCursor();
        return true;
    }
    
    public function newRdv($dateRdv,$heureRdv,$idpatients){
        $query = $this->_dataBase->prepare('INSERT INTO appointments (dateHour, idpatients) values (:dateHour, :idpatients)');
        $concat = $dateRdv." ".$heureRdv;
        $query->bindParam(':dateHour', $concat);
        $query->bindParam(':idpatients', intval($idpatients));
        $query->execute();
        $query->closeCursor();
        return true;
    }

    

    public function rdv($idrdv){
        $query = $this->_dataBase->prepare("select appointments.id as idrdv, date_format(dateHour,'%Y-%m-%d') as dateRdv, date_format(dateHour,'%H:%i') as heureRdv, lastname, firstname, birthdate, phone, mail from appointments inner join patients on appointments.idPatients=patients.id where appointments.id=:idrdv");
        $query->bindParam(':idrdv', intval($idrdv));
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }

    public function listeRdv(){
        $query = $this->_dataBase->prepare('select appointments.id as idrdv,appointments.dateHour,patients.lastname,patients.firstname,patients.birthdate,patients.phone,patients.mail from appointments left join patients on patients.id=appointments.idPatients order by appointments.dateHour');
        $query->execute();
        $response = $query->fetchAll();
        $query->closeCursor();
        return $response;
    }

    public function updateRdv($idRdv,$dateRdv,$heureRdv){     
        $query = $this->_dataBase->prepare('UPDATE appointments set dateHour=:dateRdv where appointments.id=:idRdv');
        $query->bindParam(':idRdv', $idRdv);
        $concat = $dateRdv." ".$heureRdv;
        $query->bindParam(':dateRdv', $concat);
        $query->execute();
        $query->closeCursor();
        return true;
    }

    public function deleteRdv($idRdv){
        $query = $this->_dataBase->prepare('DELETE FROM appointments WHERE id=:idRdv');
        $query->bindParam(':idRdv', $idRdv);
        $query->execute();
        $query->closeCursor();
        return true;
    }

    public function newPtAndRdv($lastname,$firstname, $birthdate,$phone,$mail,$dateRdv,$heureRdv){
        $this->addNewPatient($lastname,$firstname, $birthdate,$phone,$mail);
        $lastId = $this->_dataBase->lastInsertId(); 
        $this->newRdv($dateRdv,$heureRdv, $lastId);
    }
}
