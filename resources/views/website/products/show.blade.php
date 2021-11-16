@extends('website.layout')
@section('content')
 <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Single Product</h1>
              </div>
            </div>
            <div class="col-md-6">
              <div class="product-slider">
                @foreach($product->images as $key => $image)
                <div id="slider" class="flexslider">
                 
                  <ul class="slides" style="list-style: none;">
                   
                    <li>
                      <img src="{{ $image['image'] }}" class="w-100" alt="{{ $product['name_en'] }}" style="height: 350px" />
                    </li>
                   
                    {{-- <li>
                      <img src="assets/images/big-02.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/big-03.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/big-04.jpg" />
                    </li> --}}
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                 
                </div>
                @endforeach
                {{-- <div id="carousel" class="flexslider">
                  <ul class="slides">

                    <li>
                      <img src="assets/images/thumb-01.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/thumb-02.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/thumb-03.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/thumb-04.jpg" />
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div> --}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-content">
                <h4>{{$product['name_'.app()->getLocale()]}}</h4>
                <h6>{{$product['price']}}$</h6>
                <p>Proin commodo, diam a ultricies sagittis, erat odio rhoncus metus, eu feugiat lorem lacus aliquet arcu. Curabitur in gravida nisi, non placerat nibh. Praesent sit amet diam ultrices, commodo turpis id, dignissim leo. Suspendisse mauris massa, porttitor non fermentum vel, ullamcorper scelerisque velit. </p>
                <span>{{$product['quantity'].' '.'left in stock'}}</span>
                <form action="" method="get">
                  <label for="quantity">Quantity:</label>
                  <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                      onfocus="if(this.value == '1') { this.value = ''; }" 
                      onBlur="if(this.value == '') { this.value = '1';}"
                      value="1">
                  <input type="submit" class="button" value="Order Now!">
                </form>
                <div class="down-content">
                  <div class="categories">
                    <h6>Category: <span><a href="#">Pants</a>,<a href="#">Women</a>,<a href="#">Lifestyle</a></span></h6>
                  </div>
                  <div class="share">
                    <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Page Ends Here -->
    
@endsection
