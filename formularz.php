<!DOCTYPE html>
<form action="strona.php" method="POST">
     <input type="text" name="imie" placeholder="imie"></br>
     <input type="text" name="nazwisko" placeholder="nazwisko"></br>
     <input type="submit" value="wyslij do strona.php">
  </form>
  
  <?php
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>


