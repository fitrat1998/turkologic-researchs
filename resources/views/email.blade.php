<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Xabar</title>
</head>
<body>
    <h2>{{ $mailData['title'] ?? '' }}</h2>
    <p>{{ $mailData['body'] ?? '' }}</p>
    <p><strong>Kod:</strong> {{ $mailData['password'] ?? '' }}</p>
    <p>Hurmat bilan, {{ env('APP_NAME') }} jamoasi.</p>
</body>
</html>
