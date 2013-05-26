<?php

self::$config['DefaultNamespace'] = '\\MyProject';
self::$config['NamespaceAssociations']['\\MyProject'] = '~/application/';

self::$config['Routes'] = array(
    array ('Url' => '/', 'Controller' => 'HelloWorld', 'Action' => 'Index'),
);
?>