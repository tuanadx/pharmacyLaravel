<!-- Header -->
<div class="header">
			
	<!-- Logo -->
	<div class="header-left">
		<a href="{{route('dashboard')}}" class="logo">
			<img src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('assets/img/pharrrlg.png')}} @endif" alt="Logo">
		</a>
		<a href="{{route('dashboard')}}" class="logo logo-small">
			<img src="{{asset('assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
		</a>
	</div>
	<!-- /Logo -->
	
	<a href="javascript:void(0);" id="toggle_btn">
		<i class="fe fe-text-align-left"></i>
	</a>
	
	<!-- Visit codeastro.com for more projects -->
	<!-- Mobile Menu Toggle -->
	<a class="mobile_btn" id="mobile_btn">
		<i class="fa fa-bars"></i>
	</a>
	<!-- /Mobile Menu Toggle -->
	
	<!-- Header Right Menu -->
	<ul class="nav user-menu">
		<li class="nav-item dropdown">
			<a href="#" data-target="#add_sales" title="Tạo đơn bán hàng" data-toggle="modal" class="dropdown-toggle nav-link">
				<i class="fas fa-cash-register"></i>
			</a>
		</li>
		<!-- Notifications -->
		<li class="nav-item dropdown noti-dropdown">
			
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<i class="fe fe-bell"></i> <span class="badge badge-pill">{{auth()->user()->unReadNotifications->count()}}</span>
			</a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header">
					<span class="notification-title">Thông báo</span>
					<a href="{{route('mark-as-read')}}" class="clear-noti">Đánh dấu tất cả đã đọc</a>
				</div>
				<div class="noti-content">
					<ul class="notification-list">
						@foreach (auth()->user()->unReadNotifications as $notification)
							<li class="notification-message">
								<a href="{{route('read')}}">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="Ảnh sản phẩm" src="{{asset('storage/purchases/'.$notification['image'])}}">
										</span>
										<div class="media-body">
											<h6 class="text-danger">Cảnh báo tồn kho</h6>
											<p class="noti-details">
												<span class="noti-title">{{$notification->data['product_name']}} chỉ còn {{$notification->data['quantity']}} sản phẩm.</span>
												<span>Vui lòng cập nhật số lượng nhập hàng</span>
											</p>
											
											<p class="noti-time"><span class="notification-time">{{$notification->created_at->diffForHumans()}}</span></p>
										</div>
									</div>
								</a>
							</li>
						@endforeach						
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">Xem tất cả thông báo</a>
				</div>
			</div>
		</li>
		<!-- /Notifications -->
		
		<!-- User Menu -->
		<li class="nav-item dropdown has-arrow">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<span class="user-img"><img class="rounded-circle" src="{{!empty(auth()->user()->avatar) ? asset('storage/users/'.auth()->user()->avatar): asset('assets/img/avatar_1nn.png')}}" width="31" alt="avatar"></span>
			</a>
			<div class="dropdown-menu">
				<div class="user-header">
					<div class="avatar avatar-sm">
						<img src="{{!empty(auth()->user()->avatar) ? asset('storage/users/'.auth()->user()->avatar): asset('assets/img/avatar_1nn.png')}}" alt="Ảnh người dùng" class="avatar-img rounded-circle">
					</div>
					<div class="user-text">
						<h6>{{auth()->user()->name}}</h6>
					</div>
				</div>
				
				<a class="dropdown-item" href="{{route('profile')}}">Hồ sơ của tôi</a>
				@can('view-settings')<a class="dropdown-item" href="{{route('settings')}}">Cài đặt</a>@endcan
				
				<a href="javascript:void(0)" class="dropdown-item">
					<form action="{{route('logout')}}" method="post">
					@csrf
					<button type="submit" class="btn">Đăng xuất</button>
				</form>
				</a>
			</div>
		</li>
		<!-- /User Menu -->
		
	</ul>
	<!-- /Header Right Menu -->
	
</div>
<!-- /Header -->