@include('Layout.header')
<div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Product Detail Page</h2>
                </div>
                <div class="pull-right">
                    <a  class="btn btn-primary mt-5 p-2" href="{{route('products.index')}}" role="button">Back To List</a>

                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $Prods->Pname }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $Prods->Price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $Prods->Email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descition:</strong>
                    {{ $Prods->Description }}
                </div>
            </div>
        </div>
</div>
@include('Layout.footer')