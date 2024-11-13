<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>{{$user->name}}</h1>
    <hr>

    <h2>COURSES : </h2>
    @foreach($user->courses as $course)
        <div> - {{$course->course_name}}</div><br>
    @endforeach

</body>
</html>