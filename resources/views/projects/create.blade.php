<form action="{{ url('/projects') }}" method="POST">
@csrf
<label for="">Project Code</label>
<input type="text" name="project_code">
<br>
<label for="">Project Name</label>
<input type="text" name="project_name">
<br>
<label for="">Bowheer</label>
<input type="text" name="project_bowheer">
<br>
<button type="submit">Save</button>
</form>