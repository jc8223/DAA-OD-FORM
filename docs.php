<?php
$requests = array();
$requests[] = new Google_Service_Docs_Request(array(
    'insertText' => array(
        'text' => $text1,
        'location' => array(
            'index' => 25,
        ),
    ),
    'insertText' => array(
        'text' => $text2,
        'location' => array(
            'index' => 50,
        ),
    ),
    'insertText' => array(
        'text' => $text3,
        'location' => array(
            'index' => 75,
        ),
    ),
));

$batchUpdateRequest = new Google_Service_Docs_BatchUpdateDocumentRequest(array(
    'requests' => $requests
));

$response = $service->documents->batchUpdate($documentId, $batchUpdateRequest);
?>