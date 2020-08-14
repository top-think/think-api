<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 * @method $this withOcrType($value)
 * @method $this withDetectRisk($value)
 */
class OcrIdCardText extends Request
{
	public $uri = 'ocr/id_card_text';
}
