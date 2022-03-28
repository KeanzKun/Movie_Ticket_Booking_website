<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation.php'); ?>

<head>
    <title>Payment</title>
</head>

<body>
    <h1 style=text-align:center>Payment</h1>
    <hr style="width: 300px; margin:auto">
    <form>
        <table id="paymentTable">
            <tr>
                <td><input type="radio"  value="visa" name="payment"></td>
                <td><img src="image/visa.png" style="width:200px;"></td>
                <td>VISA Card</td>
            </tr>
            <tr>
                <td><input type="radio" value="master" name="payment"></td>
                <td><img src="image/mastercard.png" style="width:200px;"></td>
                <td>Mastercard</td>
            </tr>
            <tr>
                <td><input type="radio" value="tng" name="payment"></td>
                <td><img src="image/tngEwallet.png" style="width:200px;"></td>
                <td>Touch n Go eWallet</td>
            </tr>
            <tr>
                <td><input type="radio" value="transfer" name="payment"></td>
                <td><img src="image/bankTransfer.png" style="width:200px;"></td>
                <td>Bank Transfer</td>
            </tr>
        </table>
        </td>
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

        <input type="submit" value="Cancel" id="cancel">
        <input type="submit" value="MAKE PAYMENT" id="next">
    </form>
    <br><br><br>
</body>
<?php include('includes/footer.php'); ?>

</html>