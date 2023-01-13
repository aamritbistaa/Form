<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" href="style.css" />
    <script>console.log('<?php include("connection.php"); ?>')</script>
  </head>
  <body>
    <div class="main">
      <h3>Simple Form Project</h3>
      <form action="#" method="POST" id="form">
        <div>
          <label for="name">Full Name</label>
          <input name="fullname" type="text" required />
        </div>
        <div>
          <label for="address">Address</label>
          <input name="address" type="text" required />
        </div>
        <div>
          <label for="phone">Phone Number</label>
          <input type="tel" name="phone"  required />
        </div>
        <div>
          <label for="email">Email Address</label>
          <input name="email" type="email" required/>
        </div>

        <div>
          <label for="district">District</label>
          <select name="district" class="selectbox">
            <!-- <option value="">hello</option> -->
            <option value="kathmandu">Kathmandu</option>
            <option value="lalitpur">Lalitpur</option>
            <option value="bhaktapur">Bhaktapur</option>
            <option value="chitwan">Chitwan</option>
          </select>
        </div>

        <!-- <fieldset> -->

        <div class="skill">
          <label for="skill">Skill</label>

          <input type="checkbox" id="HTML" name="skill[]" value="HTML" />
          <label for="HTML">HTML</label>

          <input type="checkbox" id="JS" name="skill[]" value="JS" />
          <label for="JS">Javascript</label>

          <input type="checkbox" id="CSS" name="skill[]" value="CSS" />
          <label for="CSS">CSS</label>

          <input type="checkbox" id="PHP" name="skill[]" value="PHP" />
          <label for="PHP">PHP</label>

          <input type="checkbox" id="Python" name="skill[]" value="Python" />
          <label for="Python">Python</label>
        </div>
        <!-- </fieldset> -->

        <div class="gender">
          <label for="gender">Gender</label>
          <input type="radio" name="gender" value="male" required /> Male
          <input type="radio" name="gender" value="female" required /> Female
        </div>
        <div class="button">
          <input type="submit" value="Submit" name="submit" />
        </div>
      </form>
    </div>
  </body>
</html>

<?php
  if($_POST['submit']){
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $district = $_POST['district'];
    $gender = $_POST['gender'];

    $skill_array = $_POST['skill'];
    $skill = implode(", ",$skill_array);

    $query = "INSERT INTO FORM VALUES ('$fullname','$address','$phone','$email','$district','$gender','$skill')";
    $data = mysqli_query($connection,$query);

    if($data)
    {
      echo("<script>console.log('PHP: Data Inserted');</script>");
      // echo "Data Inserted into database";
    }
    else
    {
      echo("<script>console.log('PHP: Data Insertion failed');</script>");
      // echo "Data Insertion failed";
    }

  }
?>
