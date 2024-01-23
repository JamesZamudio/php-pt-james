<?php


    $Name = $_POST["txtName"];
    $Phone = $_POST["txtPhone"];
    $Gender = $_POST["rdoGender"];
    $Address = $_POST["txtAdd"];
    $Education = $_POST["ed"];
    $City = $_POST["sCity"];


    echo "<table border='1'>";
    echo "<tr>th   colspan='2'>";
    echo "<tr><td>Name  :</td><td>$Name</td></tr>";

    echo "<tr><td>Phone  :</td><td>$Phone</td></tr>";
    echo "<tr><td>Gender  :</td><td>$Gender</td></tr>";
    echo "<tr><td>Address  :</td><td>$Address</td></tr>";
    echo "<tr><td>City :</td><td>$City</td></tr>";
    echo "<tr><td>Educational Qualification  :  </td><td>";
         foreach ($Education as $Edu=>$value)
         {
                     echo $value."<br  />";
         }
            echo "</td></tr>";

    echo "</table";
    ?>