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
							<th>Keterangan</th>
							<th>Instagram</th>
							<th>Whatsapp</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sosmed as $index=>$sd)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $sd->keterangan }}</td>
							<td>{{ $sd->instagram }}</td>
							<td>{{ $sd->wa }}</td>
							<td><a href="{{ url('admin/sosmed/'.$sd->sosmed_id) }}" class="btn btn-primary">Edit</a></td>
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
              <h3 class="box-title">Tulis Sosmed</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/sosmed') }}" method="POST">
            	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Instagram</label>
					<input type="text" name="instagram" class="form-control" id="exampleInputEmail1" placeholder="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Whatsapp</label>
					<input type="text" name="wa" class="form-control" id="exampleInputEmail1" placeholder="">
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