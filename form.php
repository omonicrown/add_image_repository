
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<?php if(@$_GET['q7'])
{ echo'<p style="color:green;font-size:15px;" id="success_message" >'.@$_GET['q7'].'</p>';}?>

<?php if(@$_GET['q8'])
{ echo'<p style="color:red;font-size:15px;" id="success_message" >'.@$_GET['q8'].'</p>';}?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
    <input type="file" name="files[]" multiple >
    <input type="submit" name="submit" value="UPLOAD">
</form>

<script>
        setTimeout(function() {
            $('#success_message').fadeOut("slow");
        }, 3000 );
            </script>