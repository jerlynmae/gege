<?php

$xml = simplexml_load_file("../XML/myxml.xml");

if ($xml === false) {
    echo "Failed to load XML file.";
    exit;
}
echo "<html><head><title>Student Information</title></head><body>";
echo "<h1>List of Students</h1>";
echo "<table border='1'>";
echo "<tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Section</th></tr>";

foreach ($xml->student as $student) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($student->First_Name) . "</td>";
    echo "<td>" . htmlspecialchars($student->Middle_Name) . "</td>";
    echo "<td>" . htmlspecialchars($student->Last_Name) . "</td>";

    $section = trim((string)$student->Section);
    $section = str_replace('-', ' ', $section); 
    $section = strtoupper($section); 

    echo "<td>" . htmlspecialchars($section) . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</body></html>";
?>
