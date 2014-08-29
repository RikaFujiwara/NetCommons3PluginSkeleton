<?php
/**
 * Skeleton Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Skeleton.Controller
 */

App::uses('SkeletonAppController', 'Skeleton.Controller');

/**
 * Skeleton Controller
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @package app.Plugin.Skeleton.Controller
 */
class SkeletonController extends SkeletonAppController {

/**
 * use model
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @var array
 */
	//public $uses = array();

/**
 * beforeFilter
 *
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @param int $frameId frames.id
 * @param string $lang language
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @return CakeResponse
 */
	public function index($frameId = 0, $lang = '') {
		//フレーム初期化処理
		if (! $this->_initializeFrame($frameId, $lang)) {
			return $this->render(false);
		}

		return $this->render('Skeleton/index');
	}

/**
 * view
 *
 * @param int $frameId frames.id
 * @param string $lang language
 * @author SkeletonAuthorName <SkeletonAuthorEMail>
 * @return CakeResponse
 */
	public function view($frameId = 0, $lang = '') {
		return $this->render('Skeleton/view');
	}

}
