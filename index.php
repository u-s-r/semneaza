<?php
$page = "acasa";

$title="Fără penali în funcții publice";
$description="Inițiativa cetățenească de modificare a Constituției";

require 'include/header.php';
?>
    <div class="jumbotron jumbotron-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-6 banner">
            <div class="prima-linie">
              <h1>Fără Penali în funcții publice!</h1>
            </div>
            <div class="a-doua-linie">
              <h2>Inițiativa cetățenească de modificare a Constituției</h2>
            </div>
            <?php if(CAMPANIE_DE_SEMNATURI) { ?>
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
            <?php } else { ?>
              <p>
                <img src="build/img/bec-creion.png" alt="">
                “Nu pot fi aleși în organele administrației publice locale, în Camera Deputaților, în Senat și în funcția de Președinte al României <strong>cetățenii condamnați definitiv la pedepse privative de libertate</strong> pentru infracțiuni săvârșite cu intenție, până la intervenirea unei situații care înlătură consecințele condamnării."
              </p>
            <?php } ?>
          </div>
          <div class="col-md-6 panel-host">
            <div class="panel panel-default">
              <form id="date-contact" method="post" action="date-contact.php">
                <div class="panel-body">
                  <a name="formular"></a>
                  <h1>Alătură-te inițiativei</h1>
                  <p>Încă nu am început strângerea de semnături, <strong>inițiativa așteaptă avizul de la Consiliul Legislativ</strong>. Lasă-ne aici datele și te vom contacta noi când începem să strângem semnăturile. </p>
                  <div>
                    <h4>Numele și prenume</h4>
                    <input type="text" name="nume">
                  </div>
                  <div>
                    <h4>Telefon</h4>
                    <input type="text" name="telefon">
                  </div>
                  <div>
                    <h4>Email</h4>
                    <input type="text" name="email">
                  </div>

                  <button type="submit" class="btn btn-default" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'trimite_date_contact')">
                    Înscrie-te acum!
                  </button>
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
          <h2>Ajută și tu la strângerea semnăturilor</h2>
          <div id="progres-semnaturi"></div>
        </div>
      </div>
    </div>
    <a name="initiativa"></a>
    <div class="initiativa">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>Inițiativa</h1>
            <h3>Expunere de motive</h3>
            <strong>Lege de revizuire a Constituției României</strong>
            <p>
              Importanța deosebit de mare a relațiilor sociale care privesc alegerea prin vot a autorităților locale, deputaților, senatorilor, Președintelui României și europarlamentarilor, precum și incidența lor în procesul de instaurare, menținere și exercitare a puterii de stat, reprezintă principalele motive pentru care acestea sunt reglementate atât prin Constituție, legea fundamentală a statului român, cât și prin legile electorale, în număr de patru.
             </p>
             <a href="expunere-de-motive.php">Vezi întreaga expunere de motive <span class="glyphicon glyphicon-menu-right"></span></a>
           </div>
           <a href="expunere-de-motive.php"><img src="build/img/expunere-de-motive.png" alt="" class="col-md-6"></a>
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
              <p>Fără penali în funcții publice are la bază o inițiativă cetățenească ce are ca scop interzicerea cetățenilor condamnați definitiv să mai ocupe funcții publice în instituțiile de stat. Cei mai importanți oameni politici din instituțiile care conduc în prezent România sunt puși sub învinuiri de fapte de corupție, de aceea considerăm că este necesară o curățenie în politica românească.</p>
              <p>Corupția stă la baza problemelor pe care România le are în cele mai importante domenii: sănătate, educație și dezvoltarea infrastructurii.</p>
              <p>Țara noastră are cel mai slab sistem de sănătate din Uniunea Europeană. Lipsa medicilor și a medicamentelor, corupția managementului și infrastructura șubredă, plasează România pe primul loc în UE la mortalitatea în spitale. Nici în privința educației nu stăm mai bine, peste 40% dintre elevii români de gimnaziu sunt analfabeți funcționali, ceea ce ne duce tot pe primul loc în UE. România conduce și clasamentul țărilor cu cei mai puțini kilometri de autostradă construiți.</p>
            </div>
            <div>
              <p>Din cauza corupției, 2 din 5 români trăiesc în sărăcie sau la un pas să ajungă în această situație, județele cele mai mai sărace din țară sunt și cele conduse de baronii locali ai PSD: Teleorman, Buzău, Vaslui. Fără penali în funcții publice ar însemna că cei care au condus România în ultimii 29 de ani să se apropie mai greu de funcțiile publice.</p>
              <p>Realitatea din România anului 2018 înseamnă toate cele de mai sus. Numai societatea civilă poate determina o schimbare. Căci nu este de ajuns să-i schimbăm pe cei de la putere, ci trebuie schimbat modul în care acționează poporul român. Urgența situației vine din schimbarea modului de a face politică cu unul moral și îndreptat către realitatea pe care o vedem zilnic în jurul nostru. Propunerea de schimbare a Constituției este una care are la bază inițiativa cetățenească mult strigată de românii care au ieșit în stradă în 2017 și 2018.</p>
              <p>Demersul are nevoie de cel puțin 500.000 de semnături strânse în 6 luni. Semnătura ta poate schimba modul în care funcționează și arată România.</p>
              <p>Alătură-te inițiativei!</p>
            </div>
          </div>
        </div>
        <?php
          $lista_pasi = [];

          $lista_pasi[] = "Se formează un grup de inițiativă din <strong>cel puțin zece cetățeni</strong>";
          $lista_pasi[] = "Proiectul de modificare a Constituției este trimis pentru <strong>aviz</strong> la Consiliul Legislativ";
          $lista_pasi[] = "Proiectul și avizul consultativ sunt publicate în <strong>Monitorul Oficial</strong>";
          $lista_pasi[] = "Începe strângerea a <strong>1.000.000</strong> de semnături în <strong>6 luni</strong>, din cel puțin 21 de județe";
          $lista_pasi[] = "Listele de semnături împreună cu proiectul și expunerea de motive <strong>se înregistrează la Parlament</strong>";
          $lista_pasi[] = "Parlamentul înaintează propunerea către <strong>CCR</strong> pentru controlul de constituționalitate";
          $lista_pasi[] = "Începe <strong>procedura parlamentară</strong>, cu dezbateri în comisii și vot în plenul Camerei Deputaților și Senat";
          $lista_pasi[] = "Se organizează un <strong>referendum decizional</strong> care trebuie să aibă cvorum și vot majoritar";
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
    <div class="container semneaza">
        <ul class="container-media col-md-10 col-md-push-1">
          <li class="media-element">
            <img src="build/img/icon-semneaza.png" alt="Semnează">
            <div>
                <h3>Semnează</h3>
                <p>Încă nu am început strângerea de semnături, inițiativa așteaptă avizul legislativ. Lasă-ne <a href="#formular">aici</a> datele și te vom contacta noi când începem să strângem semnăturile.</p>
            </div>
          </li>
          <?php if (CAMPANIE_DE_SEMNATURI) { ?>
            <li class="media-element">
              <img src="build/img/icon-spune-prietenilor.png" alt="Semnează">
              <div>
                <h3>Spune-le familiei și prietenilor!</h3>
                <p>Ne trebuie cât mai multe semnături, aşa că te rugăm să vorbeşti cu prietenii, familia şi vecinii tăi să completeze şi ei formularul. Semnăturile lor trebuie să fie originale; nu semnaţi în locul altei persoane.</p>
                <p>
                  <a class="btn btn-facebook" href="https://www.facebook.com/sharer.php?u=<?= SITE_URL ?>" target="_blank">
                    <img src="build/img/logo-facebook-inverted.png" alt="Facebook">
                    Distribuie
                  </a>
                </p>
              </div>
            </li>
            <li class="media-element">
              <img src="build/img/icon-trimite.png" alt="Semnează">
              <div>
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
          <?php } ?>
        </ul>
    </div>
    <a name="harta"></a>
    <div class="harta">
      <div class="container">
        <div class="col-md-6">
          <h1><?= CAMPANIE_DE_SEMNATURI ? "Situația semnăturilor pe regiuni" : "Puncte de contact" ?></h1>
          <span>Click în ȚARĂ pentru a vizualiza <?= CAMPANIE_DE_SEMNATURI ? "situația semnăturilor pe regiuni" : "punctele de contact" ?>.</span>
        </div>
        <div class="col-md-5 col-md-push-1 map map-ro">
          <div class="embed-responsive embed-responsive-4by3">
            <div id="map-ro"></div>
           </div>
        </div>
      </div>
    </div>
    <a name="media"></a>
    <div class="media container">
      <div class="row">
        <ul class="col-md-3" role="tablist" aria-orientation="vertical">
          <li class="active"><a class="btn btn-inverted col-xs-6 col-sm-6 col-md-12" id="media-tabs-video-tab" href="#media-tabs-video" role="pill" data-toggle="pill" aria-controls="media-tabs-video" aria-selected="true">Video</a></li>
          <li><a class="btn btn-inverted col-xs-6 col-sm-6 col-md-12" id="media-tabs-photo-tab" href="#media-tabs-photo" role="pill" data-toggle="pill" disabled aria-controls="media-tabs-photo" aria-selected="false">Foto</a></li>
        </ul>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active in" id="media-tabs-video" role="tabpanel" aria-labelledby="media-tabs-video-tab">
                <div class="carousel slide" id="carousel-videos" data-ride="carousel" data-interval="false">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vO5MLwuTgeo?rel=0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="media-tabs-photo" role="tabpanel" aria-labelledby="media-tabs-photo-tab">
                <div class="carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-videos" data-slide-to="0" class="active"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <img data-lazy="bla">
                    <img data-lazy="bla">
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Precedent</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Următor</span>
                </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <a name="comunicate"></a>
    <div class="comunicate">
      <div class="container">
          <h1>Comunicate de presă</h1>
          <div class="row">
            <div class="col-md-12">
              <div class="comunicat row">
                <a href="comunicate-de-presa.php" class="col-md-4" style="background-image: url('build/img/comunicate/conferinta-de-presa.png')"></a>
                <div class="corp col-md-8">
                  <span>8 Noiembrie 2017</span>
                  <h3><a href="comunicate-de-presa.php">USR strânge semnături pentru a interzice prin Constituție penalii în funcții publice</a></h3>
                  <p>Uniunea Salvați România inițiază strângerea de semnături pentru o inițiativă cetățenească ce transpune...</p>
                  <a href="comunicate-de-presa.php">Articolul complet <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer hidden">
            <a href="" class="btn btn-default mai-multe">Vezi mai multe</a>
          </div>
      </div>
    </div>
<?php
require_once 'include/footer.php';
?>
