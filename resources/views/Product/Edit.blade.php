@include('Layout.header')

<div class="container"> <br>
  <h3>Insert Data In DataBase</h3> <br>



<form action="{{route('products.update',$Prods->id)}}" method = "post" enctype="multipart/form-data">

  @php
    print_r($errors->all());
    @endphp
  @endphp
    @csrf
    <div class = "row">
        @method('put')

    
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group">
          <label for="name">Product Name:</label>
        <input type="text" class="form-control" id="name" value="{{$Prods->Pname}}" name="name">
          <span class = 'text-danger'>
              @error('name')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Company Email:</label>
        <input type="email" class="form-control" id="edu" value = "{{$Prods->Email}}" name="email">
            <span class = 'text-danger'>
                @error('email')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Price:</label>
          <input type="number" class="form-control" id="edu" value = "{{$Prods->Price}}" name="price">
            <span class = 'text-danger'>
                @error('price')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Description:</label>
          <input type="text" class="form-control" id="edu" value = "{{$Prods->Description}}" name="desc">
            <span class = 'text-danger'>
                 @error('desc')
                {{$message}}
              @enderror
          </span>
        </div>


        

        <button type="submit" class="btn btn-primary" name = "ins">Update</button>

    <a class="btn btn-secondary" href="{{route('products.index')}}"><i class="fa fa-list-alt"></i> View All</a>

  
      </div>
    </div>


  </form>
</div>





@include('Layout.footer')