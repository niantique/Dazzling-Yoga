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
  <link rel="stylesheet" href="styles/style_form2.css" />
</head>

<body>


  <section>
    <div>
      <img src="/assets/main4.jpg" alt="une femme de dos posant ses mains l'une sur l'autre namaste">
    </div>
    <div>
      <h1>Dazzling Yoga</h1>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Firstname: <input type="text" name="firstname">
        Lastname: <input type="text" name="lastname"><br><br>
        Address: <input type="text" name="address">
        Zipcode: <input type="text" name="zipcode"><br><br>
        City: <input type="text" name="city">
        Country: <input type="text" name="country"><br><br>
        Mail: <input type="email" name="mail">
        Phone: <input type="tel" name="phone"><br><br>
        Birthday: <input type="date" name="birthday"><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <input type="radio" name="gender" value="other">Prefere not to say
        <br><br>
        <p>We ask for your gender information to ensure we can offer you the option to join gender-specific classes that best suit your preferences.</p>
        <input type="radio" name="policy" value="policy">BY SUBMITTING THIS FORM YOU ACCEPT OUR POLICY AS LAID OUT ON OUR T&C’S <br>
        <input type="submit" name="submit" value="Submit">

      </form>


    </div>
  </section>



</body>

</html>