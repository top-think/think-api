<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrVehicleLicense extends Request
{
	public $uri = 'ocr/vehicle_license';
}
