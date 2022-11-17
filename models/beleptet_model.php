<?php

class Beleptet_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sqlSelect = "SELECT id, vezetekNev, utoNev, felhasznalo, jogosultsag from felhasznalok where 
            felhasznalo=:felhasznalo and jelszo=:jelszo";

            $sth = $connection ->prepare($sqlSelect);
            $sth->execute(array(':felhasznalo' => $vars['felhasznalo'], ':jelszo' =>sha1($vars['jelszo']) ));

			$felhasznalo = $sth->fetch(PDO::FETCH_ASSOC);
            if($felhasznalo){
                $retData['eredmeny'] = "OK";
                $retData['uzenet'] = "Üdvözöljük ".$felhasznalo['vezetekNev']." ".$felhasznalo['utoNev']."<br>";
                $_SESSION['felhasznaloId'] =  $felhasznalo['id'];
                $_SESSION['vezetekNev'] =  $felhasznalo['vezetekNev'];
                $_SESSION['utoNev'] =  $felhasznalo['utoNev'];
                $_SESSION['felhasznalo'] =  " (".$felhasznalo['felhasznalo'].")";
                $_SESSION['jogosultsag'] =  $felhasznalo['jogosultsag'];
                Menu::setMenu();

            } else {
                $retData['eredmeny'] = "ERROR";
                $retData['uzenet'] = "Sikeretelen bejelentkezés!";
            }
		}
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>