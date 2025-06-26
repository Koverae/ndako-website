<!DOCTYPE html>
<html>
<head>
    <title>New Demo Request</title>
</head>
<body>
    <h2>New Demo Request</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Hotel Name:</strong> {{ $data['company'] ?? 'Not Provided' }}</p>
    <p><strong>Number of Rooms:</strong> {{ $data['rooms'] ?? 'Not Provided' }}</p>
    <p><strong>Message:</strong> {{ $data['message'] ?? 'No additional message' }}</p>
</body>
</html>
