@include('Layout.header')
    <div class="container">


        @if(session('status'))
        <script> alert("{{session('status')}}") </script>
        @elseif(session('delete'))
        <script> alert("{{session('delete')}}") </script>
        @endif
            <a class="btn btn-secondary mb-3" href="{{route('category.create')}}"><i class="fa fa-list-alt"></i> Add Category</a>

        <table class = "table table-bordered">


            <tr>
                <th>Category Name</th>
                <th>Product Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Image</th>
            </tr>
            @foreach($Cat as $key)
                 <tr>
                        <td>{{$key->Cname}}</td>
                        <td>{{$key->Pname}}</td>
                        <td>{{$key->created_at}}</td>
                        <td>{{$key->updated_at}}</td>
                        <td><img src="{{$key->ProdImg}}" alt="prodImages" width = "100" height="80"></td>

                        <td><a href="{{route('category.show',$key->Cid)}}" class = "btn btn-success">Detail</a> </td>
                        <td> <a href="{{route('category.edit',$key->Cid)}}" class = "btn btn-primary">Edit</a> </td>
                        <td> 

                        <form action="{{route('category.destroy',$key->Cid)}}" method = "post">
                        
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