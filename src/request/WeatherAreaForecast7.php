<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 * @method $this withNeed3HourForcast($value)
 */
class WeatherAreaForecast7 extends Request
{
	public $uri = 'weather/area_forecast7';
}
