<?php
/**
 * SkeletonSingle Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @package     app.Plugin.Skeleton.Test.Model.Case
 */

App::uses('SkeletonSingle', 'Skeleton.Model');

/**
 * SkeletonSingle Test Case
 *
 * @author      SkeletonAuthorName <SkeletonAuthorEMail>
 * @package     app.Plugin.Skeleton.Model
 */
class SkeletonSingleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author  SkeletonAuthorName <SkeletonAuthorEMail>
 * @var     array
 */
	public $fixtures = array(
		'plugin.SkeletonSnakeName.SkeletonSnakeNameSingle',
		'plugin.SkeletonSnakeName.language',
		'plugin.SkeletonSnakeName.block',
		'plugin.SkeletonSnakeName.blocks_language',
		'plugin.SkeletonSnakeName.SkeletonSnakeName_block',
		'plugin.SkeletonSnakeName.part',
		'plugin.SkeletonSnakeName.languages_part',
		'plugin.SkeletonSnakeName.SkeletonSnakeName_part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SkeletonSingle = ClassRegistry::init('Skeleton.SkeletonSingle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SkeletonSingle);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->SkeletonSingle->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
