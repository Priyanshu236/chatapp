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
    <div class="wrapper">
        <section class="form login">
            <header>Real Time chat app</header>
            <form action="">
                
            <div class="error-text"></div>
                    <div class="field input">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="Your email">
                    </div>
                    <div class="field input">
                        <label for="" >Password</label>
                        <input type="text" name="password" id="u"  placeholder="Enter Your password">
                        <i class="fa fa-eye"  onclick="Hidepassword()"></i>
                    </div>
                    
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
        </section>
        <div class="link" style="margin-bottom: 10px;">Not Signed Up? <a href="index.php">Signup Now</a></div>
    </div>
    <script src="javascript/pass-show.js"></script> 
    <script src="javascript/login.js"></script> 
</body>
</html>