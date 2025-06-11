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
</head>

<body>

    <section>
        <div>
            <img src="/assets/main4.jpg" alt="une femme de dos posant ses mains l'une sur l'autre namaste">
        </div>

        <div class>
            <h1>Dazzling Yoga</h1>
            <div class="category">
                <h5>Each style of yoga serves different needs, whether you’re looking for a gentle stretch, spiritual growth, strength, or relaxation.</h5>
                <h5>Yoga class you connect with</h5>


                <form action="traitement.php" method="post">
                    <div class="container">

                        <div class="option">
                            <input type="checkbox" id="ashtanga" name="yoga[]" value="ashtanga">
                            <label for="ashtanga">Ashtanga Yoga</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="hatha" name="yoga[]" value="Hatha">
                            <label for="Hatha">Hatha Yoga</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="vinyasa Yoga" name="yoga[]" value="vinyasa">
                            <label for="vinyasa">vinyasa Yoga</label>
                        </div>

                    </div>
                    <div class="container">

                        <div class="option">
                            <input type="checkbox" id="hot Yoga" name="yoga[]" value="hot">
                            <label for="hot">hot Yoga</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="core Yoga" name="yoga[]" value="core">
                            <label for="core">core Yoga</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="aerial Yoga" name="yoga[]" value="aerial">
                            <label for="aerial">aerial Yoga</label>
                        </div>
                    </div>

                    <div class="container">

                        <div class="option">
                            <input type="checkbox" id="sound Yoga" name="yoga[]" value="sound">
                            <label for="sound">sound Yoga</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="post natal Yoga" name="yoga[]" value="post natal">
                            <label for="post natal">post natal Yoga</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="baby Yoga" name="yoga[]" value="baby">
                            <label for="baby">baby Yoga</label>
                        </div>
                    </div>

                <h5>we also offer</h5>

                <div class="container">

                        <div class="option">
                            <input type="checkbox" id="pilates Yoga" name="yoga[]" value="pilates">
                            <label for="pilates">pilates</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="meditation Yoga" name="yoga[]" value="meditation">
                            <label for="meditation">meditation</label>
                        </div>

                        <div class="option">
                            <input type="checkbox" id="sophrology" name="yoga[]" value="sophrology">
                            <label for="sophrology">sophrology</label>
                        </div>
                    </div>

                    <h5>You are welcome to explore as many types of yoga classes as you wish, and you can adjust your preferebces whenever you feel ready.</h5>

                </form>


                <div class="submitbutton">
                    <a href="/View/formyogies3.php">Discover our classes near you</a>
                </div>
            </div>
        </div>
        </form>


        </div>
    </section>

</body>

</html>