<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <div class="main-wrapper">
        <h1>PHP Output No. 1</h1>
        <div class="container">
        <fieldset>
            <form class="form-box active" action="redirect.php" method="GET" id="GET">
            <legend>This form uses _<span> GET </span>_ request</legend>
            <div class="flex-table">
                <div class="flex-row">
                    <div class="flex-cell">First Name</div>
                    <div class="flex-cell">
                        <input type="text" name="fname" placeholder="Enter First Name" required/>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Middle Name</div>
                    <div class="flex-cell">
                        <input type="text" name="mname" placeholder="Enter Middle Name" required/>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Last Name</div>
                    <div class="flex-cell">
                        <input type="text" name="lname" placeholder="Enter Last Name" required/>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Age</div>
                    <div class="flex-cell">
                        <input type="number" name="age" placeholder="Enter Age" required/>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Gender</div>
                    <div class="flex-cell">
                        <select name="gender" id="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Email</div>
                    <div class="flex-cell">
                        <input type="email" name="email" placeholder="Enter Email" required/>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Address</div>
                    <div class="flex-cell">
                        <input type="text" name="address" placeholder="Enter Address" required/>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Phone Number (63+)</div>
                    <div class="flex-cell">
                        <input type="tel" name="phone" placeholder="Enter Phone Number" pattern="[0-9]{11}" required/>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell"></div>
                    <div class="flex-cell">
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </div>
                </div>
                <a id="link1" href="#" onclick="showForm('POST')">Go to POST page</a>
            </div>
            </form>
        </fieldset>
        
        <fieldset>
            <form class="form-box" action="redirect.php" method="POST" id="POST">
            <legend>This form uses _<span> POST </span>_ request</legend>
            <div class="flex-table">
                <div class="flex-row">
                    <div class="flex-cell">First Name</div>
                    <div class="flex-cell">
                        <input type="text" name="fname" placeholder="Enter First Name" required />
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Middle Name</div>
                    <div class="flex-cell">
                        <input type="text" name="mname" placeholder="Enter Middle Name" required />
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Last Name</div>
                    <div class="flex-cell">
                        <input type="text" name="lname" placeholder="Enter Last Name" required />
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Age</div>
                    <div class="flex-cell">
                        <input type="number" name="age" placeholder="Enter Age" required />
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Gender</div>
                    <div class="flex-cell">
                        <select name="gender" id="gender" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Email</div>
                    <div class="flex-cell">
                        <input type="email" name="email" placeholder="Enter Email" required />
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Address</div>
                    <div class="flex-cell">
                        <input type="text" name="address" placeholder="Enter Address" required />
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell">Phone Number (63+)</div>
                    <div class="flex-cell">
                        <input type="tel" name="phone" placeholder="Enter Phone Number" pattern="[0-9]{11}" required />
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-cell"></div>
                    <div class="flex-cell">
                        <input type="submit" value="Submit Data">
                        <input type="reset" value="Cancel">
                    </div>
                </div>
                <a id="link1" href="#" onclick="showForm('GET')">Go to GET page</a>
            </div>
            </form>
        </fieldset>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>