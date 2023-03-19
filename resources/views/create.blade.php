<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/index" method="post" enctype="multipart/from-data">
        @csrf
    <input type="text" name="place" id="">
    <input type="text" name="gps" id="">
    <input type="file" name="image" >
    <button type="submit">login</button>
    
    
    </form>
</body>
</html>