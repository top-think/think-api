<?php

namespace think\api;

use think\api\concerns\InteractsWithHttp;
use think\api\request\AlmanacDate;
use think\api\request\AlmanacHour;
use think\api\request\AlmanacQq;
use think\api\request\BankcardAuth;
use think\api\request\BankcardAuthDetail;
use think\api\request\BankcardAuthSecret;
use think\api\request\BankcardThreeAuth;
use think\api\request\BankcardThreeAuthDetail;
use think\api\request\BankcardTwoAuth;
use think\api\request\BarcodeQuery;
use think\api\request\BookCatalog;
use think\api\request\BookQuery;
use think\api\request\CalendarDay;
use think\api\request\CalendarMonth;
use think\api\request\CalendarYear;
use think\api\request\CarBrand;
use think\api\request\CarModels;
use think\api\request\CarObd;
use think\api\request\CarSeries;
use think\api\request\ChengyuQuery;
use think\api\request\ConstellationMatch;
use think\api\request\ConstellationQuery;
use think\api\request\ConstellationZodiac;
use think\api\request\DreamCategory;
use think\api\request\DreamId;
use think\api\request\DreamQuery;
use think\api\request\DrivingAnswer;
use think\api\request\DrivingQuery;
use think\api\request\EnterpriseDetailInfo;
use think\api\request\ExchangeConvert;
use think\api\request\ExchangeCurrency;
use think\api\request\ExchangeFrate;
use think\api\request\ExchangePrice;
use think\api\request\ExchangeQuery;
use think\api\request\ExpIndex;
use think\api\request\ExpressAsyc;
use think\api\request\ExpressCompany;
use think\api\request\ExpressDot;
use think\api\request\ExpressExpList;
use think\api\request\ExpressQuery;
use think\api\request\ExpressSync;
use think\api\request\GoldBank;
use think\api\request\GoldFuture;
use think\api\request\GoldQuery;
use think\api\request\IdcardAuth;
use think\api\request\IdcardIndex;
use think\api\request\IdcardQuery;
use think\api\request\ImageGifDetect;
use think\api\request\ImageImgCensor;
use think\api\request\IpIndex;
use think\api\request\JokeLatest;
use think\api\request\JokeQuery;
use think\api\request\JokeRand;
use think\api\request\LotteryBonus;
use think\api\request\LotteryHistory;
use think\api\request\LotteryQuery;
use think\api\request\LotteryTypes;
use think\api\request\LuozNewEnergy;
use think\api\request\LuozQuery;
use think\api\request\LuozSupport;
use think\api\request\LuozTimes;
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
use think\api\request\OilQuery;
use think\api\request\PostcodePcd;
use think\api\request\PostcodeQuery;
use think\api\request\PostcodeSearch;
use think\api\request\PostcodeZone;
use think\api\request\QrcodeIndex;
use think\api\request\TelecomCodes;
use think\api\request\TelecomDetail;
use think\api\request\TelecomIdentify;
use think\api\request\TelecomLocation;
use think\api\request\TelecomQuery;
use think\api\request\TodayDetail;
use think\api\request\TodayEvent;
use think\api\request\UnnBatchUcheck;
use think\api\request\UnnStatus;
use think\api\request\Verifybankcard3Query;
use think\api\request\Verifybankcard4Query;
use think\api\request\WeatherArea;
use think\api\request\WeatherAreaForecast15;
use think\api\request\WeatherAreaForecast24;
use think\api\request\WeatherAreaForecast40;
use think\api\request\WeatherAreaForecast7;
use think\api\request\WeatherAreaHistory;
use think\api\request\WeatherAreaId;
use think\api\request\WeatherCityList;
use think\api\request\WeatherCoords;
use think\api\request\WeatherIp;
use think\api\request\WeatherQuery;
use think\api\request\WeatherScenic;
use think\api\request\WeatherWids;
use think\api\request\WeatherZip;
use think\api\request\WoolWcheck;
use think\api\request\WoolWtag;
use think\api\request\XinhuaBushou;
use think\api\request\XinhuaPinyin;
use think\api\request\XinhuaQuery;
use think\api\request\XinhuaQuerybs;
use think\api\request\XinhuaQueryid;
use think\api\request\XinhuaQuerypy;
use think\api\request\XinhuaResemble;

/**
 * @method AlmanacDate almanacDate()
 * @method AlmanacHour almanacHour()
 * @method AlmanacQq almanacQq()
 * @method BankcardTwoAuth bankcardTwoAuth()
 * @method BankcardThreeAuth bankcardThreeAuth()
 * @method BankcardThreeAuthDetail bankcardThreeAuthDetail()
 * @method BankcardAuth bankcardAuth()
 * @method BankcardAuthDetail bankcardAuthDetail()
 * @method BankcardAuthSecret bankcardAuthSecret()
 * @method BarcodeQuery barcodeQuery()
 * @method BookCatalog bookCatalog()
 * @method BookQuery bookQuery()
 * @method CalendarDay calendarDay()
 * @method CalendarMonth calendarMonth()
 * @method CalendarYear calendarYear()
 * @method CarBrand carBrand()
 * @method CarSeries carSeries()
 * @method CarModels carModels()
 * @method CarObd carObd()
 * @method ChengyuQuery chengyuQuery()
 * @method ConstellationQuery constellationQuery()
 * @method ConstellationMatch constellationMatch()
 * @method ConstellationZodiac constellationZodiac()
 * @method DreamCategory dreamCategory()
 * @method DreamQuery dreamQuery()
 * @method DreamId dreamId()
 * @method DrivingQuery drivingQuery()
 * @method DrivingAnswer drivingAnswer()
 * @method EnterpriseDetailInfo enterpriseDetailInfo()
 * @method ExchangeQuery exchangeQuery()
 * @method ExchangeCurrency exchangeCurrency()
 * @method ExchangeConvert exchangeConvert()
 * @method ExchangePrice exchangePrice()
 * @method ExchangeFrate exchangeFrate()
 * @method ExpIndex expIndex()
 * @method ExpressQuery expressQuery()
 * @method ExpressSync expressSync()
 * @method ExpressAsyc expressAsyc()
 * @method ExpressCompany expressCompany()
 * @method ExpressExpList expressExpList()
 * @method ExpressDot expressDot()
 * @method GoldQuery goldQuery()
 * @method GoldFuture goldFuture()
 * @method GoldBank goldBank()
 * @method IdcardQuery idcardQuery()
 * @method IdcardIndex idcardIndex()
 * @method IdcardAuth idcardAuth()
 * @method ImageImgCensor imageImgCensor()
 * @method ImageGifDetect imageGifDetect()
 * @method IpIndex ipIndex()
 * @method JokeQuery jokeQuery()
 * @method JokeLatest jokeLatest()
 * @method JokeRand jokeRand()
 * @method LotteryTypes lotteryTypes()
 * @method LotteryQuery lotteryQuery()
 * @method LotteryBonus lotteryBonus()
 * @method LotteryHistory lotteryHistory()
 * @method LuozQuery luozQuery()
 * @method LuozSupport luozSupport()
 * @method LuozTimes luozTimes()
 * @method LuozNewEnergy luozNewEnergy()
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
 * @method OilQuery oilQuery()
 * @method PostcodeQuery postcodeQuery()
 * @method PostcodeSearch postcodeSearch()
 * @method PostcodePcd postcodePcd()
 * @method PostcodeZone postcodeZone()
 * @method QrcodeIndex qrcodeIndex()
 * @method TelecomQuery telecomQuery()
 * @method TelecomDetail telecomDetail()
 * @method TelecomLocation telecomLocation()
 * @method TelecomIdentify telecomIdentify()
 * @method TelecomCodes telecomCodes()
 * @method TodayEvent todayEvent()
 * @method TodayDetail todayDetail()
 * @method UnnBatchUcheck unnBatchUcheck()
 * @method UnnStatus unnStatus()
 * @method Verifybankcard3Query verifybankcard3Query()
 * @method Verifybankcard4Query verifybankcard4Query()
 * @method WeatherCoords weatherCoords()
 * @method WeatherIp weatherIp()
 * @method WeatherArea weatherArea()
 * @method WeatherAreaForecast24 weatherAreaForecast24()
 * @method WeatherAreaForecast7 weatherAreaForecast7()
 * @method WeatherAreaForecast15 weatherAreaForecast15()
 * @method WeatherAreaForecast40 weatherAreaForecast40()
 * @method WeatherAreaHistory weatherAreaHistory()
 * @method WeatherScenic weatherScenic()
 * @method WeatherZip weatherZip()
 * @method WeatherAreaId weatherAreaId()
 * @method WeatherQuery weatherQuery()
 * @method WeatherWids weatherWids()
 * @method WeatherCityList weatherCityList()
 * @method WoolWcheck woolWcheck()
 * @method WoolWtag woolWtag()
 * @method XinhuaQuery xinhuaQuery()
 * @method XinhuaBushou xinhuaBushou()
 * @method XinhuaPinyin xinhuaPinyin()
 * @method XinhuaQuerybs xinhuaQuerybs()
 * @method XinhuaQuerypy xinhuaQuerypy()
 * @method XinhuaQueryid xinhuaQueryid()
 * @method XinhuaResemble xinhuaResemble()
 */
class Client
{
	use InteractsWithHttp;
}
