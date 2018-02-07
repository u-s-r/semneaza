<?php
require 'functions.php';

$data = get_data();
?>
<!DOCTYPE html>
<html lang="ro">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inițiativa cetățenească de modificare a Constituției">
    <meta name="author" content="USR">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:title" content="Fără penali în funcții publice">
    <meta property="og:description" content="Inițiativa cetățenească de modificare a Constituției">
    <meta property="og:image" content="<?= SITE_URL ?>assets/app/img/semneaza.jpg">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.ico" rel="icon">
    <title>Fără penali în funcții publice &middot; Inițiativa cetățenească de modificare a Constituției</title>
    <link href="https://code.cdn.mozilla.net/fonts/fira.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="assets/vendor/jvectormap/jquery-jvectormap.css" rel="stylesheet">
    <link href="assets/app/css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="href="https://<?= $_SERVER['SERVER_NAME'] ?>"">
          <img src="assets/app/img/logo.png" alt="USR">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#despre">Despre</a></li>
            <li><a href="#semneaza">Semnează inițativa</a></li>
            <li><a href="#harta">Situația pe regiuni</a></li>
            <li><a href="#media">Media</a></li>
            <li><a href="#comunicate">Comunicate de presă</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="jumbotron jumbotron-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-6 banner">
            <h1>Fără penali in funcții publice!</h1>
            <h2>Nu sta deoparte!</h2>
            <div class="countdown">
              <h3>Numărul de zile până la strângerea semnăturilor:</h3>
              <div class="countdown-primary">
                <div class="value" id="countdown-months">00</div>
                <div class="label">Luni</div>
              </div>
              <div class="countdown-separator">
                <div class="value">:</div>
              </div>
              <div class="countdown-primary">
                <div class="value" id="countdown-days">00</div>
                <div class="label">Zile</div>
              </div>
              <div class="countdown-separator">
                <div class="value">:</div>
              </div>
              <div class="countdown-secondary">
                <div class="value" id="countdown-hours">00</div>
                <div class="label">Ore</div>
              </div>
              <div class="countdown-separator">
                <div class="value">:</div>
              </div>
              <div class="countdown-secondary">
                <div class="value" id="countdown-minutes">00</div>
                <div class="label">Minute</div>
              </div>
              <div class="countdown-separator">
                <div class="value">:</div>
              </div>
              <div class="countdown-secondary">
                <div class="value" id="countdown-seconds">00</div>
                <div class="label">Secunde</div>
              </div>
            </div>
          </div>
          <div class="col-md-6 panel-host">
            <div class="panel panel-default">
              <div class="form-loading-circle-container hidden">
                <div class="loading-circle">
                  <div class="outer-circle">
                    <div class="inner-circle"></div>
                  </div>
                  <div class="loading-text">Se încarcă...</div>
                </div>
              </div>
              <form id="date-contact" method="post" action="date-contact.php" autocomplete="on">
                <div class="panel-body error-message hidden">
                    <h1>Whoops!</h1>
                    <p>Ceva nu a mers cum trebuie. Te rugam reincarca pagina si mai incearca o data, sau trimite un e-mail la contact@usr.ro </p>
                    <div class="svg-error-wrapper">
                      <svg id="successAnimation" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                        <path id="successAnimationResult" fill="#D8D8D8" d="M35.3,8.9c-13.2,0-24,10.8-24,24s10.8,24,24,24s24-10.8,24-24S48.6,8.9,35.3,8.9z M47,43.2l-1.4,1.4L35.3,34.3L25,44.6l-1.4-1.4l10.3-10.3L23.6,22.6l1.4-1.4l10.3,10.3l10.3-10.3l1.4,1.4L36.7,32.9L47,43.2z"/>
                        <circle id="successAnimationCircle" cx="35" cy="35" r="24" stroke="#979797" stroke-width="2" stroke-linecap="round" fill="transparent"/>
                        <g id="successAnimationCheck" stroke="#979797" stroke-width="2" >
                          <line class="st1" x1="24.1" y1="24" x2="46.1" y2="46"/>
                          <line class="st1" x1="46.1" y1="24" x2="24.1" y2="46"/>
                        </g>
                      </svg>
                  </div>
                  </div>
                <div class="panel-body success-message hidden">
                    <h1>Multumim!</h1>
                    <p>Informatiile tale au fost inregistrate. bla bla? </p>
                    <div class="svg-success-wrapper">
                      <svg id="successAnimation" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                        <path id="successAnimationResult" fill="#D8D8D8" d="M35,60 C21.1928813,60 10,48.8071187 10,35 C10,21.1928813 21.1928813,10 35,10 C48.8071187,10 60,21.1928813 60,35 C60,48.8071187 48.8071187,60 35,60 Z M23.6332378,33.2260427 L22.3667622,34.7739573 L34.1433655,44.40936 L47.776114,27.6305926 L46.223886,26.3694074 L33.8566345,41.59064 L23.6332378,33.2260427 Z"/>
                        <circle id="successAnimationCircle" cx="35" cy="35" r="24" stroke="#979797" stroke-width="2" stroke-linecap="round" fill="transparent"/>
                        <polyline id="successAnimationCheck" stroke="#979797" stroke-width="2" points="23 34 34 43 47 27" fill="transparent"/>
                      </svg>
                  </div>
                </div>
                <div class="panel-body info-message">
                  <h1>Alătură-te inițiativei</h1>
                  <p>Încă nu am început strângerea de semnături, <strong>inițiativa așteaptă avizul legislativ</strong>. Lasă-ne aici datele și te vom contacta noi când începem să strângem semnăturile. </p>
                  <div>
                    <label for="name"><h4>Numele și prenume</h4></label>
                    <input type="text" name="name" required autocomplete="name"/>
                  </div>
                  <div>
                    <label for="tel"><h4>Telefon</h4></label>
                    <input type="tel" name="tel" autocomplete="tel"/>
                  </div>
                  <div>
                  <label for="email"><h4>Email</h4></label>
                    <input type="email" name="email" autocomplete="email"/>
                  </div>
                  <div class="validation-error-message hidden">
                    <p>Te rugam completeaza cel putin unul din campurile Telefon sau E-mail</p>
                  </div>
                  <div class="bottom-buttons">
                    <button type="submit" class="btn btn-default" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'trimite_date_contact')">
                      Înscrie-te acum!
                    </button>

                    <a href="https://www.usr.ro/doneaza/" title="Doneaza" class="btn btn-inverted" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'doneaza')">
                      Donează!
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Ajută și tu la strângerea semnăturilor</h1>
          <div id="progres-semnaturi"></div>
        </div>
      </div>
    </div>
    <a name="despre"></a>
    <div class="descriere">
      <div class="container">
        <div class="col-md-6 detalii">
          <h1>Despre</h1>
          <div class="slick-slider">
            <div>
              <p>
                Corupția înseamnă sărăcie. Ea apare când cei din societatea civilă sunt într-o stare de letargie din
                cauza repetatelor dezamăgiri venite din partea politicienilor. Dacă ne uităm la cum arată România astăzi,
                în raport cu celelalte țări europene, o găsim la coada clasamentelor la toate cele trei sectoare
                primordiale: educație, sănătate și dezvoltarea infrastructurii.
              </p>
              <p>
                România are cel mai slab sistem de sănătate din Uniunea Europeană. Lipsa medicilor și a medicamentelor,
                corupția managementului și infrastructura șubredă, plasează România pe primul loc în UE la mortalitatea
                în spitale.
              </p>
              <p>
                Nici în privința educației nu stăm mai bine, peste 40% dintre elevii români de gimnaziu sunt analfabeți
                funcționali, ceea ce ne duce tot pe primul loc în UE.
              </p>
              <p>
                Tot pe ultimul loc suntem și în privința kilometrilor de autostradă construiți.
              </p>
              <p>
                Din cauza corupției, 2 din 5 români trăiesc în sărăcie sau la un pas să ajungă în această situație, județele
                cele mai mai sărace din țară sunt și cele conduse de baronii locali ai PSD: Teleorman, Buzău, Vaslui.
              </p>
            </div>
            <div>
              <p>
                Fără penali în funcții publice ar însemna o Românie fără Liviu Dragnea, care dat jos două guverne într-un an
                ca să schimbe legile justiției în interes propriu, fără mărturiile mincinoase pentru care este anchetat Călin
                Popescu Tăriceanu, fără deputatul mitralieră Cătălin Rădulescu, fără Viorel Ilie (ALDE) care a trucat
                concursurile de angajare din ministerul pentru Relația cu Parlamentul.
              </p>
              <p>
                Realitatea din România anului 2018 înseamnă toate cele de mai sus. Numai societatea civilă poate determina o
                schimbare. Căci nu este de ajuns să-i schimbăm pe cei de la putere, ci trebuie schimbat modul în care acționează
                poporul român. Urgența situației vine din schimbarea modului de a face politică cu unul moral și îndreptat către
                realitatea pe care o vedem zilnic în jurul nostru. Propunerea de schimbare a Constituției este una care are la
                bază inițiativa cetățenească mult strigată de românii care au ieșit în stradă în 2017 și 2018.
              </p>
              <p>
                Demersul are nevoie de 500.000 de semnături strânse în 6 luni. Semnătura ta poate schimba modul în care funcționează și arată România.
              </p>
              <p>
                Alătură-te inițiativei!
              </p>
            </div>
          </div>
        </div>
        <?php
          $lista_pasi = [];

          $lista_pasi[] = "Se formează un grup de inițiativă din cel puțin zece cetățeni";
          $lista_pasi[] = "Proiectul de modificare a Constituției este trimis pentru aviz la Consiliul Legislativ";
          $lista_pasi[] = "Proiectul și avizul consultativ sunt publicate în Monitorul Oficial";
          $lista_pasi[] = "Începe strângerea de 600.000 de semnături în 3 luni, din cel puțin 20 de județe";
          $lista_pasi[] = "Listele de semnături împreună cu proiectul și expunerea de motive se înregistrează la Parlament";
          $lista_pasi[] = "Parlamentul înaintează propunerea către CCR pentru controlul de constituționalitate";
          $lista_pasi[] = "Începe procedura parlamentară, cu dezbateri în comisii și vot în plenul Camerei Deputaților și Senat";
          $lista_pasi[] = "Se organizează un referendum decizional care trebuie să aibă cvorum și vot majoritar";
        ?>
        <div class="col-md-6 pasi">
            <h1>Etapele proiectului</h1>
            <ul>
              <?php
                foreach ($lista_pasi as $numar => $descriere) {

                  if ($numar+1 <= PASI_COMPLETATI) {
              ?>
                <li><div class="bifa"></div><span class="descriere-etapa"><?= $descriere ?></span></li>
              <?php
                } else {
              ?>
                <li><div class="numar"><?= $numar+1 ?></div><span class="descriere-etapa"><?= $descriere ?></span></li>
              <?php
                  }
                }
              ?>
            </ul>
          </div>
      </div>
    </div>
    <a name="semneaza"></a>
    <div class="container">
      <div class="col-md-12">
        <ul class="container-media">
          <li class="media-element">
            <div class="media-element__left">
              <img class="media-object" src="assets/app/img/icon-semneaza.png" alt="Semnează">
            </div>
            <div class="media-element__right">
              <h3>Semnează</h3>
              <p>Imprimă formularul folosind butonul de mai sus şi completează-l conform instrucțiunilor, folosind date din cartea ta de identitate. La final semnează formularul, doar aşa este considerată validă intrarea.</p>
            </div>
          </li>
          <li class="media-element">
            <div class="media-element__left">
              <img class="media-object" src="assets/app/img/icon-spune-prietenilor.png" alt="Semnează">
            </div>
            <div class="media-element__right">
              <h3>Spune-le familiei și prietenilor!</h3>
              <p>Ne trebuie cât mai multe semnături, aşa că te rugăm să vorbeşti cu prietenii, familia şi vecinii tăi să completeze şi ei formularul. Semnăturile lor trebuie să fie originale; nu semnaţi în locul altei persoane.</p>
              <p>
                <a class="btn btn-facebook" href="https://www.facebook.com/sharer.php?u=https://semneaza.usr.ro/" target="_blank">
                  <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
                  Distribuie
                </a>
              </p>
            </div>
          </li>
          <li class="media-element">
            <div class="media-element__left">
              <img class="media-object" src="assets/app/img/icon-trimite.png" alt="Semnează">
            </div>
            <div class="media-element__right">
              <h3 class="media-heading">Trimite</h3>
              <p>Formularele completate trebuie să ajungă în posesia noastră <strong>până pe 20 octombrie </strong> (ghidul pentru <a href="http://usb.ro/wp-content/uploads/2016/10/Ghid-strangere-semnaturi-diaspora.pdf" target="_blank">diaspora aici</a>). Poţi face asta în două feluri:</p>
              <ul class="list list-checkbox">
                <li class="checked">
                  <span class="glyphicon glyphicon-check"></span>
                Adu personal petiția la unul din corturile de campanie ale USR (<a href="#corturi" data-toggle="modal" role="button">vezi locațiile noastre</a>) sau contactează un reprezentat al USR din țară pentru a le prelua (<a href="#contact" data-toggle="modal" role="button">vezi persoanele de contact</a>).
                </li>
                <li class="checked">
                <span class="glyphicon glyphicon-check"></span>
                  Trimite GRATUIT formularul/formularele în original prin Poșta Română, serviciul de corespondenţă cu taxe preplătite (<a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-container="body" data-placement="auto" data-html="true" data-content="&lt;p&gt;Atunci când sigilati plicul poştal, pe partea unde aţi trecut ca destinatar sediul central al USR, puneţi în dreapta sus o mică etichetă (un sticker sau o foaie mică printată şi lipită) cu:&lt;/p&gt;&lt;div class=&quot;tag&quot;&gt;&lt;div class=&quot;value&quot;&gt;CR&lt;/div&gt; Taxe poștale preplătite&lt;/div&gt;">vezi detalii</a>) la sediul central al USR (<strong>Str. Carol Davila, Nr. 91, Parter, Ap. 1, Sector 5, 050453, București</strong>), sau adu-le personal în intervalul 10-20.
                </li>
              </ul>
              <p>Atenție:</p>
              <ul class="list list-bulleted">
                <li>Listele de semnături nu pot fi trimise prin poșta electronică;</li>
                <li>Nu trimiteți copii ale listelor de semnături.</li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <a name="harta"></a>
    <div class="harta">
      <div class="container">
        <div class="col-md-6">
          <h1>Situația semnăturilor pe regiuni</h1>
          <span>Mergi cu mouse-ul peste pentru a vizualiza situația semnăturilor pe regiuni.</span>
        </div>
        <div class="col-md-6 maps">
          <div class="map map-ro">
            <div class="embed-responsive embed-responsive-4by3">
              <div id="map-ro"></div>
            </div>
            <div class="label">În țară</div>
          </div>
          <div class="map map-diaspora">
            <div id="map-diaspora"></div>
            <div class="label">În diaspora</div>
          </div>
        </div>
      </div>
    </div>
    <a name="media"></a>
    <div class="row">
    </div>
    <a name="comunicate"></a>
    <div class="comunicate">
      <div class="container">
        <div class="col-md-12">
          <h2>Comunicate de presă</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="comunicat">
                <a href=""><img src="http://lorempixel.com/370/200/business/" title="Titlu comunicat"></a>
                <div class="corp">
                  <span>28 Ianuarie 2018</span>
                  <h3><a href="">USR strânge semnături pentru a interzice prin Constituție penalii în funcții publice</a></h3>
                  <p>Uniunea Salvați România inițiază strângerea de semnături pentru o inițiativă cetățenească ce transpune...</p>
                  <a href="">Articolul complet <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="comunicat">
                <a href=""><img src="http://lorempixel.com/370/200/business/" title="Titlu comunicat"></a>
                <div class="corp">
                  <span>28 Ianuarie 2018</span>
                  <h3><a href="">USR strânge semnături pentru a interzice prin Constituție penalii în funcții publice</a></h3>
                  <p>Uniunea Salvați România inițiază strângerea de semnături pentru o inițiativă cetățenească ce transpune...</p>
                  <a href="">Articolul complet <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
            <a href="" class="btn btn-default mai-multe">Vezi mai multe</a>
          </div>
        </div>
      </div>
    </div>
    <div class="doneaza">
      <div class="container">
          <h1>Implică-te și tu!</h1>
          <p>Donează pentru a susține campania USR și a scăpa de penalii din funcții publice.</p>
          <p>Mulțumim!</p>
          <a href="https://www.usr.ro/doneaza/" class="btn btn-inverted-dark-bg" title="Donează!">Donează!</a>
      </div>
    </div>
    Blabla footer here
    <div class="social-media">
      <a class="facebook" href="https://www.facebook.com/sharer.php?u=<?= SITE_URL ?>" target="_blank">
        <img src="assets/app/img/logo-facebook-inverted.png" alt="Facebook">
        Distribuie
      </a>
    </div>
<?php
function modal_locatii($id, $title, $data_modal) {
  global $data;
?>
  <div class="modal fade" id="<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $id ?>-label">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="<?= $id ?>-label"><?= $title ?></h4>
        </div>
        <div class="modal-body">
          <div class="row row-three-columns">
            <?php foreach ($data_modal as $judet => $locatii) { ?>
              <div class="col-sm-6 col-md-4">
                <h4><?= $data['numeJudet'][$judet] ?></h4>
                <?php foreach ($locatii as $locatie) { ?>
                  <dl>
                    <dt><?= $locatie['locatie'] ?></dt>
                    <dd>
                      <ul class="list-unstyled">
                        <?php foreach ($locatie['intrari'] as $intrare) { ?>
                          <li><?= $intrare ?>
                        <?php } ?>
                      </ul>
                    </dd>
                  </dl>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'doneaza')">Închide</button>
        </div>
      </div>
    </div>
  </div>
<?php
}

modal_locatii('contact', 'Persoane de contact', $data['contacte']);
modal_locatii('corturi', 'Corturile de campanie ale USR', $data['corturi']);
?>
    <script><?php printf('remoteData = %s;', json_encode($data)); ?></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/vendor/jquery/jquery.min.js"><\/script>')</script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src=".tmp/application.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30235099-2', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
