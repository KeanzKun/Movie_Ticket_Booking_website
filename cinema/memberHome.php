<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>

<?php include('includes/navigation.php'); ?>
<head>
    <title>Home - Member</title>
</head>

<body>
    <h1 style=text-align:center>Membership Card</h1>
    <hr style="width: 300px; margin:auto">
    <br>
    <table id="membershipCard">
        <tr>
            <td>
                <div id="barcode">
                    <img src="image/barcode.png" style="width:200px;">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                45645138421
            </td>
        </tr>
        <tr>
            <td>
                <div id="pointsText">Available Points:</div> 10000
            </td>
        </tr>
    </table>

    <h1 style=text-align:center>Upcoming Movies</h1>
    <hr style="width: 300px; margin:auto">
    <table id="homeMemberTable">
        <thead id="homeMemberHead">
            <tr id="memberRow">
                <th>Date</th>
                <th>Time</th>
                <th>Movie</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
        </tbody>
    </table>

    <h1 style=text-align:center>Rewards</h1>
    <hr style="width: 300px; margin:auto">
    <table id="homeMemberTable">
        <thead id="homeMemberHead">
            <tr id="memberRow">
                <th>Reward</th>
                <th>Expiry Date</th>
            </tr>
        </thead>
        <tbody>
            <tr id="memberRow">
                <td>Free 1 Big Combo2</td>
                <td>31 June 2022</td>
            </tr>
            <tr id="memberRow">
                <td>Free 1 Big Combo2</td>
                <td>31 June 2022</td>
            </tr>
            <tr id="memberRow">
                <td>Free 1 Big Combo2</td>
                <td>31 June 2022</td>
            </tr>
            <tr id="memberRow">
                <td>Free 1 Big Combo2</td>
                <td>31 June 2022</td>
            </tr>
            <tr id="memberRow">
                <td>Free 1 Big Combo2</td>
                <td>31 June 2022</td>
            </tr>
        </tbody>
    </table>
</body>
<?php include('includes/footer.php'); ?>	
</html>