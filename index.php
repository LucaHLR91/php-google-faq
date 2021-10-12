<!-- Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php 
    $faqs = [
        [
            'question' => 'Come state implementando la recente decisione della Corte di Giustizia dell\'Unuione Europea(CGUE) realtiva al diritto all\'oblio?',

            'answer' =>
            [
                'La recente decisione della Corte di Giustizia dell\'Unione Europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuini utenti hanno il diritto di chiedere ai motori di ricerca come Goole di rimuovere i risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati o non più rilevanti, o eccessivi.',

                'Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. I tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il dirtto dell\'individuo a controllare i suoi dati personali ed il diritto di tutto di conoscere e distribuire le informazioni',

                'Per presentare una richiesta di rimozione, compila questo moduloweb. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso(tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico che le nostre informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziare, negligenza professionale, condanne penali o la tuia condotta pubblica in relazione a un pubblico ufficiale (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali del tuo paese',

                'Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con le autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge',

                'Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a rimozione.'
            ]
        ],
        [
            'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',

            'answer' => 
            [
                'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.',

                'Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.',

                'Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.',

                'Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
            ]
        ],
        [
            'question' => 'Perché il mio account è associuato a un paese?',

            'answer' => 
            [

            ]
        ],
        [
            'question' => 'Stabilire il paese associato all\'account',

            'answer' => 
            [
                'Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell\'ultimo anno.',

                'I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l\'associazione del paese.',

                'Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l\'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato.'
            ]
        ],
        [
            'question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca Google?',

            'answer' => 
            [
                'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'
            ]
        ],
        [
            'question' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chievi di ricerca vengono inviate ai siti Web?',

            'answer' => 
            [
               'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\'esatte parole chiave che hanno determinato il clic su un annuncio.' 
            ]
        ]
    ];

    // foreach ($faqs as $faq) {
    //     echo '<h2>' . $faq['question'] . '</h2>';
    //     for ($i = 0; $i < count($faq['answer']); $i++) {
    //         echo '<p>' . $faq['answer'][$i] . '</p>';
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
</head>
<body>
    <header>
        <div class="header_top">
            <div class="logo">
                <img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Google-Logo.png" alt="Logo Google">
                <h2>Privacy e Termini</h2>
            </div>
            <div class="user">
                <div class="user_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="user_icon">
                    <i class="far fa-user"></i>
                </div>
            </div>
        </div>
        <div class="header_nav">'
            <ul>
                <li>Introduzione</li>
                <li>Norme Sulla Privacy</li>
                <li>Termini Di Servizio</li>
                <li>Tecnologie</li>
                <li>Domande Frequenti</li>
            </ul>
        </div>
    </header>

    <main>
        <?php 
            foreach ($faqs as $faq) {
                echo '<h2>' . $faq['question'] . '</h2>';
                for ($i = 0; $i < count($faq['answer']); $i++) {
                    echo '<p>' . $faq['answer'][$i] . '</p>';
                }
            }
        ?>
    </main>

    <footer>
        <div class="footer_container">
            <div class="footer_nav">
                <ul>
                    <li>Google</li>
                    <li>Tutto Su Google</li>
                    <li>Privacy</li>
                    <li>Termini</li>
                </ul>
            </div>
            <div class="footer_select_language">
                <i class="far fa-comment-alt"></i>
                <select name="languages" id="languages">
                    <option value="Italian">Italian</option>
                    <option value="English">English</option>
                    <option value="Deutch">Deutch</option>
                    <option value="French">French</option>
                </select>
            </div>
        </div>
    </footer>
</body>
</html>