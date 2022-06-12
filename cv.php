<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cv.css">
</head>
<body>
    <table id="table1">
        <tr >
            <td>
                <p id="name"><?php echo $_GET['name']; ?></p><br>
                <p id="address"><?php echo $_GET['address']; ?></p>
                <p id="email">Email: <?php echo $_GET['email']; ?></p>
                <p id="phone">Phone Number:<?php echo $_GET['phone']; ?></p><br>
            </td>
            <td>
                <p id="img"><?php// echo $_GET['img']; ?></p><br>
                <img id="img" src="Asaduzzaman.jpg" alt="">
            </td>
        </tr>
    </table>

 
    <p id="abc">Career Objective: </p><p id="description"><?php echo $_GET['career_objective']; ?></p><br>
    <p id="abc">Present Status: </p><p id="description"><?php echo $_GET['present_status']; ?></p><br>
    <p id="abc">Education </p> <br>
        <table id="table">
            <tr>
                <th>Exam</th>
                <th>Board/University</th>
                <th>Year</th>
                <th>Name of Institution</th>
                <th>Marks</th>
            </tr>
            <tr id="education2">
                <td><p id="exam"><?php echo $_GET['exam']; ?></p><br></td>
                <td><p id="university"><?php echo $_GET['university']; ?></p><br></td>
                <td><p id="year"><?php echo $_GET['year']; ?></p><br></td>
                <td><p id="institution"><?php echo $_GET['institution']; ?></p><br></td>
                <td><p id="marks"><?php echo $_GET['marks']; ?></p><br></td>
            </tr>
            <tr id="education2">
                <td><p id="exam"><?php echo $_GET['exam']; ?></p><br></td>
                <td><p id="university"><?php echo $_GET['university']; ?></p><br></td>
                <td><p id="year"><?php echo $_GET['year']; ?></p><br></td>
                <td><p id="institution"><?php echo $_GET['institution']; ?></p><br></td>
                <td><p id="marks"><?php echo $_GET['marks']; ?></p><br></td>
            </tr>
            <tr id="education">
                <td><p id="exam"><?php echo $_GET['exam']; ?></p><br></td>
                <td><p id="university"><?php echo $_GET['university']; ?></p><br></td>
                <td><p id="year"><?php echo $_GET['year']; ?></p><br></td>
                <td><p id="institution"><?php echo $_GET['institution']; ?></p><br></td>
                <td><p id="marks"><?php echo $_GET['marks']; ?></p><br></td>
            </tr>
            <tr id="education">
                <td><p id="exam"><?php echo $_GET['exam']; ?></p><br></td>
                <td><p id="university"><?php echo $_GET['university']; ?></p><br></td>
                <td><p id="year"><?php echo $_GET['year']; ?></p><br></td>
                <td><p id="institution"><?php echo $_GET['institution']; ?></p><br></td>
                <td><p id="marks"><?php echo $_GET['marks']; ?></p><br></td>
            </tr>
        </table><br>
    <p id="abc">Computer Skills</p> <br>
        <p id="computer_skills">
        Programming Languages: <?php echo $_GET['languages']; ?><br>
        Web based skills: <?php echo $_GET['skills']; ?><br>
        Database skills: <?php echo $_GET['database']; ?><br>
        Scripting skills: <?php echo $_GET['scripting_skills']; ?><br>
        Development Tools: <?php echo $_GET['development_tools']; ?><br>
        Others: <?php echo $_GET['others']; ?></p><br>

    <p id="abc">Professional Experience:</p> <p id="description"> <?php echo $_GET['professional_experience']; ?></p><br>
    <p id="abc">Projects: </p> <p id="description"> <?php echo $_GET['project']; ?></p><br>
    <p id="abc">Academic Project:</p> <p id="description"> <?php echo $_GET['academic_project']; ?></p><br>
    <p id="abc">Achievements: </p> <p id="description"> <?php echo $_GET['achievements']; ?></p><br>
    <p id="abc">Language:</p> <p id="description"> <?php echo $_GET['language']; ?></p><br>
    
    <p id="abc">Presonam Information</p>

        <p id="computer_skills">
        Name: <?php echo $_GET['name']; ?><br>
        Father's Name: <?php echo $_GET['father']; ?><br>
        Mother's Name: <?php echo $_GET['mother']; ?><br>
        Date of Birth: <?php echo $_GET['date_of_birth']; ?><br>
        Gender: <?php echo $_GET['gender']; ?><br>
        Marital Status: <?php echo $_GET['Marital_status']; ?><br>
        Nationality: <?php echo $_GET['nationality']; ?><br>
        Religion: <?php echo $_GET['religion']; ?><br>
        Blood Group: <?php echo $_GET['blood_group']; ?><br>
        Present Address: <?php echo $_GET['address']; ?><br>
        Permanent Address: <?php echo $_GET['permanent_address']; ?><br>
   
    <p id="abc">Hobbies:</p> <p id="description"> <?php echo $_GET['hobbies']; ?></p><br>
    <p id="abc">Games:</p> <p id="description"> <?php echo $_GET['games']; ?></p><br>

    <p id="abc">References:</p><br>
        <p><b>Name: <?php echo $_GET['references_name']; ?><br></b>
        Address: <?php echo $_GET['references_address']; ?><br>
        Email: <?php echo $_GET['references_email']; ?><br>
        Phone: <?php echo $_GET['references_phone']; ?><br></p>
        
        <p><b>Name: <?php echo $_GET['references_name']; ?><br></b>
        Address: <?php echo $_GET['references_address']; ?><br>
        Email: <?php echo $_GET['references_email']; ?><br>
        Phone: <?php echo $_GET['references_phone']; ?><br></p>
</body>
</html>
