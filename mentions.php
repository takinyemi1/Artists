<?php 

$song = $_POST["song"];
$artist = $_POST["artist"];

echo "This is Your Favorite Song and the Artist It's By";
echo "<br>";
echo "<br>";

// print each column to the screen
echo "What is Your Favorite Song >> " . $song;
echo "<br>";
echo "Who is the Artist >> " . $artist;
echo "<br>";

// use these varaibles to establish a connection with the database
$servername = "localhost";
$username = "akinyemi_artists";
$password = "5626.";
$dbname = "artists";

// create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check the connection
if ($conn ->connect_error) {
    die("Connection Failed: " . $conn ->connect_error);
}

$sql = "INSERT INTO artist_choice (song, artist)
        VALUES ('$song', '$artist')";

if ($conn ->query($sql) === TRUE) {
    echo "<br>";
    echo "Song Information Added Successfully.";
}
else {
    echo "Error: " . $sql . "<br>" . $conn ->error;
}

$conn ->close();

?>