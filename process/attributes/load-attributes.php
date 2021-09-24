<?php
      // Optionen aus der Datenbank laden
      $query = $conn->query("SELECT * FROM shop_attributevalue WHERE attribute_id = $attribute_id ") or die ($conn->error);
      $queryCount = $query->num_rows; // count the output amount

      if($queryCount > 0){
                
      //fetch results set as object and output HTML
      while($obj = $query->fetch_object()){
             echo <<<EOT
                <option value='{$obj->attributevalue_id}'>{$obj->attribute_value}</option>
EOT;
           }}
?> 