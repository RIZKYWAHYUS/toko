<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
 
        <title>Laravel Upload File</title>
         
    </head>
    <body>
 
    <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="file">Select File</label>
            <input type="file" name="filename" id="file" value="">
             
            <input type="submit" name="upload" id="upload" value="Upload">
        </form>
 
    </body>
 
</html>
