<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withParam($value)
 */
class BankcardAuthSecret extends Request
{
	public $uri = 'bankcard/auth_secret';
}
