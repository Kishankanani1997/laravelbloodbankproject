<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contactmail Template</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>

.email 
        {
            width: 90%;
            height: auto;
            padding: 16px;
            background-color: aliceblue;

        }
    </style>
</head>
<body>

    <div class="email">
        <img src="https://www.4to40.com/wp-content/uploads/2017/06/blood-donation-slogans.png" alt="img" class="mt-3" style="width:400px; height:300px;">

        <address style="text-align: left;  color:black;">
            <p><strong>Name of Customer:- </strong>{{$data["name"]}}</p>
            <p><strong>Number of Customer:- </strong>{{$data["phone"]}}</p>
            <p><strong>Email of Customer:- </strong>{{$data["email"]}}</p>
            <p><strong>Subject of Customer:- </strong>{{$data["subject"]}}</p>
            <p><strong>Message of Customer:- </strong>{{$data["message"]}}</p>

            <p><strong>Blood Organisation Address: </strong> National Blood Trasnfusion Council, <br> Royal Park, Kunj Vihar Road, <br> Sector No. 48, Opp. St Mary's School, <br> Delhi - 110001 </p>
            <p><strong>Email Us:- </strong><a href="mailto:info@kishan.com">info@bloodtransfusion.com</a></p>
        </address>

    </div>
    
</body>
</html>