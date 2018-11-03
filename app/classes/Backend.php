<?php

namespace App\classes;

class Backend{

  public function generateSlug($slug){
    //remove any character that isnt a space hyphen letter number
    //remove spaces and duplicate hyphens
    //trim left and right from any extra hyphens

    $lettersNumbersSpacesHyphens = '/[^-sa-zA-Z0-9]/';
    $spacesDuplicateHyphens = '/[-s]+/';

    $slug = preg_replace($lettersNumbersSpacesHyphens, '', $slug);
    $slug = preg_replace($spacesDuplicateHyphens, '-', $slug);
    $slug = trim($slug, '-');

    return $slug;

  }

}
