<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withDate($value)
 */
class AlmanacDate extends Request
{
}

/**
 * @method $this withDate($value)
 */
class AlmanacHour extends Request
{
}

/**
 * @method $this withQq($value)
 */
class AlmanacQq extends Request
{
}

/**
 * @method $this withArea($value)
 */
class AqiSearch extends Request
{
}

/**
 * @method $this withKeyword($value)
 */
class BaiduIndex extends Request
{
}

/**
 * @method $this withDomainName($value)
 * @method $this withKeyword($value)
 */
class BaiduPcRank extends Request
{
    public $uri = 'baidu/pc_rank';
}

/**
 * @method $this withQueryData($value)
 * @method $this withQueryType($value)
 */
class BaiduMobileRank extends Request
{
    public $uri = 'baidu/mobile_rank';
}

/**
 * @method $this withDomainName($value)
 */
class BaiduLinks extends Request
{
}

/**
 * @method $this withDomainName($value)
 */
class BaiduPages extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class BaiduPcUrlPages extends Request
{
    public $uri = 'baidu/pc_url_pages';
}

/**
 * @method $this withUrl($value)
 */
class BaiduMobileUrlPages extends Request
{
    public $uri = 'baidu/mobile_url_pages';
}

/**
 * @method $this withDomainName($value)
 */
class BaiduPcWeight extends Request
{
    public $uri = 'baidu/pc_weight';
}

/**
 * @method $this withDomainName($value)
 */
class BaiduMobileWeight extends Request
{
    public $uri = 'baidu/mobile_weight';
}

/**
 * @method $this withKeyword($value)
 */
class BaiduKeyword extends Request
{
}

/**
 * @method $this withName($value)
 * @method $this withCardNo($value)
 */
class BankcardTwoAuth extends Request
{
    public $uri = 'bankcard/two_auth';
}

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 * @method $this withCardNo($value)
 */
class BankcardThreeAuth extends Request
{
    public $uri = 'bankcard/three_auth';
}

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 * @method $this withCardNo($value)
 */
class BankcardThreeAuthDetail extends Request
{
    public $uri = 'bankcard/three_auth_detail';
}

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 * @method $this withCardNo($value)
 * @method $this withMobile($value)
 */
class BankcardAuth extends Request
{
}

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 * @method $this withCardNo($value)
 * @method $this withMobile($value)
 */
class BankcardAuthDetail extends Request
{
    public $uri = 'bankcard/auth_detail';
}

/**
 * @method $this withParam($value)
 */
class BankcardAuthSecret extends Request
{
    public $uri = 'bankcard/auth_secret';
}

/**
 * @method $this withCode($value)
 */
class BarcodeQuery extends Request
{
}

/**
 * @method $this withHeight($value)
 * @method $this withWeight($value)
 * @method $this withSex($value)
 */
class BmiIndex extends Request
{
}

class BookCatalog extends Request
{
}

/**
 * @method $this withCatalogId($value)
 * @method $this withPn($value)
 * @method $this withRn($value)
 */
class BookQuery extends Request
{
}

/**
 * @method $this withSub($value)
 */
class BookIsbn extends Request
{
}

/**
 * @method $this withNum($value)
 */
class BrainTeaserIndex extends Request
{
    public $uri = 'brain_teaser/index';
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
 * @method $this withFirstLetter($value)
 */
class CarBrand extends Request
{
}

/**
 * @method $this withBrandid($value)
 * @method $this withLevelid($value)
 */
class CarSeries extends Request
{
}

/**
 * @method $this withSeriesId($value)
 * @method $this withYear($value)
 */
class CarModels extends Request
{
}

/**
 * @method $this withCode($value)
 */
class CarObd extends Request
{
}

/**
 * @method $this withType($value)
 * @method $this withCity($value)
 */
class CarLimit extends Request
{
}

/**
 * @method $this withVin($value)
 */
class CarVin extends Request
{
}

/**
 * @method $this withText($value)
 * @method $this withType($value)
 */
class CharConvert extends Request
{
}

/**
 * @method $this withWord($value)
 */
class ChengyuQuery extends Request
{
}

/**
 * @method $this withWord($value)
 */
class ChengyuAllusion extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withUserid($value)
 * @method $this withStatetime($value)
 */
class ChengyuJielong extends Request
{
}

class ChengyuGuess extends Request
{
}

/**
 * @method $this withConsName($value)
 * @method $this withType($value)
 */
class ConstellationQuery extends Request
{
}

/**
 * @method $this withMen($value)
 * @method $this withWomen($value)
 */
class ConstellationMatch extends Request
{
}

/**
 * @method $this withMen($value)
 * @method $this withWomen($value)
 */
class ConstellationZodiac extends Request
{
}

class DreamCategory extends Request
{
}

/**
 * @method $this withQ($value)
 * @method $this withCid($value)
 * @method $this withFull($value)
 */
class DreamQuery extends Request
{
}

/**
 * @method $this withId($value)
 */
class DreamId extends Request
{
}

/**
 * @method $this withSubject($value)
 * @method $this withModel($value)
 * @method $this withTestType($value)
 */
class DrivingQuery extends Request
{
}

class DrivingAnswer extends Request
{
}

/**
 * @method $this withRand($value)
 * @method $this withDate($value)
 */
class EnglishDay extends Request
{
}

/**
 * @method $this withKeyword($value)
 */
class EnterpriseDetailInfo extends Request
{
    public $uri = 'enterprise/detail_info';
}

/**
 * @method $this withKeyword($value)
 * @method $this withPageIndex($value)
 * @method $this withPageSize($value)
 */
class EnterpriseCopyright extends Request
{
}

/**
 * @method $this withKeyword($value)
 */
class EnterpriseCreditcode extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withPageSize($value)
 * @method $this withPageNo($value)
 * @method $this withSearchType($value)
 * @method $this withIntCls($value)
 */
class EnterpriseTrademark extends Request
{
}

/**
 * @method $this withDs($value)
 * @method $this withQ($value)
 * @method $this withP($value)
 * @method $this withPs($value)
 * @method $this withS($value)
 * @method $this withHl($value)
 */
class EnterprisePatent extends Request
{
}

class ExchangeQuery extends Request
{
}

class ExchangeCurrency extends Request
{
}

/**
 * @method $this withFrom($value)
 * @method $this withTo($value)
 */
class ExchangeConvert extends Request
{
}

/**
 * @method $this withBank($value)
 */
class ExchangePrice extends Request
{
}

class ExchangeFrate extends Request
{
}

/**
 * @method $this withCom($value)
 * @method $this withNu($value)
 * @method $this withPhone($value)
 */
class ExpIndex extends Request
{
}

/**
 * @method $this withCom($value)
 * @method $this withNu($value)
 * @method $this withPhone($value)
 */
class ExpressQuery extends Request
{
}

/**
 * @method $this withCom($value)
 * @method $this withNu($value)
 * @method $this withCallBackUrl($value)
 * @method $this withOutCode($value)
 * @method $this withPhone($value)
 */
class ExpressAsyc extends Request
{
}

/**
 * @method $this withNu($value)
 */
class ExpressCompany extends Request
{
}

/**
 * @method $this withExpName($value)
 * @method $this withMaxSize($value)
 * @method $this withPage($value)
 */
class ExpressExpList extends Request
{
    public $uri = 'express/exp_list';
}

/**
 * @method $this withSiteName($value)
 * @method $this withAddr($value)
 * @method $this withContactInfo($value)
 */
class ExpressDot extends Request
{
}

/**
 * @method $this withText($value)
 */
class ExpressAddress extends Request
{
}

/**
 * @method $this withText($value)
 * @method $this withTo($value)
 */
class FanyiIndex extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withMode($value)
 * @method $this withNum($value)
 * @method $this withPage($value)
 */
class FoodNutrient extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withNum($value)
 * @method $this withPage($value)
 */
class FoodMenu extends Request
{
}

/**
 * @method $this withLng($value)
 * @method $this withLat($value)
 * @method $this withType($value)
 */
class GeoIndex extends Request
{
}

/**
 * @method $this withLng($value)
 * @method $this withLat($value)
 * @method $this withType($value)
 */
class GeoConvert extends Request
{
}

class GoldQuery extends Request
{
}

class GoldFuture extends Request
{
}

class GoldBank extends Request
{
}

/**
 * @method $this withDirector($value)
 */
class GstoreMovieByDirector extends Request
{
    public $uri = 'gstore/movie_by_director';
}

/**
 * @method $this withActor1($value)
 * @method $this withActor2($value)
 */
class GstoreMovieByActors extends Request
{
    public $uri = 'gstore/movie_by_actors';
}

/**
 * @method $this withDisease($value)
 */
class GstoreSymptom extends Request
{
}

/**
 * @method $this withSymptom($value)
 */
class GstoreDisease extends Request
{
}

/**
 * @method $this withDisease($value)
 */
class GstoreTabooFood extends Request
{
    public $uri = 'gstore/taboo_food';
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 */
class HotWeixin extends Request
{
}

class HotDouyin extends Request
{
}

class HotVideo extends Request
{
}

class HotWeibo extends Request
{
}

/**
 * @method $this withIdcard($value)
 * @method $this withRealname($value)
 * @method $this withOrderid($value)
 */
class IdcardQuery extends Request
{
}

/**
 * @method $this withCardno($value)
 */
class IdcardIndex extends Request
{
}

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 */
class IdcardAuth extends Request
{
}

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

/**
 * @method $this withImage($value)
 */
class ImageGifDetect extends Request
{
    public $uri = 'image/gif_detect';
}

/**
 * @method $this withIp($value)
 */
class IpIndex extends Request
{
}

/**
 * @method $this withId($value)
 */
class JdDetail extends Request
{
}

/**
 * @method $this withSort($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 * @method $this withTime($value)
 */
class JokeQuery extends Request
{
}

/**
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 */
class JokeLatest extends Request
{
}

class JokeRand extends Request
{
}

class LifeTip extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class LiteraryPoetry extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class LiteraryTang extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class LiterarySong extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class LiteraryYuan extends Request
{
}

class LiteraryQuote extends Request
{
}

class LiteraryMemo extends Request
{
}

class LiteraryQuan extends Request
{
}

/**
 * @method $this withRand($value)
 * @method $this withDate($value)
 */
class LiteraryOne extends Request
{
}

class LotteryTypes extends Request
{
}

/**
 * @method $this withLotteryId($value)
 * @method $this withLotteryNo($value)
 */
class LotteryQuery extends Request
{
}

/**
 * @method $this withLotteryId($value)
 * @method $this withLotteryNo($value)
 * @method $this withLotteryRes($value)
 */
class LotteryBonus extends Request
{
}

/**
 * @method $this withLotteryId($value)
 * @method $this withPage($value)
 * @method $this withPageSize($value)
 */
class LotteryHistory extends Request
{
}

/**
 * @method $this withCarNumber($value)
 * @method $this withCarCode($value)
 * @method $this withCarEngineCode($value)
 * @method $this withJgjId($value)
 * @method $this withCarType($value)
 */
class LuozQuery extends Request
{
}

/**
 * @method $this withPreCarNum($value)
 * @method $this withProvince($value)
 */
class LuozSupport extends Request
{
}

/**
 * @method $this withCarNumber($value)
 * @method $this withCarCode($value)
 * @method $this withCarEngineCode($value)
 */
class LuozTimes extends Request
{
}

/**
 * @method $this withCarNumber($value)
 * @method $this withCarCode($value)
 * @method $this withCarEngineCode($value)
 * @method $this withCarType($value)
 */
class LuozNewEnergy extends Request
{
    public $uri = 'luoz/new_energy';
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class MedicineIndex extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class MedicineSearch extends Request
{
}

/**
 * @method $this withMoney($value)
 * @method $this withType($value)
 */
class MoneyConvert extends Request
{
}

/**
 * @method $this withType($value)
 */
class NewsToutiao extends Request
{
}

class NewsHot extends Request
{
}

/**
 * @method $this withImage($value)
 * @method $this withSide($value)
 */
class OcrIdcard extends Request
{
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 * @method $this withOcrType($value)
 */
class OcrIdOcr extends Request
{
    public $uri = 'ocr/id_ocr';
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrBankcard extends Request
{
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrBusinessLicense extends Request
{
    public $uri = 'ocr/business_license';
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrDrivingLicense extends Request
{
    public $uri = 'ocr/driving_license';
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrVehicleLicense extends Request
{
    public $uri = 'ocr/vehicle_license';
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrPassport extends Request
{
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrInvoice extends Request
{
}

/**
 * @method $this withImage($value)
 * @method $this withImageType($value)
 */
class OcrHand extends Request
{
}

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

/**
 * @method $this withImage($value)
 */
class OcrFace extends Request
{
}

/**
 * @method $this withImgurl($value)
 */
class OcrTxt extends Request
{
}

/**
 * @method $this withImage($value)
 */
class OcrArithmetic extends Request
{
}

/**
 * @method $this withImageBase64($value)
 */
class OcrEdu extends Request
{
}

/**
 * @method $this withImage($value)
 * @method $this withImageUrl($value)
 */
class OcrMaskDetect extends Request
{
    public $uri = 'ocr/mask_detect';
}

class OilQuery extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 * @method $this withType($value)
 */
class PetIndex extends Request
{
}

/**
 * @method $this withPostcode($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 */
class PostcodeQuery extends Request
{
}

/**
 * @method $this withPid($value)
 * @method $this withCid($value)
 * @method $this withDid($value)
 * @method $this withQ($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 */
class PostcodeSearch extends Request
{
}

class PostcodePcd extends Request
{
}

/**
 * @method $this withFid($value)
 */
class PostcodeZone extends Request
{
}

/**
 * @method $this withText($value)
 * @method $this withEl($value)
 * @method $this withBgcolor($value)
 * @method $this withFgcolor($value)
 * @method $this withLogo($value)
 * @method $this withW($value)
 * @method $this withM($value)
 * @method $this withLw($value)
 * @method $this withType($value)
 */
class QrcodeIndex extends Request
{
}

/**
 * @method $this withQrpic($value)
 * @method $this withQrurl($value)
 */
class QrcodeCodec extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withNum($value)
 * @method $this withPage($value)
 */
class RumourIndex extends Request
{
}

/**
 * @method $this withImage($value)
 */
class ShopSnap extends Request
{
}

/**
 * @method $this withName($value)
 * @method $this withSex($value)
 * @method $this withNation($value)
 * @method $this withBirth($value)
 * @method $this withConstellation($value)
 * @method $this withPage($value)
 * @method $this withNum($value)
 */
class StarIndex extends Request
{
}

/**
 * @method $this withXing($value)
 */
class SurnameIndex extends Request
{
}

/**
 * @method $this withId($value)
 */
class TaobaoDetail extends Request
{
}

/**
 * @method $this withId($value)
 */
class TaobaoInfo extends Request
{
}

/**
 * @method $this withId($value)
 * @method $this withInfo($value)
 * @method $this withAreaId($value)
 */
class TaobaoItem extends Request
{
}

/**
 * @method $this withId($value)
 */
class TaobaoImage extends Request
{
}

/**
 * @method $this withItemId($value)
 */
class TaobaoShop extends Request
{
}

/**
 * @method $this withItemId($value)
 */
class TaobaoAlibabaInfo extends Request
{
    public $uri = 'taobao/alibaba_info';
}

/**
 * @method $this withTkl($value)
 * @method $this withDepth($value)
 */
class TaobaokeQuery extends Request
{
}

/**
 * @method $this withOrderNo($value)
 */
class TaobaokeCheckOrder extends Request
{
    public $uri = 'taobaoke/check_order';
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
 * @method $this withRealname($value)
 * @method $this withIdcard($value)
 * @method $this withMobile($value)
 */
class TelecomDetail extends Request
{
}

/**
 * @method $this withPhone($value)
 */
class TelecomLocation extends Request
{
}

/**
 * @method $this withTel($value)
 */
class TelecomIdentify extends Request
{
}

/**
 * @method $this withChars($value)
 */
class TelecomCodes extends Request
{
}

/**
 * @method $this withWord($value)
 */
class TimeLunar extends Request
{
}

/**
 * @method $this withDate($value)
 * @method $this withMode($value)
 */
class TimeHoliday extends Request
{
}

/**
 * @method $this withCity($value)
 */
class TimeWorld extends Request
{
}

/**
 * @method $this withDate($value)
 */
class TodayEvent extends Request
{
}

/**
 * @method $this withEId($value)
 */
class TodayDetail extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withMode($value)
 * @method $this withNum($value)
 * @method $this withPage($value)
 */
class TrashIndex extends Request
{
}

/**
 * @method $this withSpeech($value)
 * @method $this withFormat($value)
 * @method $this withType($value)
 */
class TrashVoice extends Request
{
}

/**
 * @method $this withImage($value)
 * @method $this withType($value)
 */
class TrashImage extends Request
{
}

/**
 * @method $this withQ($value)
 * @method $this withType($value)
 */
class TrashSearch extends Request
{
}

/**
 * @method $this withQuestion($value)
 * @method $this withUser($value)
 */
class TulingIndex extends Request
{
}

/**
 * @method $this withMobiles($value)
 * @method $this withType($value)
 */
class UnnBatchUcheck extends Request
{
    public $uri = 'unn/batch_ucheck';
}

/**
 * @method $this withMobile($value)
 * @method $this withOrderNo($value)
 */
class UnnStatus extends Request
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

/**
 * @method $this withFrom($value)
 * @method $this withLng($value)
 * @method $this withLat($value)
 * @method $this withNeedMoreDay($value)
 * @method $this withNeedIndex($value)
 * @method $this withNeedHourData($value)
 * @method $this withNeed3HourForcast($value)
 * @method $this withNeedAlarm($value)
 */
class WeatherCoords extends Request
{
}

/**
 * @method $this withIp($value)
 * @method $this withNeedMoreDay($value)
 * @method $this withNeedIndex($value)
 * @method $this withNeedHourData($value)
 * @method $this withNeed3HourForcast($value)
 * @method $this withNeedAlarm($value)
 */
class WeatherIp extends Request
{
}

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 * @method $this withNeedMoreDay($value)
 * @method $this withNeedIndex($value)
 * @method $this withNeedHourData($value)
 * @method $this withNeed3HourForcast($value)
 * @method $this withNeedAlarm($value)
 */
class WeatherArea extends Request
{
}

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 */
class WeatherAreaForecast24 extends Request
{
    public $uri = 'weather/area_forecast24';
}

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 * @method $this withNeed3HourForcast($value)
 */
class WeatherAreaForecast7 extends Request
{
    public $uri = 'weather/area_forecast7';
}

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 */
class WeatherAreaForecast15 extends Request
{
    public $uri = 'weather/area_forecast15';
}

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 */
class WeatherAreaForecast40 extends Request
{
    public $uri = 'weather/area_forecast40';
}

/**
 * @method $this withArea($value)
 * @method $this withAreaCode($value)
 * @method $this withMonth($value)
 * @method $this withStartDate($value)
 * @method $this withEndDate($value)
 */
class WeatherAreaHistory extends Request
{
    public $uri = 'weather/area_history';
}

/**
 * @method $this withArea($value)
 * @method $this withSpotId($value)
 * @method $this withNeedMoreDay($value)
 * @method $this withNeedIndex($value)
 * @method $this withNeedHourData($value)
 * @method $this withNeed3HourForcast($value)
 * @method $this withNeedAlarm($value)
 */
class WeatherScenic extends Request
{
}

/**
 * @method $this withPostCode($value)
 * @method $this withPhoneCode($value)
 * @method $this withNeedMoreDay($value)
 * @method $this withNeedIndex($value)
 * @method $this withNeedHourData($value)
 * @method $this withNeed3HourForcast($value)
 * @method $this withNeedAlarm($value)
 */
class WeatherZip extends Request
{
}

/**
 * @method $this withArea($value)
 */
class WeatherAreaId extends Request
{
    public $uri = 'weather/area_id';
}

/**
 * @method $this withCity($value)
 */
class WeatherQuery extends Request
{
}

class WeatherWids extends Request
{
}

class WeatherCityList extends Request
{
    public $uri = 'weather/city_list';
}

/**
 * @method $this withDomain($value)
 */
class WebsiteBeian extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WebsiteQq extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WebsiteCheatlink extends Request
{
}

/**
 * @method $this withIp($value)
 */
class WebsiteCheatip extends Request
{
}

/**
 * @method $this withContent($value)
 */
class WebsiteAntispam extends Request
{
}

/**
 * @method $this withImgurl($value)
 */
class WebsiteImgcensor extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WebsiteShorturl extends Request
{
}

/**
 * @method $this withDomain($value)
 */
class WebsiteHttps extends Request
{
}

/**
 * @method $this withDomain($value)
 */
class WebsiteBaidu extends Request
{
}

/**
 * @method $this withDomain($value)
 */
class WebsiteSogou extends Request
{
}

/**
 * @method $this withDomain($value)
 */
class WebsiteSo extends Request
{
}

/**
 * @method $this withDomain($value)
 */
class WebsiteIpv6 extends Request
{
}

/**
 * @method $this withDomain($value)
 */
class WebsiteDomain extends Request
{
}

/**
 * @method $this withIp($value)
 * @method $this withLongitude($value)
 * @method $this withLatitude($value)
 */
class WebsiteIp extends Request
{
}

/**
 * @method $this withDomain($value)
 */
class WebsiteWabeian extends Request
{
}

/**
 * @method $this withDomainName($value)
 */
class WebsiteIcp extends Request
{
}

/**
 * @method $this withDomainName($value)
 */
class WebsiteAlexa extends Request
{
}

/**
 * @method $this withDomainName($value)
 */
class WebsiteWhois extends Request
{
}

/**
 * @method $this withQueryData($value)
 * @method $this withQueryType($value)
 */
class WebsiteWhoisReverse extends Request
{
    public $uri = 'website/whois_reverse';
}

/**
 * @method $this withDomainName($value)
 * @method $this withYear($value)
 * @method $this withWeek($value)
 */
class WebsiteTop extends Request
{
}

/**
 * @method $this withUrl($value)
 * @method $this withType($value)
 * @method $this withWidth($value)
 */
class WebsiteUrl2pic extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withPage($value)
 * @method $this withTypeid($value)
 * @method $this withSrc($value)
 * @method $this withNum($value)
 */
class WechatChoice extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withPage($value)
 */
class WechatSearch extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WechatLink extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WechatCheck extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WechatRead extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 * @method $this withTypeid($value)
 */
class WikiIndex extends Request
{
}

class WikiTiku extends Request
{
}

class WikiRiddle extends Request
{
}

class WikiLantern extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 * @method $this withType($value)
 */
class WikiStory extends Request
{
}

/**
 * @method $this withNum($value)
 */
class WikiTongue extends Request
{
}

class WikiDoggerel extends Request
{
}

/**
 * @method $this withNum($value)
 */
class WikiXiehou extends Request
{
}

/**
 * @method $this withWord($value)
 */
class WikiHotword extends Request
{
}

/**
 * @method $this withNum($value)
 */
class WikiGodreply extends Request
{
}

/**
 * @method $this withMobile($value)
 * @method $this withIp($value)
 * @method $this withType($value)
 */
class WoolWcheck extends Request
{
}

/**
 * @method $this withMobile($value)
 * @method $this withIp($value)
 * @method $this withType($value)
 */
class WoolWtag extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withContent($value)
 */
class WordSegment extends Request
{
}

/**
 * @method $this withWord($value)
 */
class XinhuaQuery extends Request
{
}

class XinhuaBushou extends Request
{
}

class XinhuaPinyin extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 * @method $this withIsjijie($value)
 * @method $this withIsxiangjie($value)
 */
class XinhuaQuerybs extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 * @method $this withIsjijie($value)
 * @method $this withIsxiangjie($value)
 */
class XinhuaQuerypy extends Request
{
}

/**
 * @method $this withWord($value)
 */
class XinhuaQueryid extends Request
{
}

/**
 * @method $this withWord($value)
 * @method $this withType($value)
 */
class XinhuaResemble extends Request
{
}

/**
 * @method $this withText($value)
 */
class XinhuaConvertPy extends Request
{
    public $uri = 'xinhua/convert_py';
}

class XnbIndex extends Request
{
}

/**
 * @method AlmanacDate almanacDate()
 * @method AlmanacHour almanacHour()
 * @method AlmanacQq almanacQq()
 * @method AqiSearch aqiSearch()
 * @method BaiduIndex baiduIndex()
 * @method BaiduPcRank baiduPcRank()
 * @method BaiduMobileRank baiduMobileRank()
 * @method BaiduLinks baiduLinks()
 * @method BaiduPages baiduPages()
 * @method BaiduPcUrlPages baiduPcUrlPages()
 * @method BaiduMobileUrlPages baiduMobileUrlPages()
 * @method BaiduPcWeight baiduPcWeight()
 * @method BaiduMobileWeight baiduMobileWeight()
 * @method BaiduKeyword baiduKeyword()
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
 * @method BookIsbn bookIsbn()
 * @method BrainTeaserIndex brainTeaserIndex()
 * @method CalendarDay calendarDay()
 * @method CalendarMonth calendarMonth()
 * @method CalendarYear calendarYear()
 * @method CarBrand carBrand()
 * @method CarSeries carSeries()
 * @method CarModels carModels()
 * @method CarObd carObd()
 * @method CarLimit carLimit()
 * @method CarVin carVin()
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
 * @method EnterpriseCopyright enterpriseCopyright()
 * @method EnterpriseCreditcode enterpriseCreditcode()
 * @method EnterpriseTrademark enterpriseTrademark()
 * @method EnterprisePatent enterprisePatent()
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
 * @method GeoIndex geoIndex()
 * @method GeoConvert geoConvert()
 * @method GoldQuery goldQuery()
 * @method GoldFuture goldFuture()
 * @method GoldBank goldBank()
 * @method GstoreMovieByDirector gstoreMovieByDirector()
 * @method GstoreMovieByActors gstoreMovieByActors()
 * @method GstoreSymptom gstoreSymptom()
 * @method GstoreDisease gstoreDisease()
 * @method GstoreTabooFood gstoreTabooFood()
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
 * @method OcrFace ocrFace()
 * @method OcrTxt ocrTxt()
 * @method OcrArithmetic ocrArithmetic()
 * @method OcrEdu ocrEdu()
 * @method OcrMaskDetect ocrMaskDetect()
 * @method OilQuery oilQuery()
 * @method PetIndex petIndex()
 * @method PostcodeQuery postcodeQuery()
 * @method PostcodeSearch postcodeSearch()
 * @method PostcodePcd postcodePcd()
 * @method PostcodeZone postcodeZone()
 * @method QrcodeIndex qrcodeIndex()
 * @method QrcodeCodec qrcodeCodec()
 * @method RumourIndex rumourIndex()
 * @method ShopSnap shopSnap()
 * @method StarIndex starIndex()
 * @method SurnameIndex surnameIndex()
 * @method TaobaoDetail taobaoDetail()
 * @method TaobaoInfo taobaoInfo()
 * @method TaobaoImage taobaoImage()
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
 * @method TrashVoice trashVoice()
 * @method TrashImage trashImage()
 * @method TrashSearch trashSearch()
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
 * @method WebsiteQq websiteQq()
 * @method WebsiteCheatlink websiteCheatlink()
 * @method WebsiteCheatip websiteCheatip()
 * @method WebsiteAntispam websiteAntispam()
 * @method WebsiteImgcensor websiteImgcensor()
 * @method WebsiteShorturl websiteShorturl()
 * @method WebsiteHttps websiteHttps()
 * @method WebsiteBaidu websiteBaidu()
 * @method WebsiteSogou websiteSogou()
 * @method WebsiteSo websiteSo()
 * @method WebsiteIpv6 websiteIpv6()
 * @method WebsiteDomain websiteDomain()
 * @method WebsiteIp websiteIp()
 * @method WebsiteWabeian websiteWabeian()
 * @method WebsiteIcp websiteIcp()
 * @method WebsiteAlexa websiteAlexa()
 * @method WebsiteWhois websiteWhois()
 * @method WebsiteWhoisReverse websiteWhoisReverse()
 * @method WebsiteTop websiteTop()
 * @method WebsiteUrl2pic websiteUrl2pic()
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
 * @method WikiDoggerel wikiDoggerel()
 * @method WikiXiehou wikiXiehou()
 * @method WikiHotword wikiHotword()
 * @method WikiGodreply wikiGodreply()
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
 * @method XnbIndex xnbIndex()
 */
trait DefaultRequests
{
}
