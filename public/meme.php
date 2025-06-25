<?php
session_start();
if (empty($_SESSION['success'])) {
    header('Location: form.php');
    exit();
}

$success = $_SESSION['success'];
unset($_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for Contacting Us! - e-Cabinet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        
        .meme-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 750px;
            width: 100%;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .meme-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }
        
        .meme-header {
            background: linear-gradient(to right, #343a40, #2c3e50);
            color: white;
            padding: 25px 20px;
        }
        
        .meme-header h1 {
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 10px;
        }
        
        .meme-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 0;
        }
        
        .meme-content {
            padding: 30px 20px;
        }
        
        .meme-image {
            padding: 15px;
            margin: 0 auto 25px;
            max-width: 680px;
        }
        
        .meme-image img {
            border: 5px solid #212529;
            border-radius: 10px;
            max-width: 100%;
            height: auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .meme-image img:hover {
            transform: scale(1.02);
        }
        
        .meme-caption {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin: 0 auto 25px;
            max-width: 600px;
            font-style: italic;
            border-left: 4px solid #2575fc;
        }
        
        .meme-footer {
            padding: 20px;
            background: #f8f9fa;
            border-top: 1px solid #eee;
        }
        
        .btn-primary {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            padding: 10px 25px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            margin: 5px;
        }
        
        .btn-primary:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline-secondary {
            transition: all 0.3s ease;
        }
        
        .btn-outline-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .developer-note {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        @media (max-width: 768px) {
            .meme-header h1 {
                font-size: 1.8rem;
            }
            
            .meme-header p {
                font-size: 1rem;
            }
            
            .btn {
                width: 100%;
                margin-bottom: 10px;
            }
            
            .d-md-flex {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="meme-container">
        <div class="meme-header">
            <h1>Thanks for Contacting Us Version 2!</h1>
            <p class="lead"><?= htmlspecialchars($success) ?></p>
        </div>
        
        <div class="meme-content">
            <div class="meme-image">
                <!-- Replace with your actual meme image path -->
                <img src="assets/img/image.jpg" alt="Funny Programming Meme">
            </div>
            
            <div class="meme-caption">
                "I'm not lazy, I'm in energy-saving mode." - Anonymous Developer
            </div>
        </div>
        
        <div class="meme-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="form.php" class="btn btn-primary">
                    <i class="bi bi-arrow-repeat"></i> Submit Another Form
                </a>
                <a href="#" class="btn btn-outline-secondary">
                    <i class="bi bi-house-door"></i> Back to Home
                </a>
            </div>
            
            <div class="developer-note">
                <p>This is part of my PHP/Laravel learning journey. As an IIT-Ghy intern and NEHU graduate, 
                I'm rebuilding my skills from the ground up. This contact form demonstrates core PHP concepts 
                including form handling, validation, sessions, and separation of concerns.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>