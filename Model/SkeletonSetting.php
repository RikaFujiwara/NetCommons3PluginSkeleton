<?php
/**
 * SkeletonSetting Model
 *
 * @property Block $Block
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Skeleton.Model
 */

App::uses('SkeletonAppModel', 'Skeleton.Model');

/**
 * SkeletonSetting Model
 *
 * @property Block $Block
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Model
 */
class SkeletonSetting extends SkeletonAppModel {

/**
 * Use database config
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     string
 */
	public $useDbConfig = 'master';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'SkeletonSnakeName_setting';

/**
 * Validation rules
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $validate = array(
		'block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
	);

/**
 * belongsTo associations
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $belongsTo = array(
		'Block' => array(
			'className' => 'Block',
			'foreignKey' => 'block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
