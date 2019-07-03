<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEV_ENV</title>
    <link rel="stylesheet" type="text/css" href="reset.css" media="all"/>
</head>
<body>
<style>

html{
    font-family: "Raleway",sans-serif;
}
h3{
    background-color: #3b3b3b;
    text-align: center;
    padding: 20px;
    color: white;
    font-size: 1.8em;
}
body{
    background: url('cloud2.jpg') center center;
    background-size: cover;
    background-attachment: fixed;

}

#main{
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    position: absolute;
    top: 42%;
    left: 50%;
}

#main .info{
    font-weight: bold;
    font-size: 1.5em;
    color: white;
    margin-bottom: 15px;
}

#main .ip{
    border: 1px solid black;
    background-color: #90e9f3;
    text-align: center;
    padding: 30px;
    font-size: 2.5em;
    color: #ef2727;
}
</style>
    <h3>Development Environment</h3>
    <div id="main">
        <p class="info">You are currently on the EC2 instance which has the following ip adress :</p>
        <p class="ip"><?php echo file_get_contents("https://ipinfo.io/ip"); ?></p>
    </div>
</body>
</html>
