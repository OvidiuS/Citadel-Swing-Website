<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	'*' => array(
        'tablePrefix' => 'craft',
    ),

    '.ro' => array(
		// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
		'server' => 'localhost',

		// The name of the database to select.
		'database' => 'citadels_web',

		// The database username to connect with.
		'user' => 'citadels_savescuo',

		// The database password to connect with.
		'password' => 'xnqV#^$.4#ft',
	),

	'.dev' => array(
		// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
		'server' => 'localhost',

		// The name of the database to select.
		'database' => 'scotchbox',

		// The database username to connect with.
		'user' => 'root',

		// The database password to connect with.
		'password' => 'root',
	),

	'vagrantshare.com' => array(
		// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
		'server' => 'localhost',

		// The name of the database to select.
		'database' => 'scotchbox',

		// The database username to connect with.
		'user' => 'root',

		// The database password to connect with.
		'password' => 'root',
	),

	'.xyz' => array(
		// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
		'server' => 'localhost',

		// The name of the database to select.
		'database' => 'dvsdevxy_csdev',

		// The database username to connect with.
		'user' => 'dvsdevxy_csdev',

		// The database password to connect with.
		'password' => 'sUbW+no7]+Hh',
	),
    
);
