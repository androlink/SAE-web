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
                <div id="TRAVAIL">  <!--partie questions générales-->
                    <section>
                        <details id="Prereki">
                            <summary>
                                <h2>Y a-t-il des prérequis pour avoir accès au BUT INFO et pour ne pas avoir trop de difficultés?</h2>
                            </summary>
                            <article>
                                <p>Il est possible de candidater à l'aide d'un baccalauréat général, un baccalauréat technologique STI2D, avec n'importe quel type de baccalauréat professionnel ou bien avec un équivalent du bac. Chaque candidature est évaluée.</p>
                                <h3>Spécialités du Bac général :</h3>
                                <div>
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
                                </div>
                                <p>Même si ce tableau vous dit quelles sont les spécialités les plus adaptées, nous vous conseillons fortement de faire les spécialités Mathématiques et Numériques et Sciences de l'Informatique, car en plus d'augmenter vos chances d'être sélectionné, vous retrouverez ces matières. Il est donc avantageux d'avoir déjà un bagage en arrivant.</p>
                            </article>
                        </details>
                        <details>
                            <summary id="Qjob">
                                <h2> Quelles sont les quantités de travail en IUT INFORMATIQUE? </h2>
                            </summary>
                            <section>
                                <details>
                                    <summary>
                                        <h3> Dans les matières "informatiques"? </h3>
                                    </summary>
                                    <p>Au premier semestre vous aurez environs 18h par semaines de cours d'informatiques (Algorithmie, web, langages de programmation, Base de Donnée (modélisation et SQL), archi, OS) </p>
                                </details>
                                <details>
                                    <summary> 
                                        <h3>Dans les matières hors "informatique"? </h3>
                                    </summary>
                                    <p>Vous aurez environs 11h par semaines de cours ayant des liens plus ou moins lointains avec l'informatique (communication, économie, mathématiques, anglais...) </p>
                                </details>
                                <details>
                                    <summary>
                                        <h3>Quels sont les horaires de travail? </h3>
                                    </summary>
                                    <p> Vous pourrez avoir cours entre 8h et 18h avec une pause de 12h a 14h sauf le vendredi de 12h à13h30. La plupart du temps, vous n'aurez pas cours le jeudi après-midi. Il n'y a aucun cours à l'IUT le samedi.</p>
                                </details>
                            </section>
                        </details>
                        <details>
                            <summary id="apres"> 
                                <h2> Quelles sont les possibles poursuites d’études et insertion dans le monde du travail?</h2>
                            </summary>
                            <p>Après un BUT il est possible d'entrer directement dans le monde du travail. Vous pouvez aussi à la fin de votre seconde année aller en école d'ingénieur (sur dossier) ou partir en 3eme année de licence pour faire ensuite un master. À la fin de la troisième année, il est aussi possible de réessayer d'entrer dans une école d'ingénieur, ou de partir directement sur un master sans passer par la licence. À savoir que si vous validez votre deuxième année, même si vous chercher à aller ailleurs, vous aurez quand même une place qui vous sera réservée en troisième année pour éviter que vous vous retrouviez sans rien. Si vous souhaitez aller étudier à l'étranger au sein de l'union européenne sachez que vous obtenez 30 crédits européens par semestres</p>
                        </details>
                        <details>
                            <summary id="promo"> 
                                <h2>Quel est la composition typique d'une promo d'IUT INFO?</h2>
                            </summary>
                            <p>Une promo est d'environs 130 élèves.<br> 52% de bac général | 47% de bac technologique | 1% de bac professionnels <br> Il n'y a que 9% de filles, mais leur nombre augmente depuis plusieurs années, alors mesdames n'hésitez pas.</p>
                        </details>
                        <details>
                            <summary id="stage"> 
                                <h2>Devons nous exercer des stages pendant BUT INFO?</h2>
                            </summary>
                            <p></p>
                        </details>
                        <details>
                            <summary id="vacances"> 
                                <h2>Quelles sont les périodes de vacances, jours fériés et ponts? </h2>
                            </summary>
                            <p>Vous aurez une semaine de vacances à la toussaint, deux semaines à noël, une semaine en février et deux semaines à pâques.</p>
                        </details>
                    </section>
                    <section>   <!--partie question vie etudiante-->
                        <details>
                            <summary id="VIE_ETU"> 
                                <h2>Comment est la vie étudiante?</h2></summary>
                            <section>
                                <details>
                                    <summary> 
                                        <h3>Où sont les lieux de restauration?</h3>
                                    </summary>
                                    <div>
                                        <p> Le studio est une des cafeterias du crous, la plus proche(en face de l'IUT au niveau de l’arrêt de tramway IUT Feyssine). Les cafeterias du crous vous propose un menu étudiant composé d'un sandwich, d'un yaourt et d'un dessert pour le même prix que le menu du restaurant universitaire. Vous pouvez également prendre un plat chaud ou plein d'autres choses (ça ressemble à une supérette). Nous vous conseillons de manger ailleurs, car les prix sont élevés.</p>
                                        <p> L’Archimède est aussi une cafet du crous, en face de l’arrêt de tram INSA EINSTEIN.</p>
                                        <p> Le restau U "Jussieux" est sur l'avenue Einstein, à deux min à pied de l’arrêt de tram du même nom. Au restaurant universitaire, vous avez un menu étudiant de six points pour 3,30€ et 1€ pour les boursiers. Une entrée est à un ou deux points, un plat chaud est à 4 points et les desserts sont entre 1 et 3 points. Si vous dépassez les 6 points, chaque point supplémentaires coûtent 55 centimes.</p>
                                        <p> Vous pouvez également amener vos repas et manger dans les locaux de l'iut ou manger dans les nombreux restaurants situés aux alentours.</p>
                                        <p>!!!Nous vous rappelons que vous disposerez de 2h pour manger sauf le vendredi d'1h30!!!</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>
                                        <h3>Quelle est l'accessibilité aux activités sportives autour de l'IUT?</h3>
                                    </summary>
                                    <p> Les horaires sont un peu contraignants, peu d'activités sportive sont accessible dû aux cours qui finissent tard et la non priorité des étudiants en IUT par rapport aux autres étudiants de l'universitée Lyon1. De plus les lieux d'activités sportives sont au minimum à deux arrets de tramway.</p>
                                </details>
                                <details>
                                    <summary>
                                        <h3>Quelle est l'accessibilité aux activités culturelles autour de l'IUT?</h3>
                                    </summary>
                                    <div>
                                        <p>Deux Bibliothèques Universitaires(BU) de l'université lyon 1 sont à votre disposition tout en étant proches, une sur le site de l'iut et une autre à l'arret de tramway Gaston Berger. Vous pouvez aussi aller à la BU de l'INSA à l'arret INSA Einstein. Pour finir avec les Bibliothèques, il existe un résaux de Bibliothèques de Municpale lyon</p>
                                        <p>Le Bureaux des Étudiants (BDE) ne s'occupe pas seulement d'organiser des soirées, un pole culture est aussi là dans le BUT d'organiser des sorties/activitées culturelles</p>
                                        <p>Chaque années, vous retrouverez différents festival à Lyon et autour de Lyon, tel que Les nuits de fourvière ou encore Jazz à Viennes</p>
                                        <p>Nous tenons à souligner que tout les lieux interessant culturellement à lyon sont très bien desservie par le resaux de transport en commun TCL</p>
                                        <p>Nous vous rappelons par la même occasion que vous avez le pass culture qui correspond à 300€ que vous pouvez utiliser en 2ans.</p>
                                    </div>
                                </details>
                            </section>
                        </details>
                    </section>
                </div>
                <section id="PARENT">  <!--partie questions parents-->
                    <details>
                        <summary id="ECO">
                            <h2>Économie</h2>
                        </summary>
                        <section>
                            <details>
                                <summary>
                                    <h3>Quels sont les coûts de la formation</h3>
                                </summary>
                                <p> il faut compter environ 172€ pour la formation (obligatoire) et 90€ pour l'abonnement du CROUS (obligatoire)</p>
                            </details>
                            <details>
                                <summary>
                                    <h3>Quels sont les coûts des logements autour du campus?</h3>
                                </summary>
                                <div>
                                    <p> Résidences publiques du Crous : 150€ à 250€ (chambre) <br> Résidences étudiantes privées : 500€ à 950€ (studio meublé), 480€ (chambre en colocation) <br> Location entre particuliers : à partir de 500€ (studio meublé), min 500€ (chambre en colocation)</p>
                                </div>
                                <summary>
                                    <h3>Y a t'il des offres à connaitre</h3>
                                </summary>
                                <p>Il existe une carte, la carte Dino qui coûte 15€ par ans mais qui vous permet d'avoir de nombreuses réductions à Lyon.</p>
                            </details>
                            <details>
                                <summary>
                                    <h3>Quels sont les prix des transports sur lyon?</h3>
                                </summary>
                                <div>
                                    <p> Pour un non boursier, l'abonnement au réseaux de transports en communs tcl est de 250€ l'année, si l'abonnement est pris au mois, il est à 25€ par mois</p>
                                    <p> Il existe aussi un service de location de vélo: vélov, l'abonnement reviens à seulement 16€ l'année pour boursier et non boursiers.</p>
                                    <p> Plus d'infos sur le site tcl: <a href="tcl.fr"> tcl.fr </a></p>
                                </div>
                            </details>
                        </section>
                    </details>
                    <details>
                        <summary id="sante"><h2>Quels sont les services de santé sur le site de la DOUA?</h2></summary>
                        <p></p>
                    </details>
                    <details>
                        <summary id="geo">
                            <h2>Situation géographique</h2>
                        </summary>
                        <section>
                            <details>
                                <summary>
                                    <h3>Quels sont les magasins à proximité du site de la DOUA?</h3>
                                </summary>
                                <p> On peut retrouver un carfour a environ 15min de l'IUT et il y a aussi un vival a 25min </p>
                            </details>
                            <details>
                                <summary>
                                    <h3>Quels transports desservent l'IUT?</h3>
                                </summary>
                                <p> pour les transports on a le tram T1 qui part de l'IUT Feyssine et qui pars en direction de gratte-ciel en passant par l'arrêt "INSA Einstein"</p>
                            </details>
                        </section>
                    </details>
                </section>
            </div>
            <form> <!-- Autre question / formulaire -->
                <div id="AUTRE">
                    <label for="mail">Mail :</label>
                    <input id="mail">
                </div>
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