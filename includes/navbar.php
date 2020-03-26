<ul class="nav navbar-nav">
    <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> </a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="overview.php">Overview</a></li>
            <li><a href="aucs2018.php">AUCS Hackathon 2018</a></li>
            <li><a href="aucs2019.php">AUCS Hackathon 2019</a></li>
            <li><a href="devs2019.php">Devs Hackathon 2019</a></li>
            <li><a href="sot2019.php">SoT Create Camp 2019</a></li>
        </ul>
    </li>
    <li <?php if (basename($_SERVER['PHP_SELF']) == 'studio.php' || basename($_SERVER['PHP_SELF']) == 'nature.php' || basename($_SERVER['PHP_SELF']) == 'landscapes.php' || basename($_SERVER['PHP_SELF']) == 'alternativeprocess.php') echo 'class="active"' ?> class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Photography <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="studio.php">Studio</a></li>
            <li><a href="nature.php">Nature</a></li>
            <li><a href="landscape.php">Landscapes</a></li>
            <li><a href="alternativeprocess.php">Alternative Process</a></li>
        </ul>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li><a href="sunnyfeng_resume.pdf" download>Resume <span class="glyphicon glyphicon-download-alt"></span> </a></li>
</ul>
