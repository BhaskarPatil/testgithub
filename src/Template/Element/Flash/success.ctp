<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success p-5 alert-success alert-dismissible text-center" onclick="this.classList.add('hidden')"><?= $message ?></div>
