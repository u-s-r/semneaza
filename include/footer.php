<div class="implica-te">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8">
        <h1>Implică-te și tu!</h1>
        <p>Semnătura ta poate face diferența pentru o Românie <strong>"Fără Penali în funcții publice"</strong>.</p>
        <div class="btn-wrap">
          <a href="#formular" class="btn btn-inverted-dark-bg">Alătură-te inițiativei</a>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 grafica">
        <img src="build/img/balanta.png" alt="" title="Implică-te și tu!">
      </div>
    </div>
  </div>
</div>
<footer class="container">
  <div class="col-md-2 col-md-push-2 navigare">
      <h4>Navigare</h4>
      <ul>
        <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#initiativa">Inițiativa</a></li>
        <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#despre">Despre</a></li>
        <li><a href="<?= SITE_URL . "grupul-de-initiativa.php" ?>">Grupul de inițiativă</a></li>
        <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#semneaza">Semnează inițativa</a></li>
        <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#harta">Situația pe regiuni</a></li>
        <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#media">Media</a></li>
        <li><a href="<?= $page != "acasa" ? SITE_URL : "" ?>#comunicate">Comunicate de presă</a></li>
      </ul>
  </div>
  <div class="col-md-3 col-md-push-4 distribuie">
      <a class="btn btn-facebook" href="https://www.facebook.com/sharer.php?u=<?= SITE_URL ?>" target="_blank">
        <img src="build/img/logo-facebook-inverted.png" alt="Facebook">
        Distribuie
      </a>
  </div>
  <div class="col-xs-12 final row">
      <div class="usr col-sm-6">
        Uniunea Salvați România &copy; 2018
      </div>
      <div class="rezistenta col-sm-6">
        În parteneriat cu <a href="https://www.rezist.ro/" title="Rezistența"><img src="build/img/rezistenta.png" alt="Rezistența"></a>
      </div>
  </div>

  <div class="scroll-to-top-button">
    <a href="#top">
    <img src="build/img/button_spring.png" />
    </a>
  </div>

</footer>
<div class="social-media">
  <a class="facebook" href="https://www.facebook.com/sharer.php?u=<?= SITE_URL ?>" target="_blank">
    <img src="build/img/logo-facebook-inverted.png" alt="Facebook">
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
      <button type="button" class="btn btn-primary" data-dismiss="modal">Închide</button>
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
<script src="build/js/application.min.js"></script>
</body>
</html>
