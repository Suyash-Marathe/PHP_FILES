<?PHP

$marks = 88;

switch ($marks) {

    case $marks > 90:
        echo "Grade A";
        break;

    case $marks > 50:
        echo "Grade B";
        break;

    case $marks > 30:
        echo "Grade C";
        break;

    case $marks < 30:
        echo "Grade D";
        break;

    case $marks > 100;
        echo "Limit is 100";
        break;

    default :
    echo "Invalid Input";
    break;
}
