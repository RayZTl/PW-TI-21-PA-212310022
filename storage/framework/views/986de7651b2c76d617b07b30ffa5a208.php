<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW-IBIK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</head>

<body class="bg-body-tertiary">
    <header>
        
    </header>
    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="container mt-5">
        <p class="fs-7">Copyright &copy; 2023 <i class="bi bi-star"></i></p>
    </footer>
</body>

</html>
<?php echo $__env->make('templates.headers.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PW-212310022\Praktikum_6\resources\views/templates/layouts.blade.php ENDPATH**/ ?>