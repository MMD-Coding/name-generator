<?php

namespace MMDC;

/**
 *
 * @author MMD-Coding
 */
class NameGenerator {

  public function __construct() {
    $this->nouns = file('dict/nouns.txt', FILE_IGNORE_NEW_LINES);
    $this->adverbs = file('dict/adverbs.txt', FILE_IGNORE_NEW_LINES);
  }

  public function generate() {
    $nounCount = count($this->nouns);
    $adverbCount = count($this->adverbs);
    
      $nounKey = rand(0, $nounCount);
      $adverbKey = rand(0, $adverbCount);

    return $this->adverbs[$adverbKey] . '-' . $this->nouns[$nounKey];
  }

}

?>
