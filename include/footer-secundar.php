<a name="formular"></a>
<div class="formular">
    <div class="container form-wrapper">
        <div class="form-loading-circle-container hidden">
          <div class="loading-circle">
            <div class="outer-circle">
              <div class="inner-circle"></div>
            </div>
            <div class="loading-text">Se încarcă...</div>
          </div>
        </div>
        <form id="date-contact" method="post" action="<?= link_url('date-contact.php') ?>" autocomplete="on">
            <div class="form-panel-body error-message hidden">
                <h1>Whoops!</h1>
                <p>Ceva nu a mers bine. Te rugăm reîncarcă pagina și mai încearcă o dată sau trimite un e-mail la contact@usr.ro </p>
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
            <div class="form-panel-body success-message hidden">
                <h1>Mulțumim!</h1>
                <p>Informațiile tale au fost înregistrate. Te vom contacta noi când începem să strângem semnăturile.</p>
                <div class="svg-success-wrapper">
                  <svg id="successAnimation" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                    <path id="successAnimationResult" fill="#D8D8D8" d="M35,60 C21.1928813,60 10,48.8071187 10,35 C10,21.1928813 21.1928813,10 35,10 C48.8071187,10 60,21.1928813 60,35 C60,48.8071187 48.8071187,60 35,60 Z M23.6332378,33.2260427 L22.3667622,34.7739573 L34.1433655,44.40936 L47.776114,27.6305926 L46.223886,26.3694074 L33.8566345,41.59064 L23.6332378,33.2260427 Z"/>
                    <circle id="successAnimationCircle" cx="35" cy="35" r="24" stroke="#979797" stroke-width="2" stroke-linecap="round" fill="transparent"/>
                    <polyline id="successAnimationCheck" stroke="#979797" stroke-width="2" points="23 34 34 43 47 27" fill="transparent"/>
                  </svg>
              </div>
            </div>
            <div class="form-panel-body info-message">
                <h1>Alătură-te inițiativei</h1>
                <div class="row">
                    <p class="col-md-9">Încă nu am început strângerea de semnături, <strong>inițiativa așteaptă avizul legislativ</strong>. Lasă-ne aici datele și te vom contacta noi când începem să strângem semnăturile. </p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <h4>Nume și prenume</h4>
                      <input type="text" name="nume" required autocomplete="name">
                    </div>
                    <div class="col-md-6">
                      <h4>Telefon</h4>
                      <input type="tel" name="telefon" autocomplete="tel">
                    </div>
                    <div class="col-md-6">
                      <h4>E-mail</h4>
                      <input type="email" name="email" autocomplete="email">
                    </div>
                    <div class="col-md-6">
                      <h4>Adresă</h4>
                      <input name="adresa" autocomplete="adress">
                    </div>
                </div>
                <div class="validation-error-message hidden">
                  <p>Te rugăm completează cel putin unul din câmpurile Telefon sau E-mail.</p>
                </div>
                <button type="submit" class="btn btn-default" onclick="ga('send', 'event', 'formular_<?= $page ?>', 'submit'); fbq('trackCustom', 'fp_formular_<?= $page ?>')">
                  Înscrie-te acum!
                </button>
            </div>
        </form>
    </div>
</div>
<?php
require_once __DIR__ . '/footer.php';
?>
