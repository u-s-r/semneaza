<a name="formular"></a>
<div class="formular">
    <div class="container">
        <form id="date-contact" method="post" action="date-contact.php">
            <h2>Alătură-te inițiativei</h2>
            <div class="row">
                <p class="col-md-9">Încă nu am început strângerea de semnături, <strong>inițiativa așteaptă avizul legislativ</strong>. Lasă-ne aici datele și te vom contacta noi când începem să strângem semnăturile. </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                  <h4>Numele și prenume</h4>
                  <input type="text" name="nume">
                </div>
                <div class="col-md-4">
                  <h4>Telefon</h4>
                  <input type="text" name="telefon">
                </div>
                <div class="col-md-4">
                  <h4>Email</h4>
                  <input type="text" name="email">
                </div>
            </div>

            <button type="submit" class="btn btn-default" onclick="ga('send', 'event', 'pagina_semnaturi', 'buton', 'trimite_date_contact')">
              Înscrie-te acum!
            </button>
        </form>
    </div>
</div>
<?php
require_once 'include/footer.php';
?>
