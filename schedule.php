 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Schedule Staff</title>
 </head>
 <body>
    <form action="procsche.php" method="post">
        
        <td>
            <label>ID Number:</label><input type="text" name="IDNumber"><br><br>
        </td>
        <td>
            <label>Staff Name:</label><input type="text" name="StaffName">
        </td><br><br>
        <td>
            <label>Section</label><select name="section">
            <option selected>Section A</option>
            <option>Section B</option>
            <option>Section C</option>
            <option>Section D</option>
        </select><br><br>
        </td>
        <td><label>Date:</label>
            <input type="Date" name="date"><br><br>
        </td>
            <td>
                <label>Start Time:</label>
               <input type="timepicker" name="timestart"
       min="01:00" max="12:00" required><br><br>
            </td>
            <td>
                <label>End Time:</label>
                <input type="timepicker" name="timeend"
       min="01:00" max="12:00" required><br><br>
            </td>
            <td><input type="submit" value="SAVE" style="background-color: #FFF;"></td>
            <td><a href="userpanel.php">USER PANEL</a></td>
    </form>
 
 </body>
 </html>