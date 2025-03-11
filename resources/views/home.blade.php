<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моё портфолио</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Добро пожаловать в моё портфолио!</h1>

<h2>Мои проекты:</h2>
<ul>
    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
</ul>

<h2>Мой опыт:</h2>
<ul>
    @foreach ($experiences as $experience)
        <li>{{ $experience->job_title }} в {{ $experience->company }}</li>
    @endforeach
</ul>
</body>
</html>
