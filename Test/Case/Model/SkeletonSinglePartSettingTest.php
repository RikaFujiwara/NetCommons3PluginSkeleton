<?php
/**
 * SkeletonSinglePartSettingTest Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Skeleton.Test.Model.Case
 */

App::uses('SkeletonSinglePartSetting', 'Skeleton.Model');

/**
 * SkeletonPart Test Case
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Model
 */
class SkeletonSinglePartSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $fixtures = array(
		'plugin.SkeletonSnakeName.SkeletonSnakeNameSingle_part_setting',
		'plugin.SkeletonSnakeName.block',
		'plugin.SkeletonSnakeName.language',
		'plugin.SkeletonSnakeName.blocks_language',
		'plugin.SkeletonSnakeName.part',
		'plugin.SkeletonSnakeName.languages_part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SkeletonSinglePartSetting = ClassRegistry::init('Skeleton.SkeletonSinglePartSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SkeletonSinglePartSetting);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->SkeletonSinglePartSetting->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
