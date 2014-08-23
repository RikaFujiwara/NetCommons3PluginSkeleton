<?php
/**
 * Schema file
 *
 * @author        Noriko Arai <arai@nii.ac.jp>
 * @author        SkeletonAuthorName <SkeletonAuthorEMail>
 * @link          http://www.netcommons.org NetCommons Project
 * @license       http://www.netcommons.org/license.txt NetCommons License
 * @copyright    Copyright 2014, NetCommons Project
 * @package       app.Plugin.Skeleton.Config.Schema
 */

/**
 * SkeletonSchema CakeSchema
 *
 * @author        SkeletonAuthorName <SkeletonAuthorEMail>
 * @package       app.Plugin.Skeleton.Config.Schema
 */
class SkeletonSchema extends CakeSchema {

/**
 * Database connection
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     string
 */
	public $connection = 'master';

/**
 * before
 *
 * @param array $event savent
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @return  bool
 */
	public function before($event = array()) {
		return true;
	}

/**
 * after
 *
 * @param array $event event
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @return  void
 */
	public function after($event = array()) {
	}

/**
 * SkeletonSnakeName table
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $SkeletonSnakeName = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'skeleton_snake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'title' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
	);

/**
 * SkeletonSnakeName_blocks table
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $SkeletonSnakeName_blocks = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
	);

/**
 * SkeletonSnakeName_setting table
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $SkeletonSnakeName_setting = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
	);

/**
 * SkeletonSnakeName_parts table
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $SkeletonSnakeName_parts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'part_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'read_content' => array('type' => 'integer', 'length' => 2, 'null' => false, 'default' => '0'),
		'edit_content' => array('type' => 'integer', 'length' => 2, 'null' => false, 'default' => '0'),
		'create_content' => array('type' => 'integer', 'length' => 2, 'null' => false, 'default' => '0'),
		'publish_content' => array('type' => 'integer', 'length' => 2, 'null' => false, 'default' => '0'),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
	);

}
