<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;


if(isset($_FILES['file'])){
  
  
  $bucketName = 'c.eblr.io';
  $IAM_KEY = getenv('AWS_ACCESS_KEY');
  $IAM_SECRET = getenv('AWS_SECRET_KEY');
  
  try {
      $s3 = new S3Client([
          'version'     => 'latest',
          'region'      => 'us-west-2',
          'credentials' => [
              'key'    => $IAM_KEY,
              'secret' => $IAM_SECRET,
          ],
      ]);
  } catch (Exception $e) {
      die("Error: " . $e->getMessage());
  }

$fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$uniqueFileName = substr(hash('sha256', uniqid()),0,10) . '.' . $fileExtension;
$pathInS3 = 'https://' . $bucketName . '/' . $uniqueFileName;
    
  try {
      $file = $_FILES["file"]["tmp_name"];
      $s3->putObject([
          'Bucket'     => $bucketName,
          'Key'        => $uniqueFileName,
          'SourceFile' => $file
      ]);
  } catch (AwsException $e){  
               die("Error uploading: " . $e->getMessage());
  }
  
  echo $pathInS3;
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #textArea {
            width: 100%;
            height: 300px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <textarea id="textArea" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);"></textarea><br>
    <button id="uploadButton" onclick="document.getElementById('fileInput').click();">ファイルを添付する</button>
  出力されたURLを利用してください
    <input type="file" id="fileInput" style="display: none;" onchange="uploadFile(this.files[0]);">
    <script>
        function dropHandler(ev) {
            ev.preventDefault();
            if (ev.dataTransfer.items) {
                for (let i = 0; i < ev.dataTransfer.items.length; i++) {
                    if (ev.dataTransfer.items[i].kind === 'file') {
                        let file = ev.dataTransfer.items[i].getAsFile();
                        uploadFile(file);
                    }
                }
            }
        }
        function dragOverHandler(ev) {
            ev.preventDefault();
        }
        function uploadFile(file) {
            let formData = new FormData();
            formData.append('file', file);
            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('textArea').value += data+"\n";
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
