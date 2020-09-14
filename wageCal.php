<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wage Calculator</title>
</head>
<body>
    <fieldset>
        <legend>Wage Calculator</legend>
        <form action='wageCalResults.php' method='POST'>
            <table>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td><label>Hourly Rate</label></td>
                    <td><input type="number" name="hrlyRate"></td>
                </tr>

                <tr>
                    <td><label>Hours per Day</label></td>
                    <td><input type="number" name="hrPerDay"></td>
                </tr>

                <tr>
                    <td><label>Days Worked</label></td>
                    <td><input type="number" name="daysWrk"></td>
                </tr>

                <tr>
                    <td><label>Daily Travel Expense</label></td>
                    <td><input type="number" name="travelExp"></td>
                </tr>

                <tr>
                    <td><label>Daily Lunch Expense</label></td>
                    <td><input type="number" name="lunchExp"></td>
                </tr>

                <tr>
                    <td><input type='submit' name='btnSubmit' value="Calculate"/></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>