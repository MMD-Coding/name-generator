<?php

namespace MMDC;

/**
 *
 * @author MMD-Coding
 */
class NameGenerator {

  /**
   * Different generator modes
   * Possibilities:
   * moniker
   * us
   * uk
   *
   * @var String
   */
  private $_mode;
  private $_dict1;
  private $_dict2;
  private $_glue;

  public function __construct($mode = 'us', $glue = ' ') {
    switch ($mode) {
      case 'moniker':
        $dict1 = 'adverbs';
        $dict2 = 'nouns';
        $glue = '-';
        break;
      case 'us':
        $dict1 = 'us_names';
        $dict2 = 'us_surnames';
        break;
      case 'uk':
        $dict1 = 'uk_names';
        $dict2 = 'uk_surnames';
        break;
      default:
        throw new \InvalidArgumentException('Mode not supported');
    }

    $this->_mode = $mode;
    $this->_dict1 = file('dict/' . $dict1 . '.txt', FILE_IGNORE_NEW_LINES);
    $this->_dict2 = file('dict/' . $dict2 . '.txt', FILE_IGNORE_NEW_LINES);
    $this->_glue = $glue;
  }

  /**
   * 
   * @return type
   */
  public function next() {
    $first = $this->_dict1[array_rand($this->_dict1)];
    $last = $this->_dict2[array_rand($this->_dict2)];

    return $first . $this->_glue . $last;
  }

}