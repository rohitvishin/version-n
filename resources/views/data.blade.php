<html>
    <head>
        <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
        <script src="{{asset('assets/jquery.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
        <script src="{{asset('assets/axios.min.js')}}"></script>
    </head>
    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}"><h5>Add Form</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/data')}}"><h5>View Form</h5></a>
                </li>
                </ul>
        </div>
        </nav>
            <div class="row" style="margin-top:25px">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Products</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $user)
                        <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td><button type="button" class="btn btn-primary myModal" data-toggle="modal" value="{{$user->username}}">View</button></td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Type</th>
                    <th scope="col">Discount</th>
                    </tr>
                </thead>
                <tbody class="data">
                   
                </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        var url="{{url('')}}";
        $('.myModal').on('click', function () {
            $('.data').html('');
            var username=$(this).val();
            console.log(username)
            axios.post(`${url}/modal`,{username:username}).then((res)=>{
                if(res.data)
                $('.data').append(res.data);
            });
            $('#exampleModal').modal('show')    
        })
    </script>
</html>