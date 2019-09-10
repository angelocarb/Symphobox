-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Giu 26, 2017 alle 23:17
-- Versione del server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symphobox`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `annunci`
--

CREATE TABLE IF NOT EXISTS `annunci` (
`IDannuncio` int(11) NOT NULL,
  `Caricatore` varchar(300) NOT NULL,
  `Genere` varchar(300) NOT NULL,
  `Preferenze` varchar(300) NOT NULL,
  `TestoAnnuncio` longtext NOT NULL,
  `TitoloAnnuncio` varchar(300) NOT NULL,
  `Regione` varchar(300) NOT NULL,
  `DataUpload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProvinciaAnnuncio` varchar(300) NOT NULL,
  `ComuneAnnuncio` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dump dei dati per la tabella `annunci`
--

INSERT INTO `annunci` (`IDannuncio`, `Caricatore`, `Genere`, `Preferenze`, `TestoAnnuncio`, `TitoloAnnuncio`, `Regione`, `DataUpload`, `ProvinciaAnnuncio`, `ComuneAnnuncio`) VALUES
(60, 'angelo', 'Jazz funk, Hard rock, Punk rock, Melodic metal, Heavy metal, Progressive metal', 'nessuna preferenza', 'Siamo gli Irradia,gruppo composto da Ivo(chitarra), Elisa (voce) e Mattia(basso).\r\nCerchiamo un batterista con cui portare avanti un progetto che Ã¨ giÃ  avviato e in cui crediamo molto. Abbiamo uno spazio prove tutto nostro nella zona di Roma Nord.', 'Cercasi batterista', 'Basilicata', '2017-06-26 18:31:31', 'Potenza', 'Campomaggiore'),
(61, 'giorgia', 'Rhytm & Blues, Rock and roll, Rock anni 60, Musica Beat, Blues', 'Femmina da 40 a 65 anni', 'Cercasi cantante donna, motivata e appassionata al genere, per band avviata di rock and roll, rhytm and blues, blues e beat inglese anni 60, con repertorio giÃ  programmato e da ampliare, per eventuali serate a Milano e Interland.', 'Cerco cantante', 'Basilicata', '2017-06-26 18:33:25', 'Matera', 'Matera'),
(62, 'morello', 'Blues Rock, Garage rock, Hard rock, Pop rock, Punk rock, Rock and roll, Rock progressivo, Rock psichedelico.', ' Femmina', 'Gli ART BREAKERS cercano cantante donna per sostituire l''attuale che ci lascera'' a breve. \r\nCerchiamo una vera "rocker" di bella presenza appassionata dei mitici Led con voce graffiante e potente.I brani sono eseguiti in tonalita'' originale.\r\n2 ore circa di scaletta all''attivo e concerti gia'' in programma.\r\nDisponibilita'' a provare almeno una volta la settimana presso la ns sala a Cinisello Balsamo.\r\nRichiediamo la massima serieta'' e passione per il rock anni 70.\r\nPer tutte le info:\r\n\r\ngregrocknroll.gz@gmail.com', 'Cercasi Cantante Donna Per Led Zeppelin Tribute Gia'' Avviata', 'Sicilia', '2017-06-26 18:35:29', 'Caltanissetta', 'Gela'),
(63, 'mario', 'hard rock , heavy metal', '20-50 anni', 'La band Ã¨ giÃ  avviata da anni, con repertorio pronto e in costante evoluzione.\r\nSuoniamo prevalentemente pezzi nostri, sia in Italiano che Inglese, piÃ¹ qualche cover (AC/DC,ANTRAX,ZZTOP).\r\n\r\nCerchiamo ardentemente un/una cantante,meglio se scrittore/compositore. \r\nNon cerchiamo professionisti ma un/una cantante che abbia passione il rock trascinante e un pÃ² ruvido, a cui piace cantare ad "alti volumi".\r\nScopo, suonare dal vivo e divertirs', 'Cercasi cantante per gruppo heavy-rock', 'Lombardia', '2017-06-26 18:37:59', 'Como', 'Albiolo'),
(64, 'michela', 'Pop rock, Rock anni 70, Rock anni 80, Pop latino, Europop, Musica leggera, Pop classica, New romantic, Salsa, Tango, Canto popolare, Lisci', 'Femmina da 20 a 50 anni', 'Salve,cerco cantante donna che voglia intraprendere insieme a me che sono un tastierista un progetto per suonare live presso pubs, ristoranti ecc.(Locali e posti da suonare da trovare assieme)\r\nDispongo della strumentazione adatta a tutto.\r\nPossibilmente di bella presenza,simpatica,che sia capace di coinvolgere la gente ed amante della musica pop e leggera italiana, ballo liscio', 'Cerco Cantante Per Progetto Piano Bar, Matrimoni', 'Basilicata', '2017-06-26 18:39:51', 'Potenza', 'Trivigno'),
(65, 'angelo', 'rock , rock n roll', 'nessuna preferenza', 'Band completa cerca cantante per ultimare un gruppo di cover dal sound solidamente rock, spaziando dagli anni 60, 70, 80, 90 fino all''attuale, con voglia di riarrangiare e personalizzare i brani! Zona treviglio!x maggiori info contattatemi senza problemi! Stay rock \\m/\r\nNon siamo interessati a far brani originali e/o inediti.\r\nCerchiamo gente seria e almeno mediamente preparata indifferentemente maschio o femmina!\\m/', 'Cercasi cantante urgentemente!', 'Basilicata', '2017-06-26 18:42:12', 'Potenza', 'Vaglio'),
(66, 'morello', 'rock , hard rock ', 'qualsiasi', 'La band Ã¨ giÃ  avviata da anni, con repertorio pronto e in costante evoluzione. Suoniamo prevalentemente pezzi nostri, sia in Italiano che Inglese, piÃ¹ qualche cover (AC/DC,ANTRAX,ZZTOP). Cerchiamo ardentemente un/una cantante,meglio se scrittore/compositore. Non cerchiamo professionisti ma un/una cantante che abbia passione il rock trascinante e un pÃ² ruvido, a cui piace cantare ad "alti volumi". Scopo, suonare dal vivo e divertirs', 'Cercasi voce!', 'Basilicata', '2017-06-26 18:43:14', 'Potenza', 'Campomaggiore'),
(67, 'giorgia', 'rock in generale', 'nessuna', 'Siamo gli Irradia,gruppo composto da Ivo(chitarra), Elisa (voce) e Mattia(basso). Cerchiamo un batterista con cui portare avanti un progetto che Ã¨ giÃ  avviato e in cui crediamo molto. Abbiamo uno spazio prove tutto nostro nella zona di Roma Nord.', 'Cerco batterista ! NO PERDITEMPO', 'Toscana', '2017-06-26 18:44:53', 'Livorno', 'Livorno'),
(68, 'mario', 'ROCK N ROLL', 'maschio massimo 50 anni', 'Gli ART BREAKERS cercano cantante donna per sostituire l''attuale che ci lascera'' a breve. Cerchiamo una vera "rocker" di bella presenza appassionata dei mitici Led con voce graffiante e potente.I brani sono eseguiti in tonalita'' originale. 2 ore circa di scaletta all''attivo e concerti gia'' in programma. Disponibilita'' a provare almeno una volta la settimana presso la ns sala a Cinisello Balsamo. Richiediamo la massima serieta'' e passione per il rock anni 70. Per tutte le info: gregrocknroll.gz@gmail.com', 'COVER BAND LED ZEPPELIN!', 'Toscana', '2017-06-26 18:45:55', 'Pisa', 'Pisa'),
(71, 'michela', 'ROCK AND ROLL', 'DONNA', 'Cercasi cantante donna, motivata e appassionata al genere, per band avviata di rock and roll, rhytm and blues, blues e beat inglese anni 60, con repertorio giÃ  programmato e da ampliare, per eventuali serate a Milano e Interland.', 'Cerco voce ! no perditempo', 'Basilicata', '2017-06-26 19:42:28', 'Potenza', 'Campomaggiore');

-- --------------------------------------------------------

--
-- Struttura della tabella `articoli`
--

CREATE TABLE IF NOT EXISTS `articoli` (
`IDarticolo` int(11) NOT NULL,
  `Autore` varchar(300) DEFAULT NULL,
  `Titolo` varchar(300) NOT NULL,
  `Contenuto` longtext,
  `DataPubblicazione` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ImmagineAnteprima` varchar(300) DEFAULT NULL,
  `Img_left` varchar(300) NOT NULL,
  `Img_right` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dump dei dati per la tabella `articoli`
--

INSERT INTO `articoli` (`IDarticolo`, `Autore`, `Titolo`, `Contenuto`, `DataPubblicazione`, `ImmagineAnteprima`, `Img_left`, `Img_right`) VALUES
(56, 'angelo', 'I Pink Floyd e Arancia Meccanica ... storia di una colonna sonora', 'Oggi vi abbiamo parlato dellâ€™anniversario di Arancia Meccanica, che compie 45 anni. Un capolavoro, quello di Kubrick, che verrÃ  ricordato, oltre che per le splendide sequenze, anche per una colonna sonora in cui il celebre Beethoven, o Ludovico Van che dir si voglia, la fa da padrone insieme ad un vasto repertorio di musica classica.\r\n\r\nMa la colonna sonora, seppur fantastica, e che ben si adatta alle atmosfere futuristiche del film, avrebbe potuto essere unâ€™altra. Stanley Kubrick, mentre stava lavorando su Arancia Meccanica, rimase enormemente impressionato dalle sonoritÃ  di Atom Heart Mother dei Pink Floyd e addirittura contattÃ² il gruppo per utilizzare proprio quel disco come colonna sonora del film.\r\n\r\nI Pink Floyd rifiutarono lâ€™invito, nel timore di essere manipolati, ma anni dopo se ne pentirono sicuramente. Il reale motivo del rifiuto fu lâ€™uso che il regista avrebbe fatto della traccia: Kubrick infatti aveva chiesto il permesso di usarla e, se necessario, di editarla a proprio piacimento, vista anche lâ€™incertezza stessa del regista su quale segmento usare. E quindi il timore di vedere la suite in qualche modo alterata fu forse il motivo principale del no della band.\r\nWaters in seguito disse che questo fu uno dei suoi errori peggiori, pur aggiungendo recentemente che Â«maybe itâ€™s just as well it wasnâ€™t used after allÂ» (Â«forse Ã¨ stato un bene che non sia stata usataÂ»).\r\n\r\nAd ogni modo, Kubrick, pur con scelte diverse in termini di colonna sonora, inserÃ¬ comunque Atom Heart Mother in Arancia meccanica, rendendo la copertina visibile nel negozio di dischi musicali del film, assieme a quella della colonna sonora di 2001: Odissea nello spazio e del Magical Mystery Tour dei Beatles.\r\n\r\nUna storia curiosa, questa: verrebbe da chiedersi quindi come sarebbe il film con Atom Heart Mother. Ma onestamente non ne sentiamo troppo il bisogno.', '2017-06-26 18:54:53', 'immagini/anteprime_articoli/aranciameccanica.jpg', 'immagini/left_right/set_arancia.JPG', 'immagini/left_right/gilmour.jpg'),
(57, 'giorgia', 'La strumentazione di David  Gilmour', 'David Gilmour Ã¨ uno dei chitarristi migliori per quanto riguarda il tocco ed il â€œfeelingâ€ con la chitarra, il suono inconfondibile dei suoi soli, fatti da melodie relativamente â€œsempliciâ€ ma di grande impatto, ha fatto la storia della chitarra elettrica; il suo sound Ã¨ molto particolare e non Ã¨ facile da imitare, vista la miriade di effetti usati dal front-man dei Pink Floyd negli anni. Il suo modo di suonare, l''intenzione e l''intensitÃ  espresse da Gilmour nei suoi brani, come per la maggior parte dei chitarristi che hanno scritto la storia della musica, sono alla base del suo suono.Pensando a Gilmour, la prima chitarra che viene in mente Ã¨ sicuramente la Fender Stratocaster, che ha accompagnato spesso David nei suoi live ed in studio, la suo strato storica Ã¨ la Stratocaster â€œBlack over sunburstâ€ del 1969 sulla quale Gilmour monto'' un manico â€œReissue ''57â€ tolto da un''altra strato. Altrettanto importante, nella carriera del chitarrista dei Pink Floyd, Ã¨ la Stratocaster replica del 1984 â€œCandy Apple Red ''57â€ personalizzata da Gilmour nella leva del tremolo, piu'' corta, e nell''elettronica: i pick up di questa strato, infatti, sono degli EMG â€œserie SAâ€ attivi e sono presenti, inoltre, due equalizzatori, sempre della EMG, l''EXG e l''SPC, che Gilmour usa molto per plasmare il suo suono e dargli quel tocco â€œcaldoâ€ che lo contraddistingue; questa chitarra, cosi'' settata, fu usata in diversi tour, come, ad esempio, quello di â€œThe Division Bellâ€ e â€œOn the Island Tourâ€, inoltre Ã¨ quella che sentiamo nel celeberrimo brano â€œShine on you crazy diamondâ€. Una curiositÃ  sulle strato di Gilmour Ã¨ rappresentata dalla sua â€œStratocaster #0001â€, prima stratocaster ad avere un numero di serie. Nel â€œparco strumentiâ€ di Gilmour troviamo anche diverse Telecaster, come quella del 1961 usata per le registrazioni di â€œThe Wallâ€, alcune Gibson, come la â€œLes Paul goldtopâ€ del 1955, usata nelle registrazioni di â€œAnother Brick in the Wall pt.2â€ o la â€œJ-200 Celebrityâ€, acustica utilizzata in alcuni live per eseguire â€œWish you were hereâ€, la Gretsch â€œBill Lewis 24-fretâ€, usata in â€œThe dark side of the moonâ€ e diverse Ovation, utilizzate tutte in â€œThe Wallâ€.Parlando invece di effetti, ci inoltriamo in una foresta dove Ã¨ difficile individuare quello che realmente da al suono di Gilmour quella pienezza e quella pulizia, anche nei distorti, che lo caratterizza; Gilmour Ã¨ solito, infatti usare, oltre ai pedali, un''unitÃ  rack, composta da ulteriori effetti che va a miscelare tra di loro; proveremo, quindi, a citare i piu'' importanti. Possiamo sicuramente menzionare, tra i distorsori, il Big Muff, Gilmour ha usato praticamente tutte le versioni di questo pedale, sia live che in studio per il suo suono distorto, unitamente ad un overdrive â€œColorsound Power Boostâ€ o ad un â€œBK Butler Tube Driverâ€, quest''ultimo utilizzato nei suoi ultimi tour da solista. Come compressore possiamo citare il â€œBoss CS-2â€, utilizzato nel tour â€œPulseâ€, mentre nell''equalizzazione troviamo diversi pedali con i quali Gilmour gestisce le varie frequenze, utilizza spesso, infatti, tre â€œBoss GE-7â€, concatenati tra loro, che gestiscono rispettivamente i bassi, i medi e gli alti. Molti degli effetti usati da Gilmour sono stati â€œcustomizzatiâ€ da Pete Cornish, costruttore di ampli ed effetti per i piu'' grandi chitarristi al mondo. Svariati sono i pedali Cornish utilizzati negli anni da Dave, come ad esempio il distorsore ST-2, gusto per citarne uno. Come giÃ  detto, nella catena effetti, oltre ai pedali, gioca un ruolo importante l''unitÃ  rack che contiene altri effetti fondamentali, come il â€œTC Eletronics TC-2290 Digital Delayâ€ che Ã¨ il delay piu'' usato da Gilmour o il â€œLexicon PCM-70â€ che Ã¨ sempre un''unitÃ  delay, ma, a differenza del primo, ha una funzione â€œmulti-tapâ€ che permette di settare il tempo del delay con piu'' precisione, usato, ad esempio in â€œShine on you crazy diamondâ€; il rack contiene poi altri effetti customizzati per Gilmour da Phil Taylor, altro famoso costruttore di effetti per chitarra. Gilmour controlla la sua infinita catena di effetti con una pedaliere e controller  realizzati da Bob Bradshaw e Pete Cornish, che permettono di selezionare singoli effetti oppure preset creati in precedenza. Una "chicca" per i Floydiani della prima ora Ã¨ anche l''italianissimo eco a nastro Echorec Binson, guardare le foto tratte dal "Live at Pompeii" per crederci.\r\n\r\nQuesti sono solo alcuni degli effetti utilizzati dal celeberrimo chitarrista, volendo citarli tutti questo articolo non avrebbe una fine, questo perchÃ¨ Gilmour Ã¨ anche un maestro nel concatenare tra di loro un grande numero di effetti per creare il suo inconfondibile suono, e la sua catena di effetti, dai tempi dei Pink Floyd ad oggi Ã¨ in continua mutazione. Visto che tra i lettori ci sono sicuramente molti "malati" Gilmouriani in possesso di dettagli e informazioni sulla strumentazione del nostro, invito ad integrare quanto scritto in quest''articolo sul nostro forum!\r\nDavid Gilmour Ã¨ la dimostrazione che spesso la velocitÃ  non Ã¨ tutto (non che non sia tecnico, anzi, la sua Ã¨ una tecnica sopraffina) e che, poche note messe al punto giusto possono ricreare un''atmosfera eccezionale, la stessa atmosfera che si sente nei suoi fantastici soli.', '2017-06-26 18:58:16', 'immagini/anteprime_articoli/gilmour.jpg', 'immagini/left_right/acustica.jpg', 'immagini/left_right/strato.jpg'),
(59, 'angelo', 'Le chitarre in carbonio', 'Ci sono tantissimi tipi di chitarre, di ogni forma e dimensione, elettriche e non, con una miriade di dettagli diversi. Ma quasi tutte, al di lÃ  delle singole diversitÃ , hanno in comune una cosa: sono fatte di legno. Acustiche o elettriche che siano, il corpo della chitarra per antonomasia Ã¨ in legno. E non Ã¨ difficile capirne il motivo, dato che si tratta di un materiale naturale, utilizzato per gli strumenti musicali da secoli, che consente di espandere il suono come nient''altro. A parte le chitarre resofoniche, che sono un mondo a parte, si puÃ² tranquillamente concordare che il legno, con le sue inimitabili caratteristiche, sia insostituibile. Eppure, a volte, presenta un difetto insidioso: il legno, in un certo senso, rimane vivo. E quella che forse Ã¨ la sua caratteristica piÃ¹ bella, ne Ã¨ anche il punto debole. Ãˆ soggetto a sbalzi di temperatura e di umiditÃ , a volte si crepa, altre si imbarca. Per il chitarrista medio, che suona in casa o comunque al chiuso, non Ã¨ un grosso problema.\r\n\r\nMa l''avventuroso escursionista che vuole salire in vetta ad una montagna, magari innevata, e potersi concedere il lusso di suonare l''amato strumento godendosi un panorama mozzafiato? Il pescatore, immerso nel nulla, che immagina di portarsi la chitarra in barca? Il musicista in tour, che vorrebbe tanto uno strumento indistruttibile, da lanciare sul suo camioncino e sballottare qua e lÃ  senza pensarci piÃ¹? O ancora il viaggiatore per lavoro, cha ha disperatamente bisogno di una chitarra che sappia resistere ai fatali tragitti in aereo?Verrebbe da dire che costoro non possono che rassegnarsi al rischio di aprire la custodia e trovare qualche orrida sorpresa, e invece le chitarre (quasi) indistruttibili esistono. Sono fatte, neanche a dirlo, in fibra di carbonio.\r\nPerchÃ© in carbonio? Ovviamente perchÃ© in questo modo la chitarra diventa estremamente resistente. Non Ã¨ soggetta agli agenti atmosferici, non rischia di creparsi. Anche facendola cadere, o lasciandola rotolare nella stiva di un aereo, rimane come nuova. I costruttori che si cimentano nel realizzare questi strumenti ne hanno creati di sempre piÃ¹ leggeri e comodi, vere e proprie chitarre da viaggio, alcune addirittura con manico smontabile, da infilare in uno zainetto. Ma se la chitarra Ã¨ tanto piccola da starci in uno zaino, il volume non sarÃ  troppo basso? No. Se la chitarra Ã¨ fatta bene, la fibra di carbonio Ã¨ garanzia di volume alto, ben piÃ¹ alto dell''equivalente in legno.Tra le nuove aziende produttrici di chitarre in carbonio troviamo, ad esempio, la Klos, che presenta la sua travel guitar con corpo in carbonio e manico rimuovibile in mogano e palissandro. PiÃ¹ avveniristica Ã¨ la Rainsong Smokey SMH, che non ha neanche un singolo pezzo in legno, perchÃ© realizzata interamente in carbonio, vetro e grafite.\r\nQuesti strumenti stanno avendo un sempre maggiore successo, proprio perchÃ© vanno meravigliosamente incontro alle esigenze di musicisti viaggiatori o avventurieri, o a chi vive in zone dal clima troppo rigido o troppo caldo, difficilmente tollerabile da una normale chitarra in legno.\r\nQualche appassionato, addirittura, si Ã¨ sbilanciato nel dire che le chitarre in fibra di carbonio, nei prossimi anni, potrebbero ritagliarsi una fetta di mercato tale da soppiantare quelle in legno a fascia di prezzo media. Una previsione piuttosto audace e, probabilmente, poco attenta. Per quanto questi nuovi strumenti suonino benissimo, da un lato sono ancora molto costosi, e dall''altro (soprattutto!) rimane sacrosanto che il legno sia insostituibile.Basti pensare alla grande richiesta di strumenti vintage, il cui suono, frutto di legno stagionato per decenni, Ã¨ unico e irripetibile.\r\nNon si puÃ² in ogni caso negare che, attualmente, ci troviamo in una fase di sviluppo molto interessante, fatta di sperimentazioni e idee sempre nuove. Dato che la fibra di carbonio non presenta le stesse caratteristiche del legno, le tecniche costruttive possono variare, lasciando spazio a progetti tutti da scoprire. La giÃ  citata Rainsong, giusto per dirne una, ha in catalogo modelli ibridi, e chissÃ  quali altre novitÃ  ci attendono. La vera sfida, in realtÃ , risiede tutta nel suono: non ha senso tentare di imitare il legno. Ãˆ meglio, e piÃ¹ lungimirante, cercare una voce propria del carbonio, che sia semplicemente diversa e con una sua personalitÃ . Solo con il tempo scopriremo se si tratta di un nuovo mondo o dell''ennesimo abbaglio.', '2017-06-26 19:02:15', 'immagini/anteprime_articoli/strato.jpg', 'immagini/left_right/pulizia_chitarra.jpg', 'immagini/left_right/acustica.jpg'),
(61, 'angelo', 'Il mantenimento della chitarra', 'La chitarra, in un certo senso, ha una vita propria. Ãˆ composta principalmente da legno (che Ã¨ un materiale vivo, soggetto a stress e cambiamenti di clima), e soprattutto Ã¨ usata e sballottata qua e lÃ .\r\nPuÃ² accadere che subisca qualche piccolo danno o piÃ¹ semplicemente il normale effetto dell''uso prolungato. Per questo Ã¨ importante conoscere gli accorgimenti da prendere per evitare spiacevoli inconvenienti e soprattutto riconoscere la radice del problema quando si notano diversitÃ  di suono.come abbiamo giÃ  visto nell''articolo dedicato alle 5 cose da non fare sulla chitarra, la pulizia non Ã¨ un fattore meramente estetico e di igiene, ma puÃ² in qualche modo influire anche sulla resa dello strumento. Pulire adeguatamente il manico consente di mantenere la scorrevolezza delle dita sulla tastiera, mentre per chi non ama cambiare spesso le corde puÃ² essere utile un prodotto per pulirle dopo l''uso, eliminando le tracce di sporco e sudore che inevitabilmente lasciamo dopo aver suonato.\r\nUna menzione particolare va fatta per lo sporco che si accumula in prossimitÃ  delle stanghette di metallo che indicano i tasti (frets): se lo si trascura troppo, rischia di diventare molto difficile da rimuovere e contribuire al famoso "fret buzzing".l''action delle corde Ã¨ la distanza che intercorre tra le stesse e il manico. Non esiste un valore perfetto, in quanto ciascun chitarrista ha le sue preferenze in merito e le esigenze possono cambiare in base al genere che si suona (ad esempio chi usa lo slide potrÃ  preferire un''action piÃ¹ alta, vice versa chi suona come solista potrebbe trovare comodo avere le corde piÃ¹ vicine alla tastiera).\r\nÃˆ importante perÃ² tenere d''occhio l''action, soprattutto per i principianti che devono ancora prendere dimestichezza con gli aspetti piÃ¹ tecnici della chitarra, in quanto questa puÃ² influire sulla comoditÃ  nel suonare e sull''accordatura. Un''action troppo alta rende piÃ¹ difficile e faticoso premere le corde, mentre un''action troppo bassa potrebbe provocare lo sfregamento delle corte sui tasti, causando fastidiosi rumori metallici e compromettendo il suono.\r\nLe chitarre elettriche hanno spesso un sistema apposito che consente di regolare il ponte su cui poggiano le corde, in modo da sistemare l''action in modo veloce. Solitamente invece sulle chitarre acustiche Ã¨ necessario l''intervento di un esperto, in quanto potrebbe essere necessario abbassare il ponte o il capotasto manualmente. \r\nDi solito l''action si misura al dodicesimo tasto, e dovrebbe avere dei valori, a livelli estremi, che si aggirano intorno l''uno e i tre millimetri (sono comunque valori indicativi del tutto generici e che possono variare anche da chitarra a chitarra).Ã¨ un aspetto che puÃ² influire strettamente sull''action, che consiste nel controllare che il manico non sia troppo curvo, in un senso o nell''altro. Come Ã¨ facile immaginare, un manico eccessivamente curvo in avanti (up bow) causerÃ  lo sfregamento delle corde sui tasti all''inizio e alla fine della tastiera, mentre troppa curvatura all''indietro (back bow) puÃ² causare lo sfregamento delle corde verso i tasti centrali. Riguardo la curvatura ideale del manico ci sono varie scuole di pensiero, ma nella maggior parte dei casi i liutai convengono nel ritenere che un manico non dovrebbe essere perfettamente dritto, ma avere una leggerissima curvatura in avanti, che consenta alle corde di compiere senza intralci il loro movimento ellissoidale.\r\nUna cosa Ã¨ certa: il manico non sta fermo. Essendo soggetto alla forza delle corde e a quella esercitata dal musicista, puÃ² accadere che si inclini piÃ¹ o meno vistosamente. Per questa ragione i manici delle chitarre sono dotati, all''interno, di un''asta metallica chiamata truss rod. Il truss rod Ã¨ regolabile al pari di una vite, e consente di aggiustare la curvatura del manico a seconda che lo si avviti o lo si allenti.', '2017-06-26 19:05:31', 'immagini/anteprime_articoli/pulizia_chitarra.jpg', 'immagini/left_right/acustica.jpg', 'immagini/left_right/gibson.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`IDmessaggio` int(11) NOT NULL,
  `Mittente` varchar(300) NOT NULL,
  `testo` text,
  `DataInvio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ;

--
-- Dump dei dati per la tabella `chat`
--

INSERT INTO `chat` (`IDmessaggio`, `Mittente`, `testo`, `DataInvio`) VALUES
(259, 'angelo', 'ciao a tutti !', '2017-06-26 19:15:47');

-- --------------------------------------------------------

--
-- Struttura della tabella `commenti`
--

CREATE TABLE IF NOT EXISTS `commenti` (
`IDcommento` int(50) NOT NULL,
  `Caricatore` varchar(300) NOT NULL,
  `TestoCommento` varchar(500) NOT NULL,
  `DataPubbl` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Likes` int(50) DEFAULT NULL,
  `Articolo_riferito` int(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dump dei dati per la tabella `commenti`
--

INSERT INTO `commenti` (`IDcommento`, `Caricatore`, `TestoCommento`, `DataPubbl`, `Likes`, `Articolo_riferito`) VALUES
(126, 'morello', 'Articolo fantastico! Rubo e condivido... mi sono sempre chiesto cosa sarebbe potuto essere quel film con una colonna sonora di uno dei gruppi piu grandi della storia..! ', '2017-06-26 19:12:22', 1, 56),
(128, 'angelo', 'Bellissimo articolo', '2017-06-26 20:51:42', 0, 57);

-- --------------------------------------------------------

--
-- Struttura della tabella `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
`IDlike` int(11) NOT NULL,
  `IDcommento` int(11) NOT NULL,
  `Utente` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dump dei dati per la tabella `likes`
--

INSERT INTO `likes` (`IDlike`, `IDcommento`, `Utente`) VALUES
(8, 126, 'angelo');

-- --------------------------------------------------------

--
-- Struttura della tabella `risposte`
--

CREATE TABLE IF NOT EXISTS `risposte` (
`IDrisposta` int(50) NOT NULL,
  `Richiedente` varchar(300) DEFAULT NULL,
  `Interlocutore` varchar(300) DEFAULT NULL,
  `Testo` longtext,
  `Data_ris` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Letto` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dump dei dati per la tabella `risposte`
--

INSERT INTO `risposte` (`IDrisposta`, `Richiedente`, `Interlocutore`, `Testo`, `Data_ris`, `Letto`) VALUES
(54, 'michela', 'angelo', 'ciao sono interessato', '2017-06-26 19:40:48', 1),
(55, 'angelo', 'michela', ' Ciao sono interessata', '2017-06-26 19:43:47', 0),
(56, 'mario', 'angelo', 'sono interessato', '2017-06-26 20:54:54', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Utente` varchar(50) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pwd` varchar(50) NOT NULL,
  `DataNascita` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Comune` varchar(50) NOT NULL,
  `Sesso` varchar(50) NOT NULL,
  `Admin` int(11) NOT NULL,
  `Ban` int(11) NOT NULL DEFAULT '0',
  `Loggato` tinyint(1) NOT NULL,
  `DataReg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ImmagineProfilo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`Utente`, `Nome`, `Cognome`, `Email`, `Pwd`, `DataNascita`, `Provincia`, `Comune`, `Sesso`, `Admin`, `Ban`, `Loggato`, `DataReg`, `ImmagineProfilo`) VALUES
('angelo', 'angelo', 'carbone', 'michelangelo2@tiscali.it', '98a8d3f11b400ddc06d7343375b71a84', '30/1/1995', 'Potenza', 'Campomaggiore', 'Maschio', 1, 0, 0, '2017-06-26 18:19:47', 'immagini/immagini_profilo/fratelli.jpg'),
('giorgia', 'Giorgia', 'Carbone', 'michelangelo2@tiscali.it', '7f8f98248522f399e9f98a29fb149eee', '5/5/1988', 'Agrigento', 'Siculiana', 'Femmina', 1, 0, 0, '2017-06-26 18:26:57', 'immagini/immagini_profilo/44722030-pink-floyd-wallpaper-hd.jpg'),
('mario', 'Mario', 'Rossi', 'michelangelo2@tiscali.it', 'de2f15d014d40b93578d255e6221fd60', '10/7/1986', 'Potenza', 'Albano di Lucania', 'Maschio', 0, 0, 0, '2017-06-26 18:25:44', 'immagini/immagini_profilo/strato.jpg'),
('michela', 'Michela', 'Verdi', 'michelangelo2@tiscali.it', '16383da1786bad9ee106b6b1bc9d32fc', '12/9/1993', 'Pisa', 'Ponsacco', 'Femmina', 0, 0, 0, '2017-06-26 18:28:05', 'immagini/immagini_profilo/cop.jpg'),
('morello', 'davide', 'coccomini', 'michelangelo2@tiscali.it', '34b48cce059aa2a24026a35cfb165018', '5/7/1995', 'Caltanissetta', 'Gela', 'Maschio', 0, 0, 0, '2017-06-26 18:22:35', 'immagini/immagini_profilo/waters.jpg'),
('prova', 'prova', 'prova', 'michelangelo2@tiscali.it', '5fe6ce280af32ba2816b0f0d4cff5e63', '1/1/1997', 'Agrigento', 'prova', 'Maschio', 0, 0, 0, '2017-06-26 20:10:23', 'immagini/foto_profilo_uomo.png'),
('utente', 'utente', 'utente', 'michelangelo2@tiscali.it', 'b88d6b04a9dc38860301f6bdd81e5ccd', '1/1/1997', 'Agrigento', 'prova', 'Maschio', 0, 0, 0, '2017-06-26 20:17:45', 'immagini/foto_profilo_uomo.png'),
('utente2', 'utente2', 'utente2', 'michelangelo2@tiscali.it', 'f7a88d7c3168218b580aa68ab3030491', '1/1/1997', 'Agrigento', 'prova', 'Maschio', 0, 0, 0, '2017-06-26 20:38:58', 'immagini/foto_profilo_uomo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annunci`
--
ALTER TABLE `annunci`
 ADD PRIMARY KEY (`IDannuncio`), ADD KEY `Caricatore` (`Caricatore`);

--
-- Indexes for table `articoli`
--
ALTER TABLE `articoli`
 ADD PRIMARY KEY (`IDarticolo`), ADD KEY `Autore` (`Autore`), ADD KEY `Autore_2` (`Autore`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`IDmessaggio`);

--
-- Indexes for table `commenti`
--
ALTER TABLE `commenti`
 ADD PRIMARY KEY (`IDcommento`), ADD KEY `Articolo_riferito` (`Articolo_riferito`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
 ADD PRIMARY KEY (`IDlike`), ADD KEY `IDcommento` (`IDcommento`), ADD KEY `Utente` (`Utente`), ADD KEY `Utente_2` (`Utente`), ADD KEY `Utente_3` (`Utente`), ADD KEY `Utente_4` (`Utente`), ADD KEY `Utente_5` (`Utente`);

--
-- Indexes for table `risposte`
--
ALTER TABLE `risposte`
 ADD PRIMARY KEY (`IDrisposta`), ADD KEY `Interlocutore` (`Interlocutore`), ADD KEY `Richiedente` (`Richiedente`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`Utente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annunci`
--
ALTER TABLE `annunci`
MODIFY `IDannuncio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `articoli`
--
ALTER TABLE `articoli`
MODIFY `IDarticolo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `IDmessaggio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=261;
--
-- AUTO_INCREMENT for table `commenti`
--
ALTER TABLE `commenti`
MODIFY `IDcommento` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
MODIFY `IDlike` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `risposte`
--
ALTER TABLE `risposte`
MODIFY `IDrisposta` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `annunci`
--
ALTER TABLE `annunci`
ADD CONSTRAINT `annunci_ibfk_1` FOREIGN KEY (`Caricatore`) REFERENCES `users` (`Utente`);

--
-- Limiti per la tabella `articoli`
--
ALTER TABLE `articoli`
ADD CONSTRAINT `articoli_ibfk_1` FOREIGN KEY (`Autore`) REFERENCES `users` (`Utente`);

--
-- Limiti per la tabella `commenti`
--
ALTER TABLE `commenti`
ADD CONSTRAINT `commenti_ibfk_1` FOREIGN KEY (`Articolo_riferito`) REFERENCES `articoli` (`IDarticolo`);

--
-- Limiti per la tabella `likes`
--
ALTER TABLE `likes`
ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`IDcommento`) REFERENCES `commenti` (`IDcommento`),
ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`Utente`) REFERENCES `users` (`Utente`);

--
-- Limiti per la tabella `risposte`
--
ALTER TABLE `risposte`
ADD CONSTRAINT `risposte_ibfk_1` FOREIGN KEY (`Interlocutore`) REFERENCES `users` (`Utente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
