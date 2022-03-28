<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation.php'); ?>

<head>
    <title>Ticket Purchasing</title>
</head>

<body>
    <h1 style=text-align:center>Purchase</h1>
    <hr style="width: 300px; margin:auto">
    <table id="purchaseTable">
        <tr>
            <td><img src="image/ticketIcon.png" style="width:200px;"></td>
            <td>
                <table id="purchaseTable">
                    <tr>
                        <td>Adult</td>
                        <td>'number selector'</td>
                        <td>Total:</td>
                        <td>20.00</td>
                    </tr>
                    <tr>
                        <td> Child</td>
                        <td>'number selector'</td>
                        <td>Total:</td>
                        <td>10.00</td>
                    </tr>
                    <tr>
                        <td>Couple Seat</td>
                        <td>'number selector'</td>
                        <td>Total:</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Sub Total:</td>
                        <td>30.00</td>
                    </tr>
                </table>
        </tr>
    </table>
    <hr style="width: 95%; margin:auto">

    <table id="purchaseTable">
        <tr>
            <td><img src="image/popcorn.jpg" style="width:200px;"></td>
            <td>Popcorn</td>
            <td>'number selector'</td>
            <td>Total:</td>
            <td>11.00</td>
        </tr>
        <tr>
            <td><img src="image/hotdog.webp" style="width:200px;"></td>
            <td>Hotdog</td>
            <td>'number selector'</td>
            <td>Total:</td>
            <td>8.00</td>
        </tr>
        <tr>
            <td><img src="image/nugget.jpg" style="width:200px;"></td>
            <td>Nugget</td>
            <td>'number selector'</td>
            <td>Total:</td>
            <td>0.00</td>
        </tr>
        <tr>
            <td><img src="image/coke.jpg" style="width:200px;"></td>
            <td>Coke</td>
            <td>'number selector'</td>
            <td>Total:</td>
            <td>5.00</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Sub Total:</td>
            <td>27.00</td>
        </tr>
    </table>
    <hr style="width: 95%; margin:auto">

    <table id="purchaseTable">
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>Final Total(RM):</td>
            <td>57.00</td>
        </tr>
    </table>
    <hr style="width: 95%; margin:auto">

    <input type="submit" value="Cancel" id="cancel">
    <input type="submit" value="SEAT SELECTION" id="next">
    <br>
    <br>
    <br>
</body>
<?php include('includes/footer.php'); ?>

</html>