<h1>Create New Vehicle</h1>
<a href="{{ url('/') }}/vehicle">back</a>
<form action="{{ url('/') }}/vehicle" method="POST">

	{{ csrf_field() }}
	{{ method_field('POST') }}

	@include("vehicle/form")

	<div>
		<button type="submit">Create</button>
	</div>
</form>