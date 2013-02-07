<?php defined('SYSPATH') or die('No direct script access.');

class Breadcrumbs_Core {

	/**
	 * @var  array
	 */
	public static $list = array();

	public static $template = 'blocks/breadcrumbs';

	/**
	 * Add breadcrumb
	 *
	 * @param   string   Text
	 * @param   string   Link
	 */
	public static function add($text, $link = NULL)
	{
		self::$list[] = array('text' => $text, 'link' => $link);
	}

	public static function clear()
	{
		self::$list = array();
	}

	public static function render($template = NULL, $list = NULL)
	{
		return View::factory($template?$template:self::$template, array('breadcrumbs' => $list?$list:self::$list));
	}

	/**
	 * Enforce static usage
	 */
	private function __contruct() {}
	private function __clone() {}

}