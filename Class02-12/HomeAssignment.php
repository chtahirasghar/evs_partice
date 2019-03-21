<?php

$info = array(
    "Name" => "Tahir",
    "Father Name" => "Asghar ALi",
    "Class" => "BSSE",
    "Phone" => "03084080296",
    "Address" => array(
        "Country" => "Pakistan",
        "City" => "Lahore",
        "Area" => "Sabzazar"
    ),
    "Name 1" => "Ahmad",
    "Father Name 1" => "ABC",
    "Class 1" => "BSSE",
    "Phone 1" => "03311234567",
    "Address 1" => array(
        "Country 1" => "Pakistan",
        "City 1" => "Lahore",
        "Area 1" => "Iqbal Town"
    )
);
$html = "<table border='1'>";
$thRow = "<tr>";
$tdRow = "<tr>";
$Location = "";
$hcount=0;
foreach ($info as $heading => $value) {
    if (is_array($value)) {
        foreach ($value as $LocHeading => $name) {
            $Location .= "<span>$LocHeading</span><span>$name</span>";
        }
    } else {
        if($hcount<4){
        $thRow .= "<th>$heading</th>"; 
        $hcount++;
        }
        $tdRow .= "<td>$value</td>";
    }
    
}
$thRow .= "</tr>";
$tdRow .= "</tr>";

$html .= $thRow;
$html .= $tdRow;
$html .= "</table>";

echo $html;
?>

