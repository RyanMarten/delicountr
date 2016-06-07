<?php include_once "common/header.php"; ?>
  <noscript>This site won't work without Java Script</noscript>
  <header>
    <nav>
      <div class="nav-wrapper red">
        <a href="#!" class="brand-logo title center">Delicountr</a>
      </div>
    </nav>
    </div>
  </header>

<main class="valign-wrapper">
    <div class="container center-align">
        <!-- IF NOT IN QUEUE -->
        <div class="row">
            <div class="col m4 offset-m4 l2 offset-l5 s6 offset-s3">
                <img class="responsive-img" src="images/ticket-600x600.png" alt="delicountr logo" />
            </div>
        </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s10 offset-s1 m8 offset-m2 l6 offset-l3">
                        <input id="name" type="text">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row description">
                    <div class="input-field col s10 offset-s1 m8 offset-m2  l6 offset-l3">
                        <textarea id="description" class="materialize-textarea"></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col m6 offset-m3 s10 offset-s1 l6 offset-l3 waves-effect waves-light btn-large" href="#" onclick="Materialize.toast('Ticket successfully added', 4000)">
                take a ticket
            </div>
        </div>
    </div>
</main>

<?php include_once "common/footer.php"; ?>