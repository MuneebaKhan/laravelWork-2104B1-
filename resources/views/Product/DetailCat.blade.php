@include('Layout.header')
<div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Category Detail Page</h2>
                </div>
                <div class="pull-right">
                    <a  class="btn btn-primary mt-5 p-2" href="{{route('category.index')}}" role="button">Back To List</a>

                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category Name:</strong>
                     {{$Cat->Cname}}
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    {{$Cat->Pname}}
                </div>
            </div>
        </div>
</div>
@include('Layout.footer')