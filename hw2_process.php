<html>
<head>
    <title>BCS350 Assignment 2 - Mohammad Hassan</title>
</head>
<body>
    <h1>BCS350 Assignment 2 - Mohammad Hassan</h1>
    <h2>Patient Information:</h2>
    <br><br>
    <?php
    if (isset($_FILES['filename']) && $_FILES['filename']['error'] != UPLOAD_ERR_NO_FILE) {
        $name = $_FILES['filename']['name'];

        switch ($_FILES['filename']['type']) {
            case 'image/jpeg': $ext = 'jpg'; break;
            case 'image/gif':  $ext = 'gif'; break;
            case 'image/png':  $ext = 'png'; break;
            case 'image/tiff': $ext = 'tif'; break;
            default:           $ext = '';    break;
        }
        if ($ext) {
            $n = "image.$ext"; 
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "<img src='$n'>";
        } else {
            echo "<span style='color:red;'>Error: '$name' is not an accepted image file.</span>";
        }
    } else {
        if (isset($_FILES['filename']) && $_FILES['filename']['error'] == UPLOAD_ERR_NO_FILE) {
            echo "No file has been uploaded.";
        } 
    }


    echo '<br><br>';

    if (isset($_POST['fname']) && !empty($_POST['fname'])) {
        $fn = htmlentities($_POST['fname']);
        echo "First Name: " . $fn . "<br>";
    } else {
        echo "<span style ='color:red;'>First Name is a required field</span>";
        echo "<br>";
    }
    
    if (isset($_POST['lname']) && !empty($_POST['lname'])) { 
        $ln = htmlentities($_POST['lname']); 
        echo "Last Name: " . $ln . "<br>"; 
    } else { 
        echo "<span style ='color:red;'>Last Name is a required field</span>";
        echo "<br>";
    }

    if (isset($_POST['DOB']) && !empty($_POST['DOB'])) { 
        $date = htmlentities($_POST['DOB']); 
        $dateFormated = date("Y/m/d", strtotime($date));
        echo "Date of Birth: " . $dateFormated . "<br>"; 
    } else { 
        echo "<span style ='color:red;'>Date of Birth is a required field</span>";
        echo "<br>";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) { 
        $email = htmlentities($_POST['email']); 
        echo "Email: " . $email . "<br>"; 
    } else { 
        echo "<span style ='color:red;'>Email is a required field</span>";
        echo "<br>";
    }

    if (isset($_POST['gender']) && !empty($_POST['gender'])) { 
        $gender = ucfirst($_POST['gender']);
        echo "Gender: " . $gender . "<br>"; 
    } else { 
        echo "<span style ='color:red;'>Gender is a required field</span>";
        echo "<br>";
    }

    if (isset($_POST['mStatus']) && !empty($_POST['mStatus'])) {
        $mStat = htmlentities($_POST['mStatus']); 
        echo "Marital Status: " . $mStat . "<br>"; 
    } else { 
        echo "<span style ='color:red;'>Marital Status is a required field</span>";
        echo "<br>";
    }

    if (isset($_POST['famHealth']) && !empty($_POST['famHealth'])) { 
        $fHealth = $_POST['famHealth']; 
        echo "Family Health History: <ul>";
        foreach ($fHealth as $condition) { 
            echo "<li>" . htmlentities($condition);
        }
        echo "</ul>";
    } else {
        echo "Family Health History: No listed family health history reported";
        echo "<br>";
    }

    if (isset($_POST['info']) && !empty($_POST['info'])) { 
        $info = htmlentities($_POST['info']);
        echo "Extra Information: " . nl2br($info) . "<br>";
    } else {
        echo "No extra information entered<br>";
    }
    echo "<br>";

    if (!empty($_POST['lname']) || !empty($_POST['fname']) || !empty($_POST['DOB']) || !empty($_POST['gender']) || !empty($_POST['email'])) { 
        date_default_timezone_set('America/New_York');
        $currentDate = new DateTime();
        echo "Pattient registered on ". $currentDate->format('l, F j, Y \a\t g:i a');
    } else { 
        echo "Patient not registered.<br>Please fill out all required fields.";
    }

    ?>
</body>
</html>