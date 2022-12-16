<?php
 // Ensure post variable exists
if (isset($_POST['submit'])) {
    
 if (isset($_POST['email'])) {
    // Validate email address
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //exit('Please provide a valid email address!');
        echo 
    "
    <script>
    alert('Please provide a valid email address!');
    document.location.href = '/';
    </script>
    ";
    }
    // Check if email exists in the database
    $stmt = $conn->prepare('SELECT * FROM subscribers WHERE email = ?');
    $stmt->execute([ $_POST['email'] ]);
    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        //exit('You\'re already a subscriber!');
        echo 
    "
    <script>
    alert('You\'re already a subscriber!');
    document.location.href = 'start-class';
    </script>
    ";
    }
    // Insert email address into the database
    $stmt = $conn->prepare("INSERT INTO subscribers VALUES(NULL, :em, NOW(), NOW() )");
    $stmt->bindParam(":em", $_POST['email']);
    $stmt->execute();

    // Output success response
    echo 
    "
    <script>
    alert('Thank you for subscribing!');
    document.location.href = 'start-class';
    </script>
    ";
} else {
    // No post data specified
    echo 
    "
    <script>
    alert('Please provide a valid email address!');
    document.location.href = 'start-class';
    </script>
    ";
}
}
?>