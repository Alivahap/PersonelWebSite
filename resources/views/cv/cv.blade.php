<!-- resources/views/cv/cv.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
</head>
<body>
    <h1>CV</h1>
    <p><strong>Ad:</strong> {{ $first_name }}</p>
    <p><strong>Soyad:</strong> {{ $last_name }}</p>
    <p><strong>Eğitim:</strong> {{ $education }}</p>
</body>
</html>
