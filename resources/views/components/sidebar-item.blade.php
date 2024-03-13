@props(['title' => '', 'iconSrc' => '','path' => ''])

<div>
  <a class="
            d-flex 
            text-decoration-none 
            text-secondary

            align-items-center" 
            href="{{ $path }}"
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
                src="{{$imgSrc}}" alt="shop">
              </div>
              <div class="d-none d-sm-block ">
                {{$title}}
              </div>
            </div>
          </a>
</div>