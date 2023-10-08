
<!DOCTYPE html>
<html>
<head>
    <!-- Your HTML head content here -->
</head>
<body>
    <div>
        <h2>Sensor Data</h2>
        <ul>
            <li>Temperature: {{ $temperature ?? 'N/A' }}</li>
            <li>Humidity: {{ $humidity ?? 'N/A' }}</li>
            <li>pH: {{ $ph ?? 'N/A' }}</li>
            <li>Purity: {{ $purity ?? 'N/A' }}</li>
        </ul>
    </div>
    <!-- Other content of your view -->
</body>
</html>
