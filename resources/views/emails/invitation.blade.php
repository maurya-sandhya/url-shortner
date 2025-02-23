<!DOCTYPE html>
<html>
<head>
    <title>Invitation</title>
</head>
<body>
    <h2>You are invited to join our platform</h2>
    <p>Click the button below to register:</p>
    <a href="{{ url('/register?token=' . $invitation->token) }}" 
       style="background-color: #28a745; color: white; padding: 10px 15px; text-decoration: none;">
       Accept Invitation
    </a>
</body>
</html>
