<?php include("../php/components/material_nutriblog.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutriblog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <style>
        .hover-steer-left {
            transition: transform 0.5s ease;
        }

        .hover-steer-left:hover {
            transform: translateX(-20px);
        }

        .bg_image {
            background-image: url('https://storage.googleapis.com/nutriverse/blog-home.png');
            background-size: 120%;
            background-position: center;
        }
        .text {
            color: #4a4a4a;
            font-family: Poppins;
        }

        .title {
            color: #4a4a4a;
            transition: color 0.2s ease;
            font-family: Poppins;
        }

        .title:hover {
            color: #1ab394;
            font-family: Poppins;
        }

        .text_accent {
            color: #1ab394;
            font-family: Poppins;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .primary {
            color: #231f20;
            transition: color 0.2s ease;
            font-family: Poppins 100;
        }

        .primary:hover {
            color: #3b3738;
            font-family: Poppins 100;
        }
    </style>
</head>

<body class="w-full h-screen overflow-x-hidden">
    <!-- Nav bar -->
    <section>
        <?= blog_navbar(content: false) ?>
    </section>

    <!-- Main Section -->
    <main class="min-h-screen mt-12">
        <button id="dropdown-button"
            class="flex bg-[#231f20] text-white px-4 py-2 rounded-full items-center space-x-2 hover:bg-[#414040]">
            <span class="text-lg font-bold">+</span>
            <span class="hidden md:inline text-sm font-semibold">Add Content</span>
        </button>
        <!-- Dropdown Button -->
        <div class="relative">

            <!-- Dropdown Menu -->
            <div id="dropdown-menu"
                class="hidden absolute left-0 mt-2 bg-white border border-gray-200 shadow-lg rounded-md w-48 z-10">
                <ul class="py-2">
                    <li>
                        <button onclick="addElement('h1')" class="block w-full px-4 py-2 hover:bg-gray-100">Heading
                            1</button>
                    </li>
                    <li>
                        <button onclick="addElement('h2')" class="block w-full px-4 py-2 hover:bg-gray-100">Heading
                            2</button>
                    </li>
                    <li>
                        <button onclick="addElement('p')"
                            class="block w-full px-4 py-2 hover:bg-gray-100">Paragraph</button>
                    </li>
                    <li>
                        <button onclick="addElement('img')"
                            class="block w-full px-4 py-2 hover:bg-gray-100">Image</button>
                    </li>
                    <li>
                        <button onclick="addElement('a')" class="block w-full px-4 py-2 hover:bg-gray-100">URL</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-center">
            <h2 class="text-3xl font-bold text-[#231f20]">
                <span class="bg-[#231f20] text-white px-2 py-1">Write</span> your Own blog.
            </h2>
        </div>

        <!-- Blog Form -->
        <div class="mt-12 sm:mx-auto sm:w-full sm:max-w-lg">
            <form id="blog-form" class="space-y-6">
                <div id="form-elements-container"></div>
                <button type="submit"
                    class="w-full bg-[#231f20] text-white py-2 px-4 rounded hover:bg-[#414040] focus:ring focus:ring-[#231f20]">
                    Submit Blog
                </button>
            </form>
        </div>
    </main>

    <!-- Footer -->
   <?=footer()?>

    <!-- Scripts -->
    <script>
        // Dropdown Menu Toggle
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Dynamically Add Form Elements
        function addElement(tag) {
            const container = document.getElementById('form-elements-container');
            let element;

            switch (tag) {
                case 'img':
                    element = document.createElement('input');
                    element.type = 'file';
                    element.accept = 'image/*';
                    break;
                case 'a':
                    element = document.createElement('input');
                    element.type = 'url';
                    element.placeholder = 'Enter URL';
                    break;
                default:
                    element = document.createElement(tag);
                    element.textContent = `Your ${tag}`;
                    element.setAttribute('contentEditable', 'true'); // Make the element editable
            }

            // Add styling for consistency
            element.className = 'block w-full mt-4 p-2 border border-gray-300 rounded';
            container.appendChild(element);
        }

    </script>
</body>

</html>