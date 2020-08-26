<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withCarNumber($value)
 * @method $this withCarCode($value)
 * @method $this withCarEngineCode($value)
 * @method $this withCarType($value)
 */
class LuozNewEnergy extends Request
{
	public $uri = 'luoz/new_energy';
}
