<!DOCTYPE html>
<html>
<head>
    <title>Print QR Sticker</title>

    <style>
        @media print {
            .no-print { display: none; }
            @page { margin: 0; }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f0f0f0;
        }

        .sticker-container {
            width: 10cm;
            height: 14cm;
            background: white;
            margin: 0 auto;
            padding: 1cm;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            page-break-after: always;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
            color: #0066cc;
            margin: 0;
        }

        .document-title {
            font-size: 14px;
            color: #666;
            margin: 5px 0;
        }

        .qr-section {
            text-align: center;
            margin: 20px 0;
        }

        .qr-section img {
            width: 200px;
            height: 200px;
            border: 2px solid #333;
            padding: 10px;
        }

        .qr-code-text {
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-top: 10px;
        }

        .details-section {
            margin-top: 20px;
            font-size: 12px;
        }

        .detail-row {
            display: flex;
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }

        .detail-label {
            font-weight: bold;
            width: 120px;
            color: #333;
        }

        .detail-value {
            flex: 1;
            color: #666;
        }

        .items-section {
            margin-top: 20px;
        }

        .items-title {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
            color: #333;
        }

        .item {
            padding: 5px 0;
            font-size: 11px;
            border-bottom: 1px dashed #ddd;
        }

        .instructions {
            margin-top: 20px;
            padding: 10px;
            background: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 5px;
            font-size: 11px;
        }

        .print-button {
            margin: 20px auto;
            display: block;
            padding: 15px 40px;
            background: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .print-button:hover {
            background: #0052a3;
        }
    </style>
</head>

<body>

<button class="print-button no-print" onclick="window.print()">Print Sticker</button>

<div class="sticker-container">

    <div class="header">
        <h1 class="company-name">LA SIEN</h1>
        <p class="document-title">DELIVERY QR CODE</p>
    </div>

    <div class="qr-section">
        <img src="qr_placeholder.png" alt="QR Code">
        <div class="qr-code-text">QR-DEL-2025-001</div>
    </div>

    <div class="details-section">

        <div class="detail-row">
            <span class="detail-label">Delivery Type:</span>
            <span class="detail-value">RAW MATERIAL</span>
        </div>

        <div class="detail-row">
            <span class="detail-label">Reference ID:</span>
            <span class="detail-value">REF-1024</span>
        </div>

        <div class="detail-row">
            <span class="detail-label">Supplier:</span>
            <span class="detail-value">Global Chemical Supplies Ltd</span>
        </div>

        <div class="detail-row">
            <span class="detail-label">Date Created:</span>
            <span class="detail-value">12 May 2025, 09:45 AM</span>
        </div>

        <div class="detail-row">
            <span class="detail-label">Status:</span>
            <span class="detail-value">PENDING</span>
        </div>

    </div>

    <div class="items-section">
        <div class="items-title">Items in this Delivery:</div>

        <div class="item">• Sodium Hydroxide - Qty: 500 kg</div>
        <div class="item">• Purified Water - Qty: 1000 Litres</div>
        <div class="item">• Industrial Salt - Qty: 300 kg</div>
    </div>

    <div class="instructions">
        <strong>SCANNING INSTRUCTIONS:</strong><br>
        1. Officers can view these details before scanning<br>
        2. Use the mobile scanner to scan the QR code<br>
        3. Verify items match the delivery<br>
        4. Confirm receipt in the system
    </div>

</div>

</body>
</html>
