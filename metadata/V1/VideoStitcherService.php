<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace GPBMetadata\Google\Cloud\Video\Stitcher\V1;

class VideoStitcherService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\AdTagDetails::initOnce();
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\CdnKeys::initOnce();
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\LiveConfigs::initOnce();
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Sessions::initOnce();
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Slates::initOnce();
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\StitchDetails::initOnce();
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VodConfigs::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�c
;google/cloud/video/stitcher/v1/video_stitcher_service.protogoogle.cloud.video.stitcher.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto3google/cloud/video/stitcher/v1/ad_tag_details.proto-google/cloud/video/stitcher/v1/cdn_keys.proto1google/cloud/video/stitcher/v1/live_configs.proto-google/cloud/video/stitcher/v1/sessions.proto+google/cloud/video/stitcher/v1/slates.proto3google/cloud/video/stitcher/v1/stitch_details.proto0google/cloud/video/stitcher/v1/vod_configs.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateCdnKeyRequest;
parent (	B+�A�A%#videostitcher.googleapis.com/CdnKey<
cdn_key (2&.google.cloud.video.stitcher.v1.CdnKeyB�A

cdn_key_id (	B�A"�
ListCdnKeysRequest;
parent (	B+�A�A%#videostitcher.googleapis.com/CdnKey
	page_size (

page_token (	
filter (	
order_by (	"}
ListCdnKeysResponse8
cdn_keys (2&.google.cloud.video.stitcher.v1.CdnKey
next_page_token (	
unreachable (	"M
GetCdnKeyRequest9
name (	B+�A�A%
#videostitcher.googleapis.com/CdnKey"P
DeleteCdnKeyRequest9
name (	B+�A�A%
#videostitcher.googleapis.com/CdnKey"�
UpdateCdnKeyRequest<
cdn_key (2&.google.cloud.video.stitcher.v1.CdnKeyB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
CreateVodSessionRequest?
parent (	B/�A�A)\'videostitcher.googleapis.com/VodSessionD
vod_session (2*.google.cloud.video.stitcher.v1.VodSessionB�A"U
GetVodSessionRequest=
name (	B/�A�A)
\'videostitcher.googleapis.com/VodSession"�
ListVodStitchDetailsRequestD
parent (	B4�A�A.,videostitcher.googleapis.com/VodStitchDetail
	page_size (

page_token (	"�
ListVodStitchDetailsResponseK
vod_stitch_details (2/.google.cloud.video.stitcher.v1.VodStitchDetail
next_page_token (	"_
GetVodStitchDetailRequestB
name (	B4�A�A.
,videostitcher.googleapis.com/VodStitchDetail"�
ListVodAdTagDetailsRequestC
parent (	B3�A�A-+videostitcher.googleapis.com/VodAdTagDetail
	page_size (

page_token (	"�
ListVodAdTagDetailsResponseJ
vod_ad_tag_details (2..google.cloud.video.stitcher.v1.VodAdTagDetail
next_page_token (	"]
GetVodAdTagDetailRequestA
name (	B3�A�A-
+videostitcher.googleapis.com/VodAdTagDetail"�
ListLiveAdTagDetailsRequestD
parent (	B4�A�A.,videostitcher.googleapis.com/LiveAdTagDetail
	page_size (

page_token (	"�
ListLiveAdTagDetailsResponseL
live_ad_tag_details (2/.google.cloud.video.stitcher.v1.LiveAdTagDetail
next_page_token (	"_
GetLiveAdTagDetailRequestB
name (	B4�A�A.
,videostitcher.googleapis.com/LiveAdTagDetail"�
CreateSlateRequest:
parent (	B*�A�A$"videostitcher.googleapis.com/Slate
slate_id (	B�A9
slate (2%.google.cloud.video.stitcher.v1.SlateB�A

request_id (	"K
GetSlateRequest8
name (	B*�A�A$
"videostitcher.googleapis.com/Slate"�
ListSlatesRequest:
parent (	B*�A�A$"videostitcher.googleapis.com/Slate
	page_size (

page_token (	
filter (	
order_by (	"y
ListSlatesResponse5
slates (2%.google.cloud.video.stitcher.v1.Slate
next_page_token (	
unreachable (	"�
UpdateSlateRequest9
slate (2%.google.cloud.video.stitcher.v1.SlateB�A4
update_mask (2.google.protobuf.FieldMaskB�A"N
DeleteSlateRequest8
name (	B*�A�A$
"videostitcher.googleapis.com/Slate"�
CreateLiveSessionRequest@
parent (	B0�A�A*(videostitcher.googleapis.com/LiveSessionF
live_session (2+.google.cloud.video.stitcher.v1.LiveSessionB�A"W
GetLiveSessionRequest>
name (	B0�A�A*
(videostitcher.googleapis.com/LiveSession"�
CreateLiveConfigRequest?
parent (	B/�A�A)\'videostitcher.googleapis.com/LiveConfig
live_config_id (	B�AD
live_config (2*.google.cloud.video.stitcher.v1.LiveConfigB�A

request_id (	"�
ListLiveConfigsRequest?
parent (	B/�A�A)\'videostitcher.googleapis.com/LiveConfig
	page_size (

page_token (	
filter (	B�A
order_by (	B�A"�
ListLiveConfigsResponse@
live_configs (2*.google.cloud.video.stitcher.v1.LiveConfig
next_page_token (	
unreachable (	"U
GetLiveConfigRequest=
name (	B/�A�A)
\'videostitcher.googleapis.com/LiveConfig"X
DeleteLiveConfigRequest=
name (	B/�A�A)
\'videostitcher.googleapis.com/LiveConfig"�
UpdateLiveConfigRequestD
live_config (2*.google.cloud.video.stitcher.v1.LiveConfigB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
CreateVodConfigRequest>
parent (	B.�A�A(&videostitcher.googleapis.com/VodConfig
vod_config_id (	B�AB

vod_config (2).google.cloud.video.stitcher.v1.VodConfigB�A

request_id (	B�A"�
ListVodConfigsRequest>
parent (	B.�A�A(&videostitcher.googleapis.com/VodConfig
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListVodConfigsResponse>
vod_configs (2).google.cloud.video.stitcher.v1.VodConfig
next_page_token (	
unreachable (	"S
GetVodConfigRequest<
name (	B.�A�A(
&videostitcher.googleapis.com/VodConfig"V
DeleteVodConfigRequest<
name (	B.�A�A(
&videostitcher.googleapis.com/VodConfig"�
UpdateVodConfigRequestB

vod_config (2).google.cloud.video.stitcher.v1.VodConfigB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	2�6
VideoStitcherService�
CreateCdnKey3.google.cloud.video.stitcher.v1.CreateCdnKeyRequest.google.longrunning.Operation"��AY
%google.cloud.video.stitcher.v1.CdnKey0google.cloud.video.stitcher.v1.OperationMetadata�Aparent,cdn_key,cdn_key_id���6"+/v1/{parent=projects/*/locations/*}/cdnKeys:cdn_key�
ListCdnKeys2.google.cloud.video.stitcher.v1.ListCdnKeysRequest3.google.cloud.video.stitcher.v1.ListCdnKeysResponse"<�Aparent���-+/v1/{parent=projects/*/locations/*}/cdnKeys�
	GetCdnKey0.google.cloud.video.stitcher.v1.GetCdnKeyRequest&.google.cloud.video.stitcher.v1.CdnKey":�Aname���-+/v1/{name=projects/*/locations/*/cdnKeys/*}�
DeleteCdnKey3.google.cloud.video.stitcher.v1.DeleteCdnKeyRequest.google.longrunning.Operation"��AI
google.protobuf.Empty0google.cloud.video.stitcher.v1.OperationMetadata�Aname���-*+/v1/{name=projects/*/locations/*/cdnKeys/*}�
UpdateCdnKey3.google.cloud.video.stitcher.v1.UpdateCdnKeyRequest.google.longrunning.Operation"��AY
%google.cloud.video.stitcher.v1.CdnKey0google.cloud.video.stitcher.v1.OperationMetadata�Acdn_key,update_mask���>23/v1/{cdn_key.name=projects/*/locations/*/cdnKeys/*}:cdn_key�
CreateVodSession7.google.cloud.video.stitcher.v1.CreateVodSessionRequest*.google.cloud.video.stitcher.v1.VodSession"Y�Aparent,vod_session���>"//v1/{parent=projects/*/locations/*}/vodSessions:vod_session�
GetVodSession4.google.cloud.video.stitcher.v1.GetVodSessionRequest*.google.cloud.video.stitcher.v1.VodSession">�Aname���1//v1/{name=projects/*/locations/*/vodSessions/*}�
ListVodStitchDetails;.google.cloud.video.stitcher.v1.ListVodStitchDetailsRequest<.google.cloud.video.stitcher.v1.ListVodStitchDetailsResponse"S�Aparent���DB/v1/{parent=projects/*/locations/*/vodSessions/*}/vodStitchDetails�
GetVodStitchDetail9.google.cloud.video.stitcher.v1.GetVodStitchDetailRequest/.google.cloud.video.stitcher.v1.VodStitchDetail"Q�Aname���DB/v1/{name=projects/*/locations/*/vodSessions/*/vodStitchDetails/*}�
ListVodAdTagDetails:.google.cloud.video.stitcher.v1.ListVodAdTagDetailsRequest;.google.cloud.video.stitcher.v1.ListVodAdTagDetailsResponse"R�Aparent���CA/v1/{parent=projects/*/locations/*/vodSessions/*}/vodAdTagDetails�
GetVodAdTagDetail8.google.cloud.video.stitcher.v1.GetVodAdTagDetailRequest..google.cloud.video.stitcher.v1.VodAdTagDetail"P�Aname���CA/v1/{name=projects/*/locations/*/vodSessions/*/vodAdTagDetails/*}�
ListLiveAdTagDetails;.google.cloud.video.stitcher.v1.ListLiveAdTagDetailsRequest<.google.cloud.video.stitcher.v1.ListLiveAdTagDetailsResponse"T�Aparent���EC/v1/{parent=projects/*/locations/*/liveSessions/*}/liveAdTagDetails�
GetLiveAdTagDetail9.google.cloud.video.stitcher.v1.GetLiveAdTagDetailRequest/.google.cloud.video.stitcher.v1.LiveAdTagDetail"R�Aname���EC/v1/{name=projects/*/locations/*/liveSessions/*/liveAdTagDetails/*}�
CreateSlate2.google.cloud.video.stitcher.v1.CreateSlateRequest.google.longrunning.Operation"��AX
$google.cloud.video.stitcher.v1.Slate0google.cloud.video.stitcher.v1.OperationMetadata�Aparent,slate,slate_id���3"*/v1/{parent=projects/*/locations/*}/slates:slate�

ListSlates1.google.cloud.video.stitcher.v1.ListSlatesRequest2.google.cloud.video.stitcher.v1.ListSlatesResponse";�Aparent���,*/v1/{parent=projects/*/locations/*}/slates�
GetSlate/.google.cloud.video.stitcher.v1.GetSlateRequest%.google.cloud.video.stitcher.v1.Slate"9�Aname���,*/v1/{name=projects/*/locations/*/slates/*}�
UpdateSlate2.google.cloud.video.stitcher.v1.UpdateSlateRequest.google.longrunning.Operation"��AX
$google.cloud.video.stitcher.v1.Slate0google.cloud.video.stitcher.v1.OperationMetadata�Aslate,update_mask���920/v1/{slate.name=projects/*/locations/*/slates/*}:slate�
DeleteSlate2.google.cloud.video.stitcher.v1.DeleteSlateRequest.google.longrunning.Operation"��AI
google.protobuf.Empty0google.cloud.video.stitcher.v1.OperationMetadata�Aname���,**/v1/{name=projects/*/locations/*/slates/*}�
CreateLiveSession8.google.cloud.video.stitcher.v1.CreateLiveSessionRequest+.google.cloud.video.stitcher.v1.LiveSession"\\�Aparent,live_session���@"0/v1/{parent=projects/*/locations/*}/liveSessions:live_session�
GetLiveSession5.google.cloud.video.stitcher.v1.GetLiveSessionRequest+.google.cloud.video.stitcher.v1.LiveSession"?�Aname���20/v1/{name=projects/*/locations/*/liveSessions/*}�
CreateLiveConfig7.google.cloud.video.stitcher.v1.CreateLiveConfigRequest.google.longrunning.Operation"��A]
)google.cloud.video.stitcher.v1.LiveConfig0google.cloud.video.stitcher.v1.OperationMetadata�A!parent,live_config,live_config_id���>"//v1/{parent=projects/*/locations/*}/liveConfigs:live_config�
ListLiveConfigs6.google.cloud.video.stitcher.v1.ListLiveConfigsRequest7.google.cloud.video.stitcher.v1.ListLiveConfigsResponse"@�Aparent���1//v1/{parent=projects/*/locations/*}/liveConfigs�
GetLiveConfig4.google.cloud.video.stitcher.v1.GetLiveConfigRequest*.google.cloud.video.stitcher.v1.LiveConfig">�Aname���1//v1/{name=projects/*/locations/*/liveConfigs/*}�
DeleteLiveConfig7.google.cloud.video.stitcher.v1.DeleteLiveConfigRequest.google.longrunning.Operation"��AI
google.protobuf.Empty0google.cloud.video.stitcher.v1.OperationMetadata�Aname���1*//v1/{name=projects/*/locations/*/liveConfigs/*}�
UpdateLiveConfig7.google.cloud.video.stitcher.v1.UpdateLiveConfigRequest.google.longrunning.Operation"��A]
)google.cloud.video.stitcher.v1.LiveConfig0google.cloud.video.stitcher.v1.OperationMetadata�Alive_config,update_mask���J2;/v1/{live_config.name=projects/*/locations/*/liveConfigs/*}:live_config�
CreateVodConfig6.google.cloud.video.stitcher.v1.CreateVodConfigRequest.google.longrunning.Operation"��A\\
(google.cloud.video.stitcher.v1.VodConfig0google.cloud.video.stitcher.v1.OperationMetadata�Aparent,vod_config,vod_config_id���<"./v1/{parent=projects/*/locations/*}/vodConfigs:
vod_config�
ListVodConfigs5.google.cloud.video.stitcher.v1.ListVodConfigsRequest6.google.cloud.video.stitcher.v1.ListVodConfigsResponse"?�Aparent���0./v1/{parent=projects/*/locations/*}/vodConfigs�
GetVodConfig3.google.cloud.video.stitcher.v1.GetVodConfigRequest).google.cloud.video.stitcher.v1.VodConfig"=�Aname���0./v1/{name=projects/*/locations/*/vodConfigs/*}�
DeleteVodConfig6.google.cloud.video.stitcher.v1.DeleteVodConfigRequest.google.longrunning.Operation"��AI
google.protobuf.Empty0google.cloud.video.stitcher.v1.OperationMetadata�Aname���0*./v1/{name=projects/*/locations/*/vodConfigs/*}�
UpdateVodConfig6.google.cloud.video.stitcher.v1.UpdateVodConfigRequest.google.longrunning.Operation"��A\\
(google.cloud.video.stitcher.v1.VodConfig0google.cloud.video.stitcher.v1.OperationMetadata�Avod_config,update_mask���G29/v1/{vod_config.name=projects/*/locations/*/vodConfigs/*}:
vod_configP�Avideostitcher.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
"com.google.cloud.video.stitcher.v1BVideoStitcherServiceProtoPZ>cloud.google.com/go/video/stitcher/apiv1/stitcherpb;stitcherpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

