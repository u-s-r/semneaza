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
        <img src="<?= asset_url('img/balanta.png') ?>" alt="" title="Implică-te și tu!">
      </div>
    </div>
  </div>
</div>
<footer class="container">
  <div class="col-md-3 contact">
    <h4>Contact</h4>
    <div>Bulevardul Aviatorilor Nr. 9,<br>Sector 1, Bucureşti</div>
  </div>
  <div class="col-md-9 navigare">
      <h4>Navigare</h4>
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <ul>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= $page != "acasa" ? link_url('') : "" ?>#initiativa">Inițiativa</a></li>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= $page != "acasa" ? link_url('') : "" ?>#despre">Despre</a></li>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= link_url('grupul-de-initiativa/') ?>">Grupul de inițiativă</a></li>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= $page != "acasa" ? link_url('') : "" ?>#semneaza">Semnează inițativa</a></li>
          </ul>
        </div>
        <div class="col-sm-4 col-md-4">
          <ul>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= $page != "acasa" ? link_url('') : "" ?>#harta">Situația pe regiuni</a></li>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= $page != "acasa" ? link_url('') : "" ?>#media">Media</a></li>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= $page != "acasa" ? link_url('') : "" ?>#comunicate">Comunicate de presă</a></li>
            <li><span class="glyphicon glyphicon-menu-right"></span> <a href="<?= link_url('politica-de-confidentialitate/') ?>#comunicate">Politica de confidențialitate</a></li>
          </ul>
        </div>
        <div class="col-sm-4 col-md-4 distribuie">
            <a class="social-media-links" href="https://www.facebook.com/InitiativaFaraPenali/" target="_blank"><img src="<?= asset_url('img/logo-facebook-small.png') ?>" alt="Facebook"></a><a class="social-media-links" href="https://www.youtube.com/channel/UCe0NmPCTlXzTdAAROfWYBNw" target="_blank"><img src="<?= asset_url('img/logo-youtube-small.png') ?>" alt="Youtube"></a><a class="social-media-links" href="https://twitter.com/usr_romania" target="_blank"><img src="<?= asset_url('img/logo-twitter-small.png') ?>" alt="Twitter"></a>
        </div>
      </div>

  </div>
  <div class="col-xs-12 final row">
      <div class="usr col-sm-6">
        Inițiativa <span class="hidden-xs">cetățenească</span> sprijinită de <a href="https://www.usr.ro/" title="Uniunea Salvați România"><img src="<?= asset_url('img/usr.png') ?>" alt="Uniunea Salvați România"></a>
      </div>
      <div class="rezistenta col-sm-6">
        În parteneriat cu <a href="https://www.rezist.ro/" title="Rezistența"><img src="<?= asset_url('img/rezistenta.png') ?>" alt="Rezistența"></a>
      </div>
  </div>

  <div class="scroll-to-top-button">
    <a href="#top">
    <img src="<?= asset_url('img/button_spring.png') ?>" />
    </a>
  </div>

</footer>
<div class="social-media">
  <a class="facebook social-media-box" href="https://www.facebook.com/sharer.php?u=<?= $actual_link ?>" target="_blank">
    <img src="<?= asset_url('img/logo-facebook-inverted.png') ?>" alt="Facebook">
    Distribuie
  </a>
  <a class="twitter social-media-box" href="http://www.twitter.com/share?url=<?= $actual_link ?>" target="_blank">
    <img src="<?= asset_url('img/logo-twitter-inverted.png') ?>" alt="Twitter">
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
<script src="<?= asset_url('js/application.min.js') ?>"></script>
<script>
!function(f,b,e,v,n,t,s)
{ if(f.fbq)return;n=f.fbq=function(){ n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments) };
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s) }(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '105697533557302');
fbq('trackCustom', 'fpPageView');
</script>
<noscript>
  <img height="1" width="1"
     src="https://www.facebook.com/tr?id=105697533557302&ev=PageView
          &noscript=1"/>
</noscript>
</body>
</html>
