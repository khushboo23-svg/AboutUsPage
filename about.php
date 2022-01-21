<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="aboutstyle.css">
    <title>About</title> 
    
</head>

<body>
    <!-- Navigation Bar  -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                        <li><a href="index-final.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="Login-form.html">Login/Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Description about us -->
    <div class="passage me-lg-5 ms-lg-5 p-2 pt-3">
        <div class="container pt-xl-3 pe-xl-5 ps-xl-5">
            <div class="row">
                <h1 class="text-center mb-3">About Us</h1>
                <hr>
                <div class="col-md-12 pt-xl-5 pe-xl-5 ps-xl-5">
                    <p class="text-center">The approach of this web app "GREEN TRASH" is to automate and extend the rate of recycling procedure with tech-support and to establish a connection among the people and organizations dealing in waste-to-product conversion. The residents will be able to know about various recycling techniques and waste collection points near their locality where they can sell and buy recyclable materials. In turn they can make some money with the waste they are going to sell. This app includes a domain of users where they can get themselves registered. Choose whether they want to buy or sell the waste. Select its type and know about the various organizations or collection points concerned with that type of waste. The waste type and its reusability is finally analyzed and the selling or purchase gets confirmed if the waste is worth selling and vice versa. Further with help of transportation the waste is reached to its destination and then converted to reusable material.</p>
                </div>
            </div>
        </div>


        
        <!-- form -->
        <div class="container">
            <div class="row">
            <div class="col-md-6 forms">
                <form class="p-3" action="aboutInsert.php" method="POST">
                    <h3 class="text-center">Contact</h3>
                    <hr class="mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 m-2">                           
                            <input class="inp w-100 p-3" type="text" placeholder="First name" name="first_name"/>
                        </div>
                        <div class="col-md-10 m-2">                           
                            <input class="inp w-100 p-3" type="text" placeholder="Last name" name="last_name"/>
                        </div>
                        <div class="col-md-10 m-2">                           
                            <input class="inp w-100 p-3" type="email" placeholder="Email id" name="email_id"/>
                        </div>
                        <div class="col-md-10 m-2">                                                    
                            <textarea name="message" id="" cols="30" rows="5" class="inp w-100 p-3" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-10 m-2 text-center">
                            <button class="btn btn-success w-50" name="submit" type="submit">Send</button>
                        </div>                      
                    </div>                  
                </form>               
            </div>
            <div class="col-md-6 text-center">
                <img src="images/aboutImage.png" alt="" srcset="" class="aboutImg">
            </div>                
            </div>
        </div>
    </div>
    



    <!-- Footer -->
    <div id="footer" class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="font-size: 15px;">@copyright greentrash.com</div>
                <div class="col-md-6">
                    <ul id="icons" class="float-md-end">
                        <li><a href="" class="fab fa-facebook-square"></a></li>
                        <li><a href="" class="fab fa-twitter-square"></a></li>
                        <li><a href="" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>