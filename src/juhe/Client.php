<?php

namespace think\api\juhe;

use Exception;
use Psr\Http\Message\ResponseInterface;
use think\api\Request;

/**
 * @method IdcardQuery idcardQuery()
 * @method IdcardIndex idcardIndex()
 * @method TelecomQuery telecomQuery()
 * @method CalendarDay calendarDay()
 * @method CalendarMonth calendarMonth()
 * @method CalendarYear calendarYear()
 * @method Verifybankcard3Query verifybankcard3Query()
 * @method Verifybankcard4Query verifybankcard4Query()
 */
class Client extends \think\api\Client
{
    protected $baseUri = "/juhe/";

    public function parseResponse(ResponseInterface $response)
    {
        $result = parent::parseResponse($response);
        if ($result['error_code'] != 0) {
            throw new Exception($result['reason'], $result['error_code']);
        }
        return $result['result'];
    }
}

/**
 * @method $this withCardno($value)
 */
class IdcardIndex extends Request
{
    public $uri = "idcard_free/index";
}

/**
 * @method $this withRealname($value)
 * @method $this withIdcard($value)
 * @method $this withOrderid($value)
 */
class IdcardQuery extends Request
{
}

/**
 * @method $this withRealname($value)
 * @method $this withIdcard($value)
 * @method $this withMobile($value)
 * @method $this withType($value)
 * @method $this withShowid($value)
 * @method $this withProvince($value)
 * @method $this withDetail($value)
 */
class TelecomQuery extends Request
{
}

/**
 * @method $this withDate($value)
 */
class CalendarDay extends Request
{

}

/**
 * @method $this withYearMonth($value)
 */
class CalendarMonth extends Request
{

}

/**
 * @method $this withYear($value)
 */
class CalendarYear extends Request
{

}

/**
 * @method $this withRealname($value)
 * @method $this withIdcard($value)
 * @method $this withBankcard($value)
 * @method $this withUorderid($value)
 * @method $this withIsshow($value)
 */
class Verifybankcard3Query extends Request
{

}

/**
 * @method $this withRealname($value)
 * @method $this withIdcard($value)
 * @method $this withBankcard($value)
 * @method $this withMobile($value)
 * @method $this withUorderid($value)
 * @method $this withIsshow($value)
 */
class Verifybankcard4Query extends Request
{

}
