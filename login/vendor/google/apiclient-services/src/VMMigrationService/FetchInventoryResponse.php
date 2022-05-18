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

namespace Google\Service\VMMigrationService;

class FetchInventoryResponse extends \Google\Model
{
  /**
   * @var string
   */
  public $updateTime;
  protected $vmwareVmsType = VmwareVmsDetails::class;
  protected $vmwareVmsDataType = '';

  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * @param VmwareVmsDetails
   */
  public function setVmwareVms(VmwareVmsDetails $vmwareVms)
  {
    $this->vmwareVms = $vmwareVms;
  }
  /**
   * @return VmwareVmsDetails
   */
  public function getVmwareVms()
  {
    return $this->vmwareVms;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FetchInventoryResponse::class, 'Google_Service_VMMigrationService_FetchInventoryResponse');
