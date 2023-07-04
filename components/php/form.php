<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <meta charset="UTF-8">
  <title>Contact Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <style>
  #success-message {
    color: green;
    margin-top: 10px;
  }

  .tick-icon::before {
    font-size: 20px;
    margin-right: 5px;
  }
</style>
</head>
<body>
  <header></header>
  <main>
  <form action="components/php/form.php" method="POST">
      <h3>Contactez-nous</h3>
      <div>
        <label for="name"></label>
        <input type="text" id="name" name="name" required placeholder="Nom Prénom">
      </div>
      <div>
        <label for="email"></label>
        <input type="email" id="email" name="email" required placeholder="Email">
      </div>
      <div>
        <label for="message"></label>
        <textarea id="message" name="message" rows="4" required placeholder="Votre  message"></textarea>
      </div>
      <button type="submit">Envoyer</button>
      <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate and sanitize the form data
    $name = sanitizeInput($name);
    $email = sanitizeInput($email);
    $message = sanitizeInput($message);

    // Check if any of the form fields are empty
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the required fields.";
    } else {
        // Database configuration
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "SingaYaFamille";

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check the number of messages sent by the same email address
        $stmt = $conn->prepare("SELECT COUNT(*) AS message_count FROM visiteurs WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $messageCount = $row['message_count'];

        if ($messageCount >= 3) {
            echo "Vous avez atteint la limite maximale de messages.";
        } else {
            // Prepare and bind the INSERT statement
            $stmt = $conn->prepare("INSERT INTO visiteurs (name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);

            // Execute the prepared statement
            if ($stmt->execute()) {
                // Data inserted successfully
                echo '<div id="success-message"><span class="tick-icon">&#10004; Votre message a été envoyé avec succès.</span></div>';
                echo '<script>
                        setTimeout(function() {
                        }, 2000); // Redirect after 2 seconds
                    </script>';
                exit;
            } else {
                // Error occurred while inserting data
                echo "Error: " . $stmt->error;
            }
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
}

// Function to sanitize input data
function sanitizeInput($data) {
    // Remove leading and trailing whitespace
    $data = trim($data);
    // Remove backslashes
    $data = stripslashes($data);
    // Convert special characters to HTML entities
    $data = htmlspecialchars($data);
    return $data;
}
?>

    </form>
  </main>
  </body>
</html>

