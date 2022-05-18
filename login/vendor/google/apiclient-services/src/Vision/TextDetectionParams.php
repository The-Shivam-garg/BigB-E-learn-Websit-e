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

namespace Google\Service\Vision;

class TextDetectionParams extends \Google\Model
{
  /**
   * @var bool
   */
  public $enableTextDetectionConfidenceScore;

  /**
   * @param bool
   */
  public function setEnableTextDetectionConfidenceScore($enableTextDetectionConfidenceScore)
  {
    $this->enableTextDetectionConfidenceScore = $enableTextDetectionConfidenceScore;
  }
  /**
   * @return bool
   */
  public function getEnableTextDetectionConfidenceScore()
  {
    return $this->enableTextDetectionConfidenceScore;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextDetectionParams::class, 'Google_Service_Vision_TextDetectionParams');
