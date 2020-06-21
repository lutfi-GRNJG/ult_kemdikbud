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

  <title>Login HRMS Amnotel</title>
</head>

<body>
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <form class="col-md-4" id="formulir" method="post" action="">
        <img src="<?= base_url('assets/image/logo/logo.png') ?>" alt="logo" class="w-100 mb-10">
        <hr>
        <div class="form-group">
          <input autocomplete="off" type="text" class="form-control" id="username" onkeyup="cekbutton()" placeholder="Username" name="username" required="">
        </div>
        <div class="form-group">
          <input autocomplete="off" type="password" data-toggle="password" class="form-control" id="password" onkeyup="cekbutton()" placeholder="Password" name="password" required="">
        </div>

        <button type="submit" id="login" class="btn btn-secondary w-100 waves">Login</button>
      </form>
    </div>
  </div>

  <!-- jquery -->
  <script src="<?= base_url('assets/jquery/jquery-3.4.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/sweetalert/sweetalert2.min.js') ?>"></script>
  <script src="<?= base_url('assets/showpassword/bootstrap-show-password.min.js') ?>"></script>

  <!-- custom js -->
  <script src="<?= base_url("assets/geetest/gt.js") ?>"></script>
  <script>
    var captcha = 0;
    var handlerEmbed = function(captchaObj) {
      $("#login").click(function(e) {
        var validate = captchaObj.getValidate();
        if (!validate) {
          $(document).ready(function() {
            const Toast = Swal.mixin({
              toast: true,
              position: 'top',
              showConfirmButton: false,
              timer: 2000
            });

            Toast.fire({
              type: 'error',
              title: 'Chaptcha tidak valid'
            })
          });
          e.preventDefault();
        }
      });
      // 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
      captchaObj.appendTo("#embed-captcha");
      captchaObj.onReady(function() {
        $("#wait")[0].className = "hide";
      }).onSuccess(function() {
        captcha = 1;
        cekbutton();
      }).onError(function() {
        captcha = 0;
      })
      // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
      // 获取id，challenge，success（是否启用failback）
      url: "./login/verifikasi?t=" + (new Date()).getTime(), // 加随机数防止缓存
      type: "get",
      dataType: "json",
      success: function(data) {
        // 使用initGeetest接口
        // 参数1：配置参数
        // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
        initGeetest({
          width: '100%',
          lang: 'id',
          gt: data.gt,
          challenge: data.challenge,
          new_captcha: data.new_captcha,
          product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
          offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
          // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
        }, handlerEmbed);
      }
    });

    function cekbutton() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (password != "") {
        if (username == "" || password == "" || captcha == 0) {
          var login = document.getElementById("login");
          login.classList.add("btn-secondary");
          login.classList.remove("btn-primary");
          login.disabled = true;
        } else {
          var login = document.getElementById("login");
          login.classList.add("btn-primary");
          login.classList.remove("btn-secondary");
          $("#login").removeAttr("disabled");
        }
      } else {
        var login = document.getElementById("login");
        login.classList.add("btn-secondary");
        login.classList.remove("btn-primary");
        login.disabled = true;
      }
    }
  </script>
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

  <!-- notification -->
  <?php if ($this->session->flashdata('user_pass_salah') == "aktif") { ?>
    <script>
      $(document).ready(function() {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 5000
        });

        Toast.fire({
          type: 'error',
          title: 'Password dan Username Salah'
        })
      });
    </script>
  <?php } ?>

</body>

</html>