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

namespace Google\Service\CloudFunctions;

class EventTrigger extends \Google\Model
{
  /**
   * @var string
   */
  public $eventType;
  protected $failurePolicyType = FailurePolicy::class;
  protected $failurePolicyDataType = '';
  /**
   * @var string
   */
  public $resource;
  /**
   * @var string
   */
  public $service;

  /**
   * @param string
   */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /**
   * @return string
   */
  public function getEventType()
  {
    return $this->eventType;
  }
  /**
   * @param FailurePolicy
   */
  public function setFailurePolicy(FailurePolicy $failurePolicy)
  {
    $this->failurePolicy = $failurePolicy;
  }
  /**
   * @return FailurePolicy
   */
  public function getFailurePolicy()
  {
    return $this->failurePolicy;
  }
  /**
   * @param string
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * @param string
   */
  public function setService($service)
  {
    $this->service = $service;
  }
  /**
   * @return string
   */
  public function getService()
  {
    return $this->service;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EventTrigger::class, 'Google_Service_CloudFunctions_EventTrigger');
