<h1>Edit Vehicle</h1>
<a href="{{ url('/') }}/vehicle">back</a>
<form
action="{{ url('/') }}/vehicle/{{ $vehicles->id }}"
method="POST" >

	{{ csrf_field() }}
	{{ method_field('PUT') }}

	@include("vehicle/form")

	<div>
		<button type="submit">Update</button>
	</div>
</form>