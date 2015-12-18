@extends('layouts.master')

@section('content')
<div class="section-wrap">
	<form action="#" method="post">

		<h2 class="section show">Konteks</h2>
		<div class="feedback-set show">
			<div class="section-content">
				<p class="question">Seberapa banyak-kah Anda merasa telah bekerja sama dengan [NAME] dalam proyek ini? Dalam hal dan cara-cara seperti apa Anda telah bekerja sama dengan [NAME]?</p>
					<table>
						<tr>
						 <td>See Review From: </td>
						 <td>
							<a href="#" class="reviewer active">Tommy</a>
							<a href="#" class="reviewer">Mohan</a>
							<a href="#" class="reviewer">Denny</a>
							<a href="#" class="reviewer">Indra</a>
							<a href="#" class="reviewer">Muis</a>
							<a href="#" class="reviewer">Ziaul</a>
						 </td>
						</tr>
					</table>
				<p class="feedback show">Lorem ipsum doloir feedback pertama</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kedua</p>
				<p class="feedback hide">Lorem ipsum doloir feedback ketiga</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keempat</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kelima</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keenam</p>
				<p class="summary-label">Summary: </p>
				<textarea rows="4" class="summary" name="summary-1"></textarea>
			</div>
		</div>

		<div class="feedback-set hide">
			<div class="section-content">
				<p class="question">Seberapa senang anda bekerjasama dengan [NAME] dalam project ini?</p>
					<table>
						<tr>
						 <td>See Review From: </td>
						 <td>
							<a href="#" class="reviewer">Tommy</a>
							<a href="#" class="reviewer">Mohan</a>
							<a href="#" class="reviewer">Denny</a>
							<a href="#" class="reviewer">Indra</a>
							<a href="#" class="reviewer">Muis</a>
							<a href="#" class="reviewer">Ziaul</a>
						 </td>
						</tr>
					</table>
				<p class="feedback hide">Lorem ipsum doloir feedback pertama</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kedua</p>
				<p class="feedback hide">Lorem ipsum doloir feedback ketiga</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keempat</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kelima</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keenam</p>
				<p class="summary-label">Summary: </p>
				<textarea rows="4" class="summary" name="summary-2"></textarea>
			</div>
		</div><!-- feedback-set-->

		<h2 class="section hide">Proses Teknis</h2>
		<div class="feedback-set hide">
			<div class="section-content">
				<p class="question">Apakah [NAME] menulis test yang tepat, pantas dan mencukupi? Apakah [NAME] selalu menulis test terlebih dahulu? Apakah ia memiliki keseimbangan yang baik antara menulis test secara lengkap dan menulis test secara mendalam?</p>
					<table>
						<tr>
						 <td>See Review From: </td>
						 <td>
							<a href="#" class="reviewer">Tommy</a>
							<a href="#" class="reviewer">Mohan</a>
							<a href="#" class="reviewer">Denny</a>
							<a href="#" class="reviewer">Indra</a>
							<a href="#" class="reviewer">Muis</a>
							<a href="#" class="reviewer">Ziaul</a>
						 </td>
						</tr>
					</table>
				<p class="feedback hide">Lorem ipsum doloir feedback pertama</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kedua</p>
				<p class="feedback hide">Lorem ipsum doloir feedback ketiga</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keempat</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kelima</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keenam</p>
				<p class="summary-label">Summary: </p>
				<textarea rows="4" class="summary" name="summary-3"></textarea>
			</div>
		</div>

		<div class="feedback-set hide">
			<div class="section-content">
				<p class="question">Seberapa besar fokus yang dimiliki [NAME] dalam menjaga agar kode memiliki struktur dan organisasi yang rapi, bersih serta ter-faktorisasi dengan baik? Apakah [NAME] cenderung dan sering mencari cara dan kesempatan untuk me-refaktorisasi kode apabila test sudah pass?</p>
					<table>
						<tr>
						 <td>See Review From: </td>
						 <td>
							<a href="#" class="reviewer">Tommy</a>
							<a href="#" class="reviewer">Mohan</a>
							<a href="#" class="reviewer">Denny</a>
							<a href="#" class="reviewer">Indra</a>
							<a href="#" class="reviewer">Muis</a>
							<a href="#" class="reviewer">Ziaul</a>
						 </td>
						</tr>
					</table>
				<p class="feedback hide">Lorem ipsum doloir feedback pertama</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kedua</p>
				<p class="feedback hide">Lorem ipsum doloir feedback ketiga</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keempat</p>
				<p class="feedback hide">Lorem ipsum doloir feedback kelima</p>
				<p class="feedback hide">Lorem ipsum doloir feedback keenam</p>
				<p class="summary-label">Summary: </p>
				<textarea rows="4" class="summary" name="summary-4"></textarea>
			</div>
		</div><!-- feedback-set-->
	<div class="action-part">
		<div class="uk-grid">
			<div class="uk-width-4-5">
			</div>
			<div class="uk-width-1-5">
				<input type="button" class="submit-summary" id="submit-summary" value="SAVE SUMMARY"/>
			</div>
		</div>
	</div>
	</form>
</div>
@endsection
