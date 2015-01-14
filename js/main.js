

var xhr = new XMLHttpRequest();

xmlhttp.onreadystatechange = function()
{
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      console.log("worked");
    }
}


xmlhttp.open("POST","index.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("fname=Henry&lname=Ford");
