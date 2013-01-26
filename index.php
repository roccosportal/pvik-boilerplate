<?php

    error_reporting(E_ALL ^ E_NOTICE);
    
    // set up path mapper
    require './library/pvik/Core/Path.php';
    \Pvik\Core\Path::Init();
    
    // set up class loader
    require \Pvik\Core\Path::RealPath('~/library/pvik/Core/ClassLoader.php');
    $ClassLoader = new \Pvik\Core\ClassLoader();
    $ClassLoader->SetNamespaceAssociation('\\Pvik', '~/library/pvik/');
    $ClassLoader->SetNamespaceAssociation('\\MyProject', '~/application/');
    $ClassLoader->Init();
    
    //require_once ("./library/pvik/core/core.php");
    $Core = new \Pvik\Core\Core();
    $Core->LoadConfig()
        ->StartWeb();
