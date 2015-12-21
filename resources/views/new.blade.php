@extends('layouts.master')

@section('content')
<div class="uk-container tanya-wrap">
	<div class="uk-slidenav-position" data-uk-slideshow>
		<form class="uk-form">
			<fieldset class="set show">
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
			<fieldset class="set hide">
				<h2 class="tanya-section">Proses Teknis</h2>
				<ul class="uk-slideshow">
					<li>
						<div class="form-item">
							<div class="uk-form-row">
								<p>Apakah {{ $name }} menulis test yang tepat, pantas dan mencukupi? Apakah {{ $name }} selalu menulis test terlebih dahulu? Apakah ia memiliki keseimbangan yang baik antara menulis test secara lengkap dan menulis test secara mendalam?</p>
								<textarea rows="4" name="pertanyaan2"></textarea>
							</div>
						</div>
					</li>
					<li>
						<div class="form-item">
							<div class="uk-form-row">
								<p>Seberapa besar fokus yang dimiliki {{ $name }} dalam menjaga agar kode memiliki struktur dan organisasi yang rapi, bersih serta ter-faktorisasi dengan baik? Apakah {{ $name }} cenderung dan sering mencari cara dan kesempatan untuk me-refaktorisasi kode apabila test sudah pass?</p>
								<textarea rows="4" name="pertanyaan3"></textarea>
							</div>
						</div>
					</li>
					<li>
						<div class="form-item">
							<div class="uk-form-row">
								<p>Apakah {{ $name }} cepat dalam memberikan solusi teknis yang efektif dalam menyelesaikan suatu masalah? Apakah ia memilih suatu solusi berdasarkan analisis pragmatis atau lebih berdasarkan apakah suatu solusi tersebut "keren" atau "baru"?</p>
								<textarea rows="4" name="pertanyaan4"></textarea>
							</div>
						</div>
					</li>
					<li>
						<div class="form-item">
							<div class="uk-form-row">
								<p>Secara umum, apakah {{ $name }} seorang developer yang berdisiplin tinggi apabila kita mengacu pada proses KMK?</p>
								<textarea rows="4" name="pertanyaan5"></textarea>
							</div>
						</div>
					</li>
				</ul>
				<ul class="uk-dotnav uk-position-bottom uk-flex-center">
					<li data-uk-slideshow-item="0"><a href="#">Item1</a></li>
					<li data-uk-slideshow-item="1"><a href="#">Item2</a></li>
					<li data-uk-slideshow-item="2"><a href="#">Item3</a></li>
					<li data-uk-slideshow-item="3"><a href="#">Item4</a></li>
					<li data-uk-slideshow-item="4"><a href="#">Item5</a></li>
				</ul>
			</fieldset>

		</form>
	</div>
</div>
@endsection
