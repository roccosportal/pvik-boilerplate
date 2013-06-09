<?php

    error_reporting(E_ALL ^ E_NOTICE);
    
    // set up path mapper
    require './Library/Pvik/Core/Path.php';
    \Pvik\Core\Path::init();
    
    // set up class loader
    require \Pvik\Core\Path::realPath('~/Library/Pvik/Core/ClassLoader.php');
    $ClassLoader = new \Pvik\Core\ClassLoader();
    $ClassLoader->setNamespaceAssociation('\\Pvik', '~/Library/Pvik/');
    $ClassLoader->setNamespaceAssociation('\\MyProject', '~/Application/');
    $ClassLoader->init();
    
    //require_once ("./library/pvik/core/core.php");
    $Core = new \Pvik\Core\Core();
    $Core->loadConfig(array(
			'~/Application/Configs/DefaultConfig.php',
			'~/Application/Configs/Config.php')
			);
    $Core->startWeb();
