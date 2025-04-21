@extends('admin.layouts.app')

<x-assets.datatables />

@push('page-css')
    
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Nhập hàng</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Trang chủ</a></li>
		<li class="breadcrumb-item active">Nhập hàng</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('purchases.create')}}" class="btn btn-success float-right mt-2">Thêm mới</a>
</div>
@endpush
<!-- Visit codeastro.com for more projects -->
@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!-- Đơn hàng gần đây -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="purchase-table" class="datatable table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Tên thuốc</th>
								<th>Danh mục</th>
								<th>Nhà cung cấp</th>
								<th>Giá nhập</th>
								<th>Số lượng</th>
								<th>Ngày hết hạn</th>
								<th class="action-btn">Thao tác</th>
							</tr>
						</thead>
						<tbody>
														
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /Đơn hàng gần đây -->
		
	</div>
</div>
@endsection	

@push('page-js')
<script>
    $(document).ready(function() {
        var table = $('#purchase-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('purchases.index')}}",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'category', name: 'category'},
                {data: 'supplier', name: 'supplier'},
                {data: 'cost_price', name: 'cost_price'},
                {data: 'quantity', name: 'quantity'},
				{data: 'expiry_date', name: 'expiry_date'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
    });
</script> 
@endpush