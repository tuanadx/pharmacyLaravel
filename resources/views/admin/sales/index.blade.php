@extends('admin.layouts.app')

<x-assets.datatables />

@push('page-css')
    
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Bán hàng</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Trang chủ</a></li>
		<li class="breadcrumb-item active">Bán hàng</li>
	</ul>
</div>
@can('create-sale')
<div class="col-sm-5 col">
	<a href="{{route('sales.create')}}" class="btn btn-success float-right mt-2">Thêm bán hàng</a>
</div>
@endcan
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!--  Bán hàng -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="sales-table" class="datatable table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Tên thuốc</th>
								<th>Số lượng</th>
								<th>Tổng tiền</th>
								<th>Ngày</th>
								<th class="action-btn">Thao tác</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- / bán hàng -->
		
	</div>
</div>


@endsection

@push('page-js')
<script>
    $(document).ready(function() {
        var table = $('#sales-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('sales.index')}}",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'quantity', name: 'quantity'},
                {data: 'total_price', name: 'total_price'},
				{data: 'date', name: 'date'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        
    });
</script> 
@endpush