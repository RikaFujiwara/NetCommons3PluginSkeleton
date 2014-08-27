<?php
/**
 * SkeletonPart Model
 *
 * @property Block $Block
 * @property Part $Part
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
 * SkeletonPart Model
 *
 * @property Block $Block
 * @property Part $Part
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Model
 */
class SkeletonPart extends SkeletonAppModel {

/**
 * Use database config
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     string
 */
	public $useDbConfig = 'master';

/**
 * Validation rules
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $validate = array(
		'SkeletonSnakeName_block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'part_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'read_content' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
			'range' => array(
				'rule' => array('range', 0, 3),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'edit_content' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
			'range' => array(
				'rule' => array('range', 0, 3),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'create_content' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
			'range' => array(
				'rule' => array('range', 0, 3),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'publish_content' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
			'range' => array(
				'rule' => array('range', 0, 3),
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
		'SkeletonBlock' => array(
			'className' => 'SkeletonBlock',
			'foreignKey' => 'SkeletonSnakeName_block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Part' => array(
			'className' => 'Part',
			'foreignKey' => 'part_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
