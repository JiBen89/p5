<?php
require_once("model/Manager.php"); 

class PicsManager extends Manager
{
        public function sendPicture($fileName, $kindOfpicture, $idUser, $privat)
        {
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO photos(pictureName, kindOfPicture, id_user, privat, creation_date) VALUES( :pictureName, :kindOfPicture, :id_user, :privat, NOW())');
            $affectedLines = $req->execute(array(
                'pictureName' => $fileName,
                'kindOfPicture' => $kindOfpicture,
                'id_user' => $idUser,
                'privat' => $privat
            ));
            return $affectedLines;

        } 
}