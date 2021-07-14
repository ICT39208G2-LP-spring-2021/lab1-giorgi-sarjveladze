


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'gtu123';

$connection = new mysqli($servername, $username, $password, $dbname);
//ვამოწმებთ კავშირს
if($connection->connect_error){ //if(!$connection){ }
    die("შეცდომა! ბაზასთან კავშირი არ არის".$connection->connect_error);
    mysqli_close($connection);

}else{
    echo "ბაზასთან კავშირი წარმატებით დამყარდა";
}
//

?>