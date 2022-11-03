<html>
    <head>
        <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
        <script src="{{asset('assets/jquery.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="POST" action="{{url('/addProduct')}}">
                    @csrf
                <div class="col-md-12">
                {{-- user form section --}}
                    <h2>User Details</h2>
                <hr/>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name">  
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="col-md-4">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter username"> 
                        </div>
                        <div class="col-md-4">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                        </div>
                        <div class="col-md-4">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="c_password" placeholder="Please confirm password">
                        </div>                 
                    </div>
                </div><br/>

                {{-- product section --}}
                <div class="row">
                    <div class="col-md-10"><h2>Product Details</h2></div><div class="col-md-2" align='right'><button type="button" class="btn btn-primary" id="rowAdder">Add</button></div>
                </div>
                <hr/>                
                <div id="product_box">
                    <div id="product_form">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="p_name[]" placeholder="Product name">  
                            </div>
                            <div class="col-md-2">
                                <label>Price</label>
                                <input type="text" class="form-control price" onChange="calculator(this)" name="price[]" placeholder="Enter price">
                            </div>
                            <div class="col-md-2">
                                <label>Quantity</label>
                                <input type="text" class="form-control qty" onChange="calculator(this)" name="qty[]" placeholder="Enter quantity">
                            </div>
                            <div class="col-md-3">
                                <label>Product Type</label>
                                <select class="form-control type" onChange="showTextbox(this)" name="type[]">
                                    <option>Choose</option>
                                    <option value="flat">flat</option>
                                    <option value="discount">discount</option>
                                </select>
                            </div> 
                            <div class="col-md-2 discount d-none">
                                <label>Discount</label>
                                <input type="text" name="discount[]" onChange="calculator(this)" class="form-control disc" placeholder="Enter Amount">
                            </div>
                        </div><br/>
                    </div>
                </div><br/>
                <div class="row">
                <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <p>Total Amount : <input type="text" class="form-control" id="f_total" name="f_total" disabled></p>
                </div>
                </div>
            </form>
            </div>
        </div>
    </body>
    <script src="{{asset('assets/calculator.js')}}"></script>
</html>