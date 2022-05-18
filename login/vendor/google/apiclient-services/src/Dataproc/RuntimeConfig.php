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

namespace Google\Service\Dataproc;

class RuntimeConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $containerImage;
  /**
   * @var string[]
   */
  public $properties;
  protected $sessionAuthenticationConfigType = AuthenticationConfig::class;
  protected $sessionAuthenticationConfigDataType = '';
  /**
   * @var string
   */
  public $version;

  /**
   * @param string
   */
  public function setContainerImage($containerImage)
  {
    $this->containerImage = $containerImage;
  }
  /**
   * @return string
   */
  public function getContainerImage()
  {
    return $this->containerImage;
  }
  /**
   * @param string[]
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return string[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * @param AuthenticationConfig
   */
  public function setSessionAuthenticationConfig(AuthenticationConfig $sessionAuthenticationConfig)
  {
    $this->sessionAuthenticationConfig = $sessionAuthenticationConfig;
  }
  /**
   * @return AuthenticationConfig
   */
  public function getSessionAuthenticationConfig()
  {
    return $this->sessionAuthenticationConfig;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RuntimeConfig::class, 'Google_Service_Dataproc_RuntimeConfig');
