<a name="formular"></a>
<div class="formular">
    <div class="container">
        <form id="date-contact" method="post" action="<?= link_url('date-contact.php') ?>">
            <h1>Alătură-te inițiativei</h1>
            <div class="row">
                <p class="col-md-9">Încă nu am început strângerea de semnături, <strong>inițiativa așteaptă avizul legislativ</strong>. Lasă-ne aici datele și te vom contacta noi când începem să strângem semnăturile. </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                  <h4>Nume și prenume</h4>
                  <input type="text" name="nume">
                </div>
                <div class="col-md-4">
                  <h4>Telefon</h4>
                  <input type="text" name="telefon">
                </div>
                <div class="col-md-4">
                  <h4>E-mail</h4>
                  <input type="text" name="email">
                </div>
            </div>
            <button type="submit" class="btn btn-default" onclick="ga('send', 'event', 'formular_<?= $page ?>', 'submit')">
              Înscrie-te acum!
            </button>
        </form>
    </div>
</div>
<?php
require_once __DIR__ . '/footer.php';
?>
