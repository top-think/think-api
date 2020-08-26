<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withExpName($value)
 * @method $this withMaxSize($value)
 * @method $this withPage($value)
 */
class ExpressExpList extends Request
{
	public $uri = 'express/exp_list';
}
