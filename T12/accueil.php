<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueil.css">
</head>

<body>

    <header>
        <div class="logo">
            <h2>A<span>N</span>A<span>S</span> A<span>T</span>O<span>U</span>
                <h2>
        </div>
        <div class="nav-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Aboute</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="dark">
            <span><ion-icon name="moon-sharp"></ion-icon></span>
        </div>
    </header>
    <main>
        <section class="presentation">

            <div class="part-text">
                <p><span>Hello</span>, My name is</p>
                <h1>ANAS<span> ATOU</span>
                </h1>

                <p class="text1">I am a passionate <span>Web developer</span></p>

                <p class="text2">I build cool stuff with PHP, Laravel, and React. If it’s broken, I’ll fix it; if it
                    doesn’t exist, I’ll
                    code it. Let’s create something awesome together!</p>




            </div>

            <div class="image-profil">
                <img src="images/anascostim.png
                " alt="">
            </div>



        </section>


        <h1 class="prejecttt">My project </h1>
        <section class="project">




            <?php foreach ($project as $proje): ?>
                <div class="card">
                    <a href=""><img src="images/<?= htmlspecialchars($proje['image']) ?>" alt=""></a>
                    <div class="part2">
                        <h2><?= htmlspecialchars($proje['titre']) ?></h2>
                        <p><?= htmlspecialchars($proje['text']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="card">
                <a href=""><img src="images/para.png" alt=""></a>
                <div class="part2">
                <h2>System Gestion Parapharmaces</h2>
                <p>As part of our final year project, we developed a parapharmacy management system aimed at improving internal operations. The system facilitates the management of products, suppliers, inventory, and sales. It allows users to add, update, and delete products while ensuring real-time stock monitoring.</p>
            </div>
            </div>
            <div class="card">
                <a href="page-detail.html"><img src="images/foto1.png" alt=""></a>
               <div class="part2">
                 <h2>E-commerce Website</h2>
                <p>le site proposeplusieurs catégo ries comme les jeu, les portefeuilles , les cartes cadeaux et les accessoires. il inclut aussi un systéme de gestion des paniers, des commandes et des paiements sécurisés .</p>
               </div>
            </div> -->
        

        </section>

    </main>

    <footer>
        <p>create by anas </p>
    </footer>



    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>