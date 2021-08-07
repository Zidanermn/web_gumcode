@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3>{{ $title }}</h3>
			</div>
			<div class="box-body">
        <button type="button" class="btn btn-success btn-tambah">Tambah Portofolio +</button>
        <br>
				<table class="table table-bordered border-primary">
					<thead>
						<tr>
							<th>#</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Foto</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $item)
						<tr>
							<td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td><img src="{{ URL::to('/') }}/foto/{{ $item->foto }}" width="70px"></td>
                            
              <td>

                <a href="{{ url('admin/portofolio/'.$item->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ url('admin/portofolio/delete/'.$item->id) }}" class="btn btn-danger btn-hapus">Hapus</a>
              
              </td>
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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        

      	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('admin/portofolio') }}" method="POST" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis</label>
                  <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlFile1">Foto</label>
                  <input type="file" class="form-control-file" id="foto" name="foto">
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
        <h4 class="modal-title" id="myModalLabel">Alert !!</h4>
      </div>
      <div class="modal-body">
        

      	<p><b><i>yakin ingin menghapus portofolio ini?</i></b></p>


      </div>
      <div class="box-footer">
        <a href="" class="btn btn-primary btn-submit-hapus">Hapus</a>
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

