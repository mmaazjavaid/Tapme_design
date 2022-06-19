<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Tapme</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        .container{
            display: flex;
            justify-content: center;
            width: 100%;
            
        }
        .profile--container{
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 400px;
            /* height: 100vh; */
            background-image: url("background.jpg");
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #cccccc;
        }
        .brand--logo{
            display: flex;
            justify-content: center;
            margin: 20px;
            width: 100%;

        }
        .brand--logo img{
            width: 110px;
        }
        .photo--section{
            display: flex;
            flex-direction: column;
            position: relative;
            width: 100%;
            height: 200px;
        }
        .cover--photo {
            display: flex;
            width: 100%;
            height: 100%;

        }
        .cover--photo img{
            width: 100%;
            height: 100%;

        }
        .profile--photo{
            position: absolute;
            bottom: -55px;
            left: 34%;
        }
        .profile--photo img{
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 1px solid white;
        }
        .data--section{
            display: flex;
            width: 100%;
            flex-direction: column;
            align-items: center;
            color: #010101;
            margin-top: 65px;
        }
        .data--section div{
            margin-bottom: 15px;
        }
        .links-area{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-top: 10px;
        }
        .seperation--area{
            display: flex;
            margin-top: 25px;
            margin-bottom: 25px;
            width: 85%;
            border-top: 2px solid white ;
        }
        .links--container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
        }
        .links--container .social_link{
            display: flex;
            flex-direction: column;
            width: 31%;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
        }
        .social_link img{
            width: 70px;
            margin-bottom: 20px;
        }
        .tag--button{
            display: flex;
            width: 100%;
            margin-top: 25px;
            justify-content: center;
        }
        .tag--button button{
            width: 65%;
            height: 40px;
            background-color: #000000;
            color: white;
            border-radius: 20px;
            margin-bottom: 25px;
            font-size: 16px;
            border: 1px solid white;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="profile--container">
            <div class="brand--logo">
                <img src="Tapme/tapme.png" alt="logo">
            </div>
            <div class="photo--section">
                <div class="cover--photo">
                    <img src="Tapme/cover.jpg" alt="cover">
                </div>
                <div class="profile--photo">
                    <img src="Tapme/profile.jpeg" alt="profile">
                </div>
            </div>
            <div class="data--section">
                <div class="name"><p style="font-size:22px ; font-weight: 500;">abdullahshk</p></div>
                <div class="email"><p style="font-size:16px ; font-weight: 400;">@abdullah</p></div>
                <div class="job"><p style="font-size:16px ; font-weight: 400;">Ios Engineer</p></div>
                
            </div>
            <div class="links-area">
                <div class="links--heading"><p style="font-size:24px ; font-weight: 400;">My Links</p></div>
                <div class="seperation--area"></div>
                <div class="links--container">
                    <div class="social_link">
                        <img src="Tapme/instagram.png" alt="" srcset="">
                        <p style="font-size:16px ; font-weight: 400;">Instagram</p>
                     </div>
                     <div class="social_link">
                        <img src="Tapme/tiktok.png" alt="" srcset="">
                        <p style="font-size:16px ; font-weight: 400;">Tiktok</p>
                     </div>
                     <div class="social_link">
                        <img src="Tapme/line.png" alt="" srcset="">
                        <p style="font-size:16px ; font-weight: 400;">Line</p>
                     </div>
                     <div class="social_link">
                        <img src="Tapme/linkedin.png" alt="" srcset="">
                        <p style="font-size:16px ; font-weight: 400;">linkedIn</p>
                     </div>
                     <div class="social_link">
                        <img src="Tapme/twitter.png" alt="" srcset="">
                        <p style="font-size:16px ; font-weight: 400;">Twitter</p>
                     </div>
                     <div class="social_link">
                        <img src="Tapme/snapchat.png" alt="" srcset="">
                        <p style="font-size:16px ; font-weight: 400;">Snapchat</p>
                     </div>
                     
                </div>

            </div>
            <div class="tag--button">
                <button>Get your own Tapme tag</button>
            </div>
            
        </div>
    </div>



</body>
</html>