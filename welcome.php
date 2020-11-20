
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME ROD</title>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Chewy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
         body {
           
            font-family: 'Chewy', cursive;
            font-size: 20px;
            
          
        }

        .header{
            
           background-color: rgb(16, 84, 211);
           background-color:#f1eadf;
            height: 90vh;
            color:white;
            text-align:center;
            position:relative;
        }

        .header__nav{
            
            background-color:rgb(0,0,0,.8);
            background-color: rgb(16, 84, 211,.9);
            height: 10vh;
            position: fixed;
            width: 100%;
            z-index:2;
        }

/*
        .header__heading{
            background-image:url(images/10264.jpg);
            height: 64vh;
            width: 70%;
            background-size:cover;
            background-position: center;
            position: absolute;
            top:20%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index:0;

        }

        .header__heading--1{
            position:absolute;
            top:10%;
            left: 50%;
            transform: translate(-50%,-50%);
            
        }
        */

        @media screen and (max-width: 600px) {
            .header__heading--1{
                top:40%;
                left: 40%;
                transform:translate(-50%);
                font-size: 2rem;

            }
        }


        .header__profile{
            position: absolute;
            top:25%;
            left: 50%;
            padding: 5px;
            transform: translate(-50%,-50%);
            background-color: black;
            height: 20%;
            width: 10%;
            border-radius: 50%;
            z-index:1;
            box-shadow: 0 0 10px white;
           
        }

        @media screen and (max-width: 600px) {
            .header__profile{
                height: 50%;
                width: 15%;
                top:30%;
                left: 60%;
            }

        }

        .header__img{
           /* position:absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);*/

            height: 100%;
            width: 100%;
            border-radius:50%;
           
           
        }

        /*LOG OUT SECTION */

        .log-out{
            position:absolute;
            top:25%;
            left:95%;
            font-size: 16px;
            color: white;
        }

        @media screen and (max-width: 600px) {
            .log-out{
                left: 83%;
            }
        }

        a{
            text-decoration: none;
            color: white;
        }
        
        a:hover{
            text-shadow: 0 2px 10px red;
        }

        /*WELCOME BOX */
        .welcome-inner{
            background-color: RGBA(33, 150, 243, .5);/* #2196F3; /*rgb(16, 84, 211,0.8);*/
            background-color: rgb(16, 84, 211,.9);
            padding:50px;
            border-radius: 15px;
            position: absolute;
            color:white;
            top:42%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align:center;
            text-shadow:0 0 10px black;
            box-shadow: 0 0 2px green;    
            box-shadow: 0 0 10px black;    

        }

        .flex{
            display:flex;
            justify-content:center;
            align-items:center;
            padding: 20px;
            background-color: white;
            position: absolute;
            color:black;
            width: 65%;
            height: 10%;
            top:75%;
            left: 50%;
            transform: translate(-50%,-50%);
            border-radius: 15px;
            box-shadow: 0 0 20px black;
        }

        .flex__items{
            margin: 50px;
            text-shadow: 0 0 1.5px #777;
        }

        .flex__items:hover{
            color:red;
            cursor:pointer;
        }


     

        @media screen and (max-width: 600px) {
           .flex{
               top:50%;
               width:60%;
               left: 60%;
            font-size: 1rem;
            padding: 10px;
           }
        }


    
      

        /*SEARCH BOX */

        .search-container{
            
            position:absolute;
            top:23%;
            left:2%;
            width: 20%;

        }

        @media screen and (max-width: 600px) {
            .search-container{
                top:15%;
                left:18%;
                transform: translate(-40%, -40%);
                width: 40%;
                }
        }

        .search__div--btn{
            position:absolute;
            top:10%;
            left:15%;
        }

        .search__input{
            height:29px;
            width: 75%;
            text-align:center;
            /*border-radius: 5%;*/
            border-top-left-radius:50px;
            border-top-right-radius:50px;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius:50px;
            box-shadow: 0 0 3px white;

        }

        
        @media screen and (max-width: 600px) {
            .search__input{
                height: 19px;
               
            }
        }

        .search__btn{
            float: right;
            padding: 2px 5px;
            margin-top: 0px;
            margin-right: 5px;
            background: transparent;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-shadow:-2px 0 5px white;
        }

        @media screen and (max-width: 600px) {
            .search__btn{
                font-size: 18px;
            }
        }

        .search__btn:hover{
            text-shadow: -2px 0px 5px red;
        }




        @media screen and (max-width: 600px) {}

        .icons{
            background-color: rgb(16, 84, 211,0.8);;
            width: 10vh;
            height: 100vh;
        }

        .section2{
            height: 100vh;
            background-color: rgb(49,51,53);
            position: relative;
        }


        .section2__intro{
            background-color:white;
            border-radius:25px;
            height: 95%;
            width: 350px;
            position: absolute;
            top:30px;
            left: 20%;
            text-align: center;
            
        }

        .section2__intro--hobbies{
            background-color:rgb(49,51,53);
            width: 80%;
            height: 9%;
            border-radius: 10px;
            margin:0 auto;
            color:white;
            transition: all .2s;
            

        }

        .section2__intro--hobbies:hover{
            background-color: red;
            cursor:pointer;
        }


        .section2__intro--pic{
            position: relative;
            background-color:rgb(49,51,53);
            top:5%;
            left:10%;
            height: 50%;
            width: 80%;
            border-top-right-radius:20px;
            border-top-left-radius:20px;
            border-bottom-right-radius:20px;
            border-bottom-left-radius:20px;
           
        }

        .section2__pic--1{
            position: absolute;
            top:5%;
            left:5%;
            margin: 0 auto;
            width: 90%;
            height:90%;
            border-top-right-radius:20px;
            border-top-left-radius:20px;
            border-bottom-right-radius:20px;
            border-bottom-left-radius:20px;
        }

        .section2__intro--p{
            position: absolute;
            top:75%;
            margin:10%;
            
        }



        .section2__timeline{
            background-color:white;
            border-radius:20px;
            height: 20%;
            width: 450px;
            position: absolute;
            top:30px;
            left: 48%;
        }

        .section2__story--pic{
            background-color:white;
           /* background-image:url(clark-tibbs-oqStl2L5oxI-unsplash.jpg);*/
            background-size:cover;
            background-position:center;
            border-radius:20px;
            height: 74%;
            width: 450px;
            position: absolute;
            top:25%;
            left: 48%;
        }

        .section2__pic1{
            height: 20%;
            width: 20%;
        }

        .section2__img{
            position: absolute;
            top:15%;
            height: 85%;
            width: 450px;
            border-bottom-right-radius:20px;
            border-bottom-left-radius:20px;
        }

        .section2__h2{
            text-align:center;
        }

        .section2__h2--1{
            padding: 10px 15px;
        }


        .section2__h2--2{
            text-align:center;
            margin-top:15px;
            }
    </style>
</head>
<body>


    
        <header>
       
            <div class="header">
                <div class="header__nav">
                    <div class="search-container">
                            <div class="search__div--btn">
                              <button class="search__btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        <form action="index.html">
                           
                            
                            <input class="search__input" type="text" placeholder="Search.." name="search">
                            
                        </form>
                    </div>
                    <div class="log-out">
                        <a href="index.html">Log out</a>
                    </div>

                </div>
                    <!--
                 <div class="header__heading">                
                     <h1 class="header__heading--1">WELCOME!!</h1>
                 </div>-->
               
                 
                <div class="header__profile">
                    <img class="header__img" src="Rod.jpg" alt="Rod profile">
                </div>
            </div>


          
           
        </header>
        <div class="welcome-inner" >
        
        <?php echo "Hello!!! Rodrigo Bonzerr S. Lopez";?>    
                <p>Your email address is <span style="color:orange;text-decoration:underline;"><?php echo $_POST["email"]; ?></span></p><br>
            <p>This is the start of a great adventure to start our story telling journey together!!!</p>
        </div>
        <div class="flex">
            <div class="flex__items">Original Stories</div>
            <div class="flex__items">About</div>
            <div class="flex__items">Friends</div>
            <div class="flex__items">Photos</div>
            

        </div>
        <section>
        <div class="section2">
            <div class="section2__intro">
                <h2 class="section2__h2 section2__h2--1"> <!--style="padding: 10px 15px;"-->Introduction</h2>
                <div class="section2__intro--hobbies">
                    <p style="text-align:center;padding-top:15px;">Add Hobbies</p>
                </div>

                <div class="section2__intro--pic">
                  <img class="section2__pic--1" src="images/rbsl-photographer.jpg" alt="">

                </div>

                <div class="section2__intro--p">
                <p><q>Capturing important moments through the lens of my camera</q> Rodrigo Lopez</p>
                </div>
                
            </div>
            <div class="section2__timeline">
                <h2 class="section2__h2 section2__h2--2"> <!--style="text-align:center;margin-top:15px;"-->Let's hear your story!</h2>
                <hr style="width: 90%; margin:20px">
            </div>

            <div class="section2__story--pic">

                <img class="section2__img" src="clark-tibbs-oqStl2L5oxI-unsplash.jpg" alt="DoingSomethingGreat">
            </div>
        </div>

        </section>
        
        
       
        <!--
<div class="icons">
       </div>
        -->
       
    
</body>
</html>

