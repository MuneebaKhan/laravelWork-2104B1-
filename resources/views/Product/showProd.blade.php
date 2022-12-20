@include('Layout.header')
    <div class="container">


        @if(session('status'))
        <script> alert("{{session('status')}}") </script>
        @elseif(session('delete'))
        <script> alert("{{session('delete')}}") </script>
        @endif
            <a class="btn btn-secondary mb-3" href="{{route('products.create')}}"><i class="fa fa-list-alt"></i> Add Products</a>

        <table class = "table table-bordered">


            <tr>
                <th>Product Name</th>
                <th>Price </th>
                <th>Email</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            @foreach($Prod as $key)
                 <tr>
                        <td>{{$key->Pname}}</td>
                        <td>{{$key->Price}}</td>
                        <td>{{$key->Email}}</td>
                        <td>{{$key->Description}}</td>
                        <td>{{$key->created_at}}</td>
                        <td>{{$key->updated_at}}</td>
                        <td><a href="{{route('products.show',$key->id)}}" class = "btn btn-success">Detail</a> </td>
                        <td> <a href="{{route('products.edit',$key->id)}}" class = "btn btn-primary">Edit</a> </td>
                        <td> 

                        <form action="{{route('products.destroy',$key->id)}}" method = "post">
                        
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger">Delete</button>
                        </form>
                        </td>
                </tr>
                
            @endforeach
           
        </table>
    </div>
@include('Layout.footer')