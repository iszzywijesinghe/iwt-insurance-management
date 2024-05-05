<!DOCTYPE html>
<html>

<head>
    <title>Request Claim</title>
    <link rel="stylesheet" href="../asserts/css/request-claim-style.css">

</head>

<body>
    <div class="heading">
        <h1>Request Claim</h1>
    </div>

    
    <form method="post" action="" class="form-container">
        <div class="form-group">
        Vehicle No.<input type="text" name="vehicle_no"  class="input-field"><br>
        <br>
        </div>
        <div class="form-group">
        <label for="Grades" name="accident_grade" >Accident Grade</label>
        <select id="Grades" name="Grades" class="input-field">
            <option value="Type of Grade">Grade A</option>
            <option value="Type of Grade">Grade B</option>
            <option value="Type of Grade">Grade C</option>
        </select>
        <br>
        </div>
        <br>
        <div class="form-group">
        Accident Date &
        Time<input type="date" name="date" class="input-field"><br>
        <br>
        <input type="time" name="time" class="input-field"><br>
        <br>
        </div>
        <div class="form-group">
        <label for="image" name="v_photos">Evidence(Insert Clear Photo)</label><br>
        <input type="file" id="image" name="image" accept="image/*" ><br><br>
        <input type="submit" value="Upload Image">
        <br><br>
        </div>
        <div class="form-group">
        Additional Details<br>
        <textarea rows="4" cols="25" name="additional_details" class="input-field"></textarea>
        <br><br>
        <input type="checkbox" value="yes">
        <label for="agree">I agreed to all terms and conditions.</label>
        <input type="Submit" value="Submit" class="submit-button" >
        </div>







    </form>





</body>

</html>