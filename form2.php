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

        <div class="column">
          <label>Firstname</label><input type="text" name="firstname">
          <label>Address</label><input type="text" name="address">
          <label>City</label><input type="text" name="city">
          <label>Mail</label><input type="email" name="mail">
          <label>Birthday</label><input type="date" name="birthday">
        </div>
        <div class="column">
          <label>Lastname</label><input type="text" name="lastname">
          <label>Zipcode</label><input type="text" name="zipcode">
          <label>Country</label><input type="text" name="country">
          <label>Phone</label><input type="tel" name="phone">
        </div>
        <div>
          <label>Gender</label>
          <input type="radio" name="gender" value="female"><label>Female</label>
          <input type="radio" name="gender" value="male"><label>Male</label>
          <input type="radio" name="gender" value="other"><label>Other</label>
          <input type="radio" name="gender" value="other"><label>Prefere not to say</label>
          <br><br>
          <h5>We ask for your gender information to ensure we can offer you the option to join gender-specific classes that best suit your preferences.</h5>
          <input type="radio" name="policy" value="policy">BY SUBMITTING THIS FORM YOU ACCEPT OUR POLICY AS LAID OUT ON OUR T&C’S <br>
          <div class="submitbutton">
          <input type="submit" name="submit" value="Join us and discover our classes near you">
        </div>
        </div>
      </form>


    </div>
  </section>



</body>

</html>