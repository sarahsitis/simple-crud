<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>/public/css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data['judul']; ?></title>
    <script src="<?= BASEURL; ?>/public/js/sweetalert2.all.min.js"></script>

</head>

<body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                <a href="#" class="brand-logo" style="padding-left:10px;" data-target="slide-out">Booku</a>
                <form action="<?= BASEURL ?>/home/search" method="post">
                    <div class="input-field right" width="500px">
                        <input id="search" name="search" type="search" required autocomplete="off">
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>

    </div>


    <!-- sidenav -->

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="<?= BASEURL; ?>/public/img/bground.jpg">
                </div>
                <a href="#user"><img class="circle" src="<?= BASEURL; ?>/public/img/avatar.jpg"></a>
                <a href="#name"><span class="white-text name">Sarah Siti S</span></a>
                <a href="#email"><span class="white-text email">sarahsitis@gmail.com</span></a>
            </div>
        </li>

        <li><a class="waves-effect" href="#!"><i class="material-icons">exit_to_app</i>Logout</a></li>
    </ul>