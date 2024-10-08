<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #EBDFD7;
            margin: 0; /* Ensure no margin is added by the body */
            font-family: Arial, sans-serif; /* Ensure a consistent font */
        }

        .content {
            margin-left: 250px; /* Adjust this value to match the sidebar width */
            padding: 20px;
            background-color: #EBDFD7; /* Light background for the content area */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: black;
            border-bottom: 1px solid #D9CEC6 !important;
            margin-bottom: 20px;
        }

        .message-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            justify-content: center;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            background-color: #EBDFD7; /* Fixed background color */
        }

        .message-text {
            display: flex;
            align-items: center;
            font-size: 18px;
            color: #333;
        }

        .message-text i {
            font-size: 24px;
            margin-right: 10px;
            color: #f39c12;
        }

        .button-link {
            display: inline-block;
            padding: 10px 15px;
            background-color: #D9CEC6;
            color: black;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            transition: background-color 0.3s ease;
        }

        .button-link::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background-color: rgba(0, 0, 0, 0.1);
            z-index: -1;
            border-radius: 8px;
        }

        .button-link:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header>Informasi PKL</x-header>

        <div class="main-content">
            <div class="message-container">
                <div class="message-text">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Mohon maaf anda belum menginput tempat PKL</span>
                </div>
                <a href="formPKL" class="button-link">Input tempat PKL</a>
            </div>
        </div>
    </div>
</body>
</html>
