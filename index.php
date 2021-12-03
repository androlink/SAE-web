<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    <link href="style/style index.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style_import.css">

</head>
<body>
    <?php
        include("part/header.html");
    ?>
    <div>
        <aside>
        </aside>
        <main>
            <div class="content"> <!-- Caroussel-->
                <div class="gallery-item slider-container">
                    <div class="slide-holder">
                        <img src="Images/Carroussel/Amphi.jpg" alt="" />
                        <img src="Images/Carroussel/Schema_BUT_2021.png" alt="" />
                        <img src="Images/Carroussel/Schema_BUT_2021.png" alt="" />
                        <img src="Images/Carroussel/Amphi.jpg" alt="" />
                    </div>
                </div>
            </div>
            <span> <!-- actus -->
                <div>
                    <h1> Actus</h1>
                    <h2> Actualités de l'IUT</h2>
                </div>
                <ul>
                    <li id="article1" class="event">
                        <a href="https://iut.univ-lyon1.fr/campus/bibliotheque/exposition-les-fruits-et-les-legumes-du-monde-entier#.YZjxddDMJQA" >
                            <span>
                                <div class="img img-top"> </div>
                                <article>
                                    <p class="date"> Du 15/11/2021 au 10/12/2021 </p>
                                    <h3> Exposition: Les fruits et les légumes du monde entier </h3>
                                    <p> L'année a été déclarrée "Année internationale des fruits et des légumes" par l'Assemblée générale des Nations Unis. A cette occasion et pour sensibiliser au rôle important des fruits et légumes dans la nutrition, la sécurité alimentaire et la santé humaine, la bibliothèque accueille l'exposition."</p>
                                </article>
                                <span>+</span>
                            </span>
                        </a>
                    </li>
                    <li id="article2" class="formation">
                        <a href="https://iut.univ-lyon1.fr/formation/offre-de-formations/informatique-bourg-en-bresse/forum-des-metiers-de-linformatique-a-bourg-en-bresse#.YZjxhtDMJQA" >
                            <span>
                                <div class="img img-top"></div>
                                <article>
                                    <p class="date"> Le 12 novembre 2021</p>
                                    <h3>Forum des métiers de l'Informatique à Bourg-en-Bresse</h3>
                                    <p>Les premières années de BUT informatique organise un forum des métiers visant à rencontrer des professionnels dans le domaine et vous permettre de leur poser des questions.</p>
                                </article>
                                <span>+</span>
                            </span>
                        </a>
                    </li>
                    <li id="article3" class="event">
                        <a href="https://iut.univ-lyon1.fr/campus/bibliotheque/concours-decriture-2021-2022-de-liut-lyon-1#.YZjxmdDMJQA" >
                            <span>
                                <div class="img img-top"></div>
                                <article>
                                    <p class="date"> &nbsp </p> <!--dirty trics?-->
                                    <h3> Concours d'Écriture 2021/2022 de L'IUT Lyon1</h3>
                                    <p>
                                    Les professeur.e.s de techniques d’expression et de communication en partenariat avec la bibliothèque de l’IUT Lyon 1 – Site de Villeurbanne Doua organisent le Concours d’Écriture de l’IUT Lyon 1</p>
                                </article>
                                <span>+</span>
                            </span>
                        </a>
                    </li>
                    <li id="article4" class="formation">
                        <a href="https://iut.univ-lyon1.fr/actualites/et-toi-tu-fais-quoi-apres-le-bac#.YZjwFtDMJQA" >
                            <span>
                                <div class="img img-top"></div>
                                <article>
                                    <p class="date"> &nbsp </p> <!--dirty trics?-->
                                    <h3>Et toi, tu fais quoi après le BAC ?</h3>
                                    <p> Un outil de découverte de métiers à partir de ta personnalité, tes gouts, tes capacités et ton caractère.</p>
                                </article>
                                <span>+</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </span>
            <section> <!-- carte; contact; logos...-->
                <div> <!-- Contact-->
                    <h1>CONTACT</h1>
                    <p>
                        <span>1 rue de la Technologie</span>
                        <span>69622 Villeurbanne Cedex</span>
                        <span>Tél. <a href="tel:334 72 69 20 00"> +33 (0)4 72 69 20 00</a></span>
                    </p>
                </div>
                <div> <!--dessus map-->
                </div>
                <div> <!-- map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d734.7577928071403!2d4.882795097036954!3d45.78614521419196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3029697856ecb11c!2zNDXCsDQ3JzEwLjciTiA0wrA1MycwMS41IkU!5e0!3m2!1sfr!2sfr!4v1637406281762!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div> <!-- Dessous map-->
                </div>
                <div class="logo"> <!-- Logos -->
                    <img src="Images/LOGOS/Region_ARA.png" alt="" />
                    <img src="Images/LOGOS/Rhône_Dpt_.png" alt="" />
                    <img src="Images/LOGOS/Dpt_ain-2018.png" alt="" />
                    <img src="Images/LOGOS/CCI-Lyon-Metropole-Saint-Etienne-Roanne.png" alt="" />
                    <img src="Images/LOGOS/IUT_ain_rhone_loire.jpg" alt="" />
                    <img src="Images/LOGOS/Lyceebranly.jpg" alt="" />
                    <img src="Images/LOGOS/UDL_COBRANDING_ENS.png" alt="" />
                </div>
            </section>
        </main>
    </div>
    <?php
        include("part/footer.html");
    ?>
</body>
</html>