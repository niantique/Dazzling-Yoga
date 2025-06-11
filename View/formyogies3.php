<?php
$firstname = $lastname = $email = $address = $city = $zipcode = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $address = test_input($_POST["address"]);
    $city = test_input($_POST["city"]);
    $zipcode = test_input($_POST["zipcode"]);
    $gender = test_input($_POST["gender"]);
    $country = test_input(data: $_POST["data"]);
    $mail = test_input(data: $_POST["mail"]);
    $phone = test_input(data: $_POST["phone"]);
    $birthday = test_input(data: $_POST["birthday"]);
    $gender = test_input(data: $_POST["gender"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dazzling Yoga</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/styles/style_form_yogies2.css" />
        <script type="module" src="./index.js"></script>

</head>

<body>

    <section>
        <div>
            <img src="/assets/main4.jpg" alt="une femme de dos posant ses mains l'une sur l'autre namaste">
        </div>

        <div class>
            <h1>Dazzling Yoga</h1>
            <div class="category">
                <h5>Find classes near you</h5>
                <h5>By sharing your location, we can quickly show you nearby yoga studios, making it easier for you to find the perfect place to practice close to home.</h5>


   <div class="submitbutton">
                    <a href="/View/formyogies3.php">THANK YOU FOR JOINING US, now discover your tailored page</a>
                </div>

        </div>
    </section>


</body>

</html>