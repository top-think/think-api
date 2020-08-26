<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 */
class WeatherAreaForecast24 extends Request
{
	public $uri = 'weather/area_forecast24';
}
