<form action="{{ url('/addocs') }}" method="POST">
  @csrf
  <label for="">Nomor Document</label>
<input type="text" name="nomor_document">
<br>
<label for="">Tanggal Document</label>
<input type="date" name="tanggal_document">
<br>
<label for="">Nomor Document</label>
<select name="invoices_id">
  @foreach ($invoices as $invoice)
      <option value="{{ $invoice->id }}">{{ $invoice->nomor_invoice }}</option>
  @endforeach
</select>
<br>
<button type="submit">Save</button>
</form>
