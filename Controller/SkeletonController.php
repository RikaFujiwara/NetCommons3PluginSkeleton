<?php
App::uses('AppController', 'Controller');
/**
 * Skeleton Controller
 *
 * @author    @author Takako Miyagawa <nekoget@gmail.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class SkeletonController extends AppController {

/**
 * beforeFilter
 *
 * @return void
 * @author Takako Miyagawa <nekoget@gmail.com>
 **/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @return void
 * @author Takako Miyagawa <nekoget@gmail.com>
 **/
	public function index() {
	}

}
