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

namespace Google\Service\Baremetalsolution;

class Volume extends \Google\Model
{
  /**
   * @var string
   */
  public $autoGrownSizeGib;
  /**
   * @var string
   */
  public $currentSizeGib;
  /**
   * @var string
   */
  public $emergencySizeGib;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $remainingSpaceGib;
  /**
   * @var string
   */
  public $requestedSizeGib;
  /**
   * @var string
   */
  public $snapshotAutoDeleteBehavior;
  /**
   * @var bool
   */
  public $snapshotEnabled;
  protected $snapshotReservationDetailType = SnapshotReservationDetail::class;
  protected $snapshotReservationDetailDataType = '';
  /**
   * @var string
   */
  public $snapshotSchedulePolicy;
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $storageType;

  /**
   * @param string
   */
  public function setAutoGrownSizeGib($autoGrownSizeGib)
  {
    $this->autoGrownSizeGib = $autoGrownSizeGib;
  }
  /**
   * @return string
   */
  public function getAutoGrownSizeGib()
  {
    return $this->autoGrownSizeGib;
  }
  /**
   * @param string
   */
  public function setCurrentSizeGib($currentSizeGib)
  {
    $this->currentSizeGib = $currentSizeGib;
  }
  /**
   * @return string
   */
  public function getCurrentSizeGib()
  {
    return $this->currentSizeGib;
  }
  /**
   * @param string
   */
  public function setEmergencySizeGib($emergencySizeGib)
  {
    $this->emergencySizeGib = $emergencySizeGib;
  }
  /**
   * @return string
   */
  public function getEmergencySizeGib()
  {
    return $this->emergencySizeGib;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setRemainingSpaceGib($remainingSpaceGib)
  {
    $this->remainingSpaceGib = $remainingSpaceGib;
  }
  /**
   * @return string
   */
  public function getRemainingSpaceGib()
  {
    return $this->remainingSpaceGib;
  }
  /**
   * @param string
   */
  public function setRequestedSizeGib($requestedSizeGib)
  {
    $this->requestedSizeGib = $requestedSizeGib;
  }
  /**
   * @return string
   */
  public function getRequestedSizeGib()
  {
    return $this->requestedSizeGib;
  }
  /**
   * @param string
   */
  public function setSnapshotAutoDeleteBehavior($snapshotAutoDeleteBehavior)
  {
    $this->snapshotAutoDeleteBehavior = $snapshotAutoDeleteBehavior;
  }
  /**
   * @return string
   */
  public function getSnapshotAutoDeleteBehavior()
  {
    return $this->snapshotAutoDeleteBehavior;
  }
  /**
   * @param bool
   */
  public function setSnapshotEnabled($snapshotEnabled)
  {
    $this->snapshotEnabled = $snapshotEnabled;
  }
  /**
   * @return bool
   */
  public function getSnapshotEnabled()
  {
    return $this->snapshotEnabled;
  }
  /**
   * @param SnapshotReservationDetail
   */
  public function setSnapshotReservationDetail(SnapshotReservationDetail $snapshotReservationDetail)
  {
    $this->snapshotReservationDetail = $snapshotReservationDetail;
  }
  /**
   * @return SnapshotReservationDetail
   */
  public function getSnapshotReservationDetail()
  {
    return $this->snapshotReservationDetail;
  }
  /**
   * @param string
   */
  public function setSnapshotSchedulePolicy($snapshotSchedulePolicy)
  {
    $this->snapshotSchedulePolicy = $snapshotSchedulePolicy;
  }
  /**
   * @return string
   */
  public function getSnapshotSchedulePolicy()
  {
    return $this->snapshotSchedulePolicy;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
   */
  public function setStorageType($storageType)
  {
    $this->storageType = $storageType;
  }
  /**
   * @return string
   */
  public function getStorageType()
  {
    return $this->storageType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Volume::class, 'Google_Service_Baremetalsolution_Volume');
