<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			
			<ul>
				<li class="menu-title"> 
					<span>Chính</span>
				</li>
				<li class="{{ route_is('dashboard') ? 'active' : '' }}"> 
					<a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>Trang chủ</span></a>
				</li>
				
				@can('view-category')
				<li class="{{ route_is('categories.*') ? 'active' : '' }}"> 
					<a href="{{route('categories.index')}}"><i class="fe fe-layout"></i> <span>Danh mục</span></a>
				</li>
				@endcan

				@can('view-purchase')
				<li class="submenu">
					<a href="#"><i class="fe fe-star-o"></i> <span>Nhập hàng</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('purchases.*') ? 'active' : '' }}" href="{{route('purchases.index')}}">Nhập hàng</a></li>
						@can('create-purchase')
						<li><a class="{{ route_is('purchases.create') ? 'active' : '' }}" href="{{route('purchases.create')}}">Thêm nhập hàng</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				
				@can('view-products')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span>Sản phẩm</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is(('products.*')) ? 'active' : '' }}" href="{{route('products.index')}}">Sản phẩm</a></li>
						@can('create-product')<li><a class="{{ route_is('products.create') ? 'active' : '' }}" href="{{route('products.create')}}">Thêm sản phẩm</a></li>@endcan
						@can('view-outstock-products')<li><a class="{{ route_is('outstock') ? 'active' : '' }}" href="{{route('outstock')}}">Hết hàng</a></li>@endcan
						@can('view-expired-products')<li><a class="{{ route_is('expired') ? 'active' : '' }}" href="{{route('expired')}}">Hết hạn</a></li>@endcan
					</ul>
				</li>
				@endcan
				
				
				@can('view-sales')
				<li class="submenu">
					<a href="#"><i class="fe fe-activity"></i> <span>Bán hàng</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('sales.*') ? 'active' : '' }}" href="{{route('sales.index')}}">Bán hàng</a></li>
						@can('create-sale')
						<li><a class="{{ route_is('sales.create') ? 'active' : '' }}" href="{{route('sales.create')}}">Thêm bán hàng</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				
				@can('view-supplier')
				<li class="submenu">
					<a href="#"><i class="fe fe-user"></i> <span>Nhà cung cấp</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('suppliers.*') ? 'active' : '' }}" href="{{route('suppliers.index')}}">Nhà cung cấp</a></li>
						@can('create-supplier')<li><a class="{{ route_is('suppliers.create') ? 'active' : '' }}" href="{{route('suppliers.create')}}">Thêm nhà cung cấp</a></li>@endcan
					</ul>
				</li>
				@endcan

				@can('view-reports')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span>Báo cáo</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('sales.report') ? 'active' : '' }}" href="{{route('sales.report')}}">Báo cáo bán hàng</a></li>
						<li><a class="{{ route_is('purchases.report') ? 'active' : '' }}" href="{{route('purchases.report')}}">Báo cáo nhập hàng</a></li>
					</ul>
				</li>
				@endcan

				@can('view-access-control')
				<li class="submenu">
					<a href="#"><i class="fe fe-lock"></i> <span>Kiểm soát truy cập</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						@can('view-permission')
						<li><a class="{{ route_is('permissions.index') ? 'active' : '' }}" href="{{route('permissions.index')}}">Quyền hạn</a></li>
						@endcan
						@can('view-role')
						<li><a class="{{ route_is('roles.*') ? 'active' : '' }}" href="{{route('roles.index')}}">Vai trò</a></li>
						@endcan
					</ul>
				</li>					
				@endcan

				@can('view-users')
				<li class="{{ route_is('users.*') ? 'active' : '' }}"> 
					<a href="{{route('users.index')}}"><i class="fe fe-users"></i> <span>Người dùng</span></a>
				</li>
				@endcan
				
				<li class="{{ route_is('profile') ? 'active' : '' }}"> 
					<a href="{{route('profile')}}"><i class="fe fe-user-plus"></i> <span>Hồ sơ</span></a>
				</li>
				<li class="{{ route_is('backup.index') ? 'active' : '' }}"> 
					<a href="{{route('backup.index')}}"><i class="material-icons">backup</i> <span>Sao lưu</span></a>
				</li>
				@can('view-settings')
				<li class="{{ route_is('settings') ? 'active' : '' }}"> 
					<a href="{{route('settings')}}">
						<i class="material-icons">settings</i>
						 <span>Cài đặt</span>
					</a>
				</li>
				@endcan
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->