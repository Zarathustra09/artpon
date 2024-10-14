<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Advance Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff8e9;
            color: #ee5353;
            font-family: 'BaksoSapi', sans-serif;
        }

        .payment-form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ee5353;
            background-color: #fff;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="payment-form">
            <h2>Advance Payment</h2>
            <form id="payment-form">
                <div class="form-group">
                    <label for="amount">Amount (Minimum 50%):</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                </div>
                <div id="card-element"></div>
                <button type="submit" class="btn btn-primary">Pay Now</button>
                <div id="card-errors" role="alert"></div>
            </form>
        </div>
    </div>

    <script>
        const stripe = Stripe('YOUR_PUBLIC_STRIPE_KEY');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const { error, paymentMethod } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
            });

            if (error) {
                document.getElementById('card-errors').textContent = error.message;
            } else {
                // Process payment in your backend
                fetch('process_payment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        paymentMethodId: paymentMethod.id,
                        amount: document.getElementById('amount').value,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        document.getElementById('card-errors').textContent = data.error;
                    } else {
                        alert('Payment successful! Booking confirmed.');
                    }
                });
            }
        });
    </script>
</body>

</html>
