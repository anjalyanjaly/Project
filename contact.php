<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <?php include 'includes/header.php'; ?>

    <div class="content">
        <h2>Contact Us</h2>
        <form action="contact_process.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <input type="submit" value="Send Message">
        </form>
    </div>

    <div class="footer">
        Copyright©24
    </div>
</body>
</html>

