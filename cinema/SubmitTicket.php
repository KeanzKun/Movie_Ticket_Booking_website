<!DOCTYPE html>

<html>

<head>
    <?php include 'includes/navigation2.php'; ?>

    <link rel="stylesheet" href="style/mystyle.css">
</head>

<body>
    <div class="midBtn">
        <p class="contactUsTitle"> Contact Us </p>
    </div>

    <div class="contactUsArea">
        <form name="contactUs">
            <table style="margin-left: 30px;">
                <tr>
                    <td>
                        <li> Name: </li>
                    </td>
                    <td>
                        <li class="member"><input class="ContactUs" type="text" id="name" name="name" placeholder="Name"></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li> Email: </li>
                    </td>
                    <td>
                        <li class="member"><input class="ContactUs" type="text" id="email" name="email" placeholder="Email"></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li> Contact Number: </li>
                    </td>
                    <td>
                        <li class="member"><input class="ContactUs" type="text" id="contactNumber" name="contactNumber" placeholder="Contact Number"></li>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li> Category: </li>
                    </td>
                    <td>
                        <li class="member"><select class="category" name="ticket" id="ticket" placeholder="SelectCategory"></li>
                        <option value="Complain">Complain</option>
                        <option value="Suggestion">Suggestion</option>
                        <option value="General Issue">General Issue</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li> Subject: </li>
                    </td>
                    <td>
                        <input class="subject" type="text" id="subject" name="subject" placeholder="Subject" style="margin-left: 100px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <li> Description: </li>
                    </td>
                    <td>
                        <textarea id="description" name="description" placeholder="Description" style="margin-left: 100px;"></textarea>
                    </td>
                </tr>
            </table>
    </div>
    </form>

    <div class="contactUsAreaSubmit">
        <input class="submitt" type="submit" value="submit" id="submitBtn" onclick="submitForm()">
    </div>
</body>

<script>
    function submitForm() {
        var form = document.getElementsByName('contactUs')[0];
        form.reset();
        alert("your ticket has been submitted!");
        return false;
    }
</script>

<?php include 'includes/footer.php'; ?>

</html>