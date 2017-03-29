<!DOCTYPE html>
<html>
<head>
    <title>Student management system</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
</head>
<body>
    <div class="container-fluid" id="heading">
        <h2>BTE Engineering College</h2>
        <ul>
            <li><a href="<?php echo base_url();?>index.php/students/addStudent">Add a student</a></li>
            <li>|</li>
            <li><a href="#">List of all students</a></li>
        </ul>
    </div>
    <div class="container-fluid" id="content">
        <h4>List of all students</h4>
        <ol>
            <?php foreach ($student as $key) { ?>
            <li><?php echo $key->full_name; ?>
                <ul>
                    <li><a href="#" onClick="confirmAction('edit', <?php echo $key->student_id;?>)">Edit</a></li>
                    <li>|</li>
                    <li><a href="#" onClick="confirmAction('delete', <?php echo $key->student_id;?>)">Delete </a></li>
                </ul>
            </li>
            <?php }?>
        </ol>
        <a href="<?php echo base_url();?>index.php/students/addStudent" class="btn btn-default">Add Student</a>
    </div>
    <script>
        function confirmAction(action, student_id) {
            if (action === "edit") {
                var response = confirm("Edit this record?");
            }
            else {
                var response = confirm("Delete this record?");
            }
            if (response) {
                window.location="<?php echo base_url();?>index.php/students/"+action+"/"+student_id;
            }
        }
    </script>
</body>
</html>
            
