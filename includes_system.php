<?php

	// ELGG system includes

	/***************************************************************************
	*	INSERT SYSTEM UNITS HERE
	*	You should ideally not edit this file.
	****************************************************************************/

	// Plug-in engine (must be loaded first)
		require(path . "units/engine/main.php");
	// Database
		require(path . "units/db/main.php");
	// Display
		require(path . "units/display/main.php");
	// Users
		require(path . "units/users/main.php");
	// Templates
		require(path . "units/templates/main.php");
		
	// User icons
		include(path . "units/icons/main.php");
	// Profiles
		include(path . "units/profile/main.php");
		
	// Weblog
		include(path . "units/weblogs/main.php");

	// File repository
		include(path . "units/files/main.php");
				
	// Friends
		include(path . "units/friends/main.php");
	// Friend groups
		include(path . "units/groups/main.php");
	
	// Search
		require(path . "units/search/main.php");
				
?>