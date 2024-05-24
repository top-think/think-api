<?php

namespace think\api\request;

use think\api\Request;

/**
 * @method $this withCity($value)
 */
class AirSearch extends Request
{
}

/**
 * @method $this withCity($value)
 */
class AirPm extends Request
{
}

class AirCity extends Request
{
}

class AirPmCity extends Request
{
    public $uri = 'air/pm_city';
}

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
 * @method $this withDomainName($value)
 * @method $this withKeyword($value)
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
 * @method $this withImgBase64($value)
 * @method $this withTypeId($value)
 * @method $this withConvertToJpg($value)
 * @method $this withNeedMorePrecise($value)
 */
class CaptchaNumber extends Request
{
}

/**
 * @method $this withImgBase64($value)
 * @method $this withTypeId($value)
 * @method $this withConvertToJpg($value)
 */
class CaptchaChinese extends Request
{
}

/**
 * @method $this withImgBase64($value)
 */
class CaptchaAlgorism extends Request
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
 * @method $this withContent($value)
 */
class CmsText extends Request
{
}

/**
 * @method $this withContent($value)
 * @method $this withUrl($value)
 * @method $this withInterval($value)
 * @method $this withMaxFrames($value)
 */
class CmsImage extends Request
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

/**
 * @method $this withFid($value)
 */
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
 * @method $this withName($value)
 * @method $this withOperName($value)
 */
class EnterpriseVerify extends Request
{
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
 * @method $this withIdcard($value)
 * @method $this withName($value)
 * @method $this withCallbackUrl($value)
 * @method $this withNotifyUrl($value)
 * @method $this withFaceauthMode($value)
 */
class FaceDetect extends Request
{
}

/**
 * @method $this withOrderNumber($value)
 */
class FaceQuery extends Request
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
 * @method $this withOrgCity($value)
 * @method $this withDstCity($value)
 * @method $this withFlightNo($value)
 */
class FlightQuery extends Request
{
}

/**
 * @method $this withFlightNo($value)
 * @method $this withFlightDate($value)
 */
class FlightHistory extends Request
{
}

/**
 * @method $this withFlightNo($value)
 * @method $this withFlightDate($value)
 */
class FlightFuture extends Request
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
 * @method $this withService($value)
 * @method $this withContent($value)
 */
class GreenText extends Request
{
}

/**
 * @method $this withService($value)
 * @method $this withContent($value)
 */
class GreenTextAdvance extends Request
{
    public $uri = 'green/text_advance';
}

/**
 * @method $this withService($value)
 * @method $this withImageUrl($value)
 */
class GreenImage extends Request
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
    public $method = 'GET';
}

/**
 * @method $this withName($value)
 * @method $this withIdNum($value)
 */
class IdcardAuth extends Request
{
}

/**
 * @method $this withImageUrl($value)
 * @method $this withBizType($value)
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
 * @method $this withImg($value)
 * @method $this withImgurl($value)
 */
class ImageScan extends Request
{
}

/**
 * @method $this withIp($value)
 */
class IpIndex extends Request
{
    public $method = 'GET';
}

/**
 * @method $this withIp($value)
 * @method $this withCoordsys($value)
 * @method $this withArea($value)
 */
class IpPolice extends Request
{
}

/**
 * @method $this withIp($value)
 * @method $this withCoordsys($value)
 * @method $this withArea($value)
 */
class IpStreet extends Request
{
}

/**
 * @method $this withIp($value)
 * @method $this withCoordsys($value)
 */
class IpDistrict extends Request
{
}

/**
 * @method $this withIp($value)
 * @method $this withCoordsys($value)
 */
class IpCity extends Request
{
}

/**
 * @method $this withIp($value)
 * @method $this withCoordsys($value)
 */
class IpIpv6 extends Request
{
}

/**
 * @method $this withIp($value)
 */
class IpScene extends Request
{
}

/**
 * @method $this withSort($value)
 * @method $this withTime($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
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
 * @method $this withUserid($value)
 * @method $this withUserip($value)
 * @method $this withInput($value)
 * @method $this withCity($value)
 * @method $this withLat($value)
 * @method $this withLng($value)
 */
class LingjuChat extends Request
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
 * @method $this withJszh($value)
 * @method $this withDabh($value)
 */
class LuozPoints extends Request
{
}

/**
 * @method $this withCarNo($value)
 * @method $this withVin($value)
 * @method $this withEngineNo($value)
 * @method $this withType($value)
 */
class LuozHistory extends Request
{
}

/**
 * @method $this withPrefix($value)
 */
class LuozRule extends Request
{
}

/**
 * @method $this withName($value)
 * @method $this withCardNo($value)
 * @method $this withArchviesNo($value)
 */
class LuozLicense extends Request
{
}

/**
 * @method $this withHphm($value)
 * @method $this withEngineno($value)
 * @method $this withClassno($value)
 * @method $this withHpzl($value)
 */
class LuozQuery2 extends Request
{
}

/**
 * @method $this withAbbr($value)
 */
class LuozCitylist extends Request
{
}

/**
 * @method $this withLat($value)
 * @method $this withLon($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 * @method $this withR($value)
 */
class LuozNearby extends Request
{
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
 * @method $this withTitle($value)
 * @method $this withSmode($value)
 * @method $this withPagesize($value)
 * @method $this withOffset($value)
 */
class MovieSearch extends Request
{
}

/**
 * @method $this withLat($value)
 * @method $this withLon($value)
 * @method $this withRadius($value)
 */
class MovieCinemas extends Request
{
}

/**
 * @method $this withCityid($value)
 * @method $this withKeyword($value)
 * @method $this withPage($value)
 * @method $this withPagesize($value)
 */
class MovieCinemaSearch extends Request
{
    public $uri = 'movie/cinema_search';
}

/**
 * @method $this withCinemaid($value)
 * @method $this withMovieid($value)
 */
class MovieCinemaMovies extends Request
{
    public $uri = 'movie/cinema_movies';
}

/**
 * @method $this withCityid($value)
 */
class MovieToday extends Request
{
}

class MovieSupportCity extends Request
{
    public $uri = 'movie/support_city';
}

/**
 * @method $this withCityid($value)
 * @method $this withMovieid($value)
 */
class MovieShowCinema extends Request
{
    public $uri = 'movie/show_cinema';
}

/**
 * @method $this withMovieid($value)
 */
class MovieIndex extends Request
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
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsWoman extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsRubbish extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsEnvironmental extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsMovie extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsDigiccy extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsHouse extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsBlockchain extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsSicprobe extends Request
{
}

/**
 * @method $this withSource($value)
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsGeneral extends Request
{
}

/**
 * @method $this withSrc($value)
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsTop extends Request
{
}

/**
 * @method $this withAreaname($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsArea extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsAuto extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsInternet extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsAgriculture extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsHanfu extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsComic extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsFinance extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsCba extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsAi extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsIt extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsVr extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsBeauty extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsQiwen extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsHealth extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsTravel extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsMobile extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsMilitary extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsApple extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsStartup extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsKeji extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsFootball extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsNba extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsSport extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsFun extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsWorld extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsInternal extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsGame extends Request
{
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withWord($value)
 */
class NewsSocial extends Request
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
 * @method $this withFixMode($value)
 */
class OcrBusinessLicense extends Request
{
    public $uri = 'ocr/business_license';
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
 * @method $this withName($value)
 * @method $this withIdentityCard($value)
 * @method $this withFacePic($value)
 * @method $this withIdcardFront($value)
 * @method $this withIdcardBackground($value)
 */
class OcrRealPerson extends Request
{
    public $uri = 'ocr/real_person';
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
 * @method $this withCityName($value)
 * @method $this withCurrentPage($value)
 * @method $this withPageSize($value)
 */
class ParkQuery extends Request
{
}

/**
 * @method $this withLongitude($value)
 * @method $this withLatitude($value)
 * @method $this withDistance($value)
 * @method $this withCurrentPage($value)
 * @method $this withPageSize($value)
 */
class ParkNearby extends Request
{
}

/**
 * @method $this withParkId($value)
 * @method $this withParkUUId($value)
 */
class ParkInfo extends Request
{
}

class ParkCityList extends Request
{
    public $uri = 'park/city_list';
}

/**
 * @method $this withNum($value)
 * @method $this withPage($value)
 * @method $this withName($value)
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
 * @method $this withScene($value)
 * @method $this withMobile($value)
 * @method $this withUserIp($value)
 * @method $this withPostTime($value)
 * @method $this withUserId($value)
 * @method $this withNickname($value)
 * @method $this withEmail($value)
 * @method $this withCookieHash($value)
 * @method $this withReferer($value)
 * @method $this withUserAgent($value)
 * @method $this withMac($value)
 */
class RceDetect extends Request
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
 * @method $this withQ($value)
 * @method $this withGl($value)
 * @method $this withHl($value)
 * @method $this withNum($value)
 */
class SearchWeb extends Request
{
}

/**
 * @method $this withQ($value)
 * @method $this withGl($value)
 * @method $this withHl($value)
 * @method $this withNum($value)
 */
class SearchImage extends Request
{
}

/**
 * @method $this withQ($value)
 * @method $this withGl($value)
 * @method $this withHl($value)
 * @method $this withNum($value)
 */
class SearchNews extends Request
{
}

class SecondhandCarBrand extends Request
{
    public $uri = 'secondhand_car/brand';
}

/**
 * @method $this withBrandId($value)
 */
class SecondhandCarFamily extends Request
{
    public $uri = 'secondhand_car/family';
}

/**
 * @method $this withFamilyId($value)
 */
class SecondhandCarModel extends Request
{
    public $uri = 'secondhand_car/model';
}

class SecondhandCarProvince extends Request
{
    public $uri = 'secondhand_car/province';
}

/**
 * @method $this withProvinceId($value)
 */
class SecondhandCarCity extends Request
{
    public $uri = 'secondhand_car/city';
}

/**
 * @method $this withRegDate($value)
 * @method $this withCity($value)
 * @method $this withProvinceId($value)
 * @method $this withAutoHomeId($value)
 * @method $this withMiles($value)
 */
class SecondhandCarQuery extends Request
{
    public $uri = 'secondhand_car/query';
}

/**
 * @method $this withSignId($value)
 * @method $this withTemplateId($value)
 * @method $this withPhone($value)
 * @method $this withParams($value)
 */
class SmsSend extends Request
{
}

/**
 * @method $this withSignId($value)
 * @method $this withTemplateId($value)
 * @method $this withPhone($value)
 * @method $this withParams($value)
 */
class SmsBatchSend extends Request
{
    public $uri = 'sms/batch_send';
}

/**
 * @method $this withId($value)
 */
class SmsQueryStatus extends Request
{
    public $uri = 'sms/query_status';
}

/**
 * @method $this withName($value)
 * @method $this withSource($value)
 * @method $this withRemark($value)
 */
class SmsAddSign extends Request
{
    public $uri = 'sms/add_sign';
}

/**
 * @method $this withId($value)
 */
class SmsQuerySign extends Request
{
    public $uri = 'sms/query_sign';
}

/**
 * @method $this withId($value)
 * @method $this withName($value)
 * @method $this withSource($value)
 * @method $this withRemark($value)
 */
class SmsModifySign extends Request
{
    public $uri = 'sms/modify_sign';
}

/**
 * @method $this withId($value)
 */
class SmsDeleteSign extends Request
{
    public $uri = 'sms/delete_sign';
}

/**
 * @method $this withId($value)
 */
class SmsQueryTemplate extends Request
{
    public $uri = 'sms/query_template';
}

/**
 * @method $this withName($value)
 * @method $this withSignId($value)
 * @method $this withType($value)
 * @method $this withContent($value)
 * @method $this withRemark($value)
 */
class SmsAddTemplate extends Request
{
    public $uri = 'sms/add_template';
}

/**
 * @method $this withId($value)
 * @method $this withName($value)
 * @method $this withSignId($value)
 * @method $this withType($value)
 * @method $this withContent($value)
 * @method $this withRemark($value)
 */
class SmsModifyTemplate extends Request
{
    public $uri = 'sms/modify_template';
}

/**
 * @method $this withId($value)
 */
class SmsDeleteTemplate extends Request
{
    public $uri = 'sms/delete_template';
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
 * @method $this withUserid($value)
 * @method $this withUserip($value)
 * @method $this withInput($value)
 * @method $this withCity($value)
 * @method $this withLat($value)
 * @method $this withLng($value)
 */
class ThinkChat extends Request
{
}

/**
 * @method $this withText($value)
 * @method $this withType($value)
 */
class ThinkAudit extends Request
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
 * @method $this withMobiles($value)
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

/**
 * @method $this withCity($value)
 */
class WeatherLife extends Request
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
 * @method $this withContent($value)
 */
class WebsiteAntispam extends Request
{
}

/**
 * @method $this withContent($value)
 */
class WebsiteAdreview extends Request
{
}

/**
 * @method $this withImgurl($value)
 */
class WebsiteImgcensor extends Request
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
class WebsiteTdk extends Request
{
}

/**
 * @method $this withDomainName($value)
 */
class WebsiteIcp extends Request
{
}

/**
 * @method $this withCompanyName($value)
 */
class WebsiteCompany extends Request
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
 * @method $this withFormat($value)
 */
class WebsiteHtmlpic extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WebsiteHtmltext extends Request
{
}

/**
 * @method $this withUrl($value)
 */
class WebsiteHtmlcontent extends Request
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
 * @method $this withDomain($value)
 */
class WechatDomainCheck extends Request
{
    public $uri = 'wechat/domain_check';
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
 * @method $this withContent($value)
 */
class WordNlp extends Request
{
}

/**
 * @method $this withText1($value)
 * @method $this withText2($value)
 */
class WordSimnet extends Request
{
}

/**
 * @method $this withContent($value)
 */
class WordEcnet extends Request
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

/**
 * @method AirSearch airSearch() 空气质量指数
 * @method AirPm airPm() 城市空气PM2.5查询
 * @method AirCity airCity() 城市空气支持城市
 * @method AirPmCity airPmCity() 城市空气PM2.5支持城市
 * @method AlmanacDate almanacDate() 老黄历日历查询
 * @method AlmanacHour almanacHour() 老黄历时辰查询
 * @method AlmanacQq almanacQq() 测试qq号码吉凶
 * @method AqiSearch aqiSearch() 空气质量指数
 * @method BaiduIndex baiduIndex() 关键词百度指数
 * @method BaiduPcRank baiduPcRank() 关键词百度PC排名
 * @method BaiduMobileRank baiduMobileRank() 关键词百度移动排名
 * @method BaiduLinks baiduLinks() 百度反链数
 * @method BaiduPages baiduPages() 百度收录量
 * @method BaiduPcUrlPages baiduPcUrlPages() 百度PC-URL收录
 * @method BaiduMobileUrlPages baiduMobileUrlPages() 百度mobile-URL收录
 * @method BaiduPcWeight baiduPcWeight() 百度PC权重
 * @method BaiduMobileWeight baiduMobileWeight() 百度移动权重
 * @method BaiduKeyword baiduKeyword() 百度关键词收录量
 * @method BankcardTwoAuth bankcardTwoAuth() 银行卡二要素标准版
 * @method BankcardThreeAuth bankcardThreeAuth() 银行卡三要素标准版
 * @method BankcardThreeAuthDetail bankcardThreeAuthDetail() 银行卡三要素详细版
 * @method BankcardAuth bankcardAuth() 银行卡三四要素简版
 * @method BankcardAuthDetail bankcardAuthDetail() 银行卡三四要素详版
 * @method BankcardAuthSecret bankcardAuthSecret() 银行卡四要素加密版
 * @method BarcodeQuery barcodeQuery() 条码查询
 * @method BmiIndex bmiIndex() BMI标准体重
 * @method BookCatalog bookCatalog() 图书分类目录
 * @method BookQuery bookQuery() 图书数据
 * @method BookIsbn bookIsbn() 查询图书数据
 * @method BrainTeaserIndex brainTeaserIndex() 脑筋急转弯
 * @method CalendarDay calendarDay() 万年历
 * @method CalendarMonth calendarMonth() 月份假期查询
 * @method CalendarYear calendarYear() 年份假期查询
 * @method CaptchaNumber captchaNumber() 数字、英文验证码识别
 * @method CaptchaChinese captchaChinese() 中英文验证码识别
 * @method CaptchaAlgorism captchaAlgorism() 算式验证码识别
 * @method CharConvert charConvert() 简繁火星文转换
 * @method ChengyuQuery chengyuQuery() 成语查询
 * @method ChengyuAllusion chengyuAllusion() 成语典故
 * @method ChengyuJielong chengyuJielong() 成语接龙
 * @method ChengyuGuess chengyuGuess() 猜成语
 * @method CmsText cmsText() 内容安全审核
 * @method CmsImage cmsImage() 图片内容安全检测
 * @method ConstellationQuery constellationQuery() 星座运势
 * @method ConstellationMatch constellationMatch() 星座配对
 * @method ConstellationZodiac constellationZodiac() 生肖配对
 * @method DreamCategory dreamCategory() 梦境类型
 * @method DreamQuery dreamQuery() 周公解梦
 * @method DreamId dreamId() 根据ID查询解梦信息
 * @method DrivingQuery drivingQuery() 驾照题库
 * @method DrivingAnswer drivingAnswer() 返回answer字段对应答案信息
 * @method EnglishDay englishDay() 每日英语
 * @method EnterpriseDetailInfo enterpriseDetailInfo() 企业信息精准查询
 * @method EnterpriseVerify enterpriseVerify() 企业三要素核验
 * @method EnterpriseCopyright enterpriseCopyright() 企业著作权查询
 * @method EnterpriseCreditcode enterpriseCreditcode() 企业开票信息查询
 * @method EnterpriseTrademark enterpriseTrademark() 商标信息查询
 * @method EnterprisePatent enterprisePatent() 专利查询
 * @method ExchangeQuery exchangeQuery() 汇率查询
 * @method ExchangeCurrency exchangeCurrency() 货币列表
 * @method ExchangeConvert exchangeConvert() 实时货币汇率查询换算
 * @method ExchangePrice exchangePrice() 100外币兑人民币
 * @method ExchangeFrate exchangeFrate() 此汇率仅供参考
 * @method ExpressQuery expressQuery() 快递查询
 * @method ExpressAsyc expressAsyc() 快递物流跟踪（异步）
 * @method ExpressCompany expressCompany() 快递单号查询快递公司
 * @method ExpressExpList expressExpList() 快递公司列表
 * @method ExpressDot expressDot() 网点查询
 * @method ExpressAddress expressAddress() 收货信息智能解析
 * @method FaceDetect faceDetect() 人脸核验
 * @method FaceQuery faceQuery() 人脸识别结果
 * @method FanyiIndex fanyiIndex() 语言翻译
 * @method FlightQuery flightQuery() 当日航班查询
 * @method FlightHistory flightHistory() 历史起降查询
 * @method FlightFuture flightFuture() 未来航班信息
 * @method FoodNutrient foodNutrient() 营养成分
 * @method FoodMenu foodMenu() 菜谱查询
 * @method GeoIndex geoIndex() 经纬度解析
 * @method GeoConvert geoConvert() 经纬度转化
 * @method GoldQuery goldQuery() 金价查询
 * @method GoldFuture goldFuture() 期货查询
 * @method GoldBank goldBank() 纸黄金
 * @method GreenText greenText() 文本审核增强版
 * @method GreenTextAdvance greenTextAdvance() 文本审核增强版Plus
 * @method GreenImage greenImage() 图片审核增强版
 * @method GstoreMovieByDirector gstoreMovieByDirector() 根据导演查找电影
 * @method GstoreMovieByActors gstoreMovieByActors() 根据演员查找电影
 * @method GstoreSymptom gstoreSymptom() 查询某个疾病的所有症状
 * @method GstoreDisease gstoreDisease() 查询某个症状可能的疾病信息
 * @method GstoreTabooFood gstoreTabooFood() 查询某个疾病不能吃的食物
 * @method HotWeixin hotWeixin() 微信热文榜
 * @method HotDouyin hotDouyin() 抖音热点榜
 * @method HotVideo hotVideo() 抖音视频榜
 * @method HotWeibo hotWeibo() 微博热搜榜
 * @method IdcardQuery idcardQuery() 身份证查询
 * @method IdcardIndex idcardIndex() 身份证查询
 * @method IdcardAuth idcardAuth() 身份证实名认证
 * @method ImageImgCensor imageImgCensor() 组合服务接口
 * @method ImageGifDetect imageGifDetect() GIF色情图像识别
 * @method ImageScan imageScan() 图像智能识别
 * @method IpIndex ipIndex() IP查询
 * @method IpPolice ipPolice() IP定位-高精准公安版
 * @method IpStreet ipStreet() IP定位-高精准商业版
 * @method IpDistrict ipDistrict() IP定位-区县级
 * @method IpCity ipCity() IP定位-城市级
 * @method IpIpv6 ipIpv6() IPv6定位-城市级
 * @method IpScene ipScene() IP应用场景
 * @method JokeQuery jokeQuery() 笑话大全
 * @method JokeLatest jokeLatest() 最新笑话
 * @method JokeRand jokeRand() 随机笑话
 * @method LifeTip lifeTip() 生活小窍门
 * @method LingjuChat lingjuChat() 灵聚机器人
 * @method LiteraryPoetry literaryPoetry() 唐诗三百首
 * @method LiteraryTang literaryTang() 唐诗大全
 * @method LiterarySong literarySong() 精选宋词
 * @method LiteraryYuan literaryYuan() 元曲三百首
 * @method LiteraryQuote literaryQuote() 古籍名句
 * @method LiteraryMemo literaryMemo() 励志名言
 * @method LiteraryQuan literaryQuan() 朋友圈文案
 * @method LiteraryOne literaryOne() ONE一个
 * @method LotteryTypes lotteryTypes() 彩种列表
 * @method LotteryQuery lotteryQuery() 彩票开奖结果
 * @method LotteryBonus lotteryBonus() 彩票中奖查询
 * @method LotteryHistory lotteryHistory() 彩票历史开奖
 * @method LuozQuery luozQuery() 车辆违章查询
 * @method LuozSupport luozSupport() 用于查询某个地区是否支持违章查询，以及该地区车辆的车架号、发动机号所需的位数。
 * @method LuozTimes luozTimes() 查询车辆违章的次数
 * @method LuozNewEnergy luozNewEnergy() 目前支持广东、上海、江苏、河南、浙江、四川等地区的新能源车牌违章查询
 * @method LuozPoints luozPoints() 累计计分查询
 * @method LuozHistory luozHistory() 查询车辆历史违章
 * @method LuozRule luozRule() 获取城市查询违章的参数规则
 * @method LuozLicense luozLicense() 驾驶证核查
 * @method LuozQuery2 luozQuery2() 违章查询V2
 * @method LuozCitylist luozCitylist() 违章查询支持城市列表
 * @method LuozNearby luozNearby() 附近违章高发地
 * @method MedicineIndex medicineIndex() 中药大全
 * @method MedicineSearch medicineSearch() 药品说明书
 * @method MoneyConvert moneyConvert() 金额转大写
 * @method MovieSearch movieSearch() 关键字检索影片信息
 * @method MovieCinemas movieCinemas() 检索周边影院
 * @method MovieCinemaSearch movieCinemaSearch() 关键字影院检索
 * @method MovieCinemaMovies movieCinemaMovies() 影院上映影片信息
 * @method MovieToday movieToday() 今日上映影片信息
 * @method MovieSupportCity movieSupportCity() 支持城市列表
 * @method MovieShowCinema movieShowCinema() 影片上映影院查询
 * @method MovieIndex movieIndex() 按影片id查询影片信息
 * @method NewsToutiao newsToutiao() 新闻头条
 * @method NewsHot newsHot() 网络热搜排行
 * @method NewsWoman newsWoman() 女性新闻
 * @method NewsRubbish newsRubbish() 垃圾分类新闻
 * @method NewsEnvironmental newsEnvironmental() 环保资讯
 * @method NewsMovie newsMovie() 影视资讯
 * @method NewsDigiccy newsDigiccy() 币圈资讯
 * @method NewsHouse newsHouse() 房产新闻
 * @method NewsBlockchain newsBlockchain() 区块链新闻
 * @method NewsSicprobe newsSicprobe() 科学探索
 * @method NewsGeneral newsGeneral() 综合新闻
 * @method NewsTop newsTop() 今日头条新闻
 * @method NewsArea newsArea() 地区新闻
 * @method NewsAuto newsAuto() 汽车新闻
 * @method NewsInternet newsInternet() 互联网资讯
 * @method NewsAgriculture newsAgriculture() 农业新闻
 * @method NewsHanfu newsHanfu() 汉服新闻
 * @method NewsComic newsComic() 动漫资讯
 * @method NewsFinance newsFinance() 财经新闻
 * @method NewsCba newsCba() CBA新闻
 * @method NewsAi newsAi() 人工智能
 * @method NewsIt newsIt() IT资讯
 * @method NewsVr newsVr() VR科技
 * @method NewsBeauty newsBeauty() 美女图片
 * @method NewsQiwen newsQiwen() 奇闻异事
 * @method NewsHealth newsHealth() 健康知识
 * @method NewsTravel newsTravel() 旅游资讯
 * @method NewsMobile newsMobile() 移动通信
 * @method NewsMilitary newsMilitary() 军事新闻
 * @method NewsApple newsApple() 苹果新闻
 * @method NewsStartup newsStartup() 创业资讯
 * @method NewsKeji newsKeji() 科技新闻
 * @method NewsFootball newsFootball() 足球新闻
 * @method NewsNba newsNba() NBA新闻
 * @method NewsSport newsSport() 体育新闻
 * @method NewsFun newsFun() 娱乐新闻
 * @method NewsWorld newsWorld() 国际新闻
 * @method NewsInternal newsInternal() 国内新闻
 * @method NewsGame newsGame() 游戏新闻
 * @method NewsSocial newsSocial() 社会新闻
 * @method OcrIdcard ocrIdcard() 身份证OCR识别
 * @method OcrIdOcr ocrIdOcr() 身份证OCR
 * @method OcrBankcard ocrBankcard() 银行卡OCR
 * @method OcrDrivingLicense ocrDrivingLicense() 驾驶证OCR
 * @method OcrVehicleLicense ocrVehicleLicense() 行驶证OCR
 * @method OcrPassport ocrPassport() 护照OCR
 * @method OcrInvoice ocrInvoice() 增值税发票
 * @method OcrHand ocrHand() 手写OCR
 * @method OcrIdCardText ocrIdCardText() 身份证文字识别
 * @method OcrBusinessLicense ocrBusinessLicense() 营业执照文字识别
 * @method OcrFace ocrFace() 人脸识别
 * @method OcrTxt ocrTxt() 通用文字识别
 * @method OcrArithmetic ocrArithmetic() 算式识别
 * @method OcrEdu ocrEdu() 数学试题识别
 * @method OcrRealPerson ocrRealPerson() 实人认证
 * @method OcrMaskDetect ocrMaskDetect() 人脸口罩识别
 * @method OilQuery oilQuery() 今日国内油价查询
 * @method ParkQuery parkQuery() 查询指定城市停车场信息列
 * @method ParkNearby parkNearby() 查询周边停车场信息列表
 * @method ParkInfo parkInfo() 获取停车场详情信息
 * @method ParkCityList parkCityList() 获取开放停车场查询的城市列表
 * @method PetIndex petIndex() 宠物大全
 * @method PostcodeQuery postcodeQuery() 邮编查询
 * @method PostcodeSearch postcodeSearch() 查询所在地邮编
 * @method PostcodePcd postcodePcd() 省份、城市、地区（县）关联列表
 * @method PostcodeZone postcodeZone() 全国行政区查询
 * @method QrcodeIndex qrcodeIndex() 二维码生成
 * @method QrcodeCodec qrcodeCodec() 二维码解码
 * @method RceDetect rceDetect() 全栈式风控引擎
 * @method RumourIndex rumourIndex() 谣言鉴别
 * @method SearchWeb searchWeb() 网页搜索
 * @method SearchImage searchImage() 图片搜索
 * @method SearchNews searchNews() 新闻搜索
 * @method SecondhandCarBrand secondhandCarBrand() 返回车辆品牌所有列表
 * @method SecondhandCarFamily secondhandCarFamily() 指定品牌全部车系列表
 * @method SecondhandCarModel secondhandCarModel() 指定车系具体车型列表
 * @method SecondhandCarProvince secondhandCarProvince() 估值支持的省份
 * @method SecondhandCarCity secondhandCarCity() 估值支持的城市
 * @method SecondhandCarQuery secondhandCarQuery() 二手车估值
 * @method SmsSend smsSend() 发送短信
 * @method SmsBatchSend smsBatchSend() 群发短信
 * @method SmsQueryStatus smsQueryStatus() 查询发送状态
 * @method SmsAddSign smsAddSign() 添加签名
 * @method SmsQuerySign smsQuerySign() 获取签名
 * @method SmsModifySign smsModifySign() 修改签名
 * @method SmsDeleteSign smsDeleteSign() 删除签名
 * @method SmsQueryTemplate smsQueryTemplate() 获取模板
 * @method SmsAddTemplate smsAddTemplate() 添加模板
 * @method SmsModifyTemplate smsModifyTemplate() 修改模板
 * @method SmsDeleteTemplate smsDeleteTemplate() 删除模板
 * @method StarIndex starIndex() 明星百科档案
 * @method SurnameIndex surnameIndex() 姓氏起源
 * @method TaobaokeQuery taobaokeQuery() 淘口令解析api接口
 * @method TaobaokeCheckOrder taobaokeCheckOrder() 淘宝客订单号检测接
 * @method TelecomQuery telecomQuery() 手机实名认证简版
 * @method TelecomDetail telecomDetail() 三网手机实名认证详版
 * @method TelecomLocation telecomLocation() 手机归属地查询
 * @method TelecomIdentify telecomIdentify() 查询手机/固话号码归属地
 * @method TelecomCodes telecomCodes() 标准电码查询
 * @method ThinkChat thinkChat() 聊天机器人
 * @method ThinkAudit thinkAudit() 内容审核
 * @method TimeLunar timeLunar() 二十四节气
 * @method TimeHoliday timeHoliday() 节假日
 * @method TimeWorld timeWorld() 全球时间查询
 * @method TodayEvent todayEvent() 历史上的今天
 * @method TodayDetail todayDetail() 查询事件详细信息
 * @method TrashIndex trashIndex() 垃圾分类
 * @method TrashVoice trashVoice() 语音识别垃圾分类
 * @method TrashImage trashImage() 图像识别垃圾分类
 * @method TrashSearch trashSearch() 垃圾分类识别
 * @method UnnBatchUcheck unnBatchUcheck() 手机空号检测
 * @method UnnStatus unnStatus() 号码实时查询
 * @method Verifybankcard3Query verifybankcard3Query()
 * @method Verifybankcard4Query verifybankcard4Query()
 * @method WeatherCoords weatherCoords() 坐标查询天气
 * @method WeatherIp weatherIp() IP地址查询天气
 * @method WeatherArea weatherArea() 根据名称或者ID查询天气
 * @method WeatherAreaForecast24 weatherAreaForecast24() 根据名称或者ID查询24小时天气预报
 * @method WeatherAreaForecast7 weatherAreaForecast7() 根据名称或者ID查询未来7天指定日期天气预报
 * @method WeatherAreaForecast15 weatherAreaForecast15() 根据名称或者ID查询15天以内天气预报
 * @method WeatherAreaForecast40 weatherAreaForecast40() 根据名称或者ID查询40天以内天气预报
 * @method WeatherAreaHistory weatherAreaHistory() 根据名称或者ID查询历史天气预报
 * @method WeatherScenic weatherScenic() 根据景点名称查询天气
 * @method WeatherZip weatherZip() 根据邮编查询天气
 * @method WeatherAreaId weatherAreaId() 根据地名查询对应的ID
 * @method WeatherQuery weatherQuery() 天气查询
 * @method WeatherLife weatherLife() 生活指数查询
 * @method WeatherWids weatherWids() 天气种类
 * @method WeatherCityList weatherCityList() 查询城市列表及城市ID
 * @method WebsiteBeian websiteBeian() 网站备案查询
 * @method WebsiteQq websiteQq() 腾讯域名检测
 * @method WebsiteAntispam websiteAntispam() 文本内容审核
 * @method WebsiteAdreview websiteAdreview() 广告法违禁词汇
 * @method WebsiteImgcensor websiteImgcensor() 图片内容审核
 * @method WebsiteHttps websiteHttps() HTTPS检测
 * @method WebsiteBaidu websiteBaidu() 百度收录量
 * @method WebsiteSogou websiteSogou() 搜狗收录量
 * @method WebsiteSo websiteSo() 360收录量
 * @method WebsiteIpv6 websiteIpv6() ipv6检测
 * @method WebsiteDomain websiteDomain() 查询域名信息
 * @method WebsiteIp websiteIp() IP地址查询
 * @method WebsiteWabeian websiteWabeian() 网安备案查询
 * @method WebsiteTdk websiteTdk() 网站TDK信息
 * @method WebsiteIcp websiteIcp() ICP域名备案查询
 * @method WebsiteCompany websiteCompany() 主办单位备案查询
 * @method WebsiteAlexa websiteAlexa() Alexa查询
 * @method WebsiteWhois websiteWhois() whois查询
 * @method WebsiteWhoisReverse websiteWhoisReverse() whois反查
 * @method WebsiteTop websiteTop() 网站排行榜
 * @method WebsiteHtmlpic websiteHtmlpic() 抽取网页图片
 * @method WebsiteHtmltext websiteHtmltext() 获取新闻网页内容
 * @method WebsiteHtmlcontent websiteHtmlcontent() 获取网页正文信息
 * @method WechatChoice wechatChoice() 公众号精选文章
 * @method WechatSearch wechatSearch() 微信文章搜索
 * @method WechatLink wechatLink() 微信临时链接转为永久链接
 * @method WechatCheck wechatCheck() 微信地址检测
 * @method WechatDomainCheck wechatDomainCheck() 微信域名检测
 * @method WechatRead wechatRead() 微信文章阅读和点赞数
 * @method WikiIndex wikiIndex() 十万个为什么
 * @method WikiTiku wikiTiku() 百科题库
 * @method WikiRiddle wikiRiddle() 谜语大全
 * @method WikiLantern wikiLantern() 猜灯谜
 * @method WikiStory wikiStory() 故事大全
 * @method WikiTongue wikiTongue() 绕口令
 * @method WikiDoggerel wikiDoggerel() 顺口溜
 * @method WikiXiehou wikiXiehou() 歇后语
 * @method WikiHotword wikiHotword() 网络热词
 * @method WikiGodreply wikiGodreply() 神回复
 * @method WoolWcheck woolWcheck() 羊毛党检测
 * @method WoolWtag woolWtag() 羊毛党检测标签版
 * @method WordSegment wordSegment() 中文抽取关键词
 * @method WordNlp wordNlp() 智能分词
 * @method WordSimnet wordSimnet() 相似文本检测
 * @method WordEcnet wordEcnet() 文本智能纠错
 * @method XinhuaQuery xinhuaQuery() 查汉字
 * @method XinhuaBushou xinhuaBushou() 汉字部首列表
 * @method XinhuaPinyin xinhuaPinyin() 汉字拼音列表
 * @method XinhuaQuerybs xinhuaQuerybs() 汉字部首查询
 * @method XinhuaQuerypy xinhuaQuerypy() 汉字拼音查询
 * @method XinhuaQueryid xinhuaQueryid() 汉字id查询
 * @method XinhuaResemble xinhuaResemble() 同义词/反义词。
 * @method XinhuaConvertPy xinhuaConvertPy() 汉字转拼音
 */
trait DefaultRequests
{
}
