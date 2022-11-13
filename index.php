<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        fuction getBetweendates(begin,end){
            var begin = document.getElementById('begin').value;
            var end = document.getElementById('end').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('result').innerHTML = this.responseText;
                }
            }
            xmlhttp.open('GET','getBetweendates.php?begin='+begin+'&end='+end,true);
            xmlhttp.send();
        }
        </script>
</head>


<body>
    <h1>Super Girl</h1>hello world

    simple note 
    <form action="" method="post">
        <input type="date" name="begin" id="begin">
        <input type="date" name="end" id="end">
        <input type="submit" name="submit" value="submit" onclick="getBetweendates()">
</body>
</html>