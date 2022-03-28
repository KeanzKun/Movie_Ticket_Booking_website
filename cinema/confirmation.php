<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation.php'); ?>

<head>
    <title>Purchase Confirmation</title>
</head>

<body>
    <h1 style=text-align:center>Purchase Confirmation</h1>
    <hr style="width: 300px; margin:auto">
    <table id="purchaseTable">
        <tbody>
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
                            <td>Sub Total:</td>
                            <td>30.00</td>
                        </tr>
                    </table>
            </tr>
    </table>
    </td>
    </tr>
    </tbody>
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
            <td><img src="image/coke.jpg" style="width:200px;"></td>
            <td>Coke</td>
            <td>'number selector'</td>
            <td>Total:</td>
            <td>5.00</td>
        </tr>
        <tr>
            <td>Sub Total:</td>
            <td>27.00</td>
        </tr>
    </table>
    <hr style="width: 95%; margin:auto">

    <table id="purchaseTable">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Final Total(RM):</td>
            <td>57.00</td>
        </tr>
    </table>
    <hr style="width: 95%; margin:auto">

    <input type="submit" value="Cancel"  id="cancel">
    <input type="submit" value="PAYMENT" id="next">
    <br><br><br>
</body>
<?php include('includes/footer.php'); ?>

</html>