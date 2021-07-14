<?php

$conn = new mysqli('localhost', 'root', '', 'gtu123');

if (!$conn) {
    die("შეცდომა! ბაზასთან კავშირი არ არის" . $conn->connect_error);
}

$sql = 'SELECT FirstName, LastName, PersonalNumber FROM students';
$value = mysqli_query($conn, $sql);

if (!$value) {
    echo "მონაცემები ვერ მოიძებნა";
}
//სახელი გვარი/ნომერი.
echo "<table style='width: 50%; margin: auto;padding: 0px'>";
while ($row = mysqli_fetch_assoc($value)) {
    echo "First name : {$row['FirstName']} <br> ";
    echo "Last name : {$row['LastName']} <br> ";
    echo "Personal Number : {$row['PersonalNumber']} <br> ";
    echo "<hr>";
}
echo "</table>";
//

?>