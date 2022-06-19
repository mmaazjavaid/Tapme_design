
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netlynxs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    *{
        margin: 0%;
        padding: 0%;
        font-family: 'Roboto', sans-serif;
    }
    .container{
        width: 100%;
        display: flex;
        justify-content: center;
        
    }
    .profile--container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 400px;
        height: max-content;
    }
    .header{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        background-color: #0093D1;
        height: 220px;
        clear: both;
    }
    .brand{
        display: flex;
        align-items: center;
        width: 100%;
        margin-top: 30px;
        justify-content: center;

    }
    .brand--logo img{
        width: 60px;
        height: 60px;
        margin-right: 10px;
    }
    .brand--title{
        font-size: 20px;
        font-weight: 400;
        color: white;
    }
    .card{
        display: flex;
        width: 85%;
        height: 200px;
        align-items: center;
        justify-content: center;
        background-color: black;
        border-radius: 25px;
        margin-top: 10px;
        
    }
    .front,.back{
        display: flex;
        position: absolute;
        
        width: 100%;
        height: 200px;
        align-items: center;
        justify-content: center;
        background-color: black;
        border-radius: 15px;
        /* margin-top: 10px; */
    }
    .back img{
        width: 100px;
        height: 100px;
    }
    .card--image{
        height: 100%;
        width: 35%;
    }
    .card--image img{
        width: 100%;
        height: 88%;
        margin: 10px;
        border-radius: 15px;
        border: solid 2px white;
    }
    .card--content{
        display: flex;
        flex-direction: column;
        
        color: white;
        width: 53%;
        margin-left: 23px;
    }
    .qr-code{
        display: flex;
        align-items: flex-end;
        justify-content: center;
        height: 95%;
        width: 15%;
    }
    .qr-code img{
        width: 45px;
        height: 45px;
        margin-right: 10px;
        margin-bottom: 5px;
        /* border-radius: 10px; */
        
    }


    /* flip the pane when hovered */

.profile--container.hover .card {
    transform: rotateX(180deg);
}

/* .flip-container,
.front,
.back {
    width: 250px;
    height: 250px;
} */


/* flip speed */

.card {
    transition: 0.8s;
    transform-style: preserve-3d;
    position: relative;
    top: 60px;
}


/* hide back of pane during swap */

.front,
.back {
    backface-visibility: hidden;
    /* position: absolute;
    top: 0;
    left: 0; */
}


/* front pane, placed above back */

.front {
    z-index: 2;
    transform: rotateY(0deg);
}


/* back, initially hidden pane */

.back {
    transform: rotateX(180deg);
    /* background-color: #fff; */
}



.button_contact{
    display: flex;
    width: 75%;
    margin-top: 120px;
    justify-content: flex-end;
    clear: both;
    
}
.button_contact button{
        width: 100px;
        height: 30px;
        background: rgb(19,122,166);
background: linear-gradient(0deg, rgba(19,122,166,1) 53%, rgba(124,237,255,1) 100%);
        color: white;
        border: none;
}
.social_links_conatiner{
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    align-items: center;
    width: 100%;
}
.social_links_conatiner .heading{
    display: flex;
    width: 84%;
    margin-bottom: 20px;
    
}
.social_links_conatiner .social_links{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 75%;
    align-content: space-between;
}
.social_links .social_link{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 15%;
    margin-bottom: 10px;

}
.social_link img{
    width: 90%;
}
.contact_information{
    display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
    margin-top: 10px;
}
.contact_information .heading{
    display: flex;
    width: 84%;
    margin-bottom: 20px;
}
.contact_information .contact_links{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 75%;
}
.contact_links .contact_link{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45%;
    margin-bottom: 15px;
}
.contact_link button{
    width: 100%;
    height: 30px;
        background: rgb(19,122,166);
background: linear-gradient(0deg, rgba(19,122,166,1) 53%, rgba(124,237,255,1) 100%);
        color: white;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
}
.contact_link button i{
    font-size: large;
    margin-right: 5px;
}
</style>

</head>
<body>

    <div class="container">
        <div class="profile--container">
            <div class="header">
                <div class="brand">
                    <div class="brand--logo"><img src="logo.png"></div>
                    <div class="brand--title">NETLYNXS</div>
                </div>
                <div class="card">
                    <div class="front">
                        <div class="card--image">
                            <img src="person1.jpg" alt="" srcset="">
                        </div>
                        <div class="card--content">
                            <div class="name">Muhammad Abdullah</div>
                            <div class="job" style="font-size: 13px;" >Software Engineer</div>
                            <div class="company" style="font-size: 13px;" >Avicenna</div>
                            
                        </div>
                        <div class="qr-code">
                            <img src="qr.png" alt="" srcset="">
                        </div>
                    </div>
                    
                    
                    <div class="back">
                        <img src="qr.png" alt="" srcset="">
                    </div>
                </div>
                
            </div>


            <div class="button_contact">
                <button>Add Contact</button>
            </div>

            <div class="social_links_conatiner">
                <div class="heading">
                    <h3>Social Media</h3>
                </div>
                <div class="social_links">
                     <div class="social_link">
                        <img src="instagram.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="tiktok.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="itunes (1).png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="twitch.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="twitter.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="snapchat.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="youtube.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="facebook.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="google_pay.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="contacts.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="linkedin.png" alt="" srcset="">
                     </div>
                     <div class="social_link">
                        <img src="paypal.png" alt="" srcset="">
                     </div>
                     
                </div>
            </div>
            <div class="contact_information">
                <div class="heading">
                   <h3>Contact Information</h3> 
                </div>
                <div class="contact_links">
                    <div class="contact_link">
                        <button><i class="fa fa-phone" aria-hidden="true"></i>Phone</button>
                    </div>
                    <div class="contact_link">
                        <button><i class="fa fa-laptop" aria-hidden="true"></i>Website</button>
                    </div>
                    <div class="contact_link">
                        <button><i class="fa fa-envelope-o" aria-hidden="true"></i>Email</button>
                    </div>
                    <div class="contact_link">
                        <button><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Message</button>
                    </div>
                </div>
            </div>


        </div>
       
    </div>


    


<script>
    // .flip-container .flipper
    
$('.card').click(function() {
	$(this).closest('.profile--container').toggleClass('hover');
    $(this).css('transform, rotateX(180deg)');
});
</script>
    
</body>
</html>


