<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//libera o acesso por http request de outros domínios
//    header('Access-Control-Allow-Origin: *');

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])){
		$name = $_POST['name'];
        $email = $_POST['email'];
        (int)$age = $_POST['age'];

        $sql = "INSERT INTO users (name, email, age)
        VALUES ('$name', '$email', '$age')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Data successfully registered!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
	}
	else{
		echo "Undefined paramns";
	}
/*
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id_user"]. " - Name: " . $row["name"]. " - Email: " . $row["email"] ." - Age: ".$row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

$conn->close();
?>
