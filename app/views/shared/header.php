<?php
$home = 'class="nav-link"';
$demo = 'class="nav-link"';
$source = 'class="nav-link"';

switch ($data['title']) {
    case 'Home':
        $home = 'class="nav-link active" aria-current="page"';
        break;

    case 'Demo':
        $demo = 'class="nav-link active" aria-current="page"';
        break;

    case 'Source':
        $source = 'class="nav-link active" aria-current="page"';
        break;
}
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <title>AvdragsBerserk: A Coding Project By Alexander Nævdal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5db21ba9c6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/prism.css">
</head>

<body class="d-flex flex-column h-100">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AvdragsBerserk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a <?php echo $home; ?> href="<?php echo URLROOT; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo $demo; ?> href="<?php echo URLROOT; ?>/demo">The App</a>
                    </li>
                    <li class="nav-item">
                        <a <?php echo $source; ?> href="<?php echo URLROOT; ?>/source">The Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://github.com/alexnaev/AvdragsBerserk">Git Repo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>