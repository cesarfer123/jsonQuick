<?php

$mystring=file_get_contents("data.json");
$obj=json_decode($mystring);
// echo "<pre>";
// print_r($obj);

foreach ($obj as $row) {
    # code...
    echo $row->first_name . " ";
    echo $row->last_name . "<br><br>";
}

$save=json_encode($obj);
file_put_contents("data2.json",$save);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<script>
    let string="";
    let ajax=new XMLHttpRequest();

    ajax.open("post","data.json",true);
    ajax.addEventListener("readystatechange",function(e){
        if(ajax.status==200 && ajax.readyState==4){
            string=ajax.responseText;
            let data=JSON.parse(string);
            for (let i = 0; i < data.length; i++) {
                document.body.innerHTML+= data[i].first_name + " " + data[i].last_name + "<br>"; 
                
            }
        }
    });
    ajax.send();

// let data= document.body.innerHTML=string;
</script>