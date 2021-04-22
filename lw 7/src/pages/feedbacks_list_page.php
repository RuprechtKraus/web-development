<?php

  function feedbacksListPage(array $args = []): void
  {
      renderTemplate("feedbacks.tpl.php", $args);
  }
  
?>