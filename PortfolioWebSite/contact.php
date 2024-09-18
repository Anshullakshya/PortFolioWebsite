<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the fields are set and not empty
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = htmlspecialchars($_POST['name']); // Sanitize the input
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Handle the form (e.g., save to database, send an email, etc.)
            echo "Thank you, " . $name . ". Your message has been received!";
        } else {
            echo "Invalid email format.";
        }
    } else {
        echo "Invalid form submission! Please fill in all fields.";
    }
} else {
    echo "Form not submitted properly.";
}
?>
