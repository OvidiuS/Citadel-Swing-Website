<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
	'*' => array(
		
	),

    'citadelswing.ro' => array(
        'environmentVariables' => array(
            'basePath' => '/home/citadels/public_html/',
            'baseUrl'  => 'http://citadelswing.ro/',
        ),
        'devMode' => false
    ),

	'citadelswing.dev' => array(
        'environmentVariables' => array(
            'basePath' => '/var/www/public/',
            'baseUrl'  => 'http://citadelswing.dev/',
        ),
        'devMode' => true
    ),

    'csdev.dvsdev.xyz' => array(
        'environmentVariables' => array(
            'basePath' => '/home/dvsdevxy/public_html/csdev/',
            'baseUrl'  => 'http://csdev.dvsdev.xyz/',
        ),
        'devMode' => true
    ),
    'heavy-oryx-3590.vagrantshare.com' => array(
        'environmentVariables' => array(
            'basePath' => '/home/dvsdevxy/public_html/csdev/',
            'baseUrl'  => 'http://heavy-oryx-3590.vagrantshare.com/',
        ),
        'devMode' => true
    )
);
