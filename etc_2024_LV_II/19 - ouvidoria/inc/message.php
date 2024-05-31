<?php
$messageType = "message-info";
if (isset($_GET['type'])) {
    if ($_GET['type'] == 'error') {
        $messageType = "message-error";
    } elseif ($_GET['type'] == 'error') {
        $messageType = "message-warning";
    } else {
        $messageType = "message-info";
    }
}
?>
<?php if (isset($_GET['message'])): ?>
    <div class="message <?=$messageType; ?>">
        <?= $_GET['message']; ?>
    </div>
<?php endif; ?>