<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: green;
            text-align: center;
            font-weight: 500;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
        }

        .checkmark {
            color: green;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>New Payment Received</h3>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td>John Doe</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>Tour</td>
        </tr>
        <tr>
            <td>Ticket Bought</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Amount Paid</td>
            <td>&#8358;10,000</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>2024-04-09 20:59:08</td>
        </tr>
        <!-- Add more rows for additional information if needed -->
        <tr class="total">
            <td>Total Paid</td>
            <td>Paid <span class="checkmark">&#10003;</span></td>
        </tr>
    </table>
</div>
</body>
</html>
