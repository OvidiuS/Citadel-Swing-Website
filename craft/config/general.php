<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
	'*' => array(
		'devMode' => true
	),

	'citadelswing.dev' => array(
        'environmentVariables' => array(
            'basePath' => '/var/www/public/',
            'baseUrl'  => 'http://citadelswing.dev/',
        )
    ),

    'csdev.dvsdev.xyz' => array(
        'environmentVariables' => array(
            'basePath' => '/home/dvsdevxy/public_html/csdev/',
            'baseUrl'  => 'http://csdev.dvsdev.xyz/',
        )
    )
);
