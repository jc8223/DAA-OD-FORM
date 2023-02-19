<?php
// Get the API client and construct the service object.
$client = get_Client('414432378492-eh9opu7u7ncamodn5sjikht6jpon9ir1.apps.googleusercontent.com');
$service = new Google_Service_Drive($client);

// Upload the file to Google Drive.
$file = new Google_Service_Drive_DriveFile();
$file->setName('My File');
$file->setDescription('This is my file');
$file->setMimeType('application/pdf');

$data = file_get_contents('myfile.pdf');
$createdFile = $service->files->create($file, array(
	'data' => $data,
	'mimeType' => 'application/pdf',
	'uploadType' => 'multipart'
)
);

printf("File ID: %s\n", $createdFile->id);
?>