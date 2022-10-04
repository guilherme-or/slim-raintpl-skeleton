<?php

namespace app\layout;

use Rain\Tpl;

class Page extends Tpl
{
	private $tpl;

	function __construct($view_folder = "../app/view/", $cache_folder = "../app/view/cache/", $debug = true)
	{
		// configuração do Tpl
		$config = [
			"tpl_dir"       => $view_folder,
			"cache_dir"     => $cache_folder,
			"debug"         => $debug
		];

		Tpl::configure($config);

		// construção do objeto
		$this->tpl = new Tpl();
	}

	private function setData($data)
	{
		foreach ($data as $key => $value) {
			$this->tpl->assign($key, $value);
		}
	}

	public function setTpl($name, $data = array())
	{
		self::setData($data);
		$this->tpl->draw('header');
		$this->tpl->draw($name);
	}

	function __destruct()
	{
		$this->tpl->draw('footer');
	}
}
