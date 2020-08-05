<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withMobiles($value)
 * @method $this withType($value)
 */
class UnnBatchUcheck extends Request
{
	public $uri = 'unn/batch_ucheck';
}
