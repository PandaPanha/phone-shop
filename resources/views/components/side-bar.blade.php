<div class="d-none d-sm-block">
    <div class="border-end">
      <div class="col-3 min-vh-100 p-3">
        <div class="fw-bold d-flex flex-column gap-5  px-lg-4  ">
          <a class="
            d-flex
            text-decoration-none
            text-secondary
            align-items-center
            mb-3
            fs-3
            "
            href="http://127.0.0.1:8000/admin/dashboard"
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
            @php
            $items = [
                [
                "title" => "Dashboard",
                "src" => "/assets/dashboard.png",
                "path" => "/admin/dashboard"
                ],
                [
                "title" => "Phone",
                "src" => "/assets/phone.png",
                "path" => "/admin/phones"
                ],
                [
                "title" => "Employee",
                "src" => "/assets/employee.png",
                "path" => "/admin/employee"
                ],
                [
                "title" => "About",
                "src" => "/assets/info.png",
                "path" => "/about"
                ],
                [
                "title" => "Setting",
                "src" => "/assets/setting.png",
                "path" => "#"
                ],
                [
                "title" => "logout",
                "src" => "/assets/logout.png",
                "path" => "#"
                ]
            ];
            @endphp
            @foreach ($items as $item )
                <x-side-bar-item :title="$item['title']" :path="$item['path']" :src="$item['src']"/>
            @endforeach
        </div>
      </div>
    </div>
  </div>
