<!DOCTYPE html>
<html>
<head>
    <title>Student management system</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/new_student.css">
</head>
<body>
    <div class="container-fluid" id="heading">
        <h2>BTE Engineering College</h2>
        <ul>
            <li><a href="#">Add a student</a></li>
            <li>|</li>
            <li><a href="<?php echo base_url(); ?>/index.php/students">List of all students</a></li>
        </ul>
    </div>
    <div class="container-fluid" id="content">
        <h4>Add a new student record</h4>
        <br />
        <form id="newStudent" method="post" action="<?php echo base_url();?>index.php/students/newStudent">
            <div class="form-group">
                <label for="studentName">Full Name</label>
                <input name="full_name" type="text" class="form-control" id="studentName" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="studentAddress">Residence Address</label>
                <textarea name="address" class="form-control" id="studentAddress" rows="4"></textarea>
            </div>
            <fieldset class="form-group">
                <label>Gender</label>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="Male" id="optionsRadios1" value="option1" checked>
                    Male
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="Female" id="optionsRadios2" value="option2">
                    Female
                </label>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="passingYear">Expected year of graduation</label>
                <select name="passing_year" class="form-control" id="passingYear">
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                </select>
            </div>
            <label>Extra curricular interests</label>
                <br />
            <div class="form-check">
                <label class="form-check-label">
                <input name="hobby[]" value="Sports" type="checkbox" class="form-check-input">
                Sports
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input name="hobby[]" value="Programming" type="checkbox" class="form-check-input">
                Programming
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input name="hobby[]" value="Arts" type="checkbox" class="form-check-input">
                Arts
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input name="hobby[]" value="Music" type="checkbox" class="form-check-input">
                Music
                </label>
            </div>
            <br />
            <input type="submit" class="btn btn-default" style="margin-right: 10px;" value="Add">
            <a style="text-decoration: underline" href=<?php echo base_url()."index.php/students"?>>Cancel</a>
        </form>
    </div>  
</body>
</html> 