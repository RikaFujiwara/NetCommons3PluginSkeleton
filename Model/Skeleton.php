<?php
/**
 * SkeletonSingle Model
 *
 * @property SkeletonSingle $SkeletonSingle
 * @property Language $Language
 * @property Block $Block
 * @property Part $Part
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Skeleton.Model
 */

App::uses('SkeletonAppModel', 'Skeleton.Model');

/**
 * SkeletonSingle Model
 *
 * @property SkeletonSingle $SkeletonSingle
 * @property Language $Language
 * @property Block $Block
 * @property Part $Part
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Skeleton.Model
 */
class SkeletonSingle extends SkeletonAppModel {

/**
 * Use database config
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var string
 */
	public $useDbConfig = 'master';

/**
 * Validation rules
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $validate = array(
		'SkeletonSnakeName_block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'status' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
			'range' => array(
				'rule' => array('range', 0, 4),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'language_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
	);

/**
 * belongsTo associations
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	public $belongsTo = array(
		'SkeletonBlock' => array(
			'className' => 'SkeletonBlock',
			'foreignKey' => 'SkeletonSnakeName_block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Language' => array(
			'className' => 'Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
