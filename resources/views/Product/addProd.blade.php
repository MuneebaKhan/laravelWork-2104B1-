@include('Layout.header')

<div class="container"> <br>
  <h3>Insert Data In DataBase</h3> <br>



<form action="{{route('products.store')}}" method = "post" enctype="multipart/form-data">

  @php
    print_r($errors->all());
    @endphp
  @endphp
    @csrf
    <div class = "row">

    
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group">
          <label for="name">Product Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
          <span class = 'text-danger'>
              @error('name')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Company Email:</label>
          <input type="email" class="form-control" id="edu" placeholder="Enter Email" name="email">
            <span class = 'text-danger'>
                @error('email')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Price:</label>
          <input type="number" class="form-control" id="edu" placeholder="Enter Price" name="price">
            <span class = 'text-danger'>
                @error('price')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Description:</label>
          <input type="text" class="form-control" id="edu" placeholder="Enter Description" name="desc">
            <span class = 'text-danger'>
                 @error('desc')
                {{$message}}
              @enderror
          </span>
        </div>
        <div class="form-group">
          <label for="my-input">Product Image</label>
          <input id="my-input" class="form-control" type="file" name="img">
        </div>

        

        <button type="submit" class="btn btn-primary" name = "ins">Submit</button>

    <a class="btn btn-secondary" href="{{route('products.index')}}"><i class="fa fa-list-alt"></i> View All</a>

  
      </div>
    </div>


  </form>
</div>





@include('Layout.footer')