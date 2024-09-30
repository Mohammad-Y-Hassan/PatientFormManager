<html> 
    <head>
        <title>
            BCS350 Assignment 2  - Mohammad Hassan
        </title>
    </head>
     
    <body>
        <h1>BCS350 Assignment 2 - Mohammad Hassan</h1>
        <form method='post' action='hw2_process.php' enctype='multipart/form-data'> 
        <h2>Create Patient Profile</h2>
        <p><b>Please fill out and answer all the questions with a *.</b></p>

        *First Name: <input type = "text" name = "fname">
        <br><br>
        *Last Name: <input type = "text" name = "lname">
        <br><br>
        *Date of Birth: <input type = "date" name = "DOB">
        <br><br>
        *Email: <input type = "email" name = "email">
        <br><br>

        <label>*Gender: &nbsp;</label>
        <input type = "radio" name = "gender" value = "Male"> Male 
        <input type = "radio" name = "gender" value = "Female"> Female
        <br><br>

        *Marrital Status: &nbsp&nbsp
        <select name = "mStatus" size = "1">
            <option value = "Single"> Single</option>
            <option value = "Married"> Married</option>
            <option value = "Divorced"> Divorced</option>
            <option value = "Widowed"> Widowed</option>
        </select>
        <br>

        <table>
            <tr>
                <td>Family Health History:</td>
                <td> 
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "Asma"> Asma
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "Cancer"> Cancer
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "Depression"> Depression
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "Diabetes"> Diabetes
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "Heart Disease"> Heart Disease
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "High Blood Pressure"> High Blood Pressure
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "High Cholesterol"> High Cholesterol 
                    <br>
                    <input type = "checkbox" name = "famHealth[]" value = "Stroke"> Stroke
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>Extra Information: &nbsp;</td>
                <td>
                    <textarea id = "TextArea" name = "info" rows = "4" cols = "20"></textarea>
                </td>
            </tr>
        </table>
        <br><br>

        Upload Your Photo: <br><br>
        Select a JPG, GIF, PNG or TIF File:
        <input type='file' name='filename' size='10'>
        <br><br>
        <input type='submit' value='Upload'>
        &nbsp;&nbsp;&nbsp;
        <input type='reset' value='Reset'>

        </form>
    </body> 
</html>