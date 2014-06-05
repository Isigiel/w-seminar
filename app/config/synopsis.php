<?php

return array(

	'sites'=> array(
		array(
			'title'=>'Home',
			'slug'=>'home',
			),
		/*array(
			'title'=>'Browse',
			'slug'=>'browse',
			),*/
		),
	'login_sites'=> array(
		/*array(
			'title'=>'Feed',
			'slug'=>'feed',
			),*/
		array(
			'title'=>'Account',
			'slug'=>'account',
			),
		array(
			'title'=>'Logout',
			'slug'=>'logout',
			),
		),

	'categories' => array(
		'Adventure',
		'Cosmetic',
		'Food',
		'Magic',
		'Map',
		'Utility',
		'Storage',
		'Technology'
		),

	'mc-versions' => array(
		'1.2.5',
		'1.3.7',
		'1.4.7',
		'1.6.4',
		'1.7.2',
		'1.7.6',
		'1.7.9'
		),

	'stability' => array(
		'Alpha',
		'Beta',
		'Release',
		'Final'
		),
	'character' => array(
		'Adventure'=>array(
			array('Stone Age','Future'),
			array('Explore','Survive'),
			array('Stone Age','Future'),
			array('Magic','War'),
			array('Multi-Dimensional','Stay at home'),
			),
		'Cosmetic'=>array(
			array('Sound','Graphic'),
			array('Monster PC','Your Grandmas PC'),
			),
		'Food'=>array(
			array('New Crops','New Machines'),
			array('Sweat','Healthy'),
			),
		'Magic'=>array(
			array('Early Game','Late Game'),
			array('Dark Magic','Light Magic'),
			array('Hard to master','Easy to learn'),
			array('Eats your resources','Cheaty as fuck'),
			array('Specialist','Allrounder'),
			array('Good old Times','Here comes the future'),
			),
		'Map'=>false,
		'Utility'=>array(
			array('Server Side','Client Side'),
			),
		'Storage'=>false,
		'Technology'=>array(
			array('Early Game','Late Game'),
			array('Stone Age','Future'),
			array('Simple','Complex'),
			array('Fantasy','Reality'),
			array('Specialist','Allrounder'),
			)
		),

);
