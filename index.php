<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Tailwindcss -->
    <link href="./dist/output.css" rel="stylesheet">

    <!-- Fonts Figtree -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600" rel="stylesheet"/>

    <!-- Organizational Chart -->
    <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>
    <link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">

    <title>Website Resmi Desa Sako</title>
</head>

<body class="font-sans antialiased">

<!-- bottom naivgation for mobile device -->
<?php include_once "./src/views/bottom-navigation.php"; ?>

<div class="min-h-screen bg-zinc-50 dark:bg-black">
    <?php include_once "./src/views/navigation.php"; ?>

    <main>
        <?php include_once "./src/views/jumbotron.php"; ?>

        <?php include_once "./src/views/profile.php"; ?>

        <?php include_once "./src/views/struktur-pemerintahan-desa.php"; ?>

        <?php include_once "./src/views/agenda.php"; ?>

        <?php include_once "./src/views/layanan-publik.php"; ?>

        <?php include_once "./src/views/berita.php"; ?>

        <?php include_once "./src/views/gallery.php"; ?>
    </main>
</div>

<?php include_once "./src/views/footer.php"; ?>

<button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>

<script type="module" src="./src/js/app.js"></script>
</body>

</html>