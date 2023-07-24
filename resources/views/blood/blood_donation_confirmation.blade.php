
<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
</head>
<body>
    <h1>Thank You for Your Submission</h1>
    <p><strong>Blood Group:</strong> {{ $validatedData['blood_group'] }}</p>
    <p><strong>Number of Units:</strong> {{ $validatedData['num_units'] }}</p>
    <p><strong>Diseases (if any):</strong> {{ $validatedData['diseases'] ?? 'None' }}</p>
</body>
</html>
