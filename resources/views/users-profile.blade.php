<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
</head>

<body>
    
<h1>All User Profiles</h1>

    @foreach ($profiles as $profile)
        <div>Name : {{$profile->user->name}}</div>
        <div>Email : {{$profile->user->email}}</div>
        <div>School : {{$profile->school}}</div>
        <div>Bio : {{$profile->bio}}</div>
        <hr>
    @endforeach

</body>
</html>