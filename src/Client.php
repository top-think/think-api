<?php

namespace think\api;

use think\api\concerns\InteractsWithHttp;
use think\api\request\BarcodeQuery;
use think\api\request\CalendarDay;
use think\api\request\CalendarMonth;
use think\api\request\CalendarYear;
use think\api\request\ChengyuQuery;
use think\api\request\ConstellationQuery;
use think\api\request\ConvertCharset;
use think\api\request\EnterpriseDetailInfo;
use think\api\request\ExchangeConvert;
use think\api\request\ExchangeCurrency;
use think\api\request\ExchangeQuery;
use think\api\request\ExpIndex;
use think\api\request\IdcardIndex;
use think\api\request\IdcardQuery;
use think\api\request\IpIndex;
use think\api\request\JokeLatest;
use think\api\request\JokeQuery;
use think\api\request\JokeRand;
use think\api\request\NewsToutiao;
use think\api\request\OcrIdcard;
use think\api\request\QrcodeIndex;
use think\api\request\TelecomDetail;
use think\api\request\TelecomLocation;
use think\api\request\TelecomQuery;
use think\api\request\TodayDetail;
use think\api\request\TodayEvent;
use think\api\request\UnnBatchUcheck;
use think\api\request\Verifybankcard3Query;
use think\api\request\Verifybankcard4Query;
use think\api\request\WeatherCityList;
use think\api\request\WeatherQuery;
use think\api\request\WeatherWids;

/**
 * @method BarcodeQuery barcodeQuery()
 * @method CalendarDay calendarDay()
 * @method CalendarMonth calendarMonth()
 * @method CalendarYear calendarYear()
 * @method ChengyuQuery chengyuQuery()
 * @method ConstellationQuery constellationQuery()
 * @method ConvertCharset convertCharset()
 * @method EnterpriseDetailInfo enterpriseDetailInfo()
 * @method ExchangeQuery exchangeQuery()
 * @method ExchangeCurrency exchangeCurrency()
 * @method ExchangeConvert exchangeConvert()
 * @method ExpIndex expIndex()
 * @method IdcardQuery idcardQuery()
 * @method IdcardIndex idcardIndex()
 * @method IpIndex ipIndex()
 * @method JokeQuery jokeQuery()
 * @method JokeLatest jokeLatest()
 * @method JokeRand jokeRand()
 * @method NewsToutiao newsToutiao()
 * @method OcrIdcard ocrIdcard()
 * @method QrcodeIndex qrcodeIndex()
 * @method TelecomQuery telecomQuery()
 * @method TelecomDetail telecomDetail()
 * @method TelecomLocation telecomLocation()
 * @method TodayEvent todayEvent()
 * @method TodayDetail todayDetail()
 * @method UnnBatchUcheck unnBatchUcheck()
 * @method Verifybankcard3Query verifybankcard3Query()
 * @method Verifybankcard4Query verifybankcard4Query()
 * @method WeatherQuery weatherQuery()
 * @method WeatherWids weatherWids()
 * @method WeatherCityList weatherCityList()
 */
class Client
{
	use InteractsWithHttp;
}
