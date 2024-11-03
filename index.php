<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mingley</title>
    <meta name="description" content="Welcome to Mingley">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center; /* Center text within the container */
            padding: 2rem;
            max-width: 600px;
        }

        .welcome-text {
            font-size: 4rem;
            color: #2d3436;
            margin-bottom: 1.5rem;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 2s steps(30, end);
            display: inline-block;
            margin-left: -10%; /* Adjust this value to move the text left */
        }

        .brand_name {
            background: linear-gradient(45deg, #6c5ce7, #a363d9, #e45a84, #f86d70);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: bold;
        }

        .tagline {
            font-size: 1.2rem;
            color: #636e72;
            margin-bottom: 2rem;
            animation: fadeIn 1s ease-in;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .buttons {
            animation: fadeIn 1s ease-in;
            animation-delay: 1s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 1.8rem;
            font-size: 1.1rem;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            margin: 0.5rem; /* Adds spacing between buttons */
        }

        .btn-primary {
            background: linear-gradient(45deg, #6c5ce7, #a363d9);
            color: white;
        }

        .btn-secondary {
            background: transparent;
            color: #2d3436;
            border: 2px solid #6c5ce7;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(108, 92, 231, 0.2);
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .text-container {
            text-align: center; /* Center align text */
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .welcome-text {
                font-size: 2.5rem;
                margin-left: -5%; /* Adjust for smaller screens */
            }
            
            .container {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-container">
            <h1 class="welcome-text">Welcome to <strong class="brand_name">Mingley</strong></h1>
        </div>
        
        <p class="tagline">Connect and share with people around the world</p>
        
        <div class="buttons">
            <a href="src/view/SignUp.php" class="btn btn-primary">Get Started</a>
            <a href="src/view/ContactPage.php" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>
</body>
</html>

