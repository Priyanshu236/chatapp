<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="wrapper" style="padding: 20px;">
        <section class="form signup">
            <header>Real Time chat app</header>
            <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="Your first name"  required>
                    </div>
                    <div class="field input">
                        <label for="">Last name</label>
                        <input type="text" name="lname" placeholder="Your Last name" required>
                    </div>
                </div>
                
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="Your email" required>
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="text" name="password" id="u" class="pass-toggle" placeholder="Enter Your password" required>
                        
                        <i class="fa fa-eye" onclick="Hidepassword()"></i>
                    </div>
                    <div class="field ">
                        <label for="" >Your Image</label>
                        <input type="file"  name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
        </section>
        <div class="link">Already signed up?<a href="login.php">Login Now</a></div>
    </div>
</body>
<script src="javascript/pass-show.js"></script> 
<script src="javascript/signup.js"></script> 
</html>