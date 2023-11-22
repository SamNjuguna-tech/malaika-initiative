<?php
// Validate CSRF token

session_start(); // Start or resume a session
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    // CSRF token is valid, process the form data
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = sanitizeInput($_POST['name']);
        $email = sanitizeInput($_POST['email']);
        $phone = sanitizeInput($_POST["phone"]);
        $message = sanitizeInput($_POST['message']);
        
        // Send the email
        $to = 'sam@malaikaipd.com'; 
        $subject = 'New Email from Contact Form';
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";
        if (mail($to, $subject, $body, $headers)) {
             

             echo "<script>
             alert('Email sent successfully!')
           </script>";
           header("Location: contact.php");

        } else {
            echo "<script>
             alert('Failed to send email.')
           </script>";

            
        }
    } else {
        echo "<script>
        alert('Missing required form data.')
      </script>";
       
    }
} else {
    echo "<script>
    alert('CSRF token validation failed.')
  </script>";
   
}

// Function to sanitize input data
function sanitizeInput($input)
{
    $sanitizedInput = htmlspecialchars($input, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return $sanitizedInput;
}
?>

<!-- Display the notification message -->
<?php if (isset($notification)): ?>
    <div class="<?php echo (strpos($notification, 'Failed') !== false) ? 'error' : 'success'; ?>">
        <?php echo $notification; ?>
    </div>
<?php endif; ?>
