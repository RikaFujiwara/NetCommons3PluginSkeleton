<?php
/**
 * SkeletonApp Controller
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Skeleton.Controller
 */

App::uses('AppController', 'Controller');

/**
 * SkeletonApp Controller
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Controller
 */
class SkeletonAppController extends AppController {

/**
 * use component
 *
 * @author    SkeletonAuthorName <SkeletonAuthorEMail>
 * @var       array
 */
	public $components = array(
		'Security'
	);
}
