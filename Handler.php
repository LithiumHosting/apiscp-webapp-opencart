<?php

namespace LithiumHosting\WebApps\OpenCart;

use Module\Support\Webapps\App\Type\Unknown\Handler as Unknown;

class Handler extends Unknown
{
	const NAME       = 'OpenCart';
	const ADMIN_PATH = "/admin";
	const LINK       = 'https://www.opencart.com/';

	const DEFAULT_FORTIFICATION = 'max';
	const FEAT_ALLOW_SSL        = true;

	public function display(): bool
	{
		return version_compare($this->php_version(), '7', '>=');
	}

	public function hasUpdate(): bool
	{
		return true;
	}
}