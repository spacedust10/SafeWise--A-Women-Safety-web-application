<?php
    if(isset($_POST['submit'])){
        $phone = '91'.$_POST['phone-number'];
        $message = $_POST['message'];
    }
    // Account details
    $apiKey = urlencode('NjEzMTczNTU1MTZkNmM2MzM1MzE0NzQ1Mzc0MjQ0NTc=');
    // Message details
    $numbers = array($phone);
    $sender = urlencode('TXTLCL');
    $message = rawurlencode($message);
    
    $numbers = implode(',', $numbers);
    
    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    // Send the POST request with cURL
    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    // Process your response here
    echo $response;
    
?>

<!DOCTYPE html>
<html class="gr__html5webtemplates_co_uk">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeWise</title>
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <link rel="icon" href="./images/favicon.png" sizes="16x16">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Montserrat , sans-serif;
        }
        .container{
            width: 100%;
            height: 100vh;
            background: linear-gradient(#fff, #ccdad1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form{
            background: #2e4052;
            display: flex;
            flex-direction: column;
            padding: 2vw 4vw;
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
        }
        form h3{
            color: #fff;
            font-weight: 700;
            margin-bottom: 20px;
        }
        form input, form textarea{
            border: 0;
            margin: 10px 0;
            padding: 20px;
            outline: none;
            font-size: 16px;
            background: #d3d0cb;
        }
        form button{
            width: 150px;
            flex-basis: 40%;
            margin: 15px auto 0;
            padding: 15px;
            background: #d3d0cb;
            color: #000;
            border-radius: 30px;
            border: 0;
            outline: none;
            font-size: 18px;
            cursor: pointer;
            transition: background 1s;
        }
        form button:hover{
            background: #fff;
        }
    </style>
</head>
<body data-gr-c-s-loaded="true" class="vsc-initialized">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <header class ="header">
        <a href="main.html" class="logo">SafeWise</a>
        <nav class="navbar">
            <ul class="navbar-list">
                <li><a href="main.html" class="navbar-link">Home</a></li>
                <li><a href="navigation.html" class="navbar-link">Navigation</a></li>
                <li><a href="guardians.html" class="navbar-link">Guardians</a></li>
                <li><a href="contact_us.html" class="btn navbar-btn">Contact Us</a></li>
            </ul>
        </nav>
        <div class="mobile-navbar-btn">
            <ion-icon name="menu" class="mobile-navbar-icon"></ion-icon>
            <ion-icon name="close" class="mobile-navbar-icon"></ion-icon>
        </div>
    </header>
    <div>
        <form  id="myForm" method="POST">
            <h3>JOIN US</h3>
            <input name="Phone_Number" type="phone" id="phone-number" placeholder="phone number" required>
            <textarea name="Message" id="message" rows="4"  placeholder="your message"></textarea>
            <button type="button" id="submit-button" onclick="submitForm()">send</button>
        </form>
    </div>
    <script>
        // insert your script here
        $(document).ready(function() {
            $("#submit-button").click(function(event) {
                event.preventDefault(); 
                if ($("#myForm input").filter(function() {
                    return !this.value;
                }).length) {
                    alert("Please fill in all the fields.");
                } else {
                    alert("Form submitted successfully!");
                }
            });
        });
    </script>
</body>
</html>

<!-- code for alarm working 
do not edit this  -->
<!-- <script>
    function play() {
        var audio = document.getElementById("audio");
        audio.play();
    }
    function pause() {
        var audio = document.getElementById("audio");
        audio.pause();
    }
</script>
<audio id="audio" src="images/siren.mp3"></audio>
<div id="site_content">
    <div class="zoomimage">
        <img src="images/sos.jpeg" onclick="play()" width="auto" height="auto" padding="10px"
            style="margin:20px 20px 20px 20px; max-width:47%; max-height: 47%;">
        <img src="images/stop.png" onclick="pause()" width="auto" height="auto" padding="10px"
            style="margin:20px 20px 20px 20px">
    </div> -->