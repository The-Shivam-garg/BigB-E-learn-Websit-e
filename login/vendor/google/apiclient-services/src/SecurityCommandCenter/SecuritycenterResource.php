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

namespace Google\Service\SecurityCommandCenter;

class SecuritycenterResource extends \Google\Collection
{
  protected $collection_key = 'folders';
  /**
   * @var string
   */
  public $displayName;
  protected $foldersType = Folder::class;
  protected $foldersDataType = 'array';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $parentDisplayName;
  /**
   * @var string
   */
  public $parentName;
  /**
   * @var string
   */
  public $projectDisplayName;
  /**
   * @var string
   */
  public $projectName;
  /**
   * @var string
   */
  public $type;

  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param Folder[]
   */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /**
   * @return Folder[]
   */
  public function getFolders()
  {
    return $this->folders;
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
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /**
   * @return string
   */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /**
   * @param string
   */
  public function setParentName($parentName)
  {
    $this->parentName = $parentName;
  }
  /**
   * @return string
   */
  public function getParentName()
  {
    return $this->parentName;
  }
  /**
   * @param string
   */
  public function setProjectDisplayName($projectDisplayName)
  {
    $this->projectDisplayName = $projectDisplayName;
  }
  /**
   * @return string
   */
  public function getProjectDisplayName()
  {
    return $this->projectDisplayName;
  }
  /**
   * @param string
   */
  public function setProjectName($projectName)
  {
    $this->projectName = $projectName;
  }
  /**
   * @return string
   */
  public function getProjectName()
  {
    return $this->projectName;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecuritycenterResource::class, 'Google_Service_SecurityCommandCenter_SecuritycenterResource');
