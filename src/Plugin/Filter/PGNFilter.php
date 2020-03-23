<?php

namespace Drupal\pgn_filter\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * @Filter(
 *   id = "pgn_filter",
 *   title = @Translation("PGN Filter"),
 *   description = @Translation("View PGN format!"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 * )
 */
class PGNFilter extends FilterBase
{

  public function process($text, $langcode)
  {
    $replace = '<span class="celebrate-filter">' . $this->t('Good Times!') . ' </span>';
    $new_text = str_replace('[celebrate]', $replace, $text);
    return new FilterProcessResult($new_text);
  }
}
