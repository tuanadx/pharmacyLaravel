@extends('admin.layouts.app')


@push('page-css')
    
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Thêm bán hàng</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Trang chủ</a></li>
		<li class="breadcrumb-item active">Thêm bán hàng</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
                <!-- Tạo bán hàng -->
                <form method="POST" action="{{route('sales.store')}}">
					@csrf
					<div class="row form-row">
						<div class="col-12">
							<div class="form-group">
								<label>Sản phẩm <span class="text-danger">*</span></label>
								<select class="select2 form-select form-control" name="product"> 
									@foreach ($products as $product)
										@if (!empty($product->purchase))
											@if (!($product->purchase->quantity <= 0))
                                                <option disabled selected > Chọn sản phẩm</option>
												<option value="{{$product->id}}">{{$product->purchase->product}}</option>
											@endif
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Số lượng</label>
								<input type="number" value="1" class="form-control" name="quantity">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-block">Lưu thay đổi</button>
				</form>
                <!--/ Tạo bán hàng -->
			</div>
		</div><!-- Visit codeastro.com for more projects -->
	</div>			
</div>
@endsection	


@push('page-js')
    
@endpush