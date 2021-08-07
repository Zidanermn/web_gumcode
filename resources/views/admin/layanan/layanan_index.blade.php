@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
				<table class="table table-stripped">
					<thead>
						<tr>
							<th>#</th>
							<th>Happy Clients</th>
							<th>Project</th>
							<th>Hours Of Support</th>
							<th>Hard Workers</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($layanan as $index=>$ly)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $ly->client }}</td>
							<td>{{ $ly->project }}</td>
							<td>{{ $ly->support }}</td>
							<td>{{ $ly->worker }}</td>
							<td><a href="{{ url('admin/layanan/'.$ly->layanan_id) }}" class="btn btn-primary">Edit</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Jenis Layanan</h4>
      </div>
      <div class="modal-body">
        

      	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tulis Jenis Layanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/layanan') }}" method="POST">
            	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Happy Clients</label>
                  <input type="text" name="client" class="form-control" id="exampleInputEmail1" placeholder="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Project</label>
					<input type="text" name="project" class="form-control" id="exampleInputEmail1" placeholder="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Hours Of Support</label>
					<input type="text" name="support" class="form-control" id="exampleInputEmail1" placeholder="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Hard Workers</label>
					<input type="text" name="worker" class="form-control" id="exampleInputEmail1" placeholder="">
				</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
         </div>


      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Layanan</h4>
      </div>
      <div class="modal-body">
        

      	<p><b><i>yakin ingin menghapus layanan ini?</i></b></p>


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

		$('.btn-tambah').click(function(e){
			e.preventDefault();
			$('#modal-tambah').modal();
		})

		$('body').on('click','.btn-hapus',function(e){
			e.preventDefault();
			var url = $(this).attr('href');

			$('.btn-submit-hapus').attr('href',url);

			$('#modal-hapus').modal();
		})
	})
</script>

@endsection