@extends('layouts.login_master')

@section('content')

    <div class="page-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold text-center">TERMS OF USE</h1>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                                <p>Dernière modification : 4 novembre 2019</p>

<h4 class="font-weight-semibold">Acceptation des conditions d'utilisation</h4>

<p>Ces conditions d'utilisation sont conclues entre vous et {{ $app_name }} ("nous" ou "notre"). Les termes et conditions suivants et tous les documents incorporés par référence (collectivement, "Conditions d'utilisation"), régissent votre accès et votre utilisation de <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a>, y compris tout contenu, fonctionnalité et services offerts sur ou via <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a> (le "Site Web").</p>

<p>Veuillez lire attentivement les Conditions d'utilisation avant de commencer à utiliser le Site Web. En utilisant le Site Web, vous acceptez et vous vous engagez à respecter ces Conditions d'utilisation et notre Politique de confidentialité, disponible à <a target="_blank" href="{{ route('privacy_policy') }}">{{ route('privacy_policy') }}</a>, incorporée ici par référence. Si vous ne souhaitez pas accepter ces Conditions d'utilisation ou la Politique de confidentialité, vous ne devez pas accéder ou utiliser le Site Web.</p>

<h4 class="font-weight-semibold">Modifications des conditions d'utilisation</h4>

<p>Nous pouvons réviser et mettre à jour ces Conditions d'utilisation de temps à autre à notre seule discrétion. Toutes les modifications prennent effet immédiatement lorsque nous les publions. Cependant, toute modification des dispositions de résolution des litiges énoncées dans la Loi applicable et la Juridiction ne s'appliquera pas à tout litige pour lequel les parties ont une notification réelle avant la date de publication de la modification sur le Site Web.</p>

<p>Votre utilisation continue du Site Web après la publication des Conditions d'utilisation révisées signifie que vous acceptez et convenez des modifications. Vous êtes censé vérifier cette page de temps en temps afin d'être au courant de toute modification, car elles vous lient.</p>

<h4 class="font-weight-semibold">Accès au Site Web et sécurité du compte</h4>
<p>Nous nous réservons le droit de retirer ou de modifier ce Site Web, ainsi que tout service ou matériel que nous fournissons sur le Site Web, à notre seule discrétion sans préavis. Nous ne serons pas responsables si, pour une raison quelconque, tout ou partie du Site Web est indisponible à tout moment ou pour toute période. De temps à autre, nous pouvons restreindre l'accès à certaines parties du Site Web, ou à l'ensemble du Site Web, aux utilisateurs.</p>

<h3>Article I</h3>
<p>Vous êtes responsable de :</p>

<ul>
    <li>Prendre toutes les dispositions nécessaires pour avoir accès au Site Web.</li>
    <li>S'assurer que toutes les personnes qui accèdent au Site Web via votre connexion Internet sont au courant de ces Conditions d'utilisation et les respectent.</li>
</ul>

<p>Pour accéder au Site Web ou à certaines des ressources qu'il offre, il peut vous être demandé de fournir certains détails d'inscription ou d'autres informations. Il est conditionnel à votre utilisation du Site Web que toutes les informations que vous fournissez sur le Site Web soient correctes, actuelles et complètes. Vous acceptez que toutes les informations que vous fournissez pour vous inscrire sur ce Site Web ou autrement, y compris mais sans s'y limiter par l'utilisation de toute fonctionnalité interactive sur le Site Web, soient régies par notre Politique de confidentialité, et vous consentez à toutes les actions que nous prenons à l'égard de vos informations conformément à notre Politique de confidentialité.</p>

<p>Si vous choisissez, ou si l'on vous fournit, un nom d'utilisateur, un mot de passe ou toute autre information dans le cadre de nos procédures de sécurité, vous devez traiter ces informations comme confidentielles et ne pas les divulguer à toute autre personne ou entité. Vous reconnaissez également que votre compte vous est personnel et acceptez de ne fournir à aucune autre personne l'accès à ce Site Web ou à des parties de celui-ci en utilisant votre nom d'utilisateur, mot de passe ou autres informations de sécurité. Vous acceptez de nous notifier immédiatement tout accès non autorisé à votre nom d'utilisateur ou mot de passe ou toute autre violation de la sécurité. Vous acceptez également de vous déconnecter de votre compte à la fin de chaque session. Vous devez faire preuve d'une prudence particulière lorsque vous accédez à votre compte à partir d'un ordinateur public ou partagé afin que d'autres ne puissent pas voir ou enregistrer votre mot de passe ou d'autres informations personnelles.</p>

<p>Nous avons le droit de désactiver tout nom d'utilisateur, mot de passe ou autre identifiant, que ce soit choisi par vous ou fourni par nous, à tout moment à notre seule discrétion pour toute raison ou sans raison, y compris si, à notre avis, vous avez violé une disposition de ces Conditions d'utilisation.</p>

<h4 class="font-weight-semibold">Droits de propriété intellectuelle</h4>

<p>Le Site Web et l'ensemble de son contenu, de ses fonctionnalités et de ses fonctionnalités (y compris, mais sans s'y limiter, toutes les informations, logiciels, textes, affichages, images, vidéos et audios, ainsi que la conception, la sélection et l'agencement de ceux-ci), sont la propriété de nous, de nos concédants de licence ou d'autres fournisseurs de ce matériel et sont protégés par les lois américaines et internationales sur le droit d'auteur, les marques de commerce, les brevets, les secrets commerciaux et autres droits de propriété intellectuelle ou de propriété.</p>

<p>Ces Conditions d'utilisation vous permettent d'utiliser le Site Web pour votre usage personnel et non commercial uniquement. Vous ne devez pas reproduire, distribuer, modifier, créer des œuvres dérivées, afficher publiquement, exécuter publiquement, republier, télécharger, stocker ou transmettre tout matériel sur notre Site Web en violation de toute loi.</p>

<p>Vous ne devez pas accéder ou utiliser à des fins commerciales toute partie du Site Web ou tout service ou matériel disponible sur le Site Web.</p>

<h4 class="font-weight-semibold">Marques de commerce</h4>

<p>Le nom {{ $app_name }} et tous les noms, logos, slogans, devises et conceptions associés sont des marques de commerce qui nous appartiennent ou appartiennent à nos affiliés ou concédants de licence. Vous ne devez pas utiliser ces marques sans notre autorisation écrite préalable. Tous les autres noms, logos, noms de produits et services, conceptions et slogans sur ce Site Web sont les marques de commerce de leurs propriétaires respectifs.</p>

<h4 class="font-weight-semibold">Utilisations interdites</h4>


<ul>
    <li>Vous ne pouvez utiliser le Site Web qu'à des fins légales et conformément à ces Conditions d'utilisation. Vous acceptez de ne pas utiliser le Site Web :</li>
    <li>D'une manière qui viole toute loi ou réglementation fédérale, étatique, locale ou internationale applicable (y compris, sans limitation, toute loi concernant l'exportation de données ou de logiciels vers et depuis les États-Unis ou d'autres pays).</li>
    <li>Dans le but d'exploiter, de nuire ou de tenter d'exploiter ou de nuire aux mineurs de quelque manière que ce soit en les exposant à un contenu inapproprié, en demandant des informations personnellement identifiables ou autrement.</li>
    <li>Pour envoyer, recevoir sciemment, télécharger, utiliser ou réutiliser tout matériel qui ne respecte pas les normes de contenu énoncées dans ces Conditions d'utilisation.</li>
    <li>Pour transmettre ou faire envoyer tout matériel publicitaire ou promotionnel sans notre consentement écrit préalable, y compris tout "courrier indésirable", "chaîne de lettres" ou "spam" ou toute autre sollicitation similaire.</li>
    <li>Pour usurper ou tenter d'usurper notre identité, celle de l'un de nos employés, d'un autre utilisateur ou de toute autre personne ou entité (y compris, sans limitation, en utilisant des adresses e-mail ou des noms d'utilisateur associés à l'un des éléments ci-dessus).</li>
    <li>Pour vous engager dans toute autre conduite qui restreint ou inhibe l'utilisation ou la jouissance du Site Web par quiconque, ou qui, selon nous, peut nous nuire ou nuire aux utilisateurs du Site Web ou les exposer à une responsabilité.</li>
</ul>

<h4 class="font-weight-semibold">De plus, vous acceptez de ne pas :</h4>
<ul>
    <li>Utiliser le Site Web de manière à désactiver, surcharger, endommager ou altérer le site ou à interférer avec l'utilisation du Site Web par toute autre partie, y compris leur capacité à participer à des activités en temps réel via le Site Web.</li>
    <li>Utiliser tout robot, araignée ou autre dispositif automatique, processus ou moyen pour accéder au Site Web à toute fin, y compris surveiller ou copier tout matériel sur le Site Web.</li>
    <li>Utiliser tout processus manuel pour surveiller ou copier tout matériel sur le Site Web ou à toute autre fin non autorisée sans notre consentement écrit préalable.</li>
    <li>Utiliser tout dispositif, logiciel ou routine qui interfère avec le bon fonctionnement du Site Web.</li>
    <li>Introduire des virus, chevaux de Troie, vers, bombes logiques ou tout autre matériel malveillant ou technologiquement nuisible.</li>
    <li>Tenter d'accéder sans autorisation, d'interférer avec, d'endommager ou de perturber toute partie du Site Web, le serveur sur lequel le Site Web est stocké, ou tout serveur, ordinateur ou base de données connecté au Site Web.</li>
    <li>Attaquer le Site Web via une attaque par déni de service ou une attaque par déni de service distribué.</li>
    <li>Utiliser le Site Web de toute manière qui viole toute politique, règle ou procédure applicable de {{ $app_name }}.</li>
    <li>Utiliser le Site Web de toute manière qui contrevient à la tradition, à la foi et à la morale de Catholic Mercy ou à l'héritage de l'éducation de Catholic Mercy.</li>
    <li>Tenter autrement d'interférer avec le bon fonctionnement du Site Web.</li>
</ul>


<h4 class="font-weight-semibold">Contributions des utilisateurs</h4>

<p>Le Site Web peut contenir des forums de discussion, des salons de chat, des pages web personnelles ou des profils, des forums, des tableaux d'affichage et d'autres fonctionnalités interactives (collectivement, "Services interactifs") qui permettent aux utilisateurs de publier, soumettre, publier, afficher ou transmettre à d'autres utilisateurs ou à d'autres personnes (ci-après, "publier") du contenu ou des matériaux (collectivement, "Contributions des utilisateurs") sur ou via le Site Web.</p>

<p>Toutes les Contributions des utilisateurs doivent respecter les Normes de contenu énoncées dans ces Conditions d'utilisation.</p>

<p>Toute Contribution des utilisateurs que vous publiez sur le site sera considérée comme non confidentielle et non exclusive. En fournissant toute Contribution des utilisateurs sur le Site Web, vous nous accordez ainsi qu'à nos licenciés, successeurs et ayants droit le droit d'utiliser, de reproduire, de modifier, d'exécuter, d'afficher, de distribuer et de divulguer autrement à des tiers tout matériel de ce type.</p>

<p>Vous déclarez et garantissez que :</p>

<ul>
    <li>Vous possédez ou contrôlez tous les droits sur les Contributions des utilisateurs et avez le droit d'accorder la licence accordée ci-dessus à nous et à nos licenciés, successeurs et ayants droit.</li>
    <li>Toutes vos Contributions des utilisateurs respectent et respecteront ces Conditions d'utilisation.</li>
</ul>

<p>Vous comprenez et reconnaissez que vous êtes responsable de toute Contribution des utilisateurs que vous soumettez ou contribuez, et vous, non nous, avez l'entière responsabilité de ce contenu, y compris sa légalité, sa fiabilité, son exactitude et son adéquation.</p>

<p>Nous ne sommes pas responsables, ni redevables à un tiers, du contenu ou de l'exactitude de toute Contribution des utilisateurs publiée par vous ou tout autre utilisateur du Site Web.</p>

<h4 class="font-weight-semibold">Surveillance et application ; Résiliation</h4>
<p>Nous avons le droit de :</p>

<ul>
    <li>Supprimer ou refuser de publier toute Contribution des utilisateurs pour quelque raison que ce soit ou sans raison à notre seule discrétion.</li>
    <li>Prendre toute mesure concernant toute Contribution des utilisateurs que nous jugeons nécessaire ou appropriée à notre seule discrétion, y compris si nous croyons que cette Contribution des utilisateurs viole les Conditions d'utilisation, y compris les Normes de contenu, enfreint tout droit de propriété intellectuelle ou autre droit de toute personne ou entité, menace la sécurité personnelle des utilisateurs du Site Web ou du public ou pourrait nous exposer à une responsabilité.</li>
    <li>Divulguer votre identité ou d'autres informations vous concernant à tout tiers qui prétend que le matériel publié par vous viole leurs droits, y compris leurs droits de propriété intellectuelle ou leur droit à la vie privée.</li>
    <li>Prendre les mesures légales appropriées, y compris sans limitation, le renvoi aux forces de l'ordre, pour toute utilisation illégale ou non autorisée du Site Web.</li>
    <li>Résilier ou suspendre votre accès à tout ou partie du Site Web pour quelque raison que ce soit ou sans raison, y compris sans limitation, toute violation de ces Conditions d'utilisation.</li>
</ul>


<p>Sans limiter ce qui précède, nous avons le droit de coopérer pleinement avec toute autorité de maintien de l'ordre ou toute ordonnance du tribunal demandant ou nous ordonnant de divulguer l'identité ou d'autres informations de toute personne publiant des documents sur ou via le Site Web.</p>

<p>VOUS RENONCEZ ET TENEZ INDEMNE {{ strtoupper($app_name) }} DE TOUTE RÉCLAMATION RÉSULTANT DE TOUTE ACTION ENTREPRISE PAR {{ strtoupper($app_name) }} PENDANT OU À LA SUITE DE SES ENQUÊTES ET DE TOUTES ACTIONS ENTREPRISES À LA SUITE D'ENQUÊTES PAR {{ strtoupper($app_name) }} OU LES AUTORITÉS DE MAINTIEN DE L'ORDRE.</p>

<p>Cependant, nous ne nous engageons pas à examiner tout le matériel avant qu'il ne soit publié sur le Site Web et ne pouvons garantir la suppression rapide du matériel répréhensible après sa publication. En conséquence, nous n'assumons aucune responsabilité pour toute action ou inaction concernant les transmissions, communications ou contenus fournis par tout utilisateur ou tiers. Nous n'avons aucune responsabilité ou obligation envers quiconque pour la performance ou la non-performance des activités décrites dans cette section.</p>

<h4 class="font-weight-semibold">Normes de contenu</h4>

<p>Ces normes de contenu s'appliquent à toutes les Contributions des utilisateurs et à l'utilisation des Services interactifs. Les Contributions des utilisateurs doivent dans leur intégralité se conformer à toutes les lois et réglementations fédérales, étatiques, locales et internationales applicables. Sans limiter ce qui précède, les Contributions des utilisateurs ne doivent pas :</p>

<ul>
    <li>Contenir tout matériel diffamatoire, obscène, indécent, abusif, offensant, harcelant, violent, haineux, incendiaire ou autrement répréhensible.</li>
    <li>Promouvoir du matériel sexuellement explicite ou pornographique, la violence ou la discrimination basée sur la race, le sexe, la religion, la nationalité, le handicap, l'orientation sexuelle ou l'âge.</li>
    <li>Enfreindre tout brevet, marque de commerce, secret commercial, droit d'auteur ou autre droit de propriété intellectuelle ou autre droit de toute autre personne.</li>
    <li>Violer les droits légaux (y compris les droits de publicité et de confidentialité) d'autrui ou contenir tout matériel susceptible de donner lieu à une responsabilité civile ou pénale en vertu des lois ou réglementations applicables ou qui pourrait autrement être en conflit avec ces Conditions d'utilisation et notre <a target="_blank" href="{{ route('privacy_policy') }}">Politique de confidentialité</a>.</li>
    <li>Être susceptible de tromper toute personne.</li>
    <li>Promouvoir toute activité illégale ou préconiser, promouvoir ou aider tout acte illégal.</li>
    <li>Causer des désagréments, des inconvénients ou une anxiété inutile ou être susceptible de contrarier, embarrasser, alarmer ou ennuyer toute autre personne.</li>
    <li>Usurper l'identité de toute personne ou déformer votre identité ou affiliation avec toute personne ou organisation.</li>
    <li>Impliquer des activités commerciales ou des ventes, telles que des concours, des tirages au sort et d'autres promotions de vente, du troc ou de la publicité.</li>
    <li>Donner l'impression qu'elles émanent de nous ou sont approuvées par nous ou toute autre personne ou entité, si ce n'est pas le cas.</li>
</ul>


<h4 class="font-weight-semibold">Violation des droits d'auteur</h4>
<p>Si vous pensez que des Contributions des utilisateurs violent vos droits d'auteur, veuillez nous contacter.</p>

<h5 class="font-weight-semibold">Fiabilité des informations publiées</h5>

<p>Les informations présentées sur ou via le Site Web sont mises à disposition uniquement à des fins d'information générale. Nous ne garantissons pas l'exactitude, l'exhaustivité ou l'utilité de ces informations. Toute confiance que vous accordez à ces informations est strictement à vos propres risques. Nous déclinons toute responsabilité découlant de toute confiance accordée à ces matériaux par vous ou tout autre visiteur du Site Web, ou par quiconque pourrait être informé de son contenu.</p>

<p>Ce Site Web peut inclure du contenu fourni par des tiers, y compris des matériaux fournis par d'autres utilisateurs, blogueurs et concédants de licence tiers, syndicateurs, agrégateurs et/ou services de reportage. Toutes les déclarations et/ou opinions exprimées dans ces matériaux, et tous les articles et réponses aux questions et autres contenus, autres que le contenu fourni par nous, sont uniquement les opinions et la responsabilité de la personne ou de l'entité fournissant ces matériaux. Ces matériaux ne reflètent pas nécessairement notre opinion. Nous ne sommes pas responsables, ni redevables envers vous ou un tiers, du contenu ou de l'exactitude de tout matériel fourni par des tiers.</p>

<h4 class="font-weight-semibold">Modifications du Site Web</h4>
<p>Nous pouvons mettre à jour le contenu de ce Site Web de temps à autre, mais son contenu n'est pas nécessairement complet ou à jour. Tout matériel sur le Site Web peut être obsolète à tout moment, et nous ne sommes pas tenus de mettre à jour ce matériel.</p>

<p>Informations vous concernant et vos visites sur le Site Web</p>

<p>Toutes les informations que nous collectons sur ce Site Web sont soumises à notre Politique de confidentialité. En utilisant le Site Web, vous consentez à toutes les actions que nous prenons concernant vos informations en conformité avec la <a target="_blank" href="{{ route('privacy_policy') }}">Politique de confidentialité</a>.</p>

<h3>Article II</h3>

<h4 class="font-weight-semibold">Lien vers le Site Web et fonctionnalités des réseaux sociaux</h4>

<p>Vous pouvez créer un lien vers notre page d'accueil, à condition de le faire de manière équitable et légale et de ne pas nuire à notre réputation ou en tirer parti, mais vous ne devez pas établir de lien de manière à suggérer une quelconque forme d'association, d'approbation ou de soutien de notre part sans notre consentement écrit exprès.</p>

<p>Vous acceptez de coopérer avec nous pour supprimer tout lien que nous vous demandons de retirer. Nous nous réservons le droit de retirer l'autorisation de lien sans préavis.</p>

<p>Nous pouvons désactiver toutes ou certaines fonctionnalités des réseaux sociaux et tous les liens à tout moment sans préavis à notre discrétion.</p>

<h4 class="font-weight-semibold">Liens depuis le Site Web</h4>

<p>Si le Site Web contient des liens vers d'autres sites et ressources fournis par des tiers, ces liens sont fournis uniquement pour votre commodité. Cela inclut les liens contenus dans les publicités, y compris les bannières publicitaires et les liens sponsorisés. Nous n'avons aucun contrôle sur le contenu de ces sites ou ressources, et n'acceptons aucune responsabilité pour eux ou pour toute perte ou dommage pouvant résulter de votre utilisation de ceux-ci. Si vous décidez d'accéder à l'un des sites Web tiers liés à ce Site Web, vous le faites entièrement à vos propres risques et sous réserve des termes et conditions d'utilisation de ces sites Web.</p>

<h4 class="font-weight-semibold">Déni de garanties</h4>


<p>Vous comprenez que nous ne pouvons pas garantir ou garantir que les fichiers disponibles en téléchargement sur Internet ou sur le Site Web seront exempts de virus ou d'autres codes destructeurs. Vous êtes responsable de la mise en œuvre de procédures et de points de contrôle suffisants pour répondre à vos exigences particulières en matière de protection antivirus et d'exactitude des entrées et sorties de données, et de maintenir un moyen externe à notre site pour toute reconstruction de données perdues. NOUS NE SERONS PAS RESPONSABLES DE TOUTE PERTE OU DOMMAGE CAUSÉ PAR UNE ATTAQUE PAR DÉNI DE SERVICE DISTRIBUÉ, DES VIRUS OU AUTRE MATÉRIEL TECHNOLOGIQUEMENT NOCIF QUI POURRAIT INFECTER VOTRE ÉQUIPEMENT INFORMATIQUE, VOS PROGRAMMES INFORMATIQUES, VOS DONNÉES OU AUTRE MATÉRIEL PROPRIÉTAIRE EN RAISON DE VOTRE UTILISATION DU SITE WEB OU DE TOUT SERVICE OU ARTICLE OBTENU PAR LE BIAIS DU SITE WEB OU DE VOTRE TÉLÉCHARGEMENT DE TOUT MATÉRIEL PUBLIÉ SUR CELUI-CI, OU SUR TOUT SITE WEB LIÉ À CELUI-CI.</p>

<p>VOTRE UTILISATION DU SITE WEB, DE SON CONTENU ET DE TOUS LES SERVICES OU ARTICLES OBTENUS PAR LE BIAIS DU SITE WEB EST À VOS PROPRES RISQUES. LE SITE WEB, SON CONTENU ET TOUS LES SERVICES OU ARTICLES OBTENUS PAR LE BIAIS DU SITE WEB SONT FOURNIS "EN L'ÉTAT" ET "SELON DISPONIBILITÉ", SANS AUCUNE GARANTIE D'AUCUNE SORTE, EXPRESSE OU IMPLICITE. NI {{ strtoupper($app_name) }} NI AUCUNE PERSONNE ASSOCIÉE À {{ strtoupper($app_name) }} NE FAIT AUCUNE GARANTIE OU DÉCLARATION QUANT À L'EXHAUSTIVITÉ, LA SÉCURITÉ, LA FIABILITÉ, LA QUALITÉ, L'EXACTITUDE OU LA DISPONIBILITÉ DU SITE WEB. SANS LIMITER CE QUI PRÉCÈDE, NI {{ strtoupper($app_name) }} NI QUICONQUE ASSOCIÉ À {{ strtoupper($app_name) }} NE DÉCLARE OU NE GARANTIT QUE LE SITE WEB, SON CONTENU OU TOUT SERVICE OU ARTICLE OBTENU PAR LE BIAIS DU SITE WEB SERONT EXACTS, FIABLES, SANS ERREUR OU ININTERROMPUS, QUE LES DÉFAUTS SERONT CORRIGÉS, QUE NOTRE SITE OU LE SERVEUR QUI LE REND DISPONIBLE SONT EXEMPTS DE VIRUS OU D'AUTRES COMPOSANTS NOCIFS OU QUE LE SITE WEB OU TOUT SERVICE OU ARTICLE OBTENU PAR LE BIAIS DU SITE WEB RÉPONDRONT AUTREMENT À VOS BESOINS OU ATTENTES.</p>

<p>{{ strtoupper($app_name) }} DÉCLINE PAR LA PRÉSENTE TOUTE GARANTIE DE QUELQUE NATURE QUE CE SOIT, QU'ELLE SOIT EXPRESSE OU IMPLICITE, STATUTAIRE OU AUTRE, Y COMPRIS MAIS SANS S'Y LIMITER TOUTE GARANTIE DE NON-VIOLATION.</p>

<p>CE QUI PRÉCÈDE N'AFFECTE AUCUNE GARANTIE QUI NE PEUT ÊTRE EXCLUE OU LIMITÉE EN VERTU DE LA LOI APPLICABLE.</p>

<h4 class="font-weight-semibold">Limitation de responsabilité</h4>


<p>EN AUCUN CAS {{ strtoupper($app_name) }}, SES AFFILIÉS OU LEURS CONCÉDANTS DE LICENCE, FOURNISSEURS DE SERVICES, EMPLOYÉS, AGENTS, DIRIGEANTS OU ADMINISTRATEURS NE SERONT RESPONSABLES DES DOMMAGES DE QUELQUE NATURE QUE CE SOIT, EN VERTU DE TOUTE THÉORIE JURIDIQUE, DÉCOULANT DE OU EN LIEN AVEC VOTRE UTILISATION, OU INCAPACITÉ D'UTILISER, LE SITE WEB, TOUT SITE WEB LIÉ À CELUI-CI, TOUT CONTENU SUR LE SITE WEB OU DE TELS AUTRES SITES WEB OU TOUT SERVICE OU ARTICLE OBTENU PAR LE BIAIS DU SITE WEB OU DE TELS AUTRES SITES WEB, Y COMPRIS TOUT DOMMAGE DIRECT, INDIRECT, SPÉCIAL, ACCESSOIRE, CONSÉCUTIF OU PUNITIF, Y COMPRIS MAIS SANS S'Y LIMITER, LES BLESSURES PERSONNELLES, LA DOULEUR ET LA SOUFFRANCE, LA DÉTRESSE ÉMOTIONNELLE, LA PERTE DE REVENUS, LA PERTE DE PROFITS, LA PERTE D'ACTIVITÉ OU D'ÉCONOMIES ANTICIPÉES, LA PERTE D'UTILISATION, LA PERTE DE CLIENTÈLE, LA PERTE DE DONNÉES, ET QUE CE SOIT CAUSÉ PAR UN DÉLIT (Y COMPRIS LA NÉGLIGENCE), UNE VIOLATION DE CONTRAT OU AUTRE, MÊME SI PRÉVISIBLE.</p>

<p>CE QUI PRÉCÈDE N'AFFECTE AUCUNE RESPONSABILITÉ QUI NE PEUT ÊTRE EXCLUE OU LIMITÉE EN VERTU DE LA LOI APPLICABLE.</p>

<h4 class="font-weight-semibold">Indemnisation</h4>

<p>Vous acceptez de défendre, d'indemniser et de dégager de toute responsabilité {{ $app_name }}, ses affiliés, concédants de licence et fournisseurs de services, ainsi que leurs dirigeants, administrateurs, employés, contractants, agents, concédants de licence, fournisseurs, successeurs et ayants droit respectifs contre toute réclamation, responsabilité, dommage, jugement, récompense, perte, coût, dépense ou frais (y compris les honoraires raisonnables d'avocats) découlant de ou liés à votre violation de ces Conditions d'utilisation ou à votre utilisation du Site Web, y compris, mais sans s'y limiter, vos Contributions des utilisateurs, toute utilisation du contenu, des services et des produits du Site Web autre que celle expressément autorisée dans ces Conditions d'utilisation ou votre utilisation de toute information obtenue à partir du Site Web.</p>

<h4 class="font-weight-semibold">Droit applicable et juridiction</h4>

<p>Toutes les questions relatives au Site Web et à ces Conditions d'utilisation et tout litige ou réclamation en découlant ou y étant lié (dans chaque cas, y compris les litiges ou réclamations non contractuels), seront régis et interprétés conformément aux lois du Nigeria sans donner effet à aucune disposition ou règle de choix ou de conflit de lois.</p>

<p>Toute action en justice, poursuite ou procédure découlant de ou liée à ces Conditions d'utilisation ou au Site Web sera intentée exclusivement devant les tribunaux fédéraux du Nigeria, bien que nous nous réservions le droit d'intenter toute action en justice, poursuite ou procédure contre vous pour violation de ces Conditions d'utilisation dans votre pays de résidence ou tout autre pays pertinent. Vous renoncez à toute objection à l'exercice de la juridiction sur vous par ces tribunaux et à la compétence de ces tribunaux.</p>

<h4 class="font-weight-semibold">Arbitrage</h4>


<p>À la seule discrétion de {{ $app_name }}, il peut vous demander de soumettre tout litige découlant de l'utilisation de ces Conditions d'utilisation ou du Site Web, y compris les litiges découlant de ou concernant leur interprétation, violation, invalidité, non-exécution ou résiliation, à un arbitrage final et contraignant en vertu de la Loi sur l'arbitrage et la conciliation du Nigeria.</p>

<h4 class="font-weight-semibold">Limitation du délai pour déposer des réclamations</h4>

<p>TOUTE CAUSE D'ACTION OU RÉCLAMATION QUE VOUS POURRIEZ AVOIR DÉCOULANT DE OU LIÉE À CES CONDITIONS D'UTILISATION OU AU SITE WEB DOIT ÊTRE COMMENCÉE DANS UN DÉLAI D'UN (1) AN APRÈS LA SURVENANCE DE LA CAUSE D'ACTION, AUTREMENT, CETTE CAUSE D'ACTION OU RÉCLAMATION EST DÉFINITIVEMENT PRESCRITE.</p>

<h4 class="font-weight-semibold">Renonciation et divisibilité</h4>

<p>Aucune renonciation par {{ $app_name }} à un terme ou une condition énoncé dans ces Conditions d'utilisation ne sera considérée comme une renonciation supplémentaire ou continue de ce terme ou de cette condition ou une renonciation à tout autre terme ou condition, et tout manquement de {{ $app_name }} à faire valoir un droit ou une disposition en vertu de ces Conditions d'utilisation ne constituera pas une renonciation à ce droit ou à cette disposition.</p>

<p>Si une disposition de ces Conditions d'utilisation est jugée invalide, illégale ou inapplicable pour quelque raison que ce soit par un tribunal ou un autre tribunal de juridiction compétente, cette disposition sera éliminée ou limitée dans la mesure minimale telle que les dispositions restantes des Conditions d'utilisation continueront de s'appliquer pleinement.</p>

<h4 class="font-weight-semibold">Accord complet</h4>

<p>Ces Conditions d'utilisation et notre <a target="_blank" href="{{ route('privacy_policy') }}">Politique de confidentialité</a> constituent l'intégralité de l'accord entre vous et {{ $app_name }} en ce qui concerne le Site Web et remplacent toutes les ententes, accords, représentations et garanties antérieurs et contemporains, qu'ils soient écrits ou oraux, en ce qui concerne le Site Web.</p>

<h5 class="font-weight-semibold">Vos commentaires et préoccupations</h5>
<p>Si vous avez des commentaires ou des préoccupations concernant, mais sans s'y limiter, ces Conditions d'utilisation, veuillez nous contacter.</p>

<p>Ce site Web est exploité par {{ $app_name }}.</p>

<p>Tous les autres commentaires, demandes de support technique et autres communications relatives au Site Web doivent être adressés à l'administrateur de l'école. Veuillez appeler {{ $contact_phone }}.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
