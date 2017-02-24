<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'CommentsRandom',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'CommentsRandom\CommentsRandom' => 'system/modules/comments_random/classes/CommentsRandom.php',
));
