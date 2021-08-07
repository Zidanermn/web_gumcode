@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<form role="form" method="POST" action="{{ url('admin/layanan/'.$ly->layanan_id) }}">
					{{ csrf_field() }}
					<label for="exampleInputEmail1">Happy Clients</label>
					<div class="form-group">
						<input type="text" class="form-control" name="client" value="{{ $ly->client }}">
					</div>

					<label for="exampleInputEmail1">Project</label>
					<div class="form-group">
						<input type="text" class="form-control" name="project" value="{{ $ly->project }}">
					</div>

					<label for="exampleInputEmail1">Hours Of Support</label>
					<div class="form-group">
						<input type="text" class="form-control" name="support" value="{{ $ly->support }}">
					</div>

					<label for="exampleInputEmail1">Hard Workers</label>
					<div class="form-group">
						<input type="text" class="form-control" name="worker" value="{{ $ly->worker }}">
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

