<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/sweetalert/sweetalert2.min.css') ?>">

  <!-- custom css -->
  <style>
    *:focus {
      box-shadow: none !important;
    }

    body {
      background: url("<?= base_url('assets/image/background/loginbg.jpg') ?>") 100% 100%;
    }

    .waves {
      overflow: hidden;
      position: relative;
      transition: 0.3s;
    }

    .waves:hover {
      cursor: pointer;
    }

    .wave {
      position: absolute;
      background: rgba(0, 0, 0, 0.25);
      border-radius: 100%;
      transform: scale(0.2);
      opacity: 0;
      pointer-events: none;
      animation: wave 0.90s ease-out;
    }

    @keyframes wave {
      from {
        opacity: 1;
      }

      to {
        transform: scale(2);
        opacity: 0;
      }
    }

    .hide {
      display: none;
    }

    .show {
      display: block;
    }
  </style>

  <title>Login ULT Kemdikbud</title>
</head>

<body>
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <form class="col-md-4" id="formulir" method="post" action="">
        <div class="row">
          <div class="col col-md-4">
            <img src="<?= base_url('assets/img/Kemdikbud.png') ?>" alt="logo" class="w-100 mb-10">
          </div>
          <div class="col">
            <h3>Kementrian Pendidikan dan Kebudayaan</h3>
          </div>
        </div>
        <hr>
        <div class="form-group">
          <input autocomplete="off" type="text" class="form-control" id="username" onkeyup="cekbutton()" placeholder="Username" name="username" required="">
        </div>
        <div class="form-group">
          <input autocomplete="off" type="password" data-toggle="password" class="form-control" id="password" onkeyup="cekbutton()" placeholder="Password" name="password" required="">
        </div>

        <button type="submit" id="login" class="btn btn-primary w-100 waves">Login</button>
      </form>
    </div>
  </div>

  <!-- jquery -->
  <script src="<?= base_url('assets/jquery/jquery-3.4.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/sweetalert/sweetalert2.min.js') ?>"></script>
  <script src="<?= base_url('assets/showpassword/bootstrap-show-password.min.js') ?>"></script>

  <!-- custom js -->
  <script>
    $(".waves").mousedown(function(e) {
      var button = e.target;

      var rect = button.getBoundingClientRect();

      var wave = button.querySelector(".wave");

      $(wave).remove(); // Remove all span

      wave = document.createElement("span");
      wave.className = "wave";

      wave.style.width = Math.max(rect.width, rect.height) + "px";
      wave.style.height = wave.style.width;

      button.appendChild(wave);

      var top =
        e.pageY - rect.top - wave.offsetHeight / 2 - document.body.scrollTop;
      var left =
        e.pageX - rect.left - wave.offsetWidth / 2 - document.body.scrollLeft;
      wave.style.top = top + "px";
      wave.style.left = left + "px";
      return false;
    });
  </script>
</body>

</html>