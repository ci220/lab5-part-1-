<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 61%;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php 
        // Define variables for personal details
        $name = "Muhammad Syafiq Bin Mohd Nazri";
        $matric_number = "CI220134";
        $course = "Bachelor of Computer Science (Information Security) with Honours";
        $year_of_study = "3";
        $address = "No 83 Jalan Raya, Taman Bunga Raya, 42811, Moscow";
    ?>

    <table>
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
