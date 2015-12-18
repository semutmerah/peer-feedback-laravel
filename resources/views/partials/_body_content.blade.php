<div class="wrapper">
	<!-- Header-->
	@include('partials._body_header')

	<!-- Content Weapper-->
	<div class="content-wrapper">
		<div class="uk-container">
			<!-- Content Header-->
			<section class="content-header">
				<h1>
					{{ $page_title }}
				</h1>
			</section>
		</div>
			<!-- Main content-->
		<section class="content">
			<!-- Your Page Content Here-->
			@yield('content')
		</section>
	</div>
</div>
