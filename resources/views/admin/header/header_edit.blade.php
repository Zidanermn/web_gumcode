@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<form role="form" method="POST" action="{{ url('admin/header/'.$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    
					<div class="form-group">
                        <label for="exampleFormControlFile1">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $data->keterangan }}">
                        @error('keterangan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                        <img src="{{ URL::to('/') }}/foto/{{ $data->gambar  }}" class="img-thumbnail" width="200px"/>
                        <input type="hidden" class="form-control-file" id="hidden_image" name="hidden_image" value="{{ $data->gambar }}">
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Update</button>
                    
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