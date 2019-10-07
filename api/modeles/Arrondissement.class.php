<?php
/**
 * Class Arrondissement
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2016-11-25
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 * 
 * 
 */
class Arrondissement extends Modele {	
	const TABLE_OEUVRE = "oeuvre";
	const TABLE_ARROND = "Arrondissement";
	//const TABLE_LIAISON_ARTISTE_OEUVRE = "apm__oeuvre_artiste";
		
	/**
	 * Retourne la liste des arrondissement
	 * @access public
	 * @return Array
	 */
	public function getListe() 
	{
		$res = Array();
		$query = "select DISTINCT". self::TABLE_ARROND." from ". self::TABLE_OEUVRE. " ORDER BY Arrondissement";
		if($mrResultat = $this->_db->query($query))
		{
			while($arrond = $mrResultat->fetch_assoc())
			{
				$res[] = $arrond;
			}
		}
		return $res;
	}
	
}




?>