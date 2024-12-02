<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome , <?php echo $name ?> !! </h1>

<!-- post route يجب ان يكون post method  اذا كان  -->

    <form action="stor" method="post">
        @csrf <!-- للتشفير -->
        <input type="text" name="name" id="name">
        <input type="submit" value="send">
    </form>
</body>
</html>