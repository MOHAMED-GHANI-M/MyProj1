<?php

if(isset($_POST["nm"])){
    $var2=$_POST["nm"];
}
else{
     $var2=array("GHANI","MOHAMED","THARIK","gt");
    }

$var ="<html>
<head><title>#Example</title></head>
<body>
    <form action='http://localhost/learn/index.php' method='POST'>
        <input type='text' name='name'><br>
        <h2>HERE IS SOME ANOTHER EXAMPLE</h2>
            <select name='nm[]' size='4' multiple>
            <option value='html'>HTML</option>
            <option value='javascript'>JAVASCRIPT</option>
            <option value='php'>PHP</option>
            <option value='mysql'>MY SQL</option>
            <option value='nodejs'>NODE Js</option>
            </select>
        <input type='submit' value='submit'>
    </form>
</body>
</html>";
foreach($var2 as $index){
    echo $index." ";
    echo "<br>";
}
echo $var;
?>