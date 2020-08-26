<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 * @method $this withMonth($value)
 * @method $this withStartDate($value)
 * @method $this withEndDate($value)
 */
class WeatherAreaHistory extends Request
{
	public $uri = 'weather/area_history';
}
