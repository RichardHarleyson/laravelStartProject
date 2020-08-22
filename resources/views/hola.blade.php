<!DOCTYPE html>
<html lang="ru">
<head></head>
<body>
<h1>Hello there!</h1>
<ul>
    @foreach($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
</ul>
</body>
</html>
