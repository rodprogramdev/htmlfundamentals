<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {

            background-color: white;
            font-family: 'Chewy', cursive;
            font-size: 16px;
            height: 100vh;
            background-color: #f1eadf;

        }

        form {
            width: 25%;
            border: 3px solid white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 28vh;
            box-shadow: 0 0 10px black;
            border-radius: 5px;


        }

        /*

        form{
            border:3px solid white;
            box-shadow: 0 0 10px black;
            border-radius: 5px;
            height: 28vh;
            position: absolute;
            width: 25%;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            
            
        }*/

        .form__container {
            background-color: rgb(16, 84, 211);

            padding: 3px;
            margin: 2px;
            height: 26.5vh;
            border-radius: 5px;
            color: white;
            text-align: center;

        }



        #input-email {
            border-radius: 5px;
            margin: 20px 5px 5px 5px;
            padding-left: 5px;
            margin-bottom: 10px;
            height: 30px;
            width: 70%;
            display: inline-block;
        }

        #input-password {
            border-radius: 5px;
            margin: 20px 5px 5px 5px;
            padding-left: 5px;
            margin-bottom: 10px;
            height: 30px;
            width: 70%;
            display: inline-block;
        }
        #input-password:invalid:required {
  background-image: linear-gradient(to right, pink, lightgreen);
}

        .btn__signIn {
            border-radius: 5%;
            padding: 5px;
            margin: 10px;
            width: 40%;
            color: white;
            background-color: rgb(16, 84, 211);
            cursor: pointer;
        }

        .btn__signin--close:link,
        .btn__signin--close:visited {
            color: white;
            position: absolute;
            top: -1px;
            left: 93%;
            font-size: 1.5rem;
            text-decoration: none;
            display: inline-block;
            transition: all .2s;
        }

        /*
        What are Pseudo-classes?

A pseudo-class is used to define a special state of an element.

For example, it can be used to:

    Style an element when a user mouses over it
    Style visited and unvisited links differently
    Style an element when it gets focus

        The :link CSS pseudo-class represents an element that has not yet been visited. 
        It matches every 
        unvisited <a>, <area>, or <link> element that has an href attribute.
       /* Selects any <a> that has not been visited yet 
a:link {
  color: red;
}

L - unvisited link
V - visited link
H - mouse over link
A - selected link
        */

        .btn__signin--close:hover {
            color: red;
        }
    </style>
</head>

<body>
    <form action="welcome.php" method="POST">
        <div class="form__container">
            <a href="index.html" class="btn__signin--close">&times;</a>
            
            <input id="input-email" type="email" name="email" placeholder="Enter Email or Username"><br>
            <input id="input-password" type="password" minlength="8" name="input-password" placeholder="Enter Password" required ><br>

            <!--<input class="input-email" type="email" name="email" placeholder="Enter Email or Username"><br>
            <input class="input-password" type="password" id="input-pass" minlength="8" name="password" placeholder="Enter Password" required><br>
            id="pass" name="password"
           minlength="8" required
        https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/password
        https://developer.mozilla.org/en-US/docs/Learn/Forms/Form_validation
        
        -->
            <button class="btn__signIn" type="submit">SUBMIT</button>
        </div>

    </form>

</body>

</html>