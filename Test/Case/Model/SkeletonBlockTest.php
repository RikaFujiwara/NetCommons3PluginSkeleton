<?php
/**
 * SkeletonBlock Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Skeleton.Test.Model.Case
 */

App::uses('SkeletonBlock', 'Skeleton.Model');

/**
 * SkeletonBlock Test Case
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Model
 */
class SkeletonBlockTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $fixtures = array(
		'plugin.SkeletonSnakeName.SkeletonSnakeName_block',
		'plugin.SkeletonSnakeName.block',
		'plugin.SkeletonSnakeName.language',
		'plugin.SkeletonSnakeName.blocks_language'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SkeletonBlock = ClassRegistry::init('Skeleton.SkeletonBlock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SkeletonBlock);

		parent::tearDown();
	}

}
