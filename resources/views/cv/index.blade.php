<!-- resources/views/cv/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create CV</title>
</head>
<body>
    <form action="{{ route('generate.cv') }}" method="POST">
        @csrf
        <label for="first_name">Ad:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="last_name">Soyad:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        <label for="education">Eğitim:</label><br>
        <input type="text" id="education" name="education"><br><br>
        <button type="submit">CV Oluştur</button>
    </form>
</body>
</html>
