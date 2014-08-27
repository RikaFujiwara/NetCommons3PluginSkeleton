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
 * @SuppressWarnings(PHPMD.LongVariable)
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
		'SkeletonSnakeName_block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'is_auto_translation' => array('type' => 'boolean', 'null' => false, 'default' => false, 'length' => 1),
		'translation_engine' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
 * SkeletonSnakeNameSingle_settings table
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $SkeletonSnakeNameSingle_settings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'SkeletonSnakeName_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
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
 * SkeletonSnakeNameSingle_part_settings table
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $SkeletonSnakeNameSingle_part_settings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'SkeletonSnakeName_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'part_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'readable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'editable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'creatable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'publishable_content' => array('type' => 'boolean', 'null' => false, 'default' => false),
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
