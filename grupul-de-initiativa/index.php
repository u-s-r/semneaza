<?php

$page = "grupul-de-initiativa";

$title="Grupul de inițiativă";
$description="Fără Penali în funcții publice";

require __DIR__ . '/../include/header-secundar.php';

$persoane = [];

$persoane [] = ["nume" => "Mihai Badea", "key" => "Mihai-Badea", "descriere" => "Avocat și Președintele grupului de inițiativă cetățenească \"Fără penali în funcții publice\".", "display" => "cover"];
$persoane [] = ["nume" => "Mihai Șora", "key" => "Mihai-Sora", "descriere" => "Filosof și eseist. Membru fondator al Grupului de Dialog Social, al Alianței Civice și al Societății Române de Fenomenologie.", "display" => "cover"];
$persoane [] = ["nume" => "Gabriel Liiceanu", "key" => "Gabriel-Liiceanu", "descriere" => "Filosof, scriitor și membru al Grupului de Dialog Social.", "display" => "cover"];
$persoane [] = ["nume" => "Eugen Vasiliu", "key" => "Eugen-Vasiliu", "descriere" => "Jurist și membru al Grupului de Dialog Social.", "display" => "cover"];
$persoane [] = ["nume" => "Dan Grigore", "key" => "Dan-Grigore", "descriere" => "Pianist și membru al Grupului de Dialog Social.", "display" => "cover"];
$persoane [] = ["nume" => "Valeriu Nicolae", "key" => "Valeriu-Nicolae", "descriere" => "Fondatorul ONG-ului Policy Center for Roma and Minorities.", "display" => "cover"];
$persoane [] = ["nume" => "Eugen Iancu", "key" => "Eugen-Iancu", "descriere" => "Președintele Asociației Colectiv GTG 3010.", "display" => "cover"];
$persoane [] = ["nume" => "Oana Negru", "key" => "Oana-Negru", "descriere" => "Membru și manager juridic al grupului \"Rezistența\".", "display" => "cover"];
$persoane [] = ["nume" => "Mihai Nicolae Tudorică", "key" => "Mihai-Nicolae-Tudorica", "descriere" => "Fondatorul  platformei \"Rezistența\", platforma care a apărut ca reacție civică de protest împotriva OUG 13 din februarie 2017.", "display" => "https://www.youtube.com/embed/TuW7a3ysf54?rel=0"];
$persoane [] = ["nume" => "Klaus Fabritius", "key" => "Klaus-Fabritius", "descriere" => "Membru al Formului Democrat al Germanilor din România.", "display" => "cover"];
$persoane [] = ["nume" => "Liliana Chivu", "key" => "Liliana-Chivu", "descriere" => "Inginer de construcții hidrotehnice.", "display" => "cover"];
$persoane [] = ["nume" => "Diana Punga", "key" => "Diana-Punga", "descriere" => "Specialist în Marketing & Comunicare.", "display" => "cover"];
$persoane [] = ["nume" => "Costin Dobrescu", "key" => "Costin-Dobrescu", "descriere" => "Inginer de calculatoare.", "display" => "cover"];
$persoane [] = ["nume" => "Adrian Clopotari", "key" => "Adrian-Clopotari", "descriere" => "Avocat și practician în insolvență.", "display" => "cover"];
$persoane [] = ["nume" => "George Oancea", "key" => "George-Oancea", "descriere" => "Analist programator.", "display" => "cover"];
$persoane [] = ["nume" => "Marius Petrișor Petcu", "key" => "Marius-Petrisor-Petcu", "descriere" => "Inginer geodez, antreprenor în domeniul măsurătorilor geodezice terestre.", "display" => "cover"];
$persoane [] = ["nume" => "Anton Cupcea", "key" => "Anton-Cupcea", "descriere" => "Inginer de IT.", "display" => "cover"];
$persoane [] = ["nume" => "Adrian Bogdan", "key" => "Adrian-Bogdan", "descriere" => "Statistician.", "display" => "cover"];
$persoane [] = ["nume" => "Daniela Timoficiuc", "key" => "Daniela-Timoficiuc", "descriere" => "Economist.", "display" => "cover"];

?>
<div class="container grupul-de-initiativa">
    <h1>Grupul de inițiativă</h1>
    <h4>Ajută la strângerea semnăturilor. Fiecare semnătură contează. <a href="#formular">Înscrie-te aici <span class="glyphicon glyphicon-menu-right"><span></a></h4>
    <p>Toți membrii Grupului de inițiativă respectă caracteristicile impuse de lege, de a nu fi alese în funcții prin vot universal, nici membri de Guvern, ori persoane numite de primul-ministru și nici persoane care nu pot face parte, potrivit legii, din partide politice.</p>
    <div class="wrap">
        <div class="col-md-4 membri">
          <h3>Membri</h3>
          <ul role="tablist" aria-orientation="vertical">
            <?php foreach($persoane as $index => $persoana) {?>
              <li class="<?= $index == 0 ? 'active' : '' ?>">
                <a class="btn col-xs-6 col-sm-6 col-md-12 no-scroll" id="<?= $persoana['key'] ?>-tab" href="#<?= $persoana['key'] ?>" role="pill" data-toggle="pill" aria-controls="media-tabs-<?= $persoana['key'] ?>" <?= $index == 0 ? 'aria-selected="true"' : '' ?>>
                  <div class="imagine" style="background-image: url('<?= asset_url('img/grupul-de-initiativa/'. $persoana['key'] .'.jpg') ?>')"></div>
                  <?= $persoana['nume'] ?>
                  <span class="glyphicon glyphicon-menu-right"></span>
                </a>
              </li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="tab-content">
            <?php foreach($persoane as $index => $persoana) {?>
              <div class="tab-pane fade <?= $index == 0 ? 'active in' : '' ?>" id="<?= $persoana['key'] ?>" role="tabpanel" aria-labelledby="<?= $persoana['key'] ?>-tab">
                <h3><?= $persoana['nume'] ?></h3>
                <p><?= $persoana['descriere'] ?></p>
                <?php if($persoana["display"] == "cover") { ?>
                    <img src="<?= asset_url('img/cover.jpg') ?>" alt="">
                <?php } else { ?>
                    <div class="laptop-frame">
                      <div class="laptop-frame-content item active embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= $persoana["display"] ?>" allowfullscreen></iframe>
                      </div>
                    </div>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
    </div>
    <div class="footer col-xs-12"><a href="<?= link_url('') ?>" class="back"><span class="glyphicon glyphicon-menu-left"></span> Înapoi</a></div>
</div>
<?php
require_once __DIR__ . '/../include/footer-secundar.php';
?>
