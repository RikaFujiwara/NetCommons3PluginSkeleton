<?php
/**
 * Skeleton All Test Case
 *
 * @author      Noriko Arai <arai@nii.ac.jp>
 * @author      SkeletonAuthor
 * @link        http://www.netcommons.org NetCommons Project
 * @license     http://www.netcommons.org/license.txt NetCommons License
 * @copyright   Copyright 2014, NetCommons Project
 * @since       NetCommons 3.0.0.0
 * @package     app.Plugin.Skeleton.Model
 */

/**
 * Skeleton All Test Case
 *
 * @author        SkeletonAuthor
 * @package       app.Plugin.Skeleton.Test.Case
 * @since         NetCommons 3.0.0.0
 * @codeCoverageIgnore
 */
class AllSkeletonTest extends CakeTestSuite {

/**
 * All test suite
 *
 * @author   SkeletonAuthor
 * @since    NetCommons 3.0.0.0
 * @return   CakeTestSuite
 */
	public static function suite() {
		$plugin = preg_replace('/^All([\w]+)Test$/', '$1', __CLASS__);
		$suite = new CakeTestSuite(sprintf('All %s Plugin tests', $plugin));
		$suite->addTestDirectoryRecursive(CakePlugin::path($plugin) . 'Test' . DS . 'Case');
		return $suite;
	}
}
