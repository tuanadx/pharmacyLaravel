@extends('admin.layouts.app')


@push('page-css')
    
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Sửa bán hàng</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Trang chủ</a></li>
		<li class="breadcrumb-item active">Sửa bán hàng</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
                <!-- Sửa bán hàng -->
                <form method="POST" action="{{route('sales.update',$sale)}}">
					@csrf
					@method("PUT")
					<div class="row form-row">
						<div class="col-12">
							<div class="form-group">
								<label>Sản phẩm <span class="text-danger">*</span></label>
								<select class="select2 form-select form-control edit_product" name="product"> 
									@foreach ($products as $product)
										@if (!empty($product->purchase))
											@if (!($product->purchase->quantity <= 0))
												<option {{($product->purchase->id == $sale->product->purchase_id) ? 'selected': ''}} value="{{$product->id}}">{{$product->purchase->product}}</option>
											@endif
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Số lượng</label>
								<input type="number" class="form-control edit_quantity" value="{{$sale->quantity ?? '1'}}" name="quantity">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-block">Lưu thay đổi</button>
				</form>
                <!--/ Sửa bán hàng -->
			</div>
		</div>
	</div>			
</div>
@endsection	
<!-- Visit codeastro.com for more projects -->

@push('page-js')
    
@endpush