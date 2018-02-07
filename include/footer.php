<div class="implica-te">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Implică-te și tu!</h1>
        <a href="#formular" class="btn btn-inverted-dark-bg">Alătură-te inițiativei</a>
      </div>
      <div class="col-md-6">
        <img src="build/img/people.png" alt="">
      </div>
    </div>
  </div>
</div>
<footer class="container">
  <div class="col-md-3 contact">
      <h4>Contact</h4>
      <div>Bulevardul Aviatorilor Nr. 9,<br>Sector 1, Bucureşti</div>
  </div>
  <div class="col-md-2 col-md-push-2 navigare">
      <h4>Navigare</h4>
      <ul>
        <li><a href="#despre">Despre</a></li>
        <li><a href="#semneaza">Semnează inițativa</a></li>
        <li><a href="#harta">Situația pe regiuni</a></li>
        <li><a href="#media">Media</a></li>
        <li><a href="#comunicate">Comunicate de presă</a></li>
      </ul>
  </div>
  <div class="col-md-3 col-md-push-4 distribuie">
      <h4>Distribuie</h4>
      <a class="btn btn-facebook" href="https://www.facebook.com/sharer.php?u=<?= SITE_URL ?>" target="_blank">
        <img src="build/img/logo-facebook-inverted.png" alt="Facebook">
        Distribuie
      </a>
  </div>
  <div class="col-md-12 final">
      <div class="usr">
        Uniunea Salvați România &copy; 2018
      </div>
      <div class="rezistenta">
        În parteneriat cu <a href="https://www.rezist.ro/" title="Rezistența"><img src="build/img/rezistenta.png" alt="Rezistența"></a>
      </div>
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
