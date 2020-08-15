<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>    
    <!-- PHP included head elements -->
    <?php include_once("includes/head.php"); ?>
</head>

<body>
    <!-- PHP included navigation -->
    <?php include_once("includes/navigation.php"); ?>

    <header class="contactBanner">
        <div>
            <h1>Contact Us</h1>
        </div>
    </header>

    <main>
        <section>
            <div class="wrapper">
                <h1>Our Team is Ready to Help!</h1>
                
                <div class="contactIcon"></div>

                <form id="contactForm">                    
                    <label for="fullName">* First and Last Name:</label>
                    <input type="text" id="fullName" name="fullName" required>

                    <label for="email">* E-mail Address:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="role">* Role:</label>
                    <select id="role" name="role" required>
						<option disabled selected hidden value="">--Select Role--</option>
						<option>Athlete</option>
						<option>Volunteer</option>
						<option>Interested Party</option>
                    </select>

                    <label for="subject">* Subject:</label>
                    <input type="text" id="subject" name="subject" required>

                    <label for="contactMessage">* Question or Comment:</label>
					<textarea id="contactMessage" name="contactMessage" required></textarea>
					
					<input type="submit" id="submit" name="submit" value="Send">					
				</form>
            </div>
        </section>
    </main>

    <!-- PHP included footer -->
    <?php include_once("includes/footer.php"); ?>    
</body>
</html>