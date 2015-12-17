@extends('layouts.master')

@section('content')
<div class="section">
	<form>
		<h1 class="section-title" id="section-1">Konteks</h1>
		<div class="section-content">
			<p class="question" id="question">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor odio sit amet commodo efficitur. Sed posuere arcu dui, consequat pulvinar sem mollis et. Aliquam eu suscipit sem, eu consectetur elit. Maecenas id tellus ac enim auctor molestie.</p>
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
			<p class="feedback" id="feedback-1">Lorem ipsum doloir sit amet, consectetur adipiscing elit. Integer auctor odio sit amet commodo efficitur. Sed posuere arcu dui, consequat pulvinar sem mollis et. Aliquam eu suscipit sem, eu consectetur elit. Maecenas id tellus ac enim auctor molestie.</p>
			<p class="summary-label">Summary: </p>
			<textarea rows="4" id="summary-1" class="summary"></textarea>
		</div>
	</form>
</div>
@endsection
