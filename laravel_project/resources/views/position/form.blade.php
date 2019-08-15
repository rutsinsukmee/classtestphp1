<div>
  <strong>Name : </strong>
  <input
      type="text"
      name="name"
      value="{{ isset($positions->name) ?  $positions->name : '' }}"
      placeholder="name here..."
      />
</div>
<div>
  <strong>Description : </strong>
  <input type="text" name="description" value="{{ isset($positions->description) ? $positions->description : '' }}" placeholder="description here..." />
</div>
