<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 * @method $this withCardNo($value)
 */
class BankcardThreeAuthDetail extends Request
{
	public $uri = 'bankcard/three_auth_detail';
}
