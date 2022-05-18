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

namespace Google\Service\Adsense\Resource;

use Google\Service\Adsense\AdUnit;
use Google\Service\Adsense\AdUnitAdCode;
use Google\Service\Adsense\ListAdUnitsResponse;
use Google\Service\Adsense\ListLinkedCustomChannelsResponse;

/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google\Service\Adsense(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 */
class AccountsAdclientsAdunits extends \Google\Service\Resource
{
  /**
   * Gets an ad unit from a specified account and ad client. (adunits.get)
   *
   * @param string $name Required. AdUnit to get information about. Format:
   * accounts/{account}/adclients/{adclient}/adunits/{adunit}
   * @param array $optParams Optional parameters.
   * @return AdUnit
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AdUnit::class);
  }
  /**
   * Gets the AdSense code for a given ad unit. (adunits.getAdcode)
   *
   * @param string $name Required. Name of the adunit for which to get the adcode.
   * Format: accounts/{account}/adclients/{adclient}/adunits/{adunit}
   * @param array $optParams Optional parameters.
   * @return AdUnitAdCode
   */
  public function getAdcode($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getAdcode', [$params], AdUnitAdCode::class);
  }
  /**
   * Lists all ad units under a specified account and ad client.
   * (adunits.listAccountsAdclientsAdunits)
   *
   * @param string $parent Required. The ad client which owns the collection of ad
   * units. Format: accounts/{account}/adclients/{adclient}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of ad units to include in the
   * response, used for paging. If unspecified, at most 10000 ad units will be
   * returned. The maximum value is 10000; values above 10000 will be coerced to
   * 10000.
   * @opt_param string pageToken A page token, received from a previous
   * `ListAdUnits` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListAdUnits` must match the
   * call that provided the page token.
   * @return ListAdUnitsResponse
   */
  public function listAccountsAdclientsAdunits($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAdUnitsResponse::class);
  }
  /**
   * Lists all the custom channels available for an ad unit.
   * (adunits.listLinkedCustomChannels)
   *
   * @param string $parent Required. The ad unit which owns the collection of
   * custom channels. Format:
   * accounts/{account}/adclients/{adclient}/adunits/{adunit}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of custom channels to include in
   * the response, used for paging. If unspecified, at most 10000 custom channels
   * will be returned. The maximum value is 10000; values above 10000 will be
   * coerced to 10000.
   * @opt_param string pageToken A page token, received from a previous
   * `ListLinkedCustomChannels` call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * `ListLinkedCustomChannels` must match the call that provided the page token.
   * @return ListLinkedCustomChannelsResponse
   */
  public function listLinkedCustomChannels($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('listLinkedCustomChannels', [$params], ListLinkedCustomChannelsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountsAdclientsAdunits::class, 'Google_Service_Adsense_Resource_AccountsAdclientsAdunits');
