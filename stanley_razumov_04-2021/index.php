<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midwestern Interactive</title>
    <link rel="icon" href="https://midwesterninteractive.com/build/images/logo.png">
    <link rel="stylesheet" href="/styles.css" type>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    <script src="/puzzle_script.js" type="text/javascript" defer></script>
    <?php include 'validator.php';?> 
</head>
<header>
    <div class="mx-auto logo-container">
        <img src="/img/mwi-logo-horizontal.png" id="header_logo" class="img-fluid" alt="Midwestern Interactive Logo">
    </div>
    <hr id="logo_divider">
</header>
<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid headings">
        <div class="row">
            <h1 class="display-1 fluid">
                <u><strong>HEADING ONE</strong></u>  
            </h1>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="grey-block">
                    <!-- IRL this would be an image -->
                </div>
                <h2>Heading 2</h2>
                <p>
                    This is a paragraph text that is meant to flex and wrap to a new line based on the number 
                    of characters in this container. Please make sure this is looking pretty based on the amount 
                    of characters this is taking up.
                </p>
                <button class="btn btn-dark">Read More</button>
            </div>
            <div class="col-sm">
                <div class="grey-block">
                    <!-- IRL this would be an image -->
                </div>
                <h2>Heading 2</h2>
                <p>
                    This is a paragraph text that is meant to flex and wrap to a new line based on the number 
                    of characters in this container. Please make sure this is looking pretty based on the amount 
                    of characters this is taking up.
                </p>
                <button class="btn btn-dark">Read More</button>
            </div>
            <div class="col-sm">
                <div class="grey-block">
                    <!-- IRL this would be an image -->
                </div>
                <h2>Heading 2</h2>
                <p>
                    This is a paragraph text that is meant to flex and wrap to a new line based on the number 
                    of characters in this container. Please make sure this is looking pretty based on the amount 
                    of characters this is taking up.
                </p>
                <button class="btn btn-dark">Read More</button>
            </div>
        </div>
    </div>  
        <div class="flex-column contact-form-container">
            <div class="row flex-row"> 
                <div class="col-lg-5 col-centered">
                    <form method="post" class="form" action=''> 
                        <fieldset>
                            <legend><h2>CONTACT</h2></legend>
                            <label for="email" >Email</label>
                            <span class="error"><?php echo $emailErr;?> </span>
                            <br>
                            <input type="text" id="email" name="email" value="" maxlength="100">  
                            <br>
                            <label for="subject" >Subject</label>
                            <span class="error"><?php echo $subjectErr;?> </span>
                            <br>
                            <input type="text" name="subject" id="subject" value="" maxlength="200">
                            <span class="error"></span>
                            <br>
                            <label for="message">Message</label>
                            <span class="error"><?php echo $messageErr;?> </span>
                            <br>
                            <textarea name="message" id="message" rows="10" cols="30" maxlength="1000"></textarea>
                            <br>
                            <input class="btn btn-dark" type="submit" name="submit" value="Submit">
                            <span class="success"><?php echo $successMsg;?> </span>
                        </fieldset> 
                    </form>
                </div>
            </div>
        </div> 
        <br>  
        <div class="container-fluid ">
            <div class="row">
                <h1 class="display-1 fluid">
                    <u><strong>HEADING ONE</strong></u>  
                </h1>
            </div>
            <p>Remove the duplicates in 2 Javascript objects and output the list of 
                distinct names in an unordered list when this 
                <a href="#" id="trigger-link">link is clicked</a>, if the operation has been completed 
                already notify the user that this already been done.
            </p>
            <ul id="puzzle"></ul>
            <br>
        </div>
        
</body>
<footer class="mt-auto">
    <p>Thanks for taking the Midwestern Interactive Benchmark Test.</p>
</footer>

</html>