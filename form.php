<?php

require_once 'Database/db.php';



if($_SERVER["REQUEST_METHOD"] == "POST"){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $location = $_POST['location'];
  $crop = $_POST['crop'];
  $feed = $_POST['feed'];

  $sql = "INSERT INTO responses (First_Name, Last_Name, Email, Location, Crops, FeedBack) VALUES ('$first_name', '$last_name', '$email', '$location', '$crop', '$feed')";

  if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}


// create table responses(
//   SN int primary key auto_increment,
//   First_Name varchar(50),
//   Last_Name varchar (50),
//   Email VARCHAR(255) unique,
//   Location text,
//   Crops text,
//   FeedBack text,
//   Reg_Date datetime default now()
//   );

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Farm Registration Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background: linear-gradient(
          to right,
          #f0fff0,
          #e9f7ef
        ); /* Soft green gradient */
        font-family: "Arial", sans-serif;
      }
      .form-container {
        max-width: 600px;
        margin: auto;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      }
      .form-container h3 {
        font-weight: bold;
        color: #2c7a4b; /* Dark green */
      }
      .btn-light-green {
        background-color: #50c878; /* Light green */
        color: white;
        border: none;
      }
      .btn-light-green:hover {
        background-color: #45b369; /* Darker shade on hover */
      }
      .form-check-input:checked {
        background-color: #50c878;
        border-color: #50c878;
      }
      .form-label {
        font-weight: 600;
      }
      .shadow-input {
        border-radius: 8px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <form class="form-container" method="POST" action="form.php">
        <h3 class="text-center mb-4">Farm Registration Form</h3>
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input
                type="text"
                class="form-control shadow-input"
                id="firstName"
                placeholder="Enter first name"
                name="first_name"
                required
              />
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName" class="form-label">Last Name</label>
              <input
                type="text"
                class="form-control shadow-input"
                id="lastName"
                name="last_name"
                placeholder="Enter last name"
                required
              />
            </div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input
              type="email"
              class="form-control shadow-input"
              id="email"
              name="email"
              placeholder="Enter email"
              required
            />
          </div>

          <div class="mb-3">
            <label for="location" class="form-label">Location of Farm</label>
            <select name="location" class="form-select shadow-input" id="location" required>
              <option value="" disabled selected>Select location</option>
              <option value="Ahero">Ahero</option>
              <option value="Migori">Migori</option>
              <option value="Mwea">Mwea</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Type of Crop</label>
            <div class="row">
              <input type="text" class="form-control shadow-input" name="crop" placeholder="Enter crop" required />
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Any other infomation?</label>
            <textarea class="form-control shadow-input" name="feed" placeholder="Enter feedback"></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-light-green w-100 py-2">
              Submit
            </button>
          </div>
        </form>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
