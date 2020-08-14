<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrBusinessLicense extends Request
{
	public $uri = 'ocr/business_license';
}
