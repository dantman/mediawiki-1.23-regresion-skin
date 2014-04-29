<?php

global $IP;
require_once( "$IP/skins/Vector.php" );

class SkinBug extends SkinVector {
	var $skinname = 'vector', $stylename = 'vector';

	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.bug" );
	}

}
