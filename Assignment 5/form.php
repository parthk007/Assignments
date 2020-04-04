<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <h1 class="smallheading">Fill details to enroll into</h1><br>
    <h1 class="largeheading">NATIONAL WORKSHOP ON WEB TECHNOLOGY</h1>
    <fieldset>
    	<legend>Enter Details</legend>
    	<form action="insert.php" method="post">
    		Type: <select name="myType">
    			<option>Student</option>
    			<option>Faculty</option>
    			<option>Professional</option>
    			<option>Company Representative</option>
    		</select><br><br>

    		<div id="sectionStudent">
    			First Name: <input type="text" name="myFirstName" class="text" maxlength="30"> &emsp;&emsp;
    			Last Name: <input type="text"  name="myLastName" maxlength="30" class="text"><br><br>
    			Mobile Number: <input type="phone" name="myPhone" maxlength="10" class="text"><br><br>
    			Email: <input type="email" name="myEmail" class="text"><br><br>
    			College Name: <input type="text" name="myCollegeName" placeholder="For Students and Faculties" maxlength="50" class="text">
    			<br><br>
    			Branch: <input type="text" name="myBranch" placeholder="For Students Only" class="text"> &emsp;&emsp;
    			Current Semester: <input type="Number" placeholder="For Students" class="text" name="mySem" style="width: 10%;"
    			 min="1" max="8"><br><br>
    			Company Name: <input type="text" name="myCompanyName" class="text" placeholder="For Professionals and Company Representatives"><br><br>
    			City (Residential): <input type="text" name="myCity" class="text">  &emsp;&emsp;
    			State: <input type="text" name="myState" class="text"><br><br>
    			Country: <input type="text" name="myCountry" class="text"><br><br>
                <input type="submit" name="SubmitButton" id="submitbutton">
    		</div>
            
    	</form>
    </fieldset>
</body>
</html>