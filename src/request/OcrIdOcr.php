<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 * @method $this withOcrType($value)
 */
class OcrIdOcr extends Request
{
	public $uri = 'ocr/id_ocr';
}
