<?php
session_start();
include 'functions.php';
//checkLogin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>	Doctor &middot; Interface </title>

	<!--

	Hey friend! This file shows you how
	the CSS Theme you downloaded looks with
	some example HTML form markup.

	Check out the README.txt for more info.

	-->

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- JavaScript -->
	<script type="text/javascript" src="scripts/scr.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/structure.css" />
	<link rel="stylesheet" href="css/form.css" />
	<link rel="stylesheet" href="css/theme.css" type="text/css" />
	<link rel="canonical" href="http://www.wufoo.com/gallery/designs/template.html">
	
</head>

<body id="public">

	<?php 
		
		
		
		include 'menu.php';
	?>

	<div id="container">    
		<form class="wufoo" action="addPatient.php" method="post">

			<ul>

				<li class="section first">
					<h3>New Patient Form</h3>
					<div>Add new pacient to the system.</div>
				</li>

				<li>
					<label class="desc">Notes</label>
					<div>
						<input type="text" name="notes" rows="10" cols="50" class="field text medium" placeholder=""  /></input>
					</div>

					<p class="instruct">Instructions here<br /><br /></p>
				</li>

				<li>
					<label class="desc">First Name</label>
					<div>
						<input class="field text medium" type="text" name="firstName" maxlength="255"  placeholder="John"/>
					</div>
				</li>

				<li>
					<label class="desc">Last Name</label>
					<div>
						<input class="field text medium" type="text" name="lastName" maxlength="255" placeholder="Smith"/>
					</div>
				</li>

				<li>
				<label class="desc">Date</label>
					<span>
						<input class="field text" name="monthDate" size="2" type="text" maxlength="2" placeholder="MM"/> /
					</span>

					<span>
						<input class="field text" name="dayDate" size="2" type="text" maxlength="2" placeholder="DD"/> /
					</span>

					<span>
						<input class="field text" name="yearDate" size="4" type="text" maxlength="4" placeholder="YYYY"/>
					</span>

					<span>
						<img src="file://///infhomes1.einet.brad.ac.uk/amuresia/SOIProfile/Desktop/SEGP/images/calendar.png" class="icon" alt="Pick date." />
					</span>
				</li>

				<li>
					<label class="desc">Time</label>
					<span>
						<input class="field text" name="hourTime" size="2" type="text" maxlength="2" placeholder="HH"/> :
					</span>

					<span>
						<input class="field text" name="minuteTime" size="2" type="text" maxlength="2" placeholder="MM"/> :
					</span>

					<span>
						<select class="field select" name="meridianTime" style="width:4em">
							<option value="AM">AM</option>
							<option value="PM">PM</option>
					</select>
				</span>
				</li>

				<li>
				<label class="desc">Phone</label>
				<span>
					<input class="field text" type="text" name="phone1"size="3" maxlength="3" placeholder="###" /> -
				</span>

				<span>
					<input class="field text" type="text" name="phone2" size="3" maxlength="3" placeholder="###" /> -
				</span>

				<span>
					<input class="field text" type="text" name="phone3" size="4" maxlength="4" placeholder="####" />
				</span>
				</li>


				<li class="complex">
				<label class="desc">Address</label>
				<div>
					<span class="full">
						<input class="field text addr" type="text" name="street1Address" placeholder="Street Address" />
					</span>

					<span class="full">
						<input class="field text addr" type="text" name="street2Address" placeholder="Street Address 2" />
					</span>

					<span class="left">
						<input class="field text addr" type="text" name="cityAddress" placeholder="City" />
					</span>

					<span class="right">
						<input class="field text addr" type="text" name="countyAddress" placeholder="County" />
					</span>

					<span class="left">
					<input class="field text addr" type="text" name="postAddress" maxlength="15" placeholder="Postal Code" />
					</span>

					<span class="right">
					<select class="field select addr" >
						<option value="" name="countryAddress" selected="selected"></option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="Andorra">Andorra</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Aruba">Aruba</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
						<option value="Republic of the Congo">Republic of the Congo</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="C&ocirc;te d'Ivoire">C&ocirc;te d'Ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="East Timor">East Timor</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="Gabon">Gabon</option>
						<option value="Gambia">Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Gibraltar">Gibraltar</option>
						<option value="Ghana">Ghana</option>
						<option value="Greece">Greece</option>
						<option value="Grenada">Grenada</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-Bissau">Guinea-Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Honduras">Honduras</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="North Korea">North Korea</option>
						<option value="South Korea">South Korea</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia">Micronesia</option>
						<option value="Moldova">Moldova</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Netherlands Antilles">Netherlands Antilles</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Palestine">Palestine</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Qatar">Qatar</option>
						<option value="Romania">Romania</option>
						<option value="Russia">Russia</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome and Principe">Sao Tome and Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="Solomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Suriname">Suriname</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Togo">Togo</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Vatican City">Vatican City</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>

					</select>
				</span>
			</div>
			</li>

			<li class="buttons">
				<input id="saveForm" class="btTxt" type="submit" value="Submit" />
			</li>
			</ul>

		</form>

	</div>


</body>

</html>