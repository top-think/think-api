<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withName($value)
 * @method $this withCardNo($value)
 */
class BankcardTwoAuth extends Request
{
	public $uri = 'bankcard/two_auth';
}
