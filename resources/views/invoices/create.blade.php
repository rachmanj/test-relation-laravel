<form action="{{ url('/invoices') }}" method="POST">
@csrf

<label for="">Nomor Invoice</label>
<input type="text" name="nomor_invoice">
<br>
<label for="">Tanggal Invoice</label>
<input type="date" name="tanggal_invoice">
<br>
<label for="">Project ID</label>
<select name="projects_id">
  @foreach ($projects as $project)
      <option value="{{ $project->id }}">{{ $project->project_code }}</option>
  @endforeach
</select>
<br>
<label for="">Nominal</label>
<input type="numeric" name="nominal">
<br>
<button type="submit">Save</button>
</form>