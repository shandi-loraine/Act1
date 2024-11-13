<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's Profile</title>
</head>
<body>
    
<h1>USER'S PROFILE</h1>
        
        <div>Name: {{$user->name}}</div>
        <div>Email: {{$user->email}}</div><br>
        
        <div>Bio: {{$user->profile->bio}}</div>
        <div>School: {{$user->profile->school}}</div>
        <hr>
</body>
</html>