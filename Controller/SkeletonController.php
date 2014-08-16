<?php
/**
 * Skeleton Controller
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthor
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Skeleton.Controller
 */

App::uses('SkeletonAppController', 'Skeleton.Controller');

/**
 * Skeleton Controller
 *
 * @author      SkeletonAuthor
 * @package     app.Plugin.Skeleton.Controller
 * @since       NetCommons 3.0.0.0
 */
class SkeletonController extends SkeletonAppController {

/**
 * use model
 *
 * @author    SkeletonAuthor
 * @since     NetCommons 3.0.0.0
 * @var       array
 */
	public $uses = array();

/**
 * use component
 *
 * @author    SkeletonAuthor
 * @since     NetCommons 3.0.0.0
 * @var       array
 */
	public $components = array(
		'Session',
		'RequestHandler',
		'Security'
	);

/**
 * beforeFilter
 *
 * @author   SkeletonAuthor
 * @since    NetCommons 3.0.0.0
 * @return   void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @author   SkeletonAuthor
 * @since    NetCommons 3.0.0.0
 * @return   CakeResponse
 */
	public function index() {
	}

}
