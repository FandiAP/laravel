<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 
    <div class ="container">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Post Title">
    </div>
    <div class="form-group">
        <label for="">Author</label>
        <input type="text" class="form-control" name="author" placeholder="Author">
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" class="form-control" name="image" placeholder="Post TImage">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <textarea class="form-control" row="8" name="Content" placeholder="Post Content"></textarea>
    </div>    
    </form>
    </div>
</body>
</html>