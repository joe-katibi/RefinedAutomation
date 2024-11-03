<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Support Request Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f8fa;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #4CAF50;
            margin: 0;
        }
        .content p {
            margin: 10px 0;
        }
        .details ul {
            list-style-type: none;
            padding: 0;
        }
        .details li {
            margin: 5px 0;
        }
        .details strong {
            display: inline-block;
            width: 100px;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Support Request Received</h1>
        </div>
        <div class="content">
            <p>Dear {{ $name }},</p>
            <p>Thank you for reaching out to our support team. We have received your request and will get back to you shortly. Below are the details of your request:</p>
            <div class="details">
                <ul>
                    <li><strong>Name:</strong> {{ $name }}</li>
                    <li><strong>Email:</strong> {{ $email }}</li>
                    <li><strong>Phone:</strong> {{ $phone }}</li>
                    <li><strong>Project:</strong> {{ $project }}</li>
                    <li><strong>Subject:</strong> {{ $subject }}</li>
                    <li><strong>Description:</strong> {{ $description }}</li>
                </ul>
            </div>
            <p>If you have any additional information to provide, feel free to reply to this email.</p>
        </div>
        <div class="footer">
            <p>Best regards,</p>
            <p>{{ config('app.name') }} Support Team</p>
        </div>
    </div>
</body>
</html>
