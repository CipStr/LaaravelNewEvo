<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>

    <link href="/product_page.css" rel="stylesheet">
    <link href="/colors.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <link href="/desktop.css" rel="stylesheet">
    <link href="/styleAcc.css" rel="stylesheet">
    <link href="/single_product.css" rel="stylesheet">
    <link href="/form.css" rel="stylesheet">
    <link href="/menu.css" rel="stylesheet">
   
    <title><?php echo "Home"; ?></title>
</head>
<body class="<?php echo "light_mode"; ?>">
    <header>
        <!-- Menù iniziale con logo e login-->
        <nav>
            <a class="logo" href="index.php" ><img src="/icons/Logo.png" alt="Website logo" class="icon" /></a>
            <a class="removable" href="index.php"><h1><?php echo "NewEvo"; ?></h1></a>
            <a class="login" href="login.php"><img src="/icons/Login_modern.png" alt="Login logo" class="icon" /><p>Accedi</p></a>
            <a class="menu"><img src="../icons/menu.png" alt="General menu logo" class="icon" /><p>Menu</p></a>
        </nav>
    </header>
    <ul class="profile">
        <li>
            Close
        </li>
        <li id="<?php echo "Ciprian";?>">
            <?php echo "Nome utente: ". "Ciprian"; ?>
        </li>
        <li>
            <?php echo "Data di nascita: ";?>
        </li>
        <li>
            <?php echo "Indirizzo predefinito di consegna:";?>
        </li>
    </ul>
    <ul class="history">
        <li>
            Close
        </li>
        <li name="">
            <?php echo "ID Ordine: "." Stato: "; ?>
            <div class="progress-container">
                <div class="progress"></div>
            </div>
        </li>
    </ul>
    <ul class="notify">
        <li>
            Close
        </li>
    </ul>
    <!--Menù categorie a comparsa-->
    <div class="accordion">
        <button>
                Categorie
        </button>
        <ul>
            <li>
                <a href="product.php?categoryName=All">Tutti i prodotti</a>
            </li>
            <li>
                <a href="product.php?categoryName=<?php echo "placeholder";?>"><?php echo "placeholder";?></a>
            </li>
            <li>
                <a href="product.php?categoryName=Saldi">Saldi</a>
            </li>     
        </ul>
        <button>
                Contatti
        </button>
        <ul>
            <li>
                Thomas Capelli, <a href="mailto:thomascapelli@gmail.com"> Send Mail</a>
            </li>
            <li> 
                Ciprian Stricescu, <a href="mailto:ciprianstricescu@gmail.com"> Send Mail</a>
            </li>
        </ul>
    </div>
    <!--Menù a comparsa quando si clicca sull'icona account-->
    <div class="account_background">
        <div class="account_navigation">
            <ul>
                <li class="list" id="profilo">
                        <span class="icon_A_nav"><img src="/icons/prince.png" alt="My account logo"/></span>
                        <span class="text_A_nav">Profilo</span>
                    </a>
                </li>
                <li class="list" id="storico">
                    <a href=#>
                        <span class="icon_A_nav"><img src="/icons/fantasy.png" alt="My orders logo"/>?<span class="badge"></span></span>
                        <span class="text_A_nav">Storico</span>
                    </a
                </li>
                <li id="messaggi" class="list">
                    <a href=#>
                        <span class="icon_A_nav"><img src="/icons/message.png" alt="My messages logo"/>
                        <span class="text_A_nav">Messaggi</span>
                    </a>
                </li>
                <li id="light" class="list">
                    <a href=#>
                        <span class="icon_A_nav"><img src="/icons/candle.png" alt="Light logo"/></span>
                        <span class="text_A_nav">Dark mode</span>
                    </a>
                </li>
                <li class="list">
                    <a href="logout.php" >
                        <span class="icon_A_nav"><img src="/icons/gate.png" alt="Logout logo"/></span>
                        <span class="text_A_nav">Logout</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>
    </div>
    <div class="snackbar"></div>
    <!-- Menù categorie -->
    <?php if(true) :?>
    <nav class="stickynav">
        <ul id="stickyNav">        
        @for($k=0 ; $k < 4 ; $k++)
        <li><a href="#"><img src="/icons/fleur-de-lis.png" alt="category logo" class="icon" /><p><?php echo "placeholder"; ?></p></a></li>
        @endfor
        </ul>
    </nav>
    <?php endif;?>
    <main >
    <section>
        <h2>Più venduti</h2>
        <div class="slideshow-container fade">
            <div class="Containers">
              <div class="MessageInfo"><?php echo "placeholder";?>/<?php echo "placeholder";?></div>
              <a href="#"><img src="/icons/fleur-de-lis.png" alt="image"></a>
              <div class="Info"><?php echo "placeholder";?></div>
            </div> 
            <!-- Back and forward buttons -->
            <a class="back">&#10094;</a>
            <a class="forward">&#10095;</a>
        </div>
        <!-- The circles/dots -->
        <div>
                <span class="dots"></span>
        </div>
        </section>
            <section id="forsale">
                <header>
                    <h2>Ultime offerte</h2>
                    <a href="product.php?categoryName=Saldi">Vedi tutte</a>
                    <ul>
                    @for ($i = 0; $i < 10; $i++)
                        <li>
                            <a href="#" >
                            <article>
                                <header>
                                <div>
                                    <img src="/icons/fleur-de-lis.png" alt="image"/>
                                </div>
                                </header>
                                <section>
                                    <h3><?php echo "placeholder";?></h3>
                                    <p><?php echo "placeholder";?></p>
                                    <del><?php echo "placeholder"; ?>&#8364;</del>
                                    <p><?php echo "placeholder" ?>&#8364;</p>
                                 </section>
                            </article>
                            </a>
                        </li>
                    @endfor
                    </ul>
            </header>
        </section>
    </main>
    <footer>
        <section>
            <h3>Torna su</h3>
            <a href="#" ><div><img src="/icons/shield_color.png" alt="Website Logo"/></div><p><?php echo "placeholder"; ?></p></a>
        </section>
        <section>
            <h3>Trovaci su</h3>
            <a href="https://www.instagram.com/" target="_blank"><div><img src="/icons/artboard.png" alt="Medieval Instagram Logo"/></div><p>Pittura</p></a>
            <a href="https://www.facebook.com/" target="_blank"><div><img src="/icons/manuscript.png" alt="Medieval Facebook Logo"/></div><p>Faccialibro</p></a>
            <a href="https://twitter.com/?lang=en" target="_blank"><div><img src="/icons/carrier-pigeon.png" alt="Medieval Twitter Logo"/></div><p>Cinguettio</p></a>
        </section>
        <section>
            <h3>Metodi di pagamento</h3>
            <div><img src="/icons/gem_color.png" alt="Gem Payment"/></div>
            <div><img src="/icons/paypal.png" alt="Paypal Logo"/></div>
            <div><img src="/icons/money-bag_color.png" alt="Cash Payment"/></div>
        </section>    
    </footer>
</body>
</html>