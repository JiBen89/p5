<?php
namespace app\model;

require "vendor/autoload.php";

use app\model\Manager;

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
            $allPics->execute(array($idUser));
            return $allPics;
        }

        public function getAllPics($departure, $pixPerPage)
        {
            $db = $this->dbConnect();
            $allFaces = $db->query('SELECT pictureName, kindOfPicture, creation_date FROM photos WHERE privat = 0 ORDER BY creation_date DESC LIMIT '.$departure.' , '.$pixPerPage.' ');
            return $allFaces;
        }

        public function totalPublicPics()
        {
            $db = $this->dbConnect();
            $allPublicPics = $db->query('SELECT id FROM photos WHERE privat = 0');

            return $allPublicPics;
        }
}