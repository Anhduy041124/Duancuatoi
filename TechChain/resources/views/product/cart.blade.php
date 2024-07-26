@extends('layout.app')
@section('title')
   Giỏ hàng 
@endsection
@section('body')
      <!-- Shopping Cart -->
      <div class="shopping-cart section">
        <div ng-if="cart.length>0" class="container">
            <div class="cart-list-head">
                <!-- Cart List Title -->
                <div class="cart-list-title">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-12">

                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <p>Product Name</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Quantity</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Price</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Subtotal</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <p>Remove</p>
                        </div>
                    </div>
                </div>
                <!-- End Cart List Title -->
                <!-- Cart Single List list -->
                <div ng-repeat="sp in cart" class="cart-single-list">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1 col-12">
                            <a href="/detail/@{{sp.slug}}"><img src="@{{sp.image}}" alt="#"></a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name"><a href="/detail/@{{sp.slug}}">
                                @{{sp.name}} </a></h5>
                            
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="count-input">
                                <input type="number" class="form-control form-control-lg" ng-change="updateQuantity(sp.id, sp.quantity)" ng-model="sp.quantity">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                           <span ng-if="sp.sale_price!=null">
                            <p>@{{sp.sale_price|number}}Đ</p>
                            <del>@{{sp.price|number}}Đ</del>
                           </span>
                           <span ng-if="sp.sale_price==null">
                            <p>@{{sp.price|number}}Đ</p>
                        </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>@{{ sp.quantity * ((sp.sale_price!=null)?sp.sale_price:sp.price)| number}}Đ</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a class="remove-item" href="javascript:void(0)" ng-click="removeFromCart($index)"><i class="lni lni-close"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single List list -->
            </div>
            <form method="POST" action="" class="row"> @csrf
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="right checkout-steps-form-style-1">
                                   <h6>Thông tin giao hàng</h6> 
                                   <section class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Full name</label>
                                                <div class="form-input form">
                                                    <input type="text" name="fullname" placeholder="Full name" value="{{(Auth::check())?Auth::user()->name:''}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Phone Number</label>
                                                <div class="form-input form">
                                                    <input type="text" name="phone" placeholder="Phone Number" value="{{(Auth::check())?Auth::user()->phone:''}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Email Address</label>
                                                <div class="form-input form">
                                                    <input type="text" name="email" placeholder="Email Address" value="{{(Auth::check())?Auth::user()->email:''}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>Address</label>
                                                <div class="form-input form">
                                                    <input type="text" name="address" placeholder="Address" value="{{(Auth::check())?Auth::user()->address:''}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <input type="checkbox" id="agree" name="agree" required>
                                            <label for="agree">
                                                <p>Tôi Đã đọcw và đồng ý tất cả các điều khoản của shop</p>
                                            </label>
                                        </div>
                                    </div>
                                   </section>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Cart Total<span>@{{totalCartMoney()|number}}Đ</span></li>
                                    </ul>
                                    <div class="button">
                                        <button type="submit" class="btn">Checkout</button>
                                        <a href="product-grids.html" class="btn btn-alt">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </form>
        </div>
        <div ng-if="cart.length==0" class=" d-flex justify-content-center align-items-center">
            <div class="text-center">
                <i class="lni lni-cart" style="font-size: 40px"></i>
            Giỏ hàng bạn đang trống !
            <br><br>
            <a href="/" class="btn btn-primary">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
    <!--/ End Shopping Cart -->
@endsection
@section('viewFunction')
    <script>
        viewFunction = function($scope, $http){
            $scope.updateQuantity = function(id, quantity){
                $http.patch('/api/cart/'+id,{
                    quantity: quantity
                }).then(function(res){
                    // $scope.$parent.cart = res.data.data;
                });
            }
        }
    </script>
@endsection