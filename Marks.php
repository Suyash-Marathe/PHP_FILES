<?php

// Get marks of 4 subjects from the user
$subject1 = (float) readline("Enter marks of Subject 1: ");
$subject2 = (float) readline("Enter marks of Subject 2: ");
$subject3 = (float) readline("Enter marks of Subject 3: ");
$subject4 = (float) readline("Enter marks of Subject 4: ");

// Add up all the marks
$total_marks = $subject1 + $subject2 + $subject3 + $subject4;

// Convert the sum into a percentage (assuming maximum marks per subject is 100)
$percentage = ($total_marks / 400) * 100;

// Print the result
echo "Total Marks: $total_marks\n";
echo "Percentage: $percentage\n";

?>