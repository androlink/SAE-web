<!DOCTYPE html>
<html lang="fr">
<head>
    <title>acceuil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style_faq.css">
    <link rel="stylesheet" href="style/style_import.css">
</head>
<body>
    <?php
        include("part/header.html");
    ?>
    <section>
        <aside> <!--marge-->
            <div class=sommaire>
                <ul>
                    <li>
                        <h1><a href="#TRAVAIL">Travail</a></h1>    <!--titre catégorie-->
                        <ul>

                            <li>    <!--question-->
                                <p>test</p>
                            </li>
                            <li>
                                <p>test</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h1><a href="#VIE_ETU">Vie étudiante</a></h1>
                    </li>
                    <li>
                        <h1><a href="#PARENT">questions parents</a></h1>
                    </li>
                    <li>
                        <h1><a href="#AUTRE">Nous contacter</a></h1>
                    </li>
                </ul>
            </div>
        </aside>
        <main>
            <div> <!-- FAQ -->
                <section >  <!--partie questions générales-->
                    <section>
                        <details>
                            <summary> Y a t'il des pré-requis pour avoir accès au BUT INFO et pour ne pas avoir trop de difficultés?</summary>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sequi reprehenderit corporis, saepe ad pariatur perferendis minima quam laborum quibusdam earum est dolorum voluptates error possimus delectus dolorem atque accusamus architecto ea nostrum? Laborum, facere! Veritatis dolore voluptatem autem.</p>
                        </details>
                        <details>
                            <summary id="TRAVAIL"> Quelles sont les quantités de travail en IUT INFORMATIQUE? </summary>
                            <section>
                                <details>
                                    <summary>Dans les matières info? </summary>
                                    <p>Vous aurez environs 18h par semaines de cours d'informatiques (Algorithmie, web, langages de programmation, Base de Donnée, archi, OS) </p>
                                </details>
                                <details>
                                    <summary> Dans les matières hors info? </summary>
                                    <p>Vous aurez environs 11h par semaines de cours ayant des liens lointains avec l'informatique (communication, économie, mathématiques, anglais...) </p>
                                </details>
                                <details>
                                    <summary> Quels sont les horaires de travail? </summary>
                                    <p> Vous pourrez avoir cours entre 8h et 18h avec une pause de 12h a 14h sauf le vendredi de 12h à13h30</p>
                                </details>
                            </section>
                        </details>
                        <details>
                            <summary> Quelles sont les possibles poursuites d’études et insertion dans le monde du travail?</summary>
                            <p></p>
                        </details>
                        <details>
                            <summary> Quel est la compo type d'une promo d'IUT INFO?</summary>
                            <p> la composition est similaire à une classe de STI2D, peu de filles beaucoup de mec (environ 10% de fille avec 3 filles par classes) en espérant que cela évolue dans le future</p>
                        </details>
                        <details>
                            <summary> Devons nous exercer des stages pendant BUT INFO?</summary>
                            <p></p>
                        </details>
                        <details>
                            <summary> Quelles sont les périodes de vacances, jours fériés et ponts?</summary>
                            <p></p>
                        </details>
                    </section>
                    <section>   <!--partie question vie etudiante-->
                        <details>
                            <summary id="VIE_ETU"> Comment est la vie étudiante? </summary>
                            <section>
                                <details>
                                    <summary> Où sont les lieux de restauration?</summary>
                                    <section>
                                        <p> Le studio est une des cafeterias du crous, la plus proche(en face de l'IUT au niveau de l’arrêt de tramway IUT Feyssine). les cafeterias du crous vous propose un menu étudiant composé d'un sandwich, d'un yaourt et d'un dessert pour le même prix que le menu du restaurant universitaire. Vous pouvez également prendre un plat chaud ou plein d'autres choses (ça ressemble a une supérette). nous vous conseillons de manger ailleurs car les prix sont élevés.</p>
                                        <p> L’Archimède est aussi une cafèt du crous,en face de l’arrêt de tram INSA EINSTEIN, mais vous permet d'avoir, avec le menu étudiant, des sandwiches de meilleure qualité qu'au studio.</p>
                                        <p> Le restau U "Jussieux" est sur l'avenue Einstein, à deux min à pieds de l’arrêt de tram du même nom. Au restaurant universitaire, vous avez un menu étudiant de six points pour 3,30€ et 1€ pour les boursiers. Une entrée est à un ou deux points, un plat chaud est à 4 points et les desserts sont entre 1 et 3 points. Si vous dépassez les 6 points, chaque points supplémentaires coûtent 55 centimes.</p>
                                        <p> Vous pouvez également amener vos repas et manger dans les locaux de l'iut ou manger dans les nombreux restaurants situés aux alentours.</p>
                                        <p> !!!Nous vous rappelons que vous disposerez de 2h pour manger sauf le vendredi d'1h30!!!</p>
                                    </section>
                                </details>
                                <details>
                                    <summary>Quelles est l'accessibilité aux activités sportives autour de l'IUT?</summary>
                                    <section>
                                    <p> les horaires sont un peu contraignante il y a peu d'activité sportive d'accessible dû aux cours qui finisse tard</p>
                                        </section>
                                </details>
                                <details>
                                    <summary>Quelles est l'accessibilité aux activités culturelles autour de l'IUT?</summary>
                                    <section>
                                        <p> on accés à deux bibliothèques qui possède pas mal d'ouvrage</p>
                                    </section>
                                </details>
                            </section>
                        </details>
                    </section>
                </section>
                <section>  <!--partie questions parents-->
                    <details>
                        <summary id="PARENT">Économie</summary>
                        <section>
                            <details>
                                <summary>Quels sont les coûts de la formation</summary>
                                <section>
                                    <p> il faut compter environ 172€ pour la formation (obligatoire)<p>
                                    <p> 90€ pour l'abonnement du CROUS (obligatoire)</p>

                                </section>
                            </details>
                            <details>
                                <summary>Quels sont les coûts des logements autour du campus?</summary>
                                <section>
                                    <p> Résidences publiques du Crous : 150€ à 250€ (chambre) </p>
                                    <p> Résidence étudiante privée : 500€ à 950€ (studio meublé), 480€ (chambre en colocation)</p>
                                    <p> Location entre particuliers : à partir de 500€ (studio meublé), min 500€ (chambre en colocation)</p>

                                </section>
                            </details>
                            <details>
                                <summary>Quels sont les prix des transports sur lyon?</summary>
                                <section>
                                    <p> 10€ pour un abonnement aux services TCL(tram, metro et bus)</p>
                                </section>
                            </details>
                        </section>
                    </details>
                    <details>
                        <summary>Quels sont les services de santé sur le site de la DOUA?</summary>
                        <p><p>
                    </details>
                    <details>
                        <summary>Situation géographique</summary>
                        <section>
                            <details>
                                <summary>Quels sont les magasins à proximité du site de la DOUA?</summary>
                                <section>
                                    <p> on peut retrouver un carfour a environ 15min de l'IUT <p>
                                    <p> il y a aussi un vival a 25min <p>
                                </section>
                            </details>
                            <details>
                                <summary>Quels transports desservent l'IUT?</summary>
                                <p> pour les transports on a le tram T1 qui part de l'IUT Feyssine et qui pars en direction de gratte-ciel en passant par l'arrêt "INSA Einstein"<p>
                            </details>
                        </section>
                    </details>
                </section>
            </div>
            <form> <!-- Autre question / formulaire -->
                <section id="AUTRE">
                    <label for="mail">Mail :</label>
                    <input id="mail">
                </section>
                <select name="formation">
                    <option value="" disabled selected hidden>niveau de formation</option>
                    <option value="parents">parents</option>
                    <option value="bac+">post bac</option>
                    <option value="term">terminal</option>
                    <option value="1ere">premiere</option>
                    <option value="1ere-">avant-premiere</option>
                </select>
                <textarea placeholder="entrez votre question"></textarea>
                <button>envoyer</button>
            </form>
        </main>
    </section>
    <?php
        include("part/footer.html");
    ?>
</body>
</html>