<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>    
    <!-- PHP included head elements -->
    <?php include_once("includes/head.php"); ?>
</head>

<body>
    <!-- PHP included navigation -->
    <?php include_once("includes/navigation.php"); ?>

    <header class="registerBanner">
        <div>
            <h1>Event Registration</h1>
        </div>
    </header>

    <main>
        <section>
            <div class="wrapper">
                <h1>Ready to Join? Sign Up Below!</h1>

                <div class="formIcon"></div>

                <form id="registerForm">
                    <div class="left">
                        <label for="fullName">* First and Last Name:</label>
                        <input type="text" id="fullName" name="fullName" required>
                    </div>

                    <div class="right">
                        <label for="age">* Age:</label>
                        <input type="number" id="age" name="age" min="4" max="99" required>
                    </div>
                    <div style="clear:both;"></div>

                    <label for="role">* Role:</label>
                    <select id="role" name="role" required>
						<option disabled selected hidden value="">--Select Role--</option>
						<option>Athlete</option>
						<option>Volunteer</option>
                    </select>
                    
                    <div class="left">                        
                        <label for="email">* E-mail Address:</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="right">
                        <label for="phone">* Phone Number:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div style="clear:both;"></div>

                    <div class="left">
                        <label for="eName">Emergency Contact Name:</label>
                        <input type="test" id="eName" name="eName">
                    </div>

                    <div class="right">
                        <label for="ePhone">Emergency Contact Phone Number:</label>
                        <input type="tel" id="ePhone" name="ePhone">
                    </div>
                    <div style="clear:both;"></div>

                    <div class="left">
                        <label for="gender">* Gender Identification:</label>
                        <select id="gender" name="gender" required>
                            <option disabled selected hidden value="">--Select Gender--</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Non-binary/Other</option>
                        </select>
                    </div>
                        
                    <div class="right">
                        <label for="shirt">* T-shirt Size (unisex):</label>
                        <select id="shirt" name="shirt" required>
                            <option disabled selected hidden value="">--Select Size--</option>
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>XL</option>
                            <option>2XL</option>
                            <option>3XL</option>
                        </select>
                    </div>
                    <div style="clear:both;"></div>
                        
                    <label for="satEvent">* Saturday Events Registering For:</label>
					<select id="satEvent" name="satEvent" required>
						<option disabled selected hidden value="">--Select Event--</option>
						<option>Long Course - $240</option>
						<option>Olympic - $110</option>
						<option>10K - $50</option>
						<option>Half Marathon - $75</option>
						<option>Sprint - $90</option>
						<option>Try-a-Tri - $65</option>
                    </select>
                    
                    <label for="sunEvent">* Sunday Events Registering For:</label>
					<select id="sunEvent" name="sunEvent" required>
						<option disabled selected hidden value="">--Select Event--</option>
						<option>Long Course - $240</option>
						<option>Olympic - $110</option>
						<option>10K - $50</option>
						<option>Half Marathon - $75</option>
						<option>Sprint - $90</option>
						<option>Try-a-Tri - $65</option>
					</select>
					
					<label for="specialComments">Any Special Accommodations Needed?:</label>
					<textarea id="specialComments" name="specialComments"></textarea>
					
					<input type="submit" id="submit" value="Register">					
				</form>
            </div>
        </section>

        <section>
            <div class="wrapper">
                <h2 class="redHead">Cost Includes</h2>

                <ul class="ulMain">
                    <li>Food & Beer</li>
                    <li>Access to the weekend's live entertainment & Fitness Expo</li>
                    <li>Commemorative Finisher medal</li>
                    <li>Accurate Chip Timing for competitive races</li>
                    <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                    <li>Post-event party & entertainment</li>
                </ul>

                <span class="center"><p><strong>NOTE: Tech shirts guaranteed to pre-registered participants only.</strong></p></span>
            </div>
        </section>
    </main>

    <!-- PHP included footer -->
    <?php include_once("includes/footer.php"); ?>    
</body>
</html>