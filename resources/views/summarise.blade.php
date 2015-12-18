@extends('layouts.master')

@section('content')
<div class="section-wrap">
	<form action="#" method="post">
		<div class="section show" id="section-1">
			<h2>Konteks</h2>
			<div class="feedback-set show" id="set-1">
				<div class="section-content">
					<p class="question" id="question-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor odio sit amet commodo efficitur. Sed posuere arcu dui, consequat pulvinar sem mollis et. Aliquam eu suscipit sem, eu consectetur elit. Maecenas id tellus ac enim auctor molestie.</p>
						<table>
							<tr>
							 <td>See Review From: </td>
							 <td>
								<a href="#" id="reviewer-1" class="reviewer active">Tommy</a>
								<a href="#" id="reviewer-2" class="reviewer">Mohan</a>
								<a href="#" id="reviewer-3" class="reviewer">Denny</a>
								<a href="#" id="reviewer-4" class="reviewer">Indra</a>
								<a href="#" id="reviewer-5" class="reviewer">Muis</a>
								<a href="#" id="reviewer-6" class="reviewer">Ziaul</a>
							 </td>
							</tr>
						</table>
					<p class="feedback show" id="feedback-1">Lorem ipsum doloir feedback pertama</p>
					<p class="feedback hide" id="feedback-2">Lorem ipsum doloir feedback kedua</p>
					<p class="feedback hide" id="feedback-3">Lorem ipsum doloir feedback ketiga</p>
					<p class="feedback hide" id="feedback-4">Lorem ipsum doloir feedback keempat</p>
					<p class="feedback hide" id="feedback-5">Lorem ipsum doloir feedback kelima</p>
					<p class="feedback hide" id="feedback-6">Lorem ipsum doloir feedback keenam</p>
					<p class="summary-label">Summary: </p>
					<textarea rows="4" id="summary-1" class="summary"></textarea>
				</div>
			</div>

			<div class="feedback-set hide" id="set-2">
				<div class="section-content">
					<p class="question" id="question-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor odio sit amet commodo efficitur. Sed posuere arcu dui, consequat pulvinar sem mollis et. Aliquam eu suscipit sem, eu consectetur elit. Maecenas id tellus ac enim auctor molestie.</p>
						<table>
							<tr>
							 <td>See Review From: </td>
							 <td>
								<a href="#" id="reviewer-1" class="reviewer">Tommy</a>
								<a href="#" id="reviewer-2" class="reviewer">Mohan</a>
								<a href="#" id="reviewer-3" class="reviewer">Denny</a>
								<a href="#" id="reviewer-4" class="reviewer">Indra</a>
								<a href="#" id="reviewer-5" class="reviewer">Muis</a>
								<a href="#" id="reviewer-6" class="reviewer">Ziaul</a>
							 </td>
							</tr>
						</table>
					<p class="feedback hide" id="feedback-1">Lorem ipsum doloir feedback pertama</p>
					<p class="feedback hide" id="feedback-2">Lorem ipsum doloir feedback kedua</p>
					<p class="feedback hide" id="feedback-3">Lorem ipsum doloir feedback ketiga</p>
					<p class="feedback hide" id="feedback-4">Lorem ipsum doloir feedback keempat</p>
					<p class="feedback hide" id="feedback-5">Lorem ipsum doloir feedback kelima</p>
					<p class="feedback hide" id="feedback-6">Lorem ipsum doloir feedback keenam</p>
					<p class="summary-label">Summary: </p>
					<textarea rows="4" id="summary-2" class="summary"></textarea>
				</div>
			</div><!-- feedback-set-->
		</div><!-- section-->

		<div class="section hide" id="section-2">
			<h2>Proses Teknis</h2>
			<div class="feedback-set hide" id="set-1">
				<div class="section-content">
					<p class="question" id="question-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor odio sit amet commodo efficitur. Sed posuere arcu dui, consequat pulvinar sem mollis et. Aliquam eu suscipit sem, eu consectetur elit. Maecenas id tellus ac enim auctor molestie.</p>
						<table>
							<tr>
							 <td>See Review From: </td>
							 <td>
								<a href="#" id="reviewer-1" class="reviewer">Tommy</a>
								<a href="#" id="reviewer-2" class="reviewer">Mohan</a>
								<a href="#" id="reviewer-3" class="reviewer">Denny</a>
								<a href="#" id="reviewer-4" class="reviewer">Indra</a>
								<a href="#" id="reviewer-5" class="reviewer">Muis</a>
								<a href="#" id="reviewer-6" class="reviewer">Ziaul</a>
							 </td>
							</tr>
						</table>
					<p class="feedback hide" id="feedback-1">Lorem ipsum doloir feedback pertama</p>
					<p class="feedback hide" id="feedback-2">Lorem ipsum doloir feedback kedua</p>
					<p class="feedback hide" id="feedback-3">Lorem ipsum doloir feedback ketiga</p>
					<p class="feedback hide" id="feedback-4">Lorem ipsum doloir feedback keempat</p>
					<p class="feedback hide" id="feedback-5">Lorem ipsum doloir feedback kelima</p>
					<p class="feedback hide" id="feedback-6">Lorem ipsum doloir feedback keenam</p>
					<p class="summary-label">Summary: </p>
					<textarea rows="4" id="summary-1" class="summary"></textarea>
				</div>
			</div>

			<div class="feedback-set hide" id="set-2">
				<div class="section-content">
					<p class="question" id="question-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor odio sit amet commodo efficitur. Sed posuere arcu dui, consequat pulvinar sem mollis et. Aliquam eu suscipit sem, eu consectetur elit. Maecenas id tellus ac enim auctor molestie.</p>
						<table>
							<tr>
							 <td>See Review From: </td>
							 <td>
								<a href="#" id="reviewer-1" class="reviewer">Tommy</a>
								<a href="#" id="reviewer-2" class="reviewer">Mohan</a>
								<a href="#" id="reviewer-3" class="reviewer">Denny</a>
								<a href="#" id="reviewer-4" class="reviewer">Indra</a>
								<a href="#" id="reviewer-5" class="reviewer">Muis</a>
								<a href="#" id="reviewer-6" class="reviewer">Ziaul</a>
							 </td>
							</tr>
						</table>
					<p class="feedback hide" id="feedback-1">Lorem ipsum doloir feedback pertama</p>
					<p class="feedback hide" id="feedback-2">Lorem ipsum doloir feedback kedua</p>
					<p class="feedback hide" id="feedback-3">Lorem ipsum doloir feedback ketiga</p>
					<p class="feedback hide" id="feedback-4">Lorem ipsum doloir feedback keempat</p>
					<p class="feedback hide" id="feedback-5">Lorem ipsum doloir feedback kelima</p>
					<p class="feedback hide" id="feedback-6">Lorem ipsum doloir feedback keenam</p>
					<p class="summary-label">Summary: </p>
					<textarea rows="4" id="summary-2" class="summary"></textarea>
				</div>
			</div><!-- feedback-set-->
		</div><!-- section-->

	</form>
</div>
@endsection
