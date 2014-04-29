<?php

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Bug',
);

$wgValidSkinNames['bug'] = 'Bug';
$wgAutoloadClasses['SkinBug'] = __DIR__ . '/Bug.skin.php';

$wgResourceModules['skins.bug'] = array(
	'styles' => array(
		'bug/styles/test.less' => array( 'media' => 'screen' ),
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);
