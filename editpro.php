<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit  Profile</h2>
<link rel="stylesheet" href="editpro.css">

<form action="/submit-profile-edit" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="profile-picture-section">
            <label for="profile_picture" class="profile-picture-label">
                <img src="placeholder-image.jpg"  class="profile-picture-preview">
                <span class="upload-text">Change Profile Picture</span>
                <input type="file" id="profile_picture" name="profile_picture" accept="image/*" class="profile-picture-input">
            </label>
        </div>
        <div class="form-content">

            
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" required><br><br>

    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" required><br><br>

    <label for="dob">Date of Birth:</label><br>
<input type="date" id="dob" name="dob" required><br><br>

    <label for="country">Country:</label><br>
    <select id="country" name="country" required>
        <option value="afghanistan">Afghanistan</option>
    <option value="armenia">Armenia</option>
    <option value="azerbaijan">Azerbaijan</option>
    <option value="bahrain">Bahrain</option>
    <option value="bangladesh">Bangladesh</option>
    <option value="bhutan">Bhutan</option>
    <option value="brunei">Brunei</option>
    <option value="cambodia">Cambodia</option>
    <option value="china">China</option>
    <option value="cyprus">Cyprus</option>
    <option value="georgia">Georgia</option>
    <option value="india">India</option>
    <option value="indonesia">Indonesia</option>
    <option value="iran">Iran</option>
    <option value="iraq">Iraq</option>
    <option value="israel">Israel</option>
    <option value="japan">Japan</option>
    <option value="jordan">Jordan</option>
    <option value="kazakhstan">Kazakhstan</option>
    <option value="kuwait">Kuwait</option>
    <option value="kyrgyzstan">Kyrgyzstan</option>
    <option value="laos">Laos</option>
    <option value="lebanon">Lebanon</option>
    <option value="malaysia">Malaysia</option>
    <option value="maldives">Maldives</option>
    <option value="mongolia">Mongolia</option>
    <option value="myanmar">Myanmar (Burma)</option>
    <option value="nepal">Nepal</option>
    <option value="north korea">North Korea</option>
    <option value="oman">Oman</option>
    <option value="pakistan">Pakistan</option>
    <option value="palestine">Palestine</option>
    <option value="philippines">Philippines</option>
    <option value="qatar">Qatar</option>
    <option value="saudi arabia">Saudi Arabia</option>
    <option value="singapore">Singapore</option>
    <option value="south korea">South Korea</option>
    <option value="sri lanka">Sri Lanka</option>
    <option value="syria">Syria</option>
    <option value="taiwan">Taiwan</option>
    <option value="tajikistan">Tajikistan</option>
    <option value="thailand">Thailand</option>
    <option value="timor-leste">Timor-Leste</option>
    <option value="turkey">Turkey</option>
    <option value="turkmenistan">Turkmenistan</option>
    <option value="united arab emirates">United Arab Emirates</option>
    <option value="uzbekistan">Uzbekistan</option>
    <option value="vietnam">Vietnam</option>
    <option value="yemen">Yemen</option>

    </select><br><br>

    <label for="Phone">Phone:</label><br>
    <div class="phone-input-container">
        <div class="country-code-dropdown">
            <select id="country-code" style="width: 60px;">
        
        <option value="+93">Afghanistan (+93)</option>
        <option value="+374">Armenia (+374)</option>
        <option value="+994">Azerbaijan (+994)</option>
        <option value="+973">Bahrain (+973)</option>
        <option value="+880">Bangladesh (+880)</option>
        <option value="+975">Bhutan (+975)</option>
        <option value="+673">Brunei (+673)</option>
        <option value="+855">Cambodia (+855)</option>
        <option value="+86">China (+86)</option>
        <option value="+357">Cyprus (+357)</option>
        <option value="+995">Georgia (+995)</option>
        <option value="+91">India (+91)</option>
        <option value="+62">Indonesia (+62)</option>
        <option value="+98">Iran (+98)</option>
        <option value="+964">Iraq (+964)</option>
        <option value="+972">Israel (+972)</option>
        <option value="+81">Japan (+81)</option>
        <option value="+962">Jordan (+962)</option>
        <option value="+7">Kazakhstan (+7)</option>
        <option value="+965">Kuwait (+965)</option>
        <option value="+996">Kyrgyzstan (+996)</option>
        <option value="+856">Laos (+856)</option>
        <option value="+961">Lebanon (+961)</option>
        <option value="+60">Malaysia (+60)</option>
        <option value="+960">Maldives (+960)</option>
        <option value="+976">Mongolia (+976)</option>
        <option value="+95">Myanmar (Burma) (+95)</option>
        <option value="+977">Nepal (+977)</option>
        <option value="+850">North Korea (+850)</option>
        <option value="+968">Oman (+968)</option>
        <option value="+92">Pakistan (+92)</option>
        <option value="+970">Palestine (+970)</option>
        <option value="+63">Philippines (+63)</option>
        <option value="+974">Qatar (+974)</option>
        <option value="+966">Saudi Arabia (+966)</option>
        <option value="+65">Singapore (+65)</option>
        <option value="+82">South Korea (+82)</option>
        <option value="+94">Sri Lanka (+94)</option>
        <option value="+963">Syria (+963)</option>
        <option value="+886">Taiwan (+886)</option>
        <option value="+992">Tajikistan (+992)</option>
        <option value="+66">Thailand (+66)</option>
        <option value="+670">Timor-Leste (+670)</option>
        <option value="+90">Turkey (+90)</option>
        <option value="+993">Turkmenistan (+993)</option>
        <option value="+971">United Arab Emirates (+971)</option>
        <option value="+998">Uzbekistan (+998)</option>
        <option value="+84">Vietnam (+84)</option>
        <option value="+967">Yemen (+967)</option>
    </select><br><br>
    

</div>

<input type="tel" id="phone-number" placeholder="Enter phone number" />
</div>

<script src="path_to_select2.js"></script>

<script>
$(document).ready(function() {
$('#country-code').select2();
$('#country-code').on('change', function() {
  var countryCode = $(this).val();
  $('#phone-number').attr('placeholder', countryCode + ' Enter phone number');
});
})

</script>


    <label for="profession">Profession:</label><br>
    <input type="text" id="profession" name="profession" required><br><br>

    <label for="hobby">Hobby:</label><br>
<input type="text" id="hobby" name="hobby"><br><br>

<label for="bio">Bio:</label><br>
<textarea id="bio" name="bio" required></textarea><br>



    <input type="submit" value="Update">
</form>

<?php
// Assuming you have already established a database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $profession = $_POST['profession'];
    $hobby = $_POST['hobby'];
    $bio = $_POST['bio'];

    // Insert data into the database
    $sql = "INSERT INTO user (username, firstname, lastname, email, address, dob, country, phone, profession, hobby, bio)
            VALUES ('$username', '$firstname', '$lastname', '$email', '$address', '$dob', '$country', '$phone', '$profession', '$hobby', '$bio')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>


</body>
</html>