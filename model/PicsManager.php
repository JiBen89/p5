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

        public function getPictures($idUser)
        {
            $db = $this->dbConnect();
            $allPics = $db->prepare('SELECT pictureName, kindOfPicture, creation_date FROM photos WHERE id_user = ? ORDER BY creation_date DESC');
            $data = $allPics->execute(array($idUser));

            return $data;
        }

        public function getFiveFacePics()
        {
            $db = $this->dbConnect();
            $allFaces = $db->query('SELECT pictureName, kindOfPicture, creation_date FROM photos ORDER BY creation_date DESC LIMIT 0,100');

            return $allFaces;
        }
}