<style>
    :root {
        --cur-background: #f8f9fa;
        --cur-card-bg: #ffffff;
        --cur-card-border: #e0e0e0;
        --cur-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        --cur-shadow-hover: 0 8px 16px rgba(0, 0, 0, 0.2);
        --cur-height: 10dvh;
    }

    .parallax {
        position: relative;
        background-image: url('static/img/cus-background.png');
        min-height: var(--cur-height);
        width: 100dvw;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(8px);
    }

    .parallax::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .parallax img {
    position: absolute;
    top: 0;
    left: 0;
    
    object-fit: cover;
    filter: blur(10px); /* Adjust blur radius as needed */
    z-index: 0;
}

    .customer-main {
        position: relative;

        display: flex;
        justify-content: center;
        background-color: transparent;
        z-index: 2;

    }

    .content {
        width: 70dvw;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        padding: 40px;
        justify-items: center;
        align-items: center;
        justify-content: space-evenly;
    }

    .customer-card {
        background-color: var(--cur-card-bg);
        border: 1px solid var(--cur-card-border);
        border-radius: 8px;
        box-shadow: var(--cur-shadow);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        cursor: pointer;
    }

    .customer-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--cur-shadow-hover);
    }

    .customer-card img {
        width: 200px;
        height: 200px;
        object-fit: contain;
        mix-blend-mode: multiply;
    }
</style>
</head>

<body>
    <div class="parallax">
        <div class="customer-main">
            <div class="content">
                <a href="https://www.company1.com" class="customer-card">
                    <img src="static/img/logo1.png" alt="Customer 1"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company2.com" class="customer-card">
                    <img src="static/img/logo2.png" alt="Customer 2"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company3.com" class="customer-card">
                    <img src="static/img/logo3.png" alt="Customer 3"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company4.com" class="customer-card">
                    <img src="static/img/logo4.png" alt="Customer 4"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company5.com" class="customer-card">
                    <img src="static/img/logo5.png" alt="Customer 5"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company6.com" class="customer-card">
                    <img src="static/img/logo6.png" alt="Customer 6"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company7.com" class="customer-card">
                    <img src="static/img/logo7.png" alt="Customer 7"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company8.com" class="customer-card">
                    <img src="static/img/logo8.png" alt="Customer 8"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company9.com" class="customer-card">
                    <img src="static/img/logo9.png" alt="Customer 9"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company10.com" class="customer-card">
                    <img src="static/img/logo10.png" alt="Customer 10"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
                <a href="https://www.company11.com" class="customer-card">
                    <img src="static/img/logo11.png" alt="Customer 11"
                        onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
                </a>
            </div>
        </div>
    </div>
</body>

</html>