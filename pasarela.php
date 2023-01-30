<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasarela de Pagos</title>
    <link href="css/clase1.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/c61477260e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/b5/css/bootstrap.min.css"  >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
</head>
<body >

 <img class="bkg-page" src="fondo.jpg">  


<?php require_once "vistas/header.php"?>






<main>
    <div class="all">
<!-- Replace "test" with your own sandbox Business account app client ID -->
<script src="https://www.paypal.com/sdk/js?client-id=Adv5wfUhnDiEFCkkK4SdiYDKs2kURE6Qg235Sq6gZQifwrju2ookhcIxwY8pEymSFl9idFYKA4ENq89p&currency=USD"></script>

<!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>

    <script>
    paypal.Buttons({
        style: {
          color:  'blue',
          shape:  'pill',
          label:  'pay',
          height: 40
         },
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
        return actions.order.create({
            purchase_units: [{
            amount: {
                value: '116.5' // Can also reference a variable or function
            }
            }]
        });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
            
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
            window.location.href="msjcompletado.php"
        });
        },
        onCancel: function(data) {
            alert("Operacion de pago cancelada");
            console.log(data);
        }
    }).render('#paypal-button-container');
    </script>
    </div>
</main>


<footer>

<?php require_once "vistas/footer.php"?>

</footer>


</body>
</html>