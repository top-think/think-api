<?php

namespace think\api\request\douyin;

use think\api\Request;

class BoardStar extends Request
{
}

class BoardHot extends Request
{
}

class BoardLive extends Request
{
}

class BoardVideo extends Request
{
}

class BoardGood extends Request
{
}

class BoardRecommend extends Request
{
}

class BoardTag extends Request
{
}

/**
 * @method $this withRoomId($value)
 */
class LiveroomInfo extends Request
{
}

/**
 * @method $this withRoomId($value)
 */
class LiveroomChat extends Request
{
}

/**
 * @method $this withRoomId($value)
 */
class LiveroomPromotion extends Request
{
}

/**
 * @method $this withRoomId($value)
 */
class LiveroomStatus extends Request
{
}

/**
 * @method $this withRoomId($value)
 */
class LiveroomAudience extends Request
{
}

class LiveroomFeed extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 */
class SearchUser extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 * @method $this withSort($value)
 * @method $this withCtime($value)
 */
class SearchVideo extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 */
class SearchTopic extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 */
class SearchPoi extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 */
class SearchMusic extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 */
class SearchLive extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 */
class SearchGood extends Request
{
}

/**
 * @method $this withKeyword($value)
 * @method $this withCursor($value)
 */
class SearchIndex extends Request
{
}

/**
 * @method $this withChid($value)
 */
class TopicDetail extends Request
{
}

/**
 * @method $this withChid($value)
 * @method $this withCursor($value)
 */
class TopicVideo extends Request
{
}

/**
 * @method $this withUid($value)
 */
class UserInfo extends Request
{
}

/**
 * @method $this withUid($value)
 * @method $this withCursor($value)
 */
class UserVideo extends Request
{
}

/**
 * @method $this withUid($value)
 * @method $this withCursor($value)
 */
class UserFollower extends Request
{
}

/**
 * @method $this withUid($value)
 */
class UserLive extends Request
{
}

/**
 * @method $this withUid($value)
 * @method $this withCursor($value)
 */
class UserPromotion extends Request
{
}

/**
 * @method $this withUid($value)
 * @method $this withCursor($value)
 */
class UserFollowing extends Request
{
}

/**
 * @method $this withUid($value)
 * @method $this withCursor($value)
 */
class UserFavourite extends Request
{
}

/**
 * @method $this withAwemeId($value)
 */
class VideoDetail extends Request
{
}

/**
 * @method $this withAwemeId($value)
 * @method $this withCursor($value)
 */
class VideoComment extends Request
{
}

/**
 * @method $this withAwemeId($value)
 */
class VideoPromotion extends Request
{
}

/**
 * @method $this withAwemeId($value)
 * @method $this withCid($value)
 * @method $this withCursor($value)
 */
class VideoReply extends Request
{
}

/**
 * @method $this withCursor($value)
 */
class VideoFeed extends Request
{
}

/**
 * @method $this withPid($value)
 */
class VideoPromotionDetail extends Request
{
	public $uri = 'video/promotion_detail';
}

/**
 * @method $this withPid($value)
 */
class VideoPromotionVideo extends Request
{
	public $uri = 'video/promotion_video';
}

/**
 * @method BoardStar boardStar()
 * @method BoardHot boardHot()
 * @method BoardLive boardLive()
 * @method BoardVideo boardVideo()
 * @method BoardGood boardGood()
 * @method BoardRecommend boardRecommend()
 * @method BoardTag boardTag()
 * @method LiveroomInfo liveroomInfo()
 * @method LiveroomChat liveroomChat()
 * @method LiveroomPromotion liveroomPromotion()
 * @method LiveroomStatus liveroomStatus()
 * @method LiveroomAudience liveroomAudience()
 * @method LiveroomFeed liveroomFeed()
 * @method SearchUser searchUser()
 * @method SearchVideo searchVideo()
 * @method SearchTopic searchTopic()
 * @method SearchPoi searchPoi()
 * @method SearchMusic searchMusic()
 * @method SearchLive searchLive()
 * @method SearchGood searchGood()
 * @method SearchIndex searchIndex()
 * @method TopicDetail topicDetail()
 * @method TopicVideo topicVideo()
 * @method UserInfo userInfo()
 * @method UserVideo userVideo()
 * @method UserFollower userFollower()
 * @method UserLive userLive()
 * @method UserPromotion userPromotion()
 * @method UserFollowing userFollowing()
 * @method UserFavourite userFavourite()
 * @method VideoDetail videoDetail()
 * @method VideoComment videoComment()
 * @method VideoPromotion videoPromotion()
 * @method VideoReply videoReply()
 * @method VideoFeed videoFeed()
 * @method VideoPromotionDetail videoPromotionDetail()
 * @method VideoPromotionVideo videoPromotionVideo()
 */
trait DouyinRequests
{
}
