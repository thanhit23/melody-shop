<?php

/**
 * @param $template
 */

function requiredTemplateAdmin($template)
{
  switch ($template) {
    case 'helmet':
      require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/admin/helmet.php');
      break;
    case 'navigate_bar':
      require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/admin/navbar-vertical.php');
      break;
    case 'script':
      require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/admin/script.php');
      break;
    case 'footer':
      require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/admin/footer.php');
      break;
    default:
      break;
  }
}
