<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from www.spruko.com/demo/viboon/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 18:16:31 GMT -->
@include('partials.head')
	<body class="">
		<div class="page" >
			<div class="page-main">
				@include('partials.nav')
				<div class="my-3 my-md-5">
					<div class="container">
						@yield('content')
					</div>
				</div>
			</div>
			<!-- End Footer-->
		</div>

		<!-- Dashboard js -->
		@include('sweetalert::alert')

		@include('partials.scripts')
	</body>

<!-- Mirrored from www.spruko.com/demo/viboon/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 18:16:31 GMT -->
</html>