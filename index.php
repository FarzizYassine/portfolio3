 <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $to = "yassinefarziz2@example.com"; // replace with your own email address
          $from = $_POST["mail"];
          $name = $_POST["nom"];
          $message = $_POST["message"];
      
          $subject = "New message from $name";
          $body = "From: $name\nEmail: $from\nMessage:\n$message";
      
          $headers = "From: $from\r\n";
          $headers .= "Reply-To: $from\r\n";
      
          if (mail($to, $subject, $body, $headers)) {
              echo "<p>Your message has been sent successfully. Thank you for contacting us!</p>";
          } else {
              echo "<p>There was an error sending your message. Please try again later.</p>";
          }
      }
      ?>