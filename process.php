<?php
error_reporting(E_ERROR | E_PARSE);
require 'google_drive.php';

if(isset($_POST['submit'])){
    $folderName = $_POST['test'];
    echo "$folderName - Test";

    $service = new Google_Service_Drive($GLOBALS['client']);
    $folder = new Google_Service_Drive_DriveFile();

    $folder->setName($folderName);
    $folder->setMimeType('application/vnd.google-apps.folder');

    $optparams = [
        "supportsAllDrives" => true,
        "supportsTeamDrives" => true
    ];

    $result = $service->files->create($folder);

    $folder_id = null;
    $folder_id = $result['id'];
    echo "$folderName - $folder_id - telah berhasil di push !<br/>";

    $file_tmp  = $_FILES["kiw"]["tmp_name"];
    $file_type = $_FILES["kiw"]["type"];
    $file_name = basename($_FILES["kiw"]["name"]);
    $path = "uploads/".$file_name;

    move_uploaded_file($file_tmp, $path);

    $success = insert_file_to_drive( $path , $file_name, $folder_id);

    if( $success ){
        echo "file uploaded successfully";
        echo "$namaFile - $namaSementara - $dirUpload - $terupload";
    } else { 
        echo "Something went wrong.";
    }
}

// This will insert file into drive and returns boolean values.
function insert_file_to_drive( $file_path, $file_name, $parent_file_id = null ){
    $service = new Google_Service_Drive( $GLOBALS['client'] );
    $file = new Google_Service_Drive_DriveFile();
    $file->setName( $file_name );

    if( !empty( $parent_file_id ) ){
        $file->setParents( [ $parent_file_id ] );        
    }

    $result = $service->files->create(
        $file,
        array(
            'data' => file_get_contents($file_path),
            'mimeType' => 'application/octet-stream',
        )
    );

    $is_success = false;
    
    if( isset( $result['name'] ) && !empty( $result['name'] ) ){
        $is_success = true;
    }

    return $is_success;
}

?>