<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Fredoka+One&display=swap');

        :root {
            --bg-color: #0f0f1a;
            --text-color: #ffffff;
            --accent-color: #ff0055; /* Pink/Red */
            --secondary-color: #00e5ff; /* Cyan */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            text-align: center;
        }

        .container {
            padding: 2rem;
            max-width: 600px;
        }

        /* The Big 404 Animation */
        .glitch-wrapper {
            position: relative;
            display: inline-block;
        }

        .error-code {
            font-family: 'Fredoka One', cursive;
            font-size: 8rem;
            line-height: 1;
            color: var(--text-color);
            text-shadow: 3px 3px 0px var(--accent-color);
            animation: float 3s ease-in-out infinite;
        }

        .message {
            font-size: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }

        .sub-message {
            color: #aaa;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }

        /* Button Styling */
        .contact-options {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.2s, box-shadow 0.2s;
            color: white;
        }

        .btn-insta {
            background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
            box-shadow: 0 4px 15px rgba(220, 39, 67, 0.4);
        }

        .btn-telegram {
            background: #0088cc;
            box-shadow: 0 4px 15px rgba(0, 136, 204, 0.4);
        }

        .btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.2);
        }

        /* Background Floating Shapes */
        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            z-index: -1;
            animation: fly 10s infinite alternate;
        }

        .shape-1 { width: 300px; height: 300px; background: var(--accent-color); top: -50px; left: -50px; }
        .shape-2 { width: 200px; height: 200px; background: var(--secondary-color); bottom: -50px; right: -50px; animation-delay: -5s; }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        @keyframes fly {
            0% { transform: translate(0, 0); }
            100% { transform: translate(20px, 40px); }
        }

        /* Mobile Adjustments */
        @media (max-width: 480px) {
            .error-code { font-size: 5rem; }
            .message { font-size: 1.2rem; }
            .contact-options { flex-direction: column; }
            .btn { justify-content: center; }
        }
    </style>
</head>
<body>

    <!-- Background Shapes -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>

    <div class="container">
        <div class="glitch-wrapper">
            <div class="error-code">404</div>
        </div>
        
        <h1 class="message">Oops! This page wandered off.</h1>
        <p class="sub-message">We looked under the sofa, but we couldn't find it.<br>Maybe it went to get coffee.</p>

          
           <h1 class="message"> DEVELOPER CONTACT ðŸ˜— </h1>
           
        <div class="contact-options">
         
            <!-- Replace # with your Instagram URL -->
            <a href="https://instagram.com/selfmovingboy" target="_blank" class="btn btn-insta">
                <i class="fab fa-instagram"></i> DM on Insta
            </a>

            <!-- Replace # with your Telegram URL -->
            <a href="https://t.me/bhango" target="_blank" class="btn btn-telegram">
                <i class="fab fa-telegram-plane"></i> Ping on Telegram
            </a>
        </div>
    </div>

    <script>
        // Simple console Easter Egg
        console.log("%cDon't panic!", "color: red; font-size: 20px; font-weight: bold;");
        console.log("The developers are still looking for the missing page.");
    </script>
</body>
</html>
