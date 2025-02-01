<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- metadata -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="a newsletter's subscription page">
        <meta name="robots" content="noindex, nofollow">
        <title>Subscribe to the Newsletter | Video Gamer</title>
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
                    <!-- news and game reviews would be included on a seperate page so they do not have unique links -->
                    <li><a href="index.php#subscriber_detail_info" title="Subscribe to the newsletter">News</a></li> 
                    <li><a href="index.php#subscriber_detail_info" title="Subscribe to the newsletter">Game Reviews</a></li>
                </menu>
            </nav>
        </header>
        <section id="banner"> <!-- image background with pixel font to appeal to the audience and encourage them to scroll down to the newsletter subscription -->
            <div>
                <h2>Providing weekly newsletters to gamers!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum velit vitae lectus commodo, euismod egestas mi bibendum. Aliquam fermentum sem nisl, quis condimentum metus faucibus nec. Integer non viverra leo, sit amet auctor neque. Sed ultrices dui id placerat dignissim.  </p>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum velit vitae lectus commodo, euismod egestas mi bibendum. Aliquam fermentum sem nisl, quis condimentum metus faucibus nec. Integer non viverra leo, sit amet auctor neque. Sed ultrices dui id placerat dignissim.  </p>
            </div>
        </section>
        <section>
            <h2>Interested in our Newsletter?</h2>
            <h2>Subscribe below!</h2>
        </section>
        <main>
            <section>
                <form id="subscriber_detail_info" action="subscriberSubmit.php" method = "post">
                    <h3>Please enter the following information</h3>
                    <label for="fName">First Name</label>
                    <input id ="fName" type="text" name="fName" required placeholder="Your first name">

                    <label for="lName">Last Name</label>
                    <input id="lName" type="text" name="lName" required placeholder="Your last name">

                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" required/>

                    <label for="address">Address</label>
                    <input id="address" type="text" name="address" required/>

                    <label for="deliveryMethod">Delivery Method</label>
                    <select name ="deliveryMethod" id="deliveryMethod">
                        <option value="email">Email</option>
                        <option value="mail">Mail</option>
                    </select>
                    <label for="reminder">Subscription reminder (up to 15 days)</label>
                    <input id="reminder" type="number" name="reminder" required/>
                    <button type="reset">Clear</button>
                    <button type="submit">Submit</button>
                </form>
            </section>
        </main>
        <footer>
            <h5>© Video Gamer. All rights reserved.</h5>
        </footer>
    </body>
</html>
