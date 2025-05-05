<?php
function sanitizar($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
};

define('UPLOAD_DIR', __DIR__ . '/../uploads/');
?>