<?php
class FormProcessor {
    private $data = [];
    
    public function process(array $input): void {
        // Validate and sanitize
        $this->data['name'] = $this->sanitize($input['name'] ?? '');
        $this->data['email'] = $this->validateEmail($input['email'] ?? '');
        $this->data['phone'] = $this->validatePhone($input['phone'] ?? '');
        $this->data['message'] = $this->sanitize($input['message'] ?? '');
        
        // Basic validation
        if (empty($this->data['name'])) {
            throw new Exception('Name is required');
        }
    }
    
    public function saveToDatabase(): bool {
        // In a real application, this would connect to MySQL
        // For this demo, we'll simulate database storage
        $dataString = json_encode($this->data);
        file_put_contents(__DIR__ . '/../storage/contacts.log', $dataString . PHP_EOL, FILE_APPEND);
        
        return true;
    }
    
    private function sanitize(string $value): string {
        return htmlspecialchars(strip_tags(trim($value)));
    }
    
    private function validateEmail(string $email): string {
        $email = $this->sanitize($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email address');
        }
        return $email;
    }
    
    private function validatePhone(string $phone): string {
        $phone = $this->sanitize($phone);
        if (!preg_match('/^\+?[0-9]{10,15}$/', $phone)) {
            throw new Exception('Invalid phone number format');
        }
        return $phone;
    }
}