<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
        }
        body{
            background-color: rgb(238, 238, 238);
        }

        #leftpane {
            margin-top:-20px;
            width: 100px;
            height: 200vh;
            float: left;
            background-color:slateblue;
        }

        #toppane {
            width: 93%;
            float: left;
            background-color:white;
            margin-top: -1240px;
             margin-left: 104px;
            color:black;
            font-weight:bold;
            font-size:20px;

        }

        #midpane {
            float: left;
            border: 1px solid salmon;
            width: 86%;
            margin-left: 120px;
            margin-top: 25px;
            border-radius: 8px;
            height: 670px;

        }

        #logo-img {
            width: 65px;
            height: 60px;
            border-radius:30%;

        }

        #logo {
            text-align: center;
            margin-top: 10px;
            border-radius:30%;
           

        }

        #optionsContainer {
            text-align: center;
            margin-top: 30px;

        }

        #optionsContainer div {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            justify-content: center;
            align-items: center;

        }

        a {
            text-decoration: none;
            color: black;
            font-weight:bold;

        }

        .allimg {
            width: 76px;
            height: 64px;
            border-radius:34%;
       
            padding:30px;
        }

       

        #toppane input {
            border: none;
            background-color: rgb(214, 198, 198);
            width:400px;
     
            
        }

        #toppane img {
            height: 20px;
            width: 20px;
            margin-left: 9px;

        }

        
        input:focus{
            outline: none;
        }
        #topleft{
            margin-left: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
            width:400px;
            float:left;
            background-color: rgb(214, 198, 198);
            height: 33px;
            border-radius: 5px ;
        }
        #topright{
            float:right;
            margin-right: 30px;
        }
        #topright img{
            border-radius: 50% ;
            height:40px;
            width:40px;
            box-shadow: 0px 6px 5px grey;
        }
        .class1{
            display:flex;
            align-items: center;
        }
        button{
            border: none;
            border-radius:20%;
            width:90px;
            height:40px;
            border:2px solid black;
            background-color:slateblue;
        }
        
        button:hover{
          cursor:pointer;
       }
       #topLeft{
        margin-left: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: rgb(227, 218, 218);
            width: 400px;
            height: 30px;
            border-radius: 5px;
            /* display: inline-block; */
            float: left;
       }
    </style>
</head>

<body>
<?php
        define('db_server', 'localhost');
        define('db_username', 'root');
        define('db_password', '');
        define('db_name', 'jobrecruitmentsystem');
        $conn = mysqli_connect(db_server, db_username, db_password, db_name);
        if($conn==false)
        {
            dir('error');
        }
        else{  
        }
        $db=mysqli_select_db($conn,db_name);
        if($db==false)
        {
            dir('error');
        }
        else{   
        }    
    ?>
    <br>
   
      </div>

      <div id="leftpane">
        <form action="" method="POST">
        <div id="logo">
            <img id="logo-img" src="quer.png" alt="error">
        </div>
        <div id="optionsContainer">
            <div id="total">
                <img class="allimg" src="sub.png" width="40px">
                <a href="submitted.php" target="_self">Submitted Queries</a>
            </div>
            <div id="answered">
                <img class="allimg" src="ans.png" width="40px">
                <a href="answered.php">Answered Queries</a>
            </div>
            <div id="unanswered">
                <img class="allimg" src="unans.png" width="40px">
                <a href="unanswered.php">Unanswered Queries</a>
            </div>
            <div>
                <button name="logout">LOG OUT</button>
            </div>
            </form>
        </div>
    </div>

    <div id="toppane">
    <div id="topLeft" class="class1">
                <h3 style="margin-left:100px">Zariya for your Rozgar</h3>
            </div>
        <?php 


?>
        <div id="topright" class="class1">
            <p>Hi <?php echo "Jameela" ?></p>
            <img src="serch.png" alt="#" width="30px">
        </div>
    </div>
    <br><br>
   

    

</body>

</html>

<?php 
if(isset($_POST['logout'])){
    header("Location:loginpg.php");
}
?>
