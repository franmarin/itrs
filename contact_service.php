<?php

/**
 * Script to receive POST requests with contact form submits and save them into
 * database.
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$result = ['result' => 'Ok'];
if (!ITRS\Contact::saveRawData($_POST)) {
    $result = ['result' => 'Error saving contact data'];
}

header('Content-type: application/json');
echo json_encode($result);