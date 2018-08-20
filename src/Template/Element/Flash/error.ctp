<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error p-5 alert-danger alert-dismissible text-center m-b-0"  onclick="this.classList.add('hidden');"><?= $message ?></div>
