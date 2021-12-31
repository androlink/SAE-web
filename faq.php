<!DOCTYPE html>
<html lang="fr">
<head>
    <title>accueil</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style_faq.css">
    <link rel="stylesheet" href="style/style_import.css">
</head>
<body>
    <?php
        include("part/header.html");
    ?>
    <div>
        <aside> <!--marge-->
            <div>
                <ul>
                    <li>    <!--travail-->
                        <a href="#TRAVAIL"><h1>Travail</h1>    <!--titre catégorie--></a>    
                        <ul>
                            <li>
                                <a href ="#Prereki"><p>Prérequis</p></a>
                            </li>
                            <li>
                                <a href ="#Qjob"><p>Quantités de travail</p></a>
                            </li>
                            <li>
                                <a href ="#apres"><p>Poursuites d'études</p></a>
                            </li>
                            <li>
                                <a href ="#promo"><p>Promo, proquoi?</p></a>
                            </li>
                            <li>
                                <a href ="#stage"><p>Stages</p></a>
                            </li>
                            <li>
                                <a href ="#vacances"><p>Vacances & Congés</p></a>
                            </li>
                        </ul>
                    </li>
                    <li> <!--vie etu-->
                        <a href="#VIE_ETU">
                            <h1>Vie étudiante</h1>
                            <ul>
                                <li>
                                    <p>lieu de restauration</p>
                                </li>
                                <li>
                                    <p>activités sportives</p>
                                </li>
                                <li>
                                    <p>activités culturelles</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#PARENT"><h1>questions parents</h1></a>
                        <ul>
                            <li>
                                <a href ="#ECO">
                                <h2>Économie</h2>
                                <ul>
                                    <li>
                                        <p>Coût formation</p>
                                    </li>
                                    <li>
                                        <p>Logement</p>
                                    </li>
                                    <li>
                                        <p>Transports</p>
                                    </li>
                                </ul>
                                </a>
                            </li>
                            <li>
                                <a href ="#sante">
                                <h2>Santé</h2>
                                <ul>
                                    <li>
                                        <p>?</p>
                                    </li>
                                    <li>
                                        <p>?</p>
                                    </li>
                                </ul>
                                </a>
                            </li>
                            <li>
                                <a href ="#geo">
                                <h2>Géographie</h2>
                                <ul>
                                    <li>
                                        <p>Commerce alimentaire</p>
                                    </li>
                                    <li>
                                        <p>Transports déservant l'IUT</p>
                                    </li>
                                </ul>
                                </a>
                            </li>
                        </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#AUTRE">
                        <h1>Nous contacter</h1>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main>
            <div> <!-- FAQ -->
                <section id="TRAVAIL">  <!--partie questions générales-->
                    <section>
                        <details id="Prereki">
                            <summary> Y a-t-il des prérequis pour avoir accès au BUT INFO et pour ne pas avoir trop de difficultés?</summary>
                            <article>
                                <p>Il est possible de candidater à l'aide d'un baccalauréat général, un baccalauréat technologique STI2D, avec n'importe quel type de baccalauréat professionnel ou bien avec un équivalent du bac. Chaque candidature est évaluée.</p>
                                <h3>Spécialités du Bac général :</h3>
                                <section>
                                    <div>
                                        <ul>
                                            <li>Arts</li>
                                            <li>Biologie écologie (Lyc. Agri)</li>
                                            <li>Histoire Géo Géopolitique et Sc.Politiques</li>
                                            <li>Humanités literature et philosophie</li>
                                            <li>Langue littérature et cultures étrangères</li>
                                            <li>littérature langues et cultures de l'antiquité</li>
                                            <li>mathématiques</li>
                                            <li>Numérique et Sciences de l'informatiques</li>
                                            <li>Physique Chimie</li>
                                            <li>Sciences de la vie et de la terre</li>
                                            <li>Sciences de l'ingénieur</li>
                                            <li>Sciences économiques et sociales</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>Complémentaire</li>
                                            <li>Complémentaire</li>
                                            <li>Complémentaire</li>
                                            <li>Complémentaire</li>
                                            <li>Adaptée</li>
                                            <li>Complémentaire</li>
                                            <li>Très adaptée</li>
                                            <li>Très adaptée</li>
                                            <li>Adaptée</li>
                                            <li>Adaptée</li>
                                            <li>Très adaptée</li>
                                            <li>Adaptée</li>
                                        </ul>
                                    </div>
                                </section>
                                <p>Même si ce tableau vous dit quels sont les spécialités les plus adaptés, nous vous conseillons fortement de faire les spécialités Mathématiques et Numériques et Sciences de l'Informatique, car en plus d'augmenter vos chances d'être sélectionné, vous retrouverez ces matières. Il est donc avantageux d'avoir déjà un bagage en arrivant.</p>
                            </article>
                        </details>
                        <details>
                            <summary id="Qjob"> Quelles sont les quantités de travail en IUT INFORMATIQUE? </summary>
                            <section>
                                <details>
                                    <summary>Dans les matières "informatiques"? </summary>
                                    <p>Au premier semestre vous aurez environs 18h par semaines de cours d'informatiques (Algorithmie, web, langages de programmation, Base de Donnée (modélisation et SQL), archi, OS) </p>
                                </details>
                                <details>
                                    <summary> Dans les matières hors "informatique"? </summary>
                                    <p>Vous aurez environs 11h par semaines de cours ayant des liens lointains avec l'informatique (communication, économie, mathématiques, anglais...) </p>
                                </details>
                                <details>
                                    <summary> Quels sont les horaires de travail? </summary>
                                    <p> Vous pourrez avoir cours entre 8h et 18h avec une pause de 12h a 14h sauf le vendredi de 12h à13h30. La plupart du temps, vous n'aurez pas cours le jeudi après-midi. Il n'y a aucun cours à l'IUT le samedi.</p>
                                </details>
                            </section>
                        </details>
                        <details>
                            <summary id="apres"> Quelles sont les possibles poursuites d’études et insertion dans le monde du travail?</summary>
                            <p>Après un BUT il est possible d'entrer directement dans le monde du travail. Vous pouvez aussi à la fin de votre seconde année aller en école d'ingénieur (sur dossier) ou partir en 3eme année de licence pour faire ensuite un master. À la fin de la troisième année, il est aussi possible de réessayer d'entrer dans une école d'ingénieur, ou de partir directement sur un master sans passer par la licence. À savoir que si vous validez votre deuxième année, même si vous chercher à aller ailleurs, vous aurez quand même une place qui vous sera réserver en troisième année pour éviter que vous vous retrouviez sans rien. Si vous souhaitez aller étudier à l'étranger au sein de l'union européenne sachez que vous obtenez 30 crédits européens par semestres</p>
                        </details>
                        <details>
                            <summary id="promo"> Quel est la composition typique d'une promo d'IUT INFO?</summary>
                            <p>Une promo est d'environs 130 élèves.<br> 52% de bac général | 47% de bac technologique | 1% de bac professionnels <br> Il n'y a que 9% de filles, mais leur nombre augmente depuis plusieurs années, alors mesdames n'hésitez pas.</p>
                        </details>
                        <details>
                            <summary id="stage"> Devons nous exercer des stages pendant BUT INFO?</summary>
                            <p></p>
                        </details>
                        <details>
                            <summary id="vacances"> Quelles sont les périodes de vacances, jours fériés et ponts?</summary>
                            <p>Vous aurez une semaine de vacances à la toussaint, deux semaines à noël, une semaine en février et deux semaines à pâques.</p>
                        </details>
                    </section>
                    <section>   <!--partie question vie etudiante-->
                        <details>
                            <summary id="VIE_ETU"> Comment est la vie étudiante? </summary>
                            <section>
                                <details>
                                    <summary> Où sont les lieux de restauration?</summary>
                                    <article>
                                        <p> Le studio est une des cafeterias du crous, la plus proche(en face de l'IUT au niveau de l’arrêt de tramway IUT Feyssine). Les cafeterias du crous vous propose un menu étudiant composé d'un sandwich, d'un yaourt et d'un dessert pour le même prix que le menu du restaurant universitaire. Vous pouvez également prendre un plat chaud ou plein d'autres choses (ça ressemble à une supérette). Nous vous conseillons de manger ailleurs, car les prix sont élevés.</p>
                                        <p> L’Archimède est aussi une cafèt du crous, en face de l’arrêt de tram INSA EINSTEIN, mais vous permet d'avoir, avec le menu étudiant, des sandwiches de meilleures qualités qu'au studio.</p>
                                        <p> Le restau U "Jussieux" est sur l'avenue Einstein, à deux min à pied de l’arrêt de tram du même nom. Au restaurant universitaire, vous avez un menu étudiant de six points pour 3,30€ et 1€ pour les boursiers. Une entrée est à un ou deux points, un plat chaud est à 4 points et les desserts sont entre 1 et 3 points. Si vous dépassez les 6 points, chaque point supplémentaires coûtent 55 centimes.</p>
                                        <p> Vous pouvez également amener vos repas et manger dans les locaux de l'iut ou manger dans les nombreux restaurants situés aux alentours.</p>
                                        <p>!!!Nous vous rappelons que vous disposerez de 2h pour manger sauf le vendredi d'1h30!!!</p>
                                    </article>
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
                                        <p> on a accés à deux bibliothèques qui possède pas mal d'ouvrage</p>
                                    </section>
                                </details>
                            </section>
                        </details>
                    </section>
                </section>
                <section id="PARENT">  <!--partie questions parents-->
                    <details>
                        <summary id="ECO">Économie</summary>
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
                        <summary id="sante">Quels sont les services de santé sur le site de la DOUA?</summary>
                        <p><p>
                    </details>
                    <details>
                        <summary id="geo">Situation géographique</summary>
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
                <button aria-label="envoyer">envoyer</button>
            </form>
        </main>
    </div>
    <?php
        include("part/footer.html");
    ?>
</body>
</html>