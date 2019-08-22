<div>
  <strong>Brand : </strong>
  <input
      type="text"
      name="brand"
      value="{{ isset($vehicles->brand) ?  $vehicles->brand : '' }}"
      placeholder="brand here..."
      />
</div>
<div>
  <strong>Series : </strong>
  <input type="text" name="series" value="{{ isset($vehicles->series) ? $vehicles->series : '' }}" placeholder="series here..." />
</div>
<div>
  <strong>Colour : </strong>
  <input type="text" name="colour" value="{{ isset($vehicles->colour) ? $vehicles->colour : '' }}" placeholder="colour here..." />
</div>
<div>
  <strong>Year : </strong>
  <input type="text" name="year" value="{{ isset($vehicles->year) ? $vehicles->year : '' }}" placeholder="year here..." />
</div>
<div>
  <strong>Mileage : </strong>
  <input type="text" name="mileage" value="{{ isset($vehicles->mileage) ? $vehicles->mileage : '' }}" placeholder="mileage here..." />
</div>