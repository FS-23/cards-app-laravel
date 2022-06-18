<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .main {
            min-height: 100vh;
            position: relative
        }

        .footer-nav {
            position: absolute;
            width: 100%;
            bottom: 0
        }
        .header-nav {
            top: 0;
            position: fixed;
            width: 100%;
            z-index: 3
        }
        .content {
            margin-top: 70px;
            padding-bottom: 80px
        }

        .like-btn {
            position: absolute;
            right:10px;
            top: 10px
        }
    </style>
</head>
<body>
    <div class="main">
        <header class="header-nav">
            <nav class="navbar navbar-expand-lg bg-dark navbar-white">
                <div class="container">
                  <a class="navbar-brand text-white" href="#">Hidden brand</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01"> 
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link  text-white active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  text-white" href="/products/list">Products</a>
                      </li>
                    </ul>
                    <div>
                       <form action="/logout" method="post">
                        @csrf
                        <button  href="" class="btn btn-danger">Logout</button>
                      </form>
                    </div>
                  </div>
                </div>
              </nav>
        </header>
        <div class="content">
            {{ $slot }}
        </div>
        <footer class="footer-nav">
            <div class="p-3 mt-2 bg-dark text-center text-white">
                   copyright fs23 2022
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>