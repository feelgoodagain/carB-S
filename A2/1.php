<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            background: #A9A9A9;
            line-height: 1.7;
        }

        a, body {
            color: #eee;
        }

        a {
            text-decoration: none;
        }

        .header .logo {
            line-height: 1;
            border: 3px solid #eee;
            padding: 5px 25px;
            font-size: 20px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 5px;
        }

        .side-bar {
            float: left;
            width: 30%;
            position: fixed;
        }

            .side-bar > * {
                padding: 10px 15px;
            }

            .side-bar .nav a,
            .side-bar .tag-list a {
                -webkit-transition: color 200ms;
                -o-transition: color 200ms;
                transition: color 200ms;
                display: block;
                padding: 10px;
                color: #777;
            }

                .side-bar .nav a:hover,
                .side-bar .tag-list a:hover {
                    color: #eee;
                }

            .side-bar .nav a {
                font-weight: 700;
            }

        .main, .cmain {
            float: right;
            width: 70%;
            color: #000;
        }

        .article_list, .article, .cmecp, .cme {
            margin-right: 30%;
            background: #fff;
            padding: 20px 30px;
            -webkit-box-shadow: 0 0 3px 2px rgba(0,0,0,0.2);
            box-shadow: 0 0 3px 2px rgba(0,0,0,0.2);
        }

            .article_list .item .title, .article .title {
                font-size: 22px;
                color: #000;
                font-weight: 700;
            }

            .article_list .item .status, .article .status {
                font-size: 13px;
                color: #bbb;
            }

            .article_list .item > *, .article .item > * {
                margin: 10px 0;
            }

            .article_list .item {
                margin-bottom: 25px;
            }

        .cme, .cmecp {
            background: #fff;
        }





        .cme {
            border-collapse: collapse;
            font-family: Futura, Arial, sans-serif;
        }

        .cmecp {
            font-size: larger;
            margin: 1em auto;
        }

        th, td {
            padding: .65em;
        }

        th {
            background: #777 nonerepeat scroll 0 0;
            color: #000;
        }

        td {
            border: 1px solid#777;
            th: first-child

        {
            border-radius: 9px 0 0 0;
        }

        th:last-child {
            border-radius: 0 9px 0 0;
        }

        tr:last-child td:first-child {
            border-radius: 0 0 0 9px;
        }

        tr:last-child td:last-child {
            border-radius: 0 0 9px 0;
    </style>
    <title>All for IT, IT for all.</title>

</head>
<body>

  
    <div class="side-bar">
        <div class="header">
            <a href="homepage.html" class="logo">ONE FOR ALL </a>
            <div class="intro">Now we are providing car B&S functionality, feel free to have a try.</div>
        </div>
        <div class="nav">
            <div class="item">about me</div>
            <div class="item">contact me</div>
            <div>Both not finished. :(</div>
        </div>
        <div class="tag-list">
            <div class="item"> </div>
            <div class="item"> </div>
        </div>
    </div>
    <div class="main">
        <div class="article_list">
            <div class="item">
                <div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                <div class="status">Pubished on: 2050-13-32 | Read by: 20,001 | tag: #html #car B&S #Whopper is the best</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident labore, praesentium nisi eligendi at sit maxime. Quam totam in accusantium repudiandae, ipsa atque enim voluptatum, libero aut inventore veritatis eligendi.
                    <br />
                    <br />
					Hi,dear seller, please fill the form based on your own situation, then click on the submit button.
<?php

		$name = "";
		$email = "";
		$phone = "";
		$price = "";
		$plate = "";
		$simple = "";
		$detail = "";
	
	if ($_SERVER["REQUEST_METHOD"]==="POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$price = $_POST["price"];
		$plate = $_POST["plate"];
		$simple = $_POST["simple"];
		$detail = $_POST["detail"];
	

	}
?>
					<form action="/A2/1.php" method = "POST">
					name:<br />
				   <input type="text" name="name" value = "<?php echo $name;?>">
					<br />
					email:<br />
				   <input type="text" name="email" value = "<?php echo $email;?>">
					<br />
				   phone:<br />
				   <input type="text" name="phone" value = "<?php echo $phone;?>">
					<br />  
					price:<br />
				   <input type="text" name="price" value = "<?php echo $price;?>">
					<br /> 
					plate:<br />
				   <input type="text" name="plate" value = "<?php echo $plate;?>">
					<br /> 
					simple info:<br />
				   <input type="text" name="simple" value = "<?php echo $simple;?>">
					<br /> 
					detail:<br />
				   <input type="textarea" name="detail" value = "<?php echo $detail;?>">
					<br /> 
				   <input  type="submit" value="Submit">
				</form>
<?php
if(!empty($email)){


	$name = trim($name);
	$email = trim($email);
	$phone = trim($phone);
	$price = trim($price);
	$plate = trim($plate);
	$simple = trim($simple);
	$detail = trim($detail);
}

function addc ($str){
$str = $str.' ,';
return $str;
}
if(preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/","$email")){
$myfile = fopen("./files/seller.txt","a");
$txt = addc($name).addc($email).addc($phone).addc($price).addc($plate).addc($simple).addc($detail)."\r\n";
fwrite($myfile,$txt);
fclose($myfile);
echo("Thank you for using our platform.");
}
else{
	if(!empty($email)){
	echo "Sorry, please check the information you input. ";}
}


?>
                </div> 
            </div>
           
        </div>
    </div>
   
</body>


</html>
