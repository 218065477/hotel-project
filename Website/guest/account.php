<?php
        include("../includes/header.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    


<div class="container">
  <div class="row">
    <div class="wrap-register col-md-6 col-md-offset-3">
      <h2 class="text-center" style="margin-bottom: 30px;">Create Account</h2>
    <form action="/action_page.php">
  <div class="form-group">
    <label>Title*</label>
    <select name="title" class="form-control" required >
		<option value selected ></option>
        <option value="Dr.">Dr.</option>
        <option value="Miss.">Miss.</option>
        <option value="Mr.">Mr.</option>
        <option value="Mrs.">Mrs.</option>
		<option value="Prof.">Prof.</option>
		<option value="Rev .">Rev .</option>
		<option value="Rev . Fr">Rev . Fr .</option>
        </select>
  </div>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="fname" class="form-control" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Last Name:</label>
    <input type="text" name="lname" class="form-control" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" autocomplete="off">

  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="text" name="phone" class="form-control" autocomplete="off">
  </div>

  <div class="form-group" style="margin-top: 15px;margin-bottom: 15px;">
    <label>Nationality*</label>
    <label class="radio-inline">
    <input type="radio" name="nation"  value="Sri Lankan" checked="">South African
     </label>
    <label class="radio-inline">
        <input type="radio" name="nation"  value="Non Sri Lankan ">Non South African 
    </label>
  </div>

    <?php

            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

    ?>
    <div class="form-group">
        <label>Passport Country*</label>
        <select name="country" class="form-control" required>
		<option value selected ></option>
        <?php
		foreach($countries as $key => $value):
		echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
		endforeach;
		?>
        </select>
		</div>
  <div class="form-group">
    <label >Password:</label>
    <input type="password" name="pass" class="form-control" autocomplete="off">
  </div>

  <div class="form-group">
    <label >Confirm Password:</label>
    <input type="password" name="con_pass" class="form-control" autocomplete="off">
  </div>
    <input style="margin-top: 15px;" type="submit" class="button-18" value="Create Account">
    <p style="margin-top: 12px;">I already have an account <a href="index.php">Click here</a></p>
</form>

    </div>
  </div>
</div>
    
</body>
</html>