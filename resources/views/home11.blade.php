@extends('products.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>{{ $category }}</h3>

                                    <p>Total Categories</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-cube"></i>
                                </div>
                                <a href="{{ route('categories.index') }}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>{{ $product }}</h3>

                                    <p>Total Product</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-cubes"></i>
                                </div>
                                <a href="{{ route('products.index') }}" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                            </div>                                                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
