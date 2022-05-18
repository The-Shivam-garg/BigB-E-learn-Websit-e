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

namespace Google\Service\Calendar;

class FreeBusyGroup extends \Google\Collection
{
  protected $collection_key = 'errors';
  /**
   * @var string[]
   */
  public $calendars;
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';

  /**
   * @param string[]
   */
  public function setCalendars($calendars)
  {
    $this->calendars = $calendars;
  }
  /**
   * @return string[]
   */
  public function getCalendars()
  {
    return $this->calendars;
  }
  /**
   * @param Error[]
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Error[]
   */
  public function getErrors()
  {
    return $this->errors;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FreeBusyGroup::class, 'Google_Service_Calendar_FreeBusyGroup');
