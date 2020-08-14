<?php

namespace think\api;

use think\api\concerns\InteractsWithHttp;
use think\api\request\BankcardAuth;
use think\api\request\BankcardAuthDetail;
use think\api\request\BankcardAuthSecret;
use think\api\request\BankcardThreeAuth;
use think\api\request\BankcardThreeAuthDetail;
use think\api\request\BankcardTwoAuth;
use think\api\request\BarcodeQuery;
use think\api\request\CalendarDay;
use think\api\request\CalendarMonth;
use think\api\request\CalendarYear;
use think\api\request\ChengyuQuery;
use think\api\request\ConstellationQuery;
use think\api\request\EnterpriseDetailInfo;
use think\api\request\ExchangeConvert;
use think\api\request\ExchangeCurrency;
use think\api\request\ExchangeQuery;
use think\api\request\ExpIndex;
use think\api\request\ExpressQuery;
use think\api\request\IdcardAuth;
use think\api\request\IdcardIndex;
use think\api\request\IdcardQuery;
use think\api\request\ImageGifDetect;
use think\api\request\ImageImgCensor;
use think\api\request\IpIndex;
use think\api\request\JokeLatest;
use think\api\request\JokeQuery;
use think\api\request\JokeRand;
use think\api\request\NewsToutiao;
use think\api\request\OcrBankcard;
use think\api\request\OcrBusinessLicense;
use think\api\request\OcrDrivingLicense;
use think\api\request\OcrHand;
use think\api\request\OcrIdCardText;
use think\api\request\OcrIdOcr;
use think\api\request\OcrIdcard;
use think\api\request\OcrInvoice;
use think\api\request\OcrPassport;
use think\api\request\OcrVehicleLicense;
use think\api\request\QrcodeIndex;
use think\api\request\TelecomDetail;
use think\api\request\TelecomLocation;
use think\api\request\TelecomQuery;
use think\api\request\TodayDetail;
use think\api\request\TodayEvent;
use think\api\request\UnnBatchUcheck;
use think\api\request\UnnStatus;
use think\api\request\Verifybankcard3Query;
use think\api\request\Verifybankcard4Query;
use think\api\request\WeatherCityList;
use think\api\request\WeatherQuery;
use think\api\request\WeatherWids;
use think\api\request\WoolWcheck;
use think\api\request\WoolWtag;

/**
 * @method BankcardTwoAuth bankcardTwoAuth()
 * @method BankcardThreeAuth bankcardThreeAuth()
 * @method BankcardThreeAuthDetail bankcardThreeAuthDetail()
 * @method BankcardAuth bankcardAuth()
 * @method BankcardAuthDetail bankcardAuthDetail()
 * @method BankcardAuthSecret bankcardAuthSecret()
 * @method BarcodeQuery barcodeQuery()
 * @method CalendarDay calendarDay()
 * @method CalendarMonth calendarMonth()
 * @method CalendarYear calendarYear()
 * @method ChengyuQuery chengyuQuery()
 * @method ConstellationQuery constellationQuery()
 * @method EnterpriseDetailInfo enterpriseDetailInfo()
 * @method ExchangeQuery exchangeQuery()
 * @method ExchangeCurrency exchangeCurrency()
 * @method ExchangeConvert exchangeConvert()
 * @method ExpIndex expIndex()
 * @method ExpressQuery expressQuery()
 * @method IdcardQuery idcardQuery()
 * @method IdcardIndex idcardIndex()
 * @method IdcardAuth idcardAuth()
 * @method ImageImgCensor imageImgCensor()
 * @method ImageGifDetect imageGifDetect()
 * @method IpIndex ipIndex()
 * @method JokeQuery jokeQuery()
 * @method JokeLatest jokeLatest()
 * @method JokeRand jokeRand()
 * @method NewsToutiao newsToutiao()
 * @method OcrIdcard ocrIdcard()
 * @method OcrIdOcr ocrIdOcr()
 * @method OcrBankcard ocrBankcard()
 * @method OcrBusinessLicense ocrBusinessLicense()
 * @method OcrDrivingLicense ocrDrivingLicense()
 * @method OcrVehicleLicense ocrVehicleLicense()
 * @method OcrPassport ocrPassport()
 * @method OcrInvoice ocrInvoice()
 * @method OcrHand ocrHand()
 * @method OcrIdCardText ocrIdCardText()
 * @method QrcodeIndex qrcodeIndex()
 * @method TelecomQuery telecomQuery()
 * @method TelecomDetail telecomDetail()
 * @method TelecomLocation telecomLocation()
 * @method TodayEvent todayEvent()
 * @method TodayDetail todayDetail()
 * @method UnnBatchUcheck unnBatchUcheck()
 * @method UnnStatus unnStatus()
 * @method Verifybankcard3Query verifybankcard3Query()
 * @method Verifybankcard4Query verifybankcard4Query()
 * @method WeatherQuery weatherQuery()
 * @method WeatherWids weatherWids()
 * @method WeatherCityList weatherCityList()
 * @method WoolWcheck woolWcheck()
 * @method WoolWtag woolWtag()
 */
class Client
{
	use InteractsWithHttp;
}
