<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\DisplayVideo\Resource;

use Google\Service\DisplayVideo\Advertiser;
use Google\Service\DisplayVideo\AuditAdvertiserResponse;
use Google\Service\DisplayVideo\BulkEditAdvertiserAssignedTargetingOptionsRequest;
use Google\Service\DisplayVideo\BulkEditAdvertiserAssignedTargetingOptionsResponse;
use Google\Service\DisplayVideo\BulkListAdvertiserAssignedTargetingOptionsResponse;
use Google\Service\DisplayVideo\DisplayvideoEmpty;
use Google\Service\DisplayVideo\ListAdvertisersResponse;

/**
 * The "advertisers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google\Service\DisplayVideo(...);
 *   $advertisers = $displayvideoService->advertisers;
 *  </code>
 */
class Advertisers extends \Google\Service\Resource
{
  /**
   * Audits an advertiser. Returns the counts of used entities per resource type
   * under the advertiser provided. Used entities count towards their respective
   * resource limit. See https://support.google.com/displayvideo/answer/6071450.
   * (advertisers.audit)
   *
   * @param string $advertiserId Required. The ID of the advertiser to audit.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string readMask Optional. The specific fields to return. If no
   * mask is specified, all fields in the response proto will be filled. Valid
   * values are: * usedLineItemsCount * usedInsertionOrdersCount *
   * usedCampaignsCount * channelsCount * negativelyTargetedChannelsCount *
   * negativeKeywordListsCount * adGroupCriteriaCount * campaignCriteriaCount
   * @return AuditAdvertiserResponse
   */
  public function audit($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('audit', [$params], AuditAdvertiserResponse::class);
  }
  /**
   * Bulk edits targeting options under a single advertiser. The operation will
   * delete the assigned targeting options provided in
   * BulkEditAdvertiserAssignedTargetingOptionsRequest.delete_requests and then
   * create the assigned targeting options provided in
   * BulkEditAdvertiserAssignedTargetingOptionsRequest.create_requests .
   * (advertisers.bulkEditAdvertiserAssignedTargetingOptions)
   *
   * @param string $advertiserId Required. The ID of the advertiser.
   * @param BulkEditAdvertiserAssignedTargetingOptionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BulkEditAdvertiserAssignedTargetingOptionsResponse
   */
  public function bulkEditAdvertiserAssignedTargetingOptions($advertiserId, BulkEditAdvertiserAssignedTargetingOptionsRequest $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('bulkEditAdvertiserAssignedTargetingOptions', [$params], BulkEditAdvertiserAssignedTargetingOptionsResponse::class);
  }
  /**
   * Lists assigned targeting options of an advertiser across targeting types.
   * (advertisers.bulkListAdvertiserAssignedTargetingOptions)
   *
   * @param string $advertiserId Required. The ID of the advertiser the line item
   * belongs to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Allows filtering by assigned targeting option
   * properties. Supported syntax: * Filter expressions are made up of one or more
   * restrictions. * Restrictions can be combined by the logical operator `OR`.. *
   * A restriction has the form of `{field} {operator} {value}`. * The operator
   * must be `EQUALS (=)`. * Supported fields: - `targetingType` Examples: *
   * targetingType with value TARGETING_TYPE_CHANNEL
   * `targetingType="TARGETING_TYPE_CHANNEL"` The length of this field should be
   * no more than 500 characters.
   * @opt_param string orderBy Field by which to sort the list. Acceptable values
   * are: * `targetingType` (default) The default sorting order is ascending. To
   * specify descending order for a field, a suffix "desc" should be added to the
   * field name. Example: `targetingType desc`.
   * @opt_param int pageSize Requested page size. The size must be an integer
   * between `1` and `5000`. If unspecified, the default is '5000'. Returns error
   * code `INVALID_ARGUMENT` if an invalid value is specified.
   * @opt_param string pageToken A token that lets the client fetch the next page
   * of results. Typically, this is the value of next_page_token returned from the
   * previous call to `BulkListAdvertiserAssignedTargetingOptions` method. If not
   * specified, the first page of results will be returned.
   * @return BulkListAdvertiserAssignedTargetingOptionsResponse
   */
  public function bulkListAdvertiserAssignedTargetingOptions($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('bulkListAdvertiserAssignedTargetingOptions', [$params], BulkListAdvertiserAssignedTargetingOptionsResponse::class);
  }
  /**
   * Creates a new advertiser. Returns the newly created advertiser if successful.
   * This method can take up to 180 seconds to complete. (advertisers.create)
   *
   * @param Advertiser $postBody
   * @param array $optParams Optional parameters.
   * @return Advertiser
   */
  public function create(Advertiser $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Advertiser::class);
  }
  /**
   * Deletes an advertiser. Deleting an advertiser will delete all of its child
   * resources, for example, campaigns, insertion orders and line items. A deleted
   * advertiser cannot be recovered. (advertisers.delete)
   *
   * @param string $advertiserId The ID of the advertiser we need to delete.
   * @param array $optParams Optional parameters.
   * @return DisplayvideoEmpty
   */
  public function delete($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DisplayvideoEmpty::class);
  }
  /**
   * Gets an advertiser. (advertisers.get)
   *
   * @param string $advertiserId Required. The ID of the advertiser to fetch.
   * @param array $optParams Optional parameters.
   * @return Advertiser
   */
  public function get($advertiserId, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Advertiser::class);
  }
  /**
   * Lists advertisers that are accessible to the current user. The order is
   * defined by the order_by parameter. A single partner_id is required. Cross-
   * partner listing is not supported. (advertisers.listAdvertisers)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Allows filtering by advertiser properties. Supported
   * syntax: * Filter expressions are made up of one or more restrictions. *
   * Restrictions can be combined by `AND` or `OR` logical operators. A sequence
   * of restrictions implicitly uses `AND`. * A restriction has the form of
   * `{field} {operator} {value}`. * The operator used on `updateTime` must be
   * `GREATER THAN OR EQUAL TO (>=)` or `LESS THAN OR EQUAL TO (<=)`. * The
   * operator must be `EQUALS (=)`. * Supported fields: - `advertiserId` -
   * `displayName` - `entityStatus` - `updateTime` (input in ISO 8601 format, or
   * YYYY-MM-DDTHH:MM:SSZ) Examples: * All active advertisers under a partner:
   * `entityStatus="ENTITY_STATUS_ACTIVE"` * All advertisers with an update time
   * less than or equal to `2020-11-04T18:54:47Z (format of ISO 8601)`:
   * `updateTime<="2020-11-04T18:54:47Z"` * All advertisers with an update time
   * greater than or equal to `2020-11-04T18:54:47Z (format of ISO 8601)`:
   * `updateTime>="2020-11-04T18:54:47Z"` The length of this field should be no
   * more than 500 characters.
   * @opt_param string orderBy Field by which to sort the list. Acceptable values
   * are: * `displayName` (default) * `entityStatus` * `updateTime` The default
   * sorting order is ascending. To specify descending order for a field, a suffix
   * "desc" should be added to the field name. For example, `displayName desc`.
   * @opt_param int pageSize Requested page size. Must be between `1` and `100`.
   * If unspecified will default to `100`.
   * @opt_param string pageToken A token identifying a page of results the server
   * should return. Typically, this is the value of next_page_token returned from
   * the previous call to `ListAdvertisers` method. If not specified, the first
   * page of results will be returned.
   * @opt_param string partnerId Required. The ID of the partner that the fetched
   * advertisers should all belong to. The system only supports listing
   * advertisers for one partner at a time.
   * @return ListAdvertisersResponse
   */
  public function listAdvertisers($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAdvertisersResponse::class);
  }
  /**
   * Updates an existing advertiser. Returns the updated advertiser if successful.
   * (advertisers.patch)
   *
   * @param string $advertiserId Output only. The unique ID of the advertiser.
   * Assigned by the system.
   * @param Advertiser $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The mask to control which fields to
   * update.
   * @return Advertiser
   */
  public function patch($advertiserId, Advertiser $postBody, $optParams = [])
  {
    $params = ['advertiserId' => $advertiserId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Advertiser::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Advertisers::class, 'Google_Service_DisplayVideo_Resource_Advertisers');
