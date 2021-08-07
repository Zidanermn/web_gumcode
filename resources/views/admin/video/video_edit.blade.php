@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<form role="form" method="POST" action="{{ url('admin/video/'.$vd->video_id) }}">
					{{ csrf_field() }}
					<label for="exampleInputEmail1">Keterangan</label>
					<div class="form-group">
						<input type="text" class="form-control" name="keterangan" value="{{ $vd->keterangan }}">
					</div>

					<label for="exampleInputEmail1">Link</label>
					<div class="form-group">
						<input type="text" class="form-control" name="link" value="{{ $vd->link }}">
					</div>

					<button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		var flash = "{{ Session::has('pesan') }}";
		if(flash){
			var pesan = "{{ Session::get('pesan') }}";
			alert(pesan);
		}
	})
</script>

@endsection

