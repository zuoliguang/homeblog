<?php

/**
 * @Author: zuoliguang
 * @Date:   2018-09-07 13:17:33
 * @Last Modified by:   zuoliguang
 * @Last Modified time: 2018-11-05 13:03:39
 */

class IndexController extends Yaf_Controller_Abstract {

	// 初始化使用 init
	public function init() {

		// Yaf_Dispatcher::getInstance()->disableView(); // 控制器 关闭自动加载模板

		header('Content-Type: text/html; charset=utf-8'); 
	}

	/**
	 * ------------------------------------------------------------
	 * @author zuoliguang 2018-11-05
	 * @return [type] [description]
	 */
	public function testAction()
	{
		$m = new ArticleModel();
		$data = $m->rankings();
		echo json_encode($data);
		return false;
	}

	/**
	 * 网站首页
	 * @author zuoliguang 2018-11-05
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
	 * @author zuoliguang 2018-11-05
	 * @return [type] [description]
	 */
	public function aboutAction()
	{
		$this->display("layout/header");

		$this->display("about");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

	/**
	 * 详情页
	 * @author zuoliguang 2018-11-05
	 * @return [type] [description]
	 */
	public function infoAction()
	{
		$this->display("layout/header");

		$this->display("info");

		$this->display("layout/footer");

		return false; // 模板输出到此结束
	}

	/**
	 * 列表页
	 * @author zuoliguang 2018-11-05
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
	 * 推荐
	 * @author zuoliguang 2018-11-05
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
	 * 文章页
	 * @author zuoliguang 2018-11-05
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
