<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 * @method $this withCardNo($value)
 * @method $this withMobile($value)
 */
class BankcardAuthDetail extends Request
{
	public $uri = 'bankcard/auth_detail';
}
