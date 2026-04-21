<?php
$lNameErr = $fNameErr = $emailErr = $genderErr = $cNameErr= "";
$fName = $lName = $email = $gender = $cName = "";


function cleanInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // First Name
    if (empty($_POST["firstName"])) {
        $fNameErr = "First Name is required";
    } else {
        $fName = cleanInput($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fName)) {
            $fNameErr = "Only letters and white space allowed";
        }
    }

    // Last Name
    if (empty($_POST["lastName"])) {
        $lNameErr = "Last Name is required";
    } else {
        $lName = cleanInput($_POST["lastName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lName)) {
            $lNameErr = "Only letters and white space allowed";
        }
    }

    // Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = cleanInput($_POST["gender"]);
    }


    // Company Name
    if (empty($_POST["cName"])) {
        $cNameErr = "Company Name is required";
    } else {
        $cName = cleanInput($_POST["cName"]);
        if (!preg_match("/^[a-zA-Z0-9\s\.\-&']*$/", $cName)) {
            $cNameErr = "Only letters and white space allowed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="projects.html">Projects</a> </li>
                <li><a href="educations.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Contact Me</h1>

            <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset>
                    <legend>Fill up all the necessary fields</legend>

                    <table>
                        <tr>
                            <td>
                                <label for="firstName">First Name <span style="color:red">*</span></label>
                            </td>
                            <td>
                                <input type="text" id="firstName" name="firstName"
                                    placeholder="Enter your first name"
                                    value="<?= $fName ?>">
                                <span style="color:red; display:block;"><?= $fNameErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="lastName">Last Name <span style="color:red">*</span></label>
                            </td>
                            <td>
                                <input type="text" id="lastName" name="lastName"
                                    placeholder="Enter your last name"
                                    value="<?= $lName ?>">
                                <span style="color:red; display:block;"><?= $lNameErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Gender <span style="color:red">*</span></label>
                            </td>
                            <td>
                                <input type="radio" id="male" name="gender" value="male"
                                    <?= ($gender == "male") ? "checked" : "" ?>>
                                <label for="male">Male</label>

                                <input type="radio" id="female" name="gender" value="female"
                                    <?= ($gender == "female") ? "checked" : "" ?>>
                                <label for="female">Female</label>

                                <span style="color:red; display:block;"><?= $genderErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="email">Email <span style="color:red">*</span></label>
                            </td>
                            <td>
                                <input type="text" id="email" name="email"
                                    placeholder="Enter your email"
                                    value="<?= $email ?>">
                                <span style="color:red; display:block;"><?= $emailErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="company">Company <span style="color:red">*</span></label>
                            </td>
                            <td>
                                <input type="text" id="company" name="cName"
                                    placeholder="Enter your company name"
                                    value="<?= $cName ?>">
                                <span style="color:red; display:block;"><?= $cNameErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td>Reason of Contact:</td>
                            <td>
                                <input type="checkbox" id="projects" name="reason" value="projects">
                                <label for="projects">Projects</label>

                                <input type="checkbox" id="thesis" name="reason" value="thesis">
                                <label for="thesis">Thesis</label>

                                <input type="checkbox" id="job" name="reason" value="job">
                                <label for="job">Job</label>
                            </td>
                        </tr>

                        <tr>
                            <td>Topics:</td>
                            <td>
                                <input type="checkbox" id="web" name="topics" value="web">
                                <label for="web">Web Development</label>

                                <input type="checkbox" id="mobile" name="topics" value="mobile">
                                <label for="mobile">Mobile Development</label>

                                <input type="checkbox" id="ai_ml" name="topics" value="ai_ml">
                                <label for="ai_ml">AI/ML Development</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="date">Consultation Date:</label>
                            </td>
                            <td>
                                <input type="date" id="date" name="consultationDate">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="msg">Message:</label>
                            </td>
                            <td>
                                <textarea id="msg" name="message" rows="4" cols="30"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Register">
                                <input type="reset">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </section>
    </main>

    <footer>
        <p>Developed by Nabil Adib</p>
        <p>Copyright &copy; 2026</p>
        <a href="https://www.linkedin.com/in/nabiladib14/" target="_blank">
            <img src="../data/linkedin.png" alt="LinkedIn" width="30">
        </a>

        <a href="https://github.com/nabil-adib" target="_blank">
            <img src="../data/github.png" alt="GitHub" width="30">
        </a>
    </footer>

</body>

</html>