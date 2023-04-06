<!DOCTYPE html>
<html>
    <head>
        <title>CRACK GAMES</title>
        <!-- menghubungkan dengan file css -->
        <link rel="stylesheet" type="text/css" href="stylegemm.css">
        <!-- menghubungkan dengan file jquery -->
        <script type="text/javascript" src="jquery.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    </head>

    <div class="content">
        <header>
            <img class="logo" src="logogem.jpg">
            <h1 class="judul">CRACK GAMES</h1>
            <h3 class="deskripsi">www.hilmicrackgames.com</h3>
        </header>
        <div class="menu">
            <ul>
                <li><a href="crackgamehalaman.php?page=home">HOME</a></li>
                <li><a href="crackgamehalaman.php?page=aboutus">ABOUT US</a></li>
                <li><a href="crackgamehalaman.php?page=tutorial">TUTORIAL DOWNLOAD</a></li>
                <li><a href="crackgamehalaman.php?page=update">UPDATES GAMES</a></li>
                <li><a href="crackgamehalaman.php?page=daftar">LOGIN TO JOIN US</a></li>
            </ul>
        </div>
    </div>
    
    <div class="badan">


    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'home';
            include "halaman/home.php";
            break;
            case 'aboutus';
            include "halaman/aboutus.php";
            break;
            case 'tutorial';
            include "halaman/tutorial.php";
            break;
            case 'update';
            include "halaman/update.php";
            break;
            case 'daftar';
            include "halaman/daftar.php";
            break;
            case 'mileshome';
            include "halaman/mileshome.php";
            break;
            case 'bendyhome';
            include "halaman/bendyhome.php";
            break;
            case 'bendydrhome';
            include "halaman/bendydrhome.php";
            break;
            case 'poppyhome';
            include "halaman/poppyhome.php";
            break;
            case 'kratoshome';
            include "halaman/kratoshome.php";
            break;
            case 'spidermanhome';
            include "halaman/spidermanhome.php";
            break;
            case 'peshome';
            include "halaman/peshome.php";
            break;
            case 'fifahome';
            include "halaman/fifahome.php";
            break;
            case 'poppy2home';
            include "halaman/poppy2home.php";
            break;
            default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
        }
    }else{
        include "halaman/home.php";
    }

    ?>

    </div>
</div>
</body>
</html>