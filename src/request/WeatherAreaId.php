<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withArea($value)
 */
class WeatherAreaId extends Request
{
	public $uri = 'weather/area_id';
}
