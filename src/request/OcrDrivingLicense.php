<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrDrivingLicense extends Request
{
	public $uri = 'ocr/driving_license';
}
