<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- metadata -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="a newsletter's subscription page">
        <meta name="robots" content="noindex, nofollow">
        <title>Subscribe to the newsletter | Video Gamer</title>
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jersey+15&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- css -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <h1><span>Video</span> Gamer</h1>
                <nav>
                    <menu>
                        <li><a href="index.php" title="Homepage">Home</a></li>
                        <li><a href="index.php#subscriber_detail_info" title="Subscribe to the newsletter">Subscribe</a></li>
                        <li><a href="index.php#subscriber_detail_info" title="Subscribe to the newsletter">News</a></li>
                        <li><a href="index.php#subscriber_detail_info" title="Subscribe to the newsletter">Game Reviews</a></li>
                    </menu>
                </nav>
        </header>
        <main>
            <?php
                //creating class instances
                include_once('crud.php');
                include_once('validate.php');
                $crud = new crud();
                $validate = new validate();

                //intializing all form data using escape string
                $fName = $crud->escape_string($_POST['fName']);
                $lName = $crud->escape_string($_POST['lName']);
                $email = $crud->escape_string($_POST['email']);
                $address = $crud->escape_string($_POST['address']);
                $delivery = $crud->escape_string($_POST['deliveryMethod']);
                $reminder = $crud->escape_string($_POST['reminder']);
                
                //validation
                $msg = $validate->checkEmpty($_POST, array('fName', 'lName', 'email', 'address', 'deliveryMethod', 'reminder')); //checks that all data is not empty
                $checkName = $validate->validName($_POST, array('fName', 'lName')); //checks that the first and last name have only letters
                $checkEmail = $validate->validEmail($_POST['email']);  //checks that email is in proper format
                $checkAddress = $validate->validAddress($_POST['address']); //checks address doesn't have characters not featured in a address
                $checkReminder = $validate->validReminder($_POST['reminder']); //checks the reminder is a number + between 1-15
                if($msg != null) //feedback for empty form inputs (shouldn't appear due to html required but failsafe is here just incase)
                {
                    echo "<p>$msg</p>";
                    echo "<div>"; //divs are here for styling purposes on the history link without impacting global nav links
                    echo "<a href='javascript:self.history.back();'>Go Back </a>";
                    echo "</div>";
                }
                elseif(!$checkName) //feedback for invalid name
                {
                    echo "<p>Please provide a valid name (only letter characters and hyphens)</p>";
                    echo "<div>";
                    echo "<a href='javascript:self.history.back();'>Go Back </a>";
                    echo "</div>";
                }
                elseif(!$checkEmail) //invalid email
                {
                    echo "<p>Please provide a valid email</p>";
                    echo "<div>";
                    echo "<a href='javascript:self.history.back();'>Go Back </a>";
                    echo "</div>";
                    
                }
                elseif(!$checkAddress) //invalid address
                {
                    echo "<p>Please provide a valid address (only letters, numbers, spaces, hyphens, periods, apostrophes, and commas) </p>";
                    echo "<div>";
                    echo "<a href='javascript:self.history.back();'>Go Back </a>";
                    echo "</div>";
                }
                elseif(!$checkReminder) //invalid reminder value
                {
                    echo "<p>Please provide a valid reminder date (cannot be greater than 15 or negative)</p>";
                    echo "<div>";
                    echo "<a href='javascript:self.history.back();'>Go Back </a>";
                    echo "</div>";
                }
                else //if all checks are passed, add the entry to the database
                {
                    $result = $crud->execute("INSERT INTO subscribers(fName, lName, email, address, deliveryMethod, reminder) VALUES('$fName', '$lName', '$email', '$address', '$delivery', '$reminder')");
                    echo "<p>Record has been added</p>";
                }
            ?>
        </main>
    </body>
</html>

