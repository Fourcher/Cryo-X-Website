<div>
    <link rel="stylesheet" href="/reference/sdks/web/static/styles/code-preview.css" preload>
    <script src="https://web.squarecdn.com/v1/square.js"></script>
    <div id="payment-form">
        <div id="payment-status-container"></div>
        <div id="card-container"></div>
        <button id="card-button" class="mt-4 bg-blue-500 w-96 text-white p-3 rounded-md" type="button">Pay with Card</button>
        <button id="invoice-button" class="mt-4 bg-gray-500 w-96 text-white p-3 rounded-md" type="button">Send Invoice Instead</button> <!-- Invoice button -->
    </div>

    <script type="module">
        const appId = 'sq0idp-dBKeL75GYneLC2bv5NrNcQ'; // Replace with your actual App ID
        const locationId = 'LT7D4TF1WHEGR'; // Replace with your actual Location ID

        const payments = Square.payments(appId, locationId);

        // Initialize Card payment method
        const card = await payments.card();
        await card.attach('#card-container');

        // Handle card payment
        const cardButton = document.getElementById('card-button');
        cardButton.addEventListener('click', async () => {
            const statusContainer = document.getElementById('payment-status-container');
            statusContainer.innerHTML = ''; // Clear previous messages
            try {
                const result = await card.tokenize();
                if (result.status === 'OK') {
                    const token = result.token;
                    
                    // Show a loading message
                    statusContainer.innerHTML = 'Processing payment, please wait...';

                    // Send the token to your backend for payment processing
                    @this.processPayment(token);
                } else {
                    throw new Error(`Card Tokenization failed: ${result.status}`);
                }
            } catch (error) {
                statusContainer.innerHTML = `<p class="text-red-500">Payment Failed: ${error.message}</p>`;
            }
        });

        // Handle invoice click event
        const invoiceButton = document.getElementById('invoice-button');
        invoiceButton.addEventListener('click', () => {
            const statusContainer = document.getElementById('payment-status-container');
            statusContainer.innerHTML = 'Sending invoice, please wait...';
            @this.sendInvoice();
        });
    </script>

    @script
    <script>
        // Listen for payment success
        $wire.on('payment-success', () => {
            const statusContainer = document.getElementById('payment-status-container');
            statusContainer.innerHTML = '<p class="text-green-500">Payment successful! Redirecting...</p>';
            setTimeout(() => {
                location.href = '/order/{{ $order->id }}/{{auth()->user()->id}}';
            }, 2000); // Redirect after 2 seconds
        });

        // Listen for payment failure
        $wire.on('payment-failed', (event) => {
            const statusContainer = document.getElementById('payment-status-container');
            statusContainer.innerHTML = `<p class="text-red-500">${event.detail.message}</p>`;
        });

        // Listen for invoice sent
        $wire.on('invoice-sent', (event) => {
            const statusContainer = document.getElementById('payment-status-container');
            statusContainer.innerHTML = `<p class="text-blue-500">${event.detail.message}</p>`;
        });
    </script>
    @endscript
</div>
