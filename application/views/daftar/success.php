    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .payment-container {
            width: 360px;
            margin: 50px auto;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .payment-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e6e6e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .payment-header img {
            width: 50px;
        }
        .payment-header .total-amount {
            font-weight: bold;
            font-size: 20px;
        }
        .payment-timer {
            text-align: right;
            color: #666;
            font-size: 12px;
        }
        .payment-methods {
            margin-top: 10px;
        }
        .payment-methods h4 {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .method {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #e6e6e6;
            margin-bottom: 15px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }
        .method img {
            width: 30px;
            margin-right: 10px;
        }
        .method:hover {
            background-color: #f0f0f5;
        }
        .method h5 {
            margin: 0;
            font-size: 14px;
        }
    </style>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="payment-container">
        <!-- Payment Header -->
        <div class="payment-header">
<p>Multiverse Marketing</p>
            <div>
                <div class="total-amount">Rp3.500.000</div>
                <div class="payment-timer">Order ID #34345465454</div>
                <div class="payment-timer">Pilih dalam: 00:56:32</div>
            </div>
        </div>


        <!-- Payment Methods -->
        <div class="payment-methods">
            <h4> Terima kasih telah mendaftar sebagai member kami. Registrasi Anda telah berhasil. 
            Selanjutnya, silakan melakukan pembayaran untuk mengaktifkan akun Anda.</h4>
            <h4>Metode Pembayaran</h4>

            <!-- Transfer Bank -->
            <div class="method">
                <img src="https://png.pngtree.com/png-vector/20221121/ourmid/pngtree-bca-bank-logo-png-image_6472275.png" alt="Bank Transfer">
                <h5>Transfer Bank</h5>
            </div>

            <!-- Kartu Kredit/Debit -->
            <div class="method">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXx2FEzRP0r9rRoEWifMuxvyXoy2hf63gprQ&s" alt="Kartu Kredit/Debit">
                <h5>Kartu Kredit/Debit</h5>
            </div>

            <!-- Gopay/QRIS -->
            <div class="method">
                <img src="https://i.pinimg.com/originals/af/97/69/af976994ad0ae37fc607fd64bbc195ea.png" alt="Gopay/QRIS">
                <h5>Gopay/QRIS</h5>
            </div>
        </div>
    </div>
