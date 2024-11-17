<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor do Brasil</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Button trigger modal -->

<?php

if(!isset($_SESSION['id_usuario']) || !isset($_SESSION['email']) || !isset($_SESSION['nickname'])){
  echo '<button id="openModalBtn">Entrar</button>';

}
?>
    <!-- The Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
    <h2 class="login">Login</h2>
    <form class="login-form">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <div class="btn">
            <button class="close-btn">Cancelar</button>
            <button class="enter-btn">Entrar</button>
        </div>
    </form>
</div>
</div>
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <main class="form-signin w-100 m-auto">
              <form>
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary py-2" type="submit" style="padding: 10px; background-color: #D97014; border-color: #D97014">Sign in</button>
              </form>
            </main>
            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                </body>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" style="background-color: #D97014; border-color: #D97014;">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->

<SCript>

const modal = document.getElementById("myModal");
const openModalBtn = document.getElementById("openModalBtn");
const closeBtn = document.getElementsByClassName("close-btn")[0];

openModalBtn.onclick = function() {
  modal.style.display = "block";
}

closeBtn.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</SCript>
</body>
</html>