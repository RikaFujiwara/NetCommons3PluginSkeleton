<?php
/**
 * Migration file
 *
 * @author        Noriko Arai <arai@nii.ac.jp>
 * @author        SkeletonAuthorName <SkeletonAuthorEMail>
 * @link          http://www.netcommons.org NetCommons Project
 * @license       http://www.netcommons.org/license.txt NetCommons License
 * @copyright    Copyright 2014, NetCommons Project
 * @package       app.Plugin.Skeleton.Config.Migration
 */

/**
 * Skeleton CakeMigration
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Config.Migration
 */
class Skeleton extends CakeMigration {

/**
 * Migration description
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'SkeletonSnakeName' => array(
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
				),
				'SkeletonSnakeName_blocks' => array(
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
				),
				'SkeletonSnakeName_setting' => array(
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
				),
				'SkeletonSnakeName_parts_setting' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'SkeletonSnakeName_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
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
				),
			)
		),
		'down' => array(
			'drop_table' => array(
				'SkeletonSnakeName',
				'SkeletonSnakeName_blocks',
				'SkeletonSnakeName_setting',
				'SkeletonSnakeName_parts_setting',
			)
		)
	);

/**
 * recodes
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array $records
 */
	public $records = array();

/**
 * Before migration callback
 *
 * @param string $direction up or down direction of migration process
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction up or down direction of migration process
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @return boolean Should process continue
 */
	public function after($direction) {
		if ($direction === 'down') {
			return true;
		}

		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}

		return true;
	}

/**
 * Update model records
 *
 * @param string $model model name to update
 * @param string $records records to be stored
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @return  boolean Should process continue
 */
	public function updateRecords($model, $records) {
		$Model = $this->generateModel($model);
		foreach ($records as $record) {
			$Model->create();
			if (!$Model->save($record, false)) {
				return false;
			}
		}

		return true;
	}

}
