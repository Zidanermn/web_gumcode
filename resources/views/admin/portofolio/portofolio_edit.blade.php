@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<form role="form" method="POST" action="{{ url('admin/portofolio/'.$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    
					<div class="form-group">
                        <label for="exampleFormControlFile1">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
					<div class="form-group">
                        <label for="exampleFormControlFile1">Jenis</label>
                        <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ $data->jenis }}">
                        @error('jenis')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                        <img src="{{ URL::to('/') }}/foto/{{ $data->foto  }}" class="img-thumbnail" width="200px"/>
                        <input type="hidden" class="form-control-file" id="hidden_image" name="hidden_image" value="{{ $data->foto }}">
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