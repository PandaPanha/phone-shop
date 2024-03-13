<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  {{-- sidebar --}}
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="col-3 min-vh-100 p-5 border-end ">
        <div class="fw-bold d-flex flex-column gap-5 ps-lg-5   ">
          <a class="
            d-flex 
            text-decoration-none 
            text-secondary
            align-items-center 
            mb-3
            fs-3
            " 
            href="#"
          >
            <div class="
              d-flex 
              justify-content-center
              align-items-center
              gap-2
            ">
              <div class="d-flex justify-content-center align-items-center 
              bg-secondary rounded-3 p-2">
                <img 
                style="width:20px; height:20px"
                src="/assets/shop.png" alt="shop">
              </div>
              <div class="d-none d-sm-block ">
                Shop
              </div>
            </div>
          </a>
          
          <a class="
            d-flex 
            text-decoration-none 
            text-secondary

            align-items-center" 
            href="/dashboard"
          >
            <div class="
              d-flex 
              justify-content-center
              align-items-center
              gap-2
            ">
              <div class="">
                <img 
                style="width:30px; height:30px; object-fit:contain;"
                src="/assets/dashboard.png" alt="shop">
              </div>
              <div style="color:#FFC029;" class="d-none d-sm-block ">
                Dashboard
              </div>
            </div>
          </a>

          <a class="
            d-flex 
            text-decoration-none 
            text-secondary

            align-items-center" 
            href="/phones"
          >
            <div class="
              d-flex 
              justify-content-center
              align-items-center
              gap-2
            ">
              <div class="">
                <img 
                style="width:30px; height:30px; object-fit:contain;"
                src="/assets/phone.png" alt="shop">
              </div>
              <div class="d-none d-sm-block ">
                Phone
              </div>
            </div>
          </a>

          <a class="
            d-flex 
            text-decoration-none 
            text-secondary

            align-items-center" 
            href="/about"
          >
            <div class="
              d-flex 
              justify-content-center
              align-items-center
              gap-2
            ">
              <div class="">
                <img 
                style="width:30px; height:30px; object-fit:contain;"
                src="/assets/info.png" alt="shop">
              </div>
              <div class="d-none d-sm-block ">
                About
              </div>
            </div>
          </a>

          <a class="
            d-flex 
            text-decoration-none 
            text-secondary

            align-items-center" 
            href="#"
          >
            <div class="
              d-flex 
              justify-content-center
              align-items-center
              gap-2
            ">
              <div class="">
                <img 
                style="width:30px; height:30px; object-fit:contain;"
                src="/assets/setting.png" alt="shop">
              </div>
              <div class="d-none d-sm-block ">
                Setting
              </div>
            </div>
          </a>

          <a class="
            d-flex 
            text-decoration-none 
            text-secondary

            align-items-center" 
            href="#"
          >
            <div class="
              d-flex 
              justify-content-center
              align-items-center
              gap-2
            ">
              <div class="">
                <img 
                style="width:30px; height:30px; object-fit:contain;"
                src="/assets/logout.png" alt="shop">
              </div>
              <div class="d-none d-sm-block ">
                Logout
              </div>
            </div>
          </a>

        </div>
        
      </div>
      <div>
        @yield('content')
      </div>
    </div>
  </div>
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

