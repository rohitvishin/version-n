<html>
    <head>
        <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
        <script src="{{asset('assets/jquery.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form>
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
                                <input type="text" class="form-control" name="p_name" placeholder="Product name">  
                            </div>
                            <div class="col-md-2">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter price">
                            </div>
                            <div class="col-md-2">
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="qty" placeholder="Enter quantity">
                            </div>
                            <div class="col-md-3">
                                <label>Product Type</label>
                                <select class="form-control">
                                    <option>Choose</option>
                                    <option value="flat">flat</option>
                                    <option value="discount">discount</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Discount</label>
                                <input type="text" name="discount" class="form-control" placeholder="Enter Amount">
                            </div>
                        </div><br/>
                    </div>
                </div><br/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </body>
    <script type="text/javascript">
 
        $("#rowAdder").click(function () {
            $('#product_box').append($('#product_form').html());
        });
    </script>
</html>