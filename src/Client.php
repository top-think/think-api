<?php

namespace think\api;

use think\api\concerns\InteractsWithHttp;
use think\api\request\AlmanacDate;
use think\api\request\AlmanacHour;
use think\api\request\AlmanacQq;
use think\api\request\AqiSearch;
use think\api\request\BankcardAuth;
use think\api\request\BankcardAuthDetail;
use think\api\request\BankcardAuthSecret;
use think\api\request\BankcardThreeAuth;
use think\api\request\BankcardThreeAuthDetail;
use think\api\request\BankcardTwoAuth;
use think\api\request\BarcodeQuery;
use think\api\request\BmiIndex;
use think\api\request\BookCatalog;
use think\api\request\BookQuery;
use think\api\request\BrainTeaserIndex;
use think\api\request\CalendarDay;
use think\api\request\CalendarMonth;
use think\api\request\CalendarYear;
use think\api\request\CarBrand;
use think\api\request\CarModels;
use think\api\request\CarObd;
use think\api\request\CarSeries;
use think\api\request\CharConvert;
use think\api\request\ChengyuAllusion;
use think\api\request\ChengyuGuess;
use think\api\request\ChengyuJielong;
use think\api\request\ChengyuQuery;
use think\api\request\ConstellationMatch;
use think\api\request\ConstellationQuery;
use think\api\request\ConstellationZodiac;
use think\api\request\DreamCategory;
use think\api\request\DreamId;
use think\api\request\DreamQuery;
use think\api\request\DrivingAnswer;
use think\api\request\DrivingQuery;
use think\api\request\EnglishDay;
use think\api\request\EnterpriseDetailInfo;
use think\api\request\ExchangeConvert;
use think\api\request\ExchangeCurrency;
use think\api\request\ExchangeFrate;
use think\api\request\ExchangePrice;
use think\api\request\ExchangeQuery;
use think\api\request\ExpIndex;
use think\api\request\ExpressAddress;
use think\api\request\ExpressAsyc;
use think\api\request\ExpressCompany;
use think\api\request\ExpressDot;
use think\api\request\ExpressExpList;
use think\api\request\ExpressQuery;
use think\api\request\FanyiIndex;
use think\api\request\FoodMenu;
use think\api\request\FoodNutrient;
use think\api\request\GoldBank;
use think\api\request\GoldFuture;
use think\api\request\GoldQuery;
use think\api\request\HotDouyin;
use think\api\request\HotVideo;
use think\api\request\HotWeibo;
use think\api\request\HotWeixin;
use think\api\request\IdcardAuth;
use think\api\request\IdcardIndex;
use think\api\request\IdcardQuery;
use think\api\request\ImageGifDetect;
use think\api\request\ImageImgCensor;
use think\api\request\IpIndex;
use think\api\request\JdDetail;
use think\api\request\JokeLatest;
use think\api\request\JokeQuery;
use think\api\request\JokeRand;
use think\api\request\LifeTip;
use think\api\request\LiteraryMemo;
use think\api\request\LiteraryOne;
use think\api\request\LiteraryPoetry;
use think\api\request\LiteraryQuan;
use think\api\request\LiteraryQuote;
use think\api\request\LiterarySong;
use think\api\request\LiteraryTang;
use think\api\request\LiteraryYuan;
use think\api\request\LotteryBonus;
use think\api\request\LotteryHistory;
use think\api\request\LotteryQuery;
use think\api\request\LotteryTypes;
use think\api\request\LuozNewEnergy;
use think\api\request\LuozQuery;
use think\api\request\LuozSupport;
use think\api\request\LuozTimes;
use think\api\request\MedicineIndex;
use think\api\request\MedicineSearch;
use think\api\request\MoneyConvert;
use think\api\request\NewsHot;
use think\api\request\NewsToutiao;
use think\api\request\OcrBankcard;
use think\api\request\OcrBusinessLicense;
use think\api\request\OcrDrivingLicense;
use think\api\request\OcrFace;
use think\api\request\OcrHand;
use think\api\request\OcrIdcard;
use think\api\request\OcrIdCardText;
use think\api\request\OcrIdOcr;
use think\api\request\OcrInvoice;
use think\api\request\OcrPassport;
use think\api\request\OcrTxt;
use think\api\request\OcrVehicleLicense;
use think\api\request\OilQuery;
use think\api\request\PetIndex;
use think\api\request\PostcodePcd;
use think\api\request\PostcodeQuery;
use think\api\request\PostcodeSearch;
use think\api\request\PostcodeZone;
use think\api\request\QrcodeCodec;
use think\api\request\QrcodeIndex;
use think\api\request\RumourIndex;
use think\api\request\StarIndex;
use think\api\request\SurnameIndex;
use think\api\request\TaobaoAlibabaInfo;
use think\api\request\TaobaoDetail;
use think\api\request\TaobaoItem;
use think\api\request\TaobaokeCheckOrder;
use think\api\request\TaobaokeQuery;
use think\api\request\TaobaoShop;
use think\api\request\TelecomCodes;
use think\api\request\TelecomDetail;
use think\api\request\TelecomIdentify;
use think\api\request\TelecomLocation;
use think\api\request\TelecomQuery;
use think\api\request\TimeHoliday;
use think\api\request\TimeLunar;
use think\api\request\TimeWorld;
use think\api\request\TodayDetail;
use think\api\request\TodayEvent;
use think\api\request\TrashIndex;
use think\api\request\TulingIndex;
use think\api\request\UnnBatchUcheck;
use think\api\request\UnnStatus;
use think\api\request\Verifybankcard3Query;
use think\api\request\Verifybankcard4Query;
use think\api\request\WeatherArea;
use think\api\request\WeatherAreaForecast7;
use think\api\request\WeatherAreaForecast15;
use think\api\request\WeatherAreaForecast24;
use think\api\request\WeatherAreaForecast40;
use think\api\request\WeatherAreaHistory;
use think\api\request\WeatherAreaId;
use think\api\request\WeatherCityList;
use think\api\request\WeatherCoords;
use think\api\request\WeatherIp;
use think\api\request\WeatherQuery;
use think\api\request\WeatherScenic;
use think\api\request\WeatherWids;
use think\api\request\WeatherZip;
use think\api\request\WebsiteAntispam;
use think\api\request\WebsiteBaidu;
use think\api\request\WebsiteBeian;
use think\api\request\WebsiteCheatip;
use think\api\request\WebsiteCheatlink;
use think\api\request\WebsiteDomain;
use think\api\request\WebsiteHttps;
use think\api\request\WebsiteImgcensor;
use think\api\request\WebsiteIp;
use think\api\request\WebsiteIpv6;
use think\api\request\WebsiteQq;
use think\api\request\WebsiteShorturl;
use think\api\request\WebsiteSo;
use think\api\request\WebsiteSogou;
use think\api\request\WebsiteWabeian;
use think\api\request\WechatCheck;
use think\api\request\WechatChoice;
use think\api\request\WechatLink;
use think\api\request\WechatRead;
use think\api\request\WechatSearch;
use think\api\request\WikiDoggerel;
use think\api\request\WikiGodreply;
use think\api\request\WikiHotword;
use think\api\request\WikiIndex;
use think\api\request\WikiLantern;
use think\api\request\WikiRiddle;
use think\api\request\WikiStory;
use think\api\request\WikiTiku;
use think\api\request\WikiTongue;
use think\api\request\WikiXiehou;
use think\api\request\WoolWcheck;
use think\api\request\WoolWtag;
use think\api\request\WordSegment;
use think\api\request\XinhuaBushou;
use think\api\request\XinhuaConvertPy;
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
 * @method AqiSearch aqiSearch()
 * @method BankcardTwoAuth bankcardTwoAuth()
 * @method BankcardThreeAuth bankcardThreeAuth()
 * @method BankcardThreeAuthDetail bankcardThreeAuthDetail()
 * @method BankcardAuth bankcardAuth()
 * @method BankcardAuthDetail bankcardAuthDetail()
 * @method BankcardAuthSecret bankcardAuthSecret()
 * @method BarcodeQuery barcodeQuery()
 * @method BmiIndex bmiIndex()
 * @method BookCatalog bookCatalog()
 * @method BookQuery bookQuery()
 * @method BrainTeaserIndex brainTeaserIndex()
 * @method CalendarDay calendarDay()
 * @method CalendarMonth calendarMonth()
 * @method CalendarYear calendarYear()
 * @method CarBrand carBrand()
 * @method CarSeries carSeries()
 * @method CarModels carModels()
 * @method CarObd carObd()
 * @method CharConvert charConvert()
 * @method ChengyuQuery chengyuQuery()
 * @method ChengyuAllusion chengyuAllusion()
 * @method ChengyuJielong chengyuJielong()
 * @method ChengyuGuess chengyuGuess()
 * @method ConstellationQuery constellationQuery()
 * @method ConstellationMatch constellationMatch()
 * @method ConstellationZodiac constellationZodiac()
 * @method DreamCategory dreamCategory()
 * @method DreamQuery dreamQuery()
 * @method DreamId dreamId()
 * @method DrivingQuery drivingQuery()
 * @method DrivingAnswer drivingAnswer()
 * @method EnglishDay englishDay()
 * @method EnterpriseDetailInfo enterpriseDetailInfo()
 * @method ExchangeQuery exchangeQuery()
 * @method ExchangeCurrency exchangeCurrency()
 * @method ExchangeConvert exchangeConvert()
 * @method ExchangePrice exchangePrice()
 * @method ExchangeFrate exchangeFrate()
 * @method ExpIndex expIndex()
 * @method ExpressQuery expressQuery()
 * @method ExpressAsyc expressAsyc()
 * @method ExpressCompany expressCompany()
 * @method ExpressExpList expressExpList()
 * @method ExpressDot expressDot()
 * @method ExpressAddress expressAddress()
 * @method FanyiIndex fanyiIndex()
 * @method FoodNutrient foodNutrient()
 * @method FoodMenu foodMenu()
 * @method GoldQuery goldQuery()
 * @method GoldFuture goldFuture()
 * @method GoldBank goldBank()
 * @method HotWeixin hotWeixin()
 * @method HotDouyin hotDouyin()
 * @method HotVideo hotVideo()
 * @method HotWeibo hotWeibo()
 * @method IdcardQuery idcardQuery()
 * @method IdcardIndex idcardIndex()
 * @method IdcardAuth idcardAuth()
 * @method ImageImgCensor imageImgCensor()
 * @method ImageGifDetect imageGifDetect()
 * @method IpIndex ipIndex()
 * @method JdDetail jdDetail()
 * @method JokeQuery jokeQuery()
 * @method JokeLatest jokeLatest()
 * @method JokeRand jokeRand()
 * @method LifeTip lifeTip()
 * @method LiteraryPoetry literaryPoetry()
 * @method LiteraryTang literaryTang()
 * @method LiterarySong literarySong()
 * @method LiteraryYuan literaryYuan()
 * @method LiteraryQuote literaryQuote()
 * @method LiteraryMemo literaryMemo()
 * @method LiteraryQuan literaryQuan()
 * @method LiteraryOne literaryOne()
 * @method LotteryTypes lotteryTypes()
 * @method LotteryQuery lotteryQuery()
 * @method LotteryBonus lotteryBonus()
 * @method LotteryHistory lotteryHistory()
 * @method LuozQuery luozQuery()
 * @method LuozSupport luozSupport()
 * @method LuozTimes luozTimes()
 * @method LuozNewEnergy luozNewEnergy()
 * @method MedicineIndex medicineIndex()
 * @method MedicineSearch medicineSearch()
 * @method MoneyConvert moneyConvert()
 * @method NewsToutiao newsToutiao()
 * @method NewsHot newsHot()
 * @method NewsWeibo newsWeibo()
 * @method NewsDouyin newsDouyin()
 * @method OcrIdcard ocrIdcard()
 * @method OcrIdOcr ocrIdOcr()
 * @method OcrBankcard ocrBankcard()
 * @method OcrBusinessLicense ocrBusinessLicense()
 * @method OcrDrivingLicense ocrDrivingLicense()
 * @method OcrVehicleLicense ocrVehicleLicense()
 * @method OcrPassport ocrPassport()
 * @method OcrInvoice ocrInvoice()
 * @method OcrHand ocrHand()
 * @method OcrFace ocrFace()
 * @method OcrTxt ocrTxt()
 * @method OcrIdCardText ocrIdCardText()
 * @method OilQuery oilQuery()
 * @method PetIndex petIndex()
 * @method PostcodeQuery postcodeQuery()
 * @method PostcodeSearch postcodeSearch()
 * @method PostcodePcd postcodePcd()
 * @method PostcodeZone postcodeZone()
 * @method QrcodeIndex qrcodeIndex()
 * @method QrcodeCodec qrcodeCodec()
 * @method RumourIndex rumourIndex()
 * @method StarIndex starIndex()
 * @method SurnameIndex surnameIndex()
 * @method TaobaoDetail taobaoDetail()
 * @method TaobaoItem taobaoItem()
 * @method TaobaoShop taobaoShop()
 * @method TaobaoAlibabaInfo taobaoAlibabaInfo()
 * @method TaobaokeQuery taobaokeQuery()
 * @method TaobaokeCheckOrder taobaokeCheckOrder()
 * @method TelecomQuery telecomQuery()
 * @method TelecomDetail telecomDetail()
 * @method TelecomLocation telecomLocation()
 * @method TelecomIdentify telecomIdentify()
 * @method TelecomCodes telecomCodes()
 * @method TimeLunar timeLunar()
 * @method TimeHoliday timeHoliday()
 * @method TimeWorld timeWorld()
 * @method TodayEvent todayEvent()
 * @method TodayDetail todayDetail()
 * @method TrashIndex trashIndex()
 * @method TulingIndex tulingIndex()
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
 * @method WebsiteBeian websiteBeian()
 * @method WebsiteBaidu websiteBaidu()
 * @method WebsiteSogou websiteSogou()
 * @method WebsiteSo websiteSo()
 * @method WebsiteWabeian websiteWabeian()
 * @method WebsiteQq websiteQq()
 * @method WebsiteHttps websiteHttps()
 * @method WebsiteIpv6 websiteIpv6()
 * @method WebsiteShorturl websiteShorturl()
 * @method WebsiteAntispam websiteAntispam()
 * @method WebsiteImgcensor websiteImgcensor()
 * @method WebsiteCheatlink websiteCheatlink()
 * @method WebsiteCheatip websiteCheatip()
 * @method WebsiteDomain websiteDomain()
 * @method WebsiteIp websiteIp()
 * @method WechatChoice wechatChoice()
 * @method WechatSearch wechatSearch()
 * @method WechatLink wechatLink()
 * @method WechatCheck wechatCheck()
 * @method WechatRead wechatRead()
 * @method WikiIndex wikiIndex()
 * @method WikiTiku wikiTiku()
 * @method WikiRiddle wikiRiddle()
 * @method WikiLantern wikiLantern()
 * @method WikiStory wikiStory()
 * @method WikiTongue wikiTongue()
 * @method WikiHotword wikiHotword()
 * @method WikiGodreply wikiGodreply()
 * @method WikiXiehou wikiXiehou()
 * @method WikiDoggerel wikiDoggerel()
 * @method WoolWcheck woolWcheck()
 * @method WoolWtag woolWtag()
 * @method WordSegment wordSegment()
 * @method XinhuaQuery xinhuaQuery()
 * @method XinhuaBushou xinhuaBushou()
 * @method XinhuaPinyin xinhuaPinyin()
 * @method XinhuaQuerybs xinhuaQuerybs()
 * @method XinhuaQuerypy xinhuaQuerypy()
 * @method XinhuaQueryid xinhuaQueryid()
 * @method XinhuaResemble xinhuaResemble()
 * @method XinhuaConvertPy xinhuaConvertPy()
 */
class Client
{
    use InteractsWithHttp;
}
