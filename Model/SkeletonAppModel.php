<?php
/**
 * SkeletonAppModel
 *
 * @author   Takako Miyagawa <nekoget@gmail.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
App::uses('AppModel', 'Model');

class SkeletonAppModel extends AppModel {

/**
 * __construct
 *
 * @param bool $id id
 * @param null $table db table
 * @param null $ds connection
 * @return void
 * @SuppressWarnings(PHPMD)
 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	}
}
