<!DOCTYPE html>
<form action="strona.php" method="POST">
   <input type="text" name="imie" placeholder="Imie">
   <br><input type="text" name="dzial" placeholder="Dzial">
   <br><input type="text" name="zarobki" placeholder="Zarobki">
   <br><input type="date" name="data_">
   <input type="submit" value="Dodaj">
   </form>

   <?php
                require_once("connect.php");
                $result=$conn->query("Select * from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
                            echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        </div>
    </div>
</body>
</html>


