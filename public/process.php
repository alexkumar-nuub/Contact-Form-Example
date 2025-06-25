<?php
session_start();
require __DIR__ . '/../src/FormProcessor.php';

$processor = new FormProcessor();

try {
    // Process form data
    $processor->process($_POST);
    
    // Store in database (simulated)
    $processor->saveToDatabase();
    
    // Set success message and redirect to meme page
    $_SESSION['success'] = "Thank you for contacting us! Enjoy this meme!";
    header('Location: meme.php');
    exit();
} catch (Exception $e) {
    $_SESSION['error'] = $e->getMessage();
    header('Location: form.php');
    exit();
}