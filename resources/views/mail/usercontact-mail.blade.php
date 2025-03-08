<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $insertData['messages'] }}</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $insertData['user_name'] }}</p>
    <p><strong>E-mail:</strong> {{ $insertData['user_email'] }}</p>
    <p><strong>Phone:</strong> {{ $insertData['user_phone'] }}</p>
    <p><strong>Subject:</strong> {{ $insertData['subject'] }}</p>
    <p><strong>Messages:</strong> {{ $insertData['messages'] }}</p>
</body>
</html>