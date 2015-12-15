@extends('layouts.master')

@section('content')
<div class="uk-slidenav-position" data-uk-slideshow>
	<form class="uk-form">
		<fieldset>
			<ul class="uk-slideshow">
				<li>
					<div class="form-item">
						<div class="uk-form-row">
							<p>Seberapa banyak-kah Anda merasa telah bekerja sama dengan [NAME] dalam proyek ini? Dalam hal dan cara-cara seperti apa Anda telah bekerja sama dengan [NAME]?</p>
							<input type="text" name="pertanyaan1"/>
						</div>
					</div>
				</li>
				<li><input type="text" name="pertanyaan2"/></li>
				<li><input type="text" name="pertanyaan3"/></li>
			</ul>
		</fieldset>
	</form>
	<ul class="uk-dotnav uk-position-bottom uk-flex-center">
		<li data-uk-slideshow-item="0"><a href="#">Item1</a></li>
		<li data-uk-slideshow-item="1"><a href="#">Item2</a></li>
		<li data-uk-slideshow-item="2"><a href="#">Item3</a></li>
	</ul>
</div>
@endsection
