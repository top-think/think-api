<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withImage($value)
 * @method $this withPolitician($value)
 * @method $this withAntiporn($value)
 * @method $this withTerror($value)
 * @method $this withAntiSpam($value)
 * @method $this withDisgust($value)
 * @method $this withWatermark($value)
 * @method $this withQuality($value)
 */
class ImageImgCensor extends Request
{
	public $uri = 'image/img_censor';
}
