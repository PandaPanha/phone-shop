@extends('layouts.menu')
@section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="d-flex flex-column  gap-4 ">
            <nav class="navbar bg-body-tertiary  ">
              <div class="container-fluid">
                <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">
                  <a href="http://127.0.0.1:8000/admin/phones" class="btn border-0 active" role="button" aria-pressed="true">Phone-></a>
                  <a href="http://127.0.0.1:8000/admin/phones/components" class="btn border-0 active" role="button" aria-pressed="true">Add Phone</a>
                </span>
              </div>
            </nav>
            <div class="container-fluid bg-light p-4">
              <form action="{{route('store.phone')}}" method="POST">
                  @csrf
                  <br>
                  <div class="row">
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Product Code:</label>
                              <input type="text" class="form-control" name="product_code"  placeholder="126" required>
                          </div>
                      </div>
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Product Name:</label>
                              <input type="text" class="form-control" name="product_name"  placeholder="Iphone16" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Display:</label>
                              <input type="text" class="form-control" name="display"  placeholder="Enter Battery" required>
                          </div>
                      </div>
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Ram:</label>
                              <input type="text" class="form-control" name="ram"  placeholder="Enter Warranty" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Processor:</label>
                              <input type="text" class="form-control" name="processor"  placeholder="Enter Battery" required>
                          </div>
                      </div>
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Camera:</label>
                              <input type="text" class="form-control" name="camera"  placeholder="Enter Warranty" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Battery:</label>
                              <input type="text" class="form-control" name="battery"  placeholder="Enter Battery" required>
                          </div>
                      </div>
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Warranty:</label>
                              <input type="text" class="form-control" name="warranty"  placeholder="Enter Warranty" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Price:</label>
                              <input type="text" class="form-control" name="price"  placeholder="Enter Battery" required>
                          </div>
                      </div>
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Storage:</label>
                              <input type="text" class="form-control" name="storage"  placeholder="Enter Warranty" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Image:</label>
                              <input type="file" class="form-control" name="product_img"required>
                          </div>
                      </div>
                      <div class="col-lg-6 mt-3">
                          <div class="form-group">
                              <label for="">Color name:</label>
                              <input type="text" class="form-control" name="color_name"required>
                          </div>
                      </div>
                  </div>

                  <br>
                  <button type="submit" class="btn btn-success">Submit</button>
                  <a href="{{route('list.phone')}}" class="btn btn-secondary">Back</a>
              </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="container p-2 bg-light">
            <div class="row">
                <div class="col-sm-6 p-4 bg-white text-center">
                    <div>
                        <img src="{{ '/assets/' . $productImg->product_img }}" alt="" width="320px" height="300px">
                    </div>
                    <hr class="text-warning font-weight-bold">
                    <div class="justify-content-center m-auto">
                        {{-- <div class="col-sm-3 border shadow-sm"><img src="/assets/iphone-1.jpg" width="80%"  alt=""></div> --}}
                        <a href=""><img src="/assets/iphone-1.jpg" class="border shadow-sm p-1" width="70px" height="70px"  alt=""></a>
                        <a href=""><img src="/assets/iphone-1.jpg" class="border shadow-sm p-1" width="70px" height="70px"  alt=""></a>
                        <a href=""><img src="/assets/iphone-1.jpg" class="border shadow-sm p-1" width="70px" height="70px"  alt=""></a>
                    </div>
                    <br>
                    <hr>
                    <div id="carouselExampleIndicators" class="carousel slide text-center w-100 h-100" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="/assets/cover-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="/assets/cover-4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="/assets/cover-5.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div>
                </div>
                <div class="col-sm-6 p-4">
                    {{-- <h3>id:{{$product->id}}</h3> --}}
                    <h3>{{$product->product_name}} {{$product->storage}}G USA (New)</h3>
                    <hr class="text-warning font-weight-bold">
                    <h4 class="text-warning font-weight-bold"><strong>$ {{$product->price}}</strong></h4>
                    <h6>Ram: <strong>{{$product->ram}}G</strong></h6>
                    <h6>Storage: <strong>{{$product->storage}}G</strong></h6>
                    <h6>Display: <strong>6.7" </strong>1284x2778 pixels</h6>
                    <h6>Battery: <strong>{{$product->battery}}mAh</strong></h6>
                    <h6>Color: <strong>{{$productImg->color_name}}</strong></h6>
                    <h6>Weight:	<strong>240 g (8.47 oz)</strong></h6>
                    <h6>In Box:
                        <li class="text-info">Free Jelly Case</li>
                        <li class="text-info">Free Temper Glass</li>
                        <li class="text-info">Free Adaptor 20W</li>
                    </h6>
                    <h6>Apple Store Warranty: <strong>1 Year</strong></h6>
                    <h6>Call Us: <strong>0816216/0665855 :49</strong></h6>
                    <h6>Location: <strong>St.2004</strong>, Phnom Penh</h6>
                    <br>
                    <hr>
                    <div class = "product-content">
                        <div class = "product-rating">
                            <i class = "fas fa-star text-warning"></i>
                            <i class = "fas fa-star text-warning"></i>
                            <i class = "fas fa-star text-warning"></i>
                            <i class = "fas fa-star text-warning"></i>
                            <i class = "fas fa-star-half-alt text-warning"></i>
                            <span>4.7(21)</span>
                        </div>
                        <br>
                        <div class = "product-detail">
                            <h6>Available: <span class="font-weight-bold">In stock</span></h6>
                            <h6>Category: <span>iPhone, Smartphone</span></h6>
                            <h6>Shipping Fee: <span>Free</span></h6>
                            <h6>Shipping Area: <span>All over the world</span></h6>
                        </div>
                        <p><strong>Disclaimer. </strong>We can not guarantee that the information on this page is 100% correct.</p>
                        <hr>
                        <div class = "purchase-info d-flex p-2">
                            <input type="number" class="form-control w-25 m-2" min="0" value="1">
                            <button type="button" class="btn bg-warning text-bold text-white m-2">
                                Buy now <i class="fas fa-shopping-cart text-danger"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

