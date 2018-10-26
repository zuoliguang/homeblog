<?php

/**
 * @Author: zuoliguang
 * @Date:   2018-09-07 13:17:33
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-10-25 17:26:17
 */

class IndexController extends Yaf_Controller_Abstract {

	// 初始化使用 init
	public function init() {

		// Yaf_Dispatcher::getInstance()->disableView(); // 控制器 关闭自动加载模板

		header('Content-Type: text/html; charset=utf-8'); 
	}

	/**
	 * 网站首页
	 * @return [type] [description]
	 */
	public function indexAction() 
	{
		$this->display("layout/header");

		$this->display("index");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

	/**
	 * 关于我
	 * @param string $value [description]
	 */
	public function aboutAction()
	{
		$this->display("layout/header");

		$this->display("about");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

	/**
	 * 
	 * @param string $value [description]
	 */
	public function infoAction()
	{
		$this->display("layout/header");

		$this->display("info");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

	/**
	 * 
	 * @return [type] [description]
	 */
	public function listAction()
	{
		$this->display("layout/header");

		$this->display("list");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

	/**
	 * 
	 * @return [type] [description]
	 */
	public function recommendAction()
	{
		$this->display("layout/header");

		$this->display("recommend");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

	/**
	 * 
	 * @return [type] [description]
	 */
	public function articleAction()
	{
		$this->display("layout/header");

		$this->display("article");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

}
