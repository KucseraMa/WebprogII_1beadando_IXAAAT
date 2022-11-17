<?php

class Kilepes_Model
{
	public function get_data()
	{
		$retData['eredmeny'] = "OK";
		$retData['uzenet'] = "Visszontlátásra ".$_SESSION['vezetekNev']." ".$_SESSION['utoNev']."!";
		$_SESSION['felhasznaloId'] =  "";
		$_SESSION['vezetekNev'] =  "";
		$_SESSION['utoNev'] =  "";
		$_SESSION['felhasznalo'] =  "";
		$_SESSION['jogosultsag'] = "1__";

		Menu::setMenu();
		return $retData;
	}
}

?>