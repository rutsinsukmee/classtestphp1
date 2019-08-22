<h1>Vehicle</h1>
<div>
	<a href="{{ url('/') }}/vehicle/create"> Add New</a>
</div>
<div>
	<form action="{{ url('/') }}/vehicle" method="GET">
		<input name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>
<table border=1>
<tr>
		<th>Id</th>
		<th>Brand</th>
		<th>Series</th>
        <th>Colour</th>
		<th>Year</th>
		<th>Mileage</th>
        <th>Actions</th>
	</tr>
	@foreach($vehicles as $vehicle)
	<tr>
		<td>{{ $vehicle->id }} </td>
		<td>{{ $vehicle->brand }} </td>
        <td>{{ $vehicle->series }} </td>
		<td>{{ $vehicle->colour }} </td>
        <td>{{ $vehicle->year }} </td>
		<td>{{ $vehicle->mileage }} </td>
		
		<td>
			<a href="{{ url('/') }}/vehicle/{{ $vehicle->id }}">View</a>
			<a href="{{ url('/') }}/vehicle/{{ $vehicle->id }}/edit">Edit</a>
			<form
        action="{{ url('/') }}/vehicle/{{ $vehicle->id }}"
        method="POST"
        onsubmit="validate();"
        style="display:inline" >

    	{{ csrf_field() }}
    	{{ method_field('DELETE') }}
	<button type="submit">Delete</button>
</form>
		</td>
	</tr>
	@endforeach
</table>
<script>
	function validate(){
		//SUBMIT
		var wantToDelete= confirm('Are you sure to delete this item?');
		if(wantToDelete){
			this.submit();
		}
	}
</script>