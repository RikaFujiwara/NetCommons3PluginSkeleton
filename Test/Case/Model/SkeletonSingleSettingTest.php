<?php
/**
 * SkeletonSetting Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Skeleton.Test.Model.Case
 */

App::uses('SkeletonSetting', 'Skeleton.Model');

/**
 * SkeletonSetting Test Case
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Model
 */
class SkeletonSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $fixtures = array(
		'plugin.SkeletonSnakeName.SkeletonSnakeName_block',
		'plugin.SkeletonSnakeName.SkeletonSnakeName_setting',
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
		$this->SkeletonSetting = ClassRegistry::init('Skeleton.SkeletonSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SkeletonSetting);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->SkeletonSetting->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
