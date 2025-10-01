<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field label {
            font-weight: bold;
            color: #555;
        }
        .field p {
            margin: 5px 0 0 0;
            padding: 10px;
            background-color: white;
            border-left: 3px solid #007bff;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New Contact Form Submission</h2>
    </div>
    <div class="content">
        <div class="field">
            <label>Name:</label>
            <p>{{ $name }}</p>
        </div>
        <div class="field">
            <label>Phone:</label>
            <p>{{ $phone }}</p>
        </div>
        <div class="field">
            <label>Email:</label>
            <p>{{ $email }}</p>
        </div>
        @if(isset($message) && $message)
        <div class="field">
            <label>Message:</label>
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>
</body>
</html>