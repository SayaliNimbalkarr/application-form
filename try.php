<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <div class="title">Internship Application</div>
        <h3>Please complete the form below to apply for a internship with us.</h3>
        <p class="required" style="display: none;">*Required</p>

        <form action="submit.php" method="post">      
            <div class="user-details">
                <div class="user-info">
                <div class="input-box">
                    <span class="details">First Name<span class="required">*</span></span>
                    <input style="height: 40px;" name="firstname" type="text" placeholder="Enter your first name" required>
                </div>

                <div class="input-box">
                    <span class="details">Last Name<span class="required">*</span></span>
                    <input style="height: 40px;" name="lastname" type="text" placeholder="Enter your last name" required>
                </div>

                <div class="input-box">
                    <span class="details">Email<span class="required">*</span></span>
                    <input style="height: 40px;" name="email" type="text" placeholder="Ex: myname@gmail.com" required>
                </div>

                <div class="input-box">
                    <span class="details">Contact Number<span class="required">*</span></span>
                    <input style="height: 40px;" name="contact" type="text" placeholder="Enter your number" required>
                </div>

                <!-- <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" required>
                </div>

                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Enter your password" required>
                </div> -->
                
                <span class="gender-title">Gender<span class="required">*</span></span>
                    <div class="gender-category">
                        <input type="radio" name="gender" value="male" id="male">
                        <label for="gender">Male</label>
    
                        <input type="radio" name="gender" value="female" id="female">
                        <label for="gender">Female</label>
    
                        <input type="radio" name="gender" value="others" id="others">
                        <label for="gender">Others</label>
                    </div>

                    <span class="other-info">Birth Date</span>
                    <div class="other-category">
                        <select name="DOBday">
                            <option>Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="12">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>

                        <select style="margin-left: 18px;" name="DOBmonth">
                            <option>Month</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="auguat">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>

                        <select style="margin-left: 18px;" name="DOByear">
                            <option>Year</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Age<span class="required">*</span></span>
                        <input style="height: 40px;" name="age" type="number" placeholder="Enter your age" required>
                    </div>

                    <span class="other-info">Do you have own Laptop?<span class="required">*</span></span>
                    <div class="other-category">
                        <input type="radio" name="laptop" value="yes" id="yes">
                        <label for="laptop">Yes</label>
    
                        <input type="radio" name="laptop" value="no" id="no">
                        <label for="laptop">No</label>
                    </div>

                    <span class="other-info">For how many months you  will be available for internship program?<span class="required">*</span></span>
                    <div class="other-category">
                        <input type="radio" name="available" value="6months" id="yeah">
                        <label for="day">6 months</label>
    
                        <input type="radio" name="available" value=">6months" id="nah">
                        <label for="day">>6 months</label>
                    </div>

                    <span class="other-info">Do you have Broadband Internet Connection?</span>
                    <div class="other-category">
                        <input type="radio" name="net" value="yes" id="yup">
                        <label for="net">Yes</label>
    
                        <input type="radio" name="net" value="no" id="nope">
                        <label for="net">No</label>
                    </div>

                    <span class="other-info">Address</span>
                    <div class="other-category">
                        <textarea id="addrees" name="address" rows="10" cols="50" placeholder="Enter your address"></textarea>
                        <label for="address"></label>
                    </div>

                    <span class="other-info">Reason for Interest in this Internship?</span>
                    <div class="other-category">
                        <textarea id="interest" name="interest" rows="10" cols="50" placeholder=""></textarea>
                        <label for="interest"></label>
                    </div>
                </div>

                <div class="education">    
                    <h2>Education</h2>
                    <div class="input-box">
                        <span class="details">Name of College<span class="required">*</span></span>
                        <input style="height: 40px;" type="text" name="college" placeholder="Enter the name of your College" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Course (Detail of Degree)</span>
                        <input style="height: 40px;" type="text" name="course" required>
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Year of degree completion</span>
                        <input type="text" name="completionyear" required>
                    </div>
                    <div class="file-upload">
                        <label for="upload" class="file">Upload your CV<span class="required">*</span></label>
                        <input style="height: 40px;" type="file" id="upload" name="cv">
                    </div>
                </div>
                    
                <div class="terms">
                    <input type="checkbox" id="cb" class="checkbox">
                    <label for="cb" class="check">I accept the terms and conditions.</label>
                </div>
                
                <div>
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>

        </form>
    </div>
    
</body>
</html>