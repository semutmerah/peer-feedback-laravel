@extends('layouts.master')

@section('content')
<div class="uk-container tanya-wrap">
	<div class="uk-slidenav-position" data-uk-slideshow>
		<form class="uk-form">
			<fieldset>
				<h2 class="tanya-section">Konteks</h2>
				<ul class="uk-slideshow">
					<li>
						<div class="form-item">
							<div class="uk-form-row">
								<p>Seberapa banyak-kah Anda merasa telah bekerja sama dengan {{ $name }} dalam proyek ini? Dalam hal dan cara-cara seperti apa Anda telah bekerja sama dengan {{ $name }}?</p>
								<textarea rows="4" name="pertanyaan1"></textarea>
							</div>
						</div>
					</li>
				</ul>
				<ul class="uk-dotnav uk-position-bottom uk-flex-center">
					<li data-uk-slideshow-item="0"><a href="#">Item1</a></li>
				</ul>
			</fieldset>
		</form>
	</div>
</div>
@endsection
