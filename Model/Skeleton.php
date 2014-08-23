<?php
/**
 * SkeletonSingle Model
 *
 * @property SkeletonSingle $SkeletonSingle
 * @property Language $Language
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
 * SkeletonSingle Model
 *
 * @property SkeletonSingle $SkeletonSingle
 * @property Language $Language
 * @property Block $Block
 * @property Part $Part
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Model
 */
class SkeletonSingle extends SkeletonAppModel {

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
		'skeleton_snake_id' => array(
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
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $belongsTo = array(
		'SkeletonSingle' => array(
			'className' => 'SkeletonSingle',
			'foreignKey' => 'skeleton_snake_id',
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

/**
 * hasMany associations
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $hasMany = array(
		'SkeletonSingle' => array(
			'className' => 'SkeletonSingle',
			'foreignKey' => 'skeleton_snake_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $hasAndBelongsToMany = array(
		'Block' => array(
			'className' => 'Block',
			'joinTable' => 'SkeletonSnakeName_blocks',
			'foreignKey' => 'skeleton_snake_id',
			'associationForeignKey' => 'block_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Part' => array(
			'className' => 'Part',
			'joinTable' => 'SkeletonSnakeName_parts',
			'foreignKey' => 'skeleton_snake_id',
			'associationForeignKey' => 'part_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
