 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 
 </body>
 </html>
 <?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "products";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from product";
    
    if($conn){
        $result = $conn->query($sql);
        foreach ($result as $value) {
            echo "<br>" . $value["username"];
        }

    }else{
            echo "nothig";

    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 