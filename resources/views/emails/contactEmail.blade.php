<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message de AI-Magination</title>
</head>
<body>
    <h1>Bonjour, {{ $data['pseudo'] }}</h1>
    <p>Vous avez écrit :</p>
    <blockquote>
        <p>{{ $data['message'] }}</p>
    </blockquote>
    <p>Merci de nous avoir contactés ! Nous vous répondrons dans les plus brefs délais.</p>
</body>
</html>
