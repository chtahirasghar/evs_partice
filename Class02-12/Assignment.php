<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Test Phn Number</title>
    </head>

    <body>
        <?php
        $Name = array(
            "first_name" => 'Tahir',
            "Cnic" => '35101-1234567-1',
            "father_name" => 'Asghar Ali',
            "Phone No" => '+923084080296',
            "Addres" => array(
                "Country" => 'Pakistan',
                "City" => 'Lahore',
                "Area" => 'Sabzazar',
            )
        );
        foreach ($Name as  $key =>  $value) {
            
            print_r($value);
            echo "<br>";

            }
            foreach ($Name['Addres'] as $value1)
                {
                print_r($value1);
                echo "<br>";
        }
        ?>
    </body>
</html>