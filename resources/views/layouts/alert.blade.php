@if(session('notice'))
<div class="alert alert-success">
	<strong>{!! session('notice') !!}</strong>
</div>
@endif