<?php
/**
 * Plugin -prefix-free
 *
 * @package	PLX
 * @version	1.0.7
 * @date	06/01/2013
 * @author	PIERRE Benjamin - Ti_Pierre
 **/
class prefixfree extends plxPlugin {

	/**
	 * Constructeur de la classe prefixfree
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	PIERRE Benjamin - Ti_Pierre
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclarations des hooks
		$this->addHook('ThemeEndHead', 'addPrefixFree');
		$this->addHook('AdminTopEndHead', 'addPrefixFree');		
	}

	/**
	 * Méthode qui ajoute l'insertion du fichier javascript de PrefixFree dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	PIERRE Benjamin - Ti_Pierre
	 **/	
	public function addPrefixFree() {
		echo "\t".'<script type="text/javascript" src="'.PLX_PLUGINS.'prefixfree/prefixfree.min.js"></script>'."\n";
	}

}
?>
