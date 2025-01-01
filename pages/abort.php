<?php
include("../php/components/material_nutriblog.php");
session_start(); ?>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        .bg_image {
            background-image: url('https://storage.googleapis.com/nutriverse/blog-home.png');
            background-size: 120%;
            background-position: center;
        }

        .primary {
            color: #231f20;
            font-family: Poppins 100;
        }

        .text {
            color: #4a4a4a;
            font-family: Poppins 100;
        }

        .hover-steer-left {
            transition: transform 0.5s ease;
            /* Smooth animation effect */
        }

        .hover-steer-left:hover {
            transform: translateX(-20px);
            /* Moves the image 20px to the left */
        }
    </style>
</head>

<body class="h-screen">
    <section>
        <?= blog_navbar(content: false) ?>
        <div class="container mx-auto flex items-center justify-start border-b-2 border-[#231f20]">
    </section>

    <main class="sm:w-screen lg:w-fit">
        <div class="w-screen h-screen text-center mt-12 lg:mt-32">
            <h1 class='primary text-6xl font-semibold'>
                <strong>404</strong>
            </h1>
            <h2 class='primary mt-5 text-2xl font-semibold text-gray-700'>
                <i><?= isset($_SESSION['error_message']) ? $_SESSION['error_message'] : 'Unknown error'; ?></i>
            </h2>
            <a href='/project/pages/blog.php' class="mt-2"><strong>return home</strong></a>
        </div>

    </main>
    <br>
    <!-- Footer -->
    <?= footer() ?>
</body>

</html>