<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Website</title>
    <style>
        *, html, body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f2f2f2;
            margin-top: 80px;
        }

        :root {
            --primary: #007bff;
            --secondary: #28a745;
            --background: #f8f9fa;
            --text: #343a40;
            --nav-bg: rgba(255, 255, 255, 0.8);
        }

        header {
            position: fixed;
            top: 0;
            background-color: var(--nav-bg);
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 10;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            max-width: 1200px;
        }

        .logo img {
            max-height: 50px;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 12px;
            margin-left: 25px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: var(--primary);
            color: #fff;
        }

        .nav-links .active {
            background-color: var(--primary);
            color: #fff !important;
        }

        .nav-links .active:hover {
            background-color: var(--secondary);
        }

        .dropdown {
            position: relative;
        }

        .dropdown .dropbtn {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .dropdown .dropbtn:hover {
            background-color: var(--primary);
            color: #fff;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 60px;
            left: 0;
            background-color: var(--nav-bg);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: var(--text);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #e9ecef;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .menu-toggle {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: var(--text);
            cursor: pointer;
            background-color: var(--nav-bg);
        }

        @media (max-width: 769px) {
            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                right: 0;
                width: 200px;
                background-color: var(--nav-bg);
            }

            .nav-links.show {
                display: flex;
            }

            .nav-links a {
                margin-left: 0;
                text-align: center;
            }

            .dropdown-content {
                position: static;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="your-logo.png" alt="Your Logo">
            </div>
            <div class="nav-links">
                <a href="#" class="active">Home</a>
                <div class="dropdown">
                    <a href="#" class="dropbtn">About Us</a>
                    <div class="dropdown-content">
                        <a href="#">Our Team</a>
                        <a href="#">Our Mission</a>
                    </div>
                </div>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </div>
            <button class="menu-toggle">&#9776;</button>
        </nav>
    </header>
    <main>
    </main>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });

        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', (event) => {
                event.stopPropagation();
                dropdown.querySelector('.dropdown-content').classList.toggle('show');
            });
        });

        document.addEventListener('click', (event) => {
            dropdowns.forEach(dropdown => {
                if (!dropdown.contains(event.target)) {
                    dropdown.querySelector('.dropdown-content').classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
