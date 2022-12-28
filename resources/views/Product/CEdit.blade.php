@include('Layout.header')

<div class="container"> <br>
  <h3>Edit Category Data In DataBase</h3> <br>



<form action="{{route('category.update',$Cat->Cid)}}" method = "post" enctype="multipart/form-data">

  @php
    print_r($errors->all());
    @endphp
  @endphp
    @csrf
    <div class = "row">
        @method('put')

    
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group">
          <label for="name">Category Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name" value = "{{$Cat->Cname}}">
          <span class = 'text-danger'>
              @error('name')
                {{$message}}
              @enderror
          </span>
        </div>


        <div class="form-group wrap-input1">
                        <label for="name">Select Category:</label>
                        <select class="form-control wrap-input1" id="cat" name="Category">
                        <option value="">--Select--</option>
                            <!-- Get dropdown data code -->
                             @foreach($Prod as $key)
                                  <option value="{{$key->id}}"  
                                    @if($Cat->ProdId == $key->id)
                                    {{"selected";}}
                                    @endif
                                    >{{$key->Pname}}</option>

                              @endforeach


                          
                            
                        </select>
        </div>
       
        

        <button type="submit" class="btn btn-primary" name = "ins">Submit</button>

        <a class="btn btn-secondary" href="{{route('category.index')}}"><i class="fa fa-list-alt"></i> View All</a>

  
      </div>
    </div>


  </form>
</div>





@include('Layout.footer')