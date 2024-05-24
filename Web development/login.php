<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
    <style>
            *{
    padding:0;
    margin: 0;
}
html,body{
    width: 100%;
    height:100%;
    backdrop-filter:inherit;
    backface-visibility: 50%;
    
}
hr{
    opacity: 30%;
    background: black;
    width: 50%;
    margin: auto;
}
.log{
    height: 100%;
}

.navbar{
    display: flex;
    height: 55px;
}
.l-nav{
    width:70%;
    /* background-color: red; */
    position: relative;
    display: flex;
}
#img-logo{
    justify-content: center;
    align-items: center;
    margin: auto 6vh;
    width: 4.2vh;
    height:4.2vh;
    background-color: salmon ;
    border:2px solid salmon;
    border-radius: 50%;
}
.navbar ul{
    top:15px;
    display: flex;
    left: -20px;
    position: relative;
}
.navbar ul li{
    margin-left: 70px;
    list-style: none;
    justify-content: center;
    font-size: 20px;
    font-weight: 600;
    color: rgb(47, 15, 105);
}
.navbar li a{
    text-decoration: none;
}

.r-nav{
    gap: 3vh;
    color: rgb(47, 15, 105);
}
#search{
    color: rgb(47, 15, 105);
    margin-left:15px;
    width: 30svh;
    height: 2.5vh;
    padding: 0.4vh;
    border:2px solid rgb(47, 15, 105); 
}
#submit{
    width: 12vh;
    height: 3.8vh;
    border: 1px solid gray;
    border-radius:10px;
    font-size: 15px;
    color: rgb(47, 15, 105);
    background-color: #fff;
    background-color: rgb(105, 113, 134);
    font-weight: 600;
}
#submit:hover{
    background-color: rgb(140, 148, 170);
    border: 1px solid rgb(104, 109, 124);
}
.login{
    justify-content: center;
    align-items: center;
    width: 90vh;
    height: 40vh;
    border-radius: 10px;
    background-color: rgb(98 148 181 / 78%);
    margin: 160px auto;
    position: relative;
    align-items: center;
    padding-top: 50px;
    box-shadow: 20px 15px 38px 3px rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(2px);
}
header{
    font-size: 25px;
    font-weight: 600;
    text-align: center;
    text-decoration: underline;
    pointer-events: none;
}
input{
    width:50%;
    height:5%;
    border-radius: 10px;
    text-align: left;
    margin-top: 15px;
    margin-left: 50px;
    background: transparent;
    font-size: 15px;
    padding: 0.8vh;
}
#toggle-pass{
    position: absolute;
    margin-left: 0vh;
    padding: 0.8vh;
    width: 2.5vh;
    height: 2.5vh;
    top: 24vh;
    font-size: 15px;
    right: 14.8vh;
    background-color: transparent;
}
#text-tog{
    position: absolute;
    right: 1.2vh;
    top: 26vh;
}

#pass{
    margin-left: 20px;

}
label{
    margin-left: 50px;
    font-weight: 600;
    font-size: 20px;
}
.btn{
    margin-top: 20px;
    margin-left: 40%;
    width: 22%;
    height: 9%;
    border: 1px solid rgb(105, 113, 134);
    border-radius: 5px;
    text-align: center;
    background-color: rgb(105, 113, 134);
    font-weight: 600;
    color:rgb(26, 24, 24);
}
.btn:hover{
    background-color: rgb(140, 148, 170);
    border: 1px solid rgb(104, 109, 124);
}

p {
    text-align: center;
}

#a{
    position: relative;
    margin: auto;
    left: 37.5vh;
    text-align: center;
    font-size: smaller;
    top:2vh;
}

.footer{
    height: 15vh;
    background-color: gray;
}
.list{
    display: flex;
    justify-content: center;
    margin-top: 1vh;
}
.list li{
    margin: 0 2.5vh;
    list-style: none;
}
.list li a{
    text-decoration: none;
}

.litUp{
    position: absolute;
    top: auto;
    top:50vh;
}
.alag{
    width: 20vh;
    height: 10vh;
    background-color: salmon;
    border: 2px solid black;
}
    </style>
</head>




<body background="img/sunrise.jpg">
    <nav class="navbar">

        <div class="l-nav">
            <img id="img-logo"  alt="loading">
            <ul>
                <li><a href="#"></a>Home</li>
                <li><a href="#"></a>About</li>
                <li><a href="#"></a>Contact Us</li>
                <li><a href="#"></a>Comment</li>
            </ul>
        </div>
        <div class="r-nav">
            <input id="search" placeholder="Enter your Need" type="text">
            <button id="submit" type="submit">Search</button>
        </div>
    </nav>


    <form action="./login.php"  method="get"  class="log">
        <div class="login">
        <header>Log In</header>
        <?php
             $servername="localhost";
             $username= "root";
             $password= "";
             $dbname="bhandaran";
             $conn =new mysqli($servername, $username, $password, $dbname);
             if (!$conn) {
                 die("<p>Connection Lost!</p>" . mysqli_connect_error());
             }
             else{
                $email=isset($_GET['email']) ? $_GET['email']:"";
                $password=isset($_GET['password']) ? $_GET['password']:"";
                $email = mysqli_real_escape_string($conn,$email);
                $password = mysqli_real_escape_string($conn,$password);
                $sql = "SELECT * FROM `datas` WHERE  email='$email' AND  password='$password';";
                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) { 
                            echo"<p>Succesful</p>";
                    } 
                   }
                   else{
                   echo "<p>Not Succesful!</p>";
            }
        }
            mysqli_close($conn);
        ?>

        <label>Email<span id="email-star">*</span>:        </label>
        <input type="email">
        <br>
        <div>
            <label>Password<span id="pass-star">*</span>:     </label>
            <input id="pass" type="password"><br>
            <input type="checkbox" id="toggle-pass" class="litUp"><span class="litUp" id="text-tog">show password</span>
        </div>
        <br>
        <button class="btn">SUBMIT</button>
        <br>
        <span id="a"><a href="index.php">Don't Have Account</a></span>
    </div>
   
</form>
<footer class="footer">
    <p>©  CopyRight</p>
    <hr>
    <ul class="list">
        <li><a href="">Facebook</a></li>
        <li><a href="">Twitter</a></li>
        <li><a href="">Youtube</a></li>
        <li><a href="">Linked In</a></li>
        <li><a href="">Github</a></li>
    </ul>
    <p>Every content within the page is conserverd by the copyright claim. So it is not needed to have trouble about the rights of any copy right system. <br> 
    This page is all about the learning purpuse. But i may cover and put more functions on it in future days. It maybe so usefull for the students to learn new and upgrade them 
    as the developer of the computer softwares. There is nothing hard to code if your show the consistency in your daily routen.
    </p>
</footer>

    
</script>
</body>
</html>