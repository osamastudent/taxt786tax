<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
        .scroll-container {
            width: auto ;
            height: 550px;
            overflow-y: hidden; /* Hide the vertical scrollbar initially */
            overflow-x: hidden; /* This hides the horizontal scrollbar */
            position: relative; /* Add position relative for absolute button positioning */
        }

        ul {
            list-style: none;
            padding: 0;
            transition: transform 0.3s ease; /* Add smooth transition for li elements */
        }

        li {
            margin-bottom: 20px;
        }

        /* Add some styling to the "Next" and "Previous" buttons */
        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        li{
            border: solid 1px ;
        }
    </style>

</head>
<body>

    <div class="scroll-container">
        <ul>
           <li class=""><h1>one</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi saepe quo harum repellendus aperiam nam sapiente, maiores est ipsa mollitia earum ratione fuga porro quos possimus assumenda vero officia aut.</p>
    </li>

    <li><h1>two</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi saepe quo harum repellendus aperiam nam sapiente, maiores est ipsa mollitia earum ratione fuga porro quos possimus assumenda vero officia aut.</p>
    </li>
    <li><h1>three</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi saepe quo harum repellendus aperiam nam sapiente, maiores est ipsa mollitia earum ratione fuga porro quos possimus assumenda vero officia aut.</p>
    </li>
    <li><h1>four</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi saepe quo harum repellendus aperiam nam sapiente, maiores est ipsa mollitia earum ratione fuga porro quos possimus assumenda vero officia aut.</p>
    </li>
    <li><h1>fiv</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi saepe quo harum repellendus aperiam nam sapiente, maiores est ipsa mollitia earum ratione fuga porro quos possimus assumenda vero officia aut.</p>
    </li>
    <li><h1>Pakistan</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi saepe quo harum repellendus aperiam nam sapiente, maiores est ipsa mollitia earum ratione fuga porro quos possimus assumenda vero officia aut.</p>
    </li>
    <li><h1>Pakistan</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi saepe quo harum repellendus aperiam nam sapiente, maiores est ipsa mollitia earum ratione fuga porro quos possimus assumenda vero officia aut.</p>
    </li>

        </ul>
    </div>
    <button id="prevButton"><i class="fa-sharp fa-solid fa-chevron-down"></i></button>
    <button id="nextButton"><i class="fa-sharp fa-solid fa-chevron-up"></i></button>
    <script>
        const container = document.querySelector('.scroll-container');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
        const liElements = container.querySelectorAll('li');
        let currentIndex = 0;
        const itemsPerClick = 1;

        // Add click event listeners for the buttons
        prevButton.addEventListener('click', () => {
            currentIndex = Math.max(currentIndex - itemsPerClick, 0);
            updateVisibleItems();
        });

        nextButton.addEventListener('click', () => {
            currentIndex = Math.min(currentIndex + itemsPerClick, liElements.length - itemsPerClick);
            updateVisibleItems();
        });

        // Function to update the visible items
        function updateVisibleItems() {
            const translateY = -currentIndex * liElements[0].offsetHeight;
            container.querySelector('ul').style.transform = `translatex(${translateY}px)`;
        }
    </script>
</body>
</html>
