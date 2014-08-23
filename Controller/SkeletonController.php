<?php
/**
 * Skeleton Controller
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Skeleton.Controller
 */

App::uses('SkeletonAppController', 'Skeleton.Controller');

/**
 * Skeleton Controller
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Controller
 */
class SkeletonController extends SkeletonAppController {

/**
 * use model
 *
 * @author    SkeletonAuthorName <SkeletonAuthorEMail>
 * @var       array
 */
	//public $uses = array();

/**
 * use component
 *
 * @author    SkeletonAuthorName <SkeletonAuthorEMail>
 * @var       array
 */
	public $components = array(
		'Security'
	);

/**
 * beforeFilter
 *
 * @author   SkeletonAuthorName <SkeletonAuthorEMail>
 * @return   void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @author   SkeletonAuthorName <SkeletonAuthorEMail>
 * @return   CakeResponse
 */
	public function index() {
		return $this->render('Skeleton/index');
	}

}
