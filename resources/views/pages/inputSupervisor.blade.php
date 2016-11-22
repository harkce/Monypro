@extends('layouts.master')

@section('pageTitle', 'Input Data Supervisor')

@section('content')

   @include('includes.header')
   @include('includes.sidebar')

	<div class="content-wrapper">
		<div class="container-fluid">


			<div class="row">
				<div class="col-md-12">

					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Input Data Supervisor</h3>
						</div>
						<div class="panel-body">
                     <form method="get" class="form-horizontal">

                        <div class="form-group">
                           <label class="col-sm-2 control-label">Pilih Agency</label>
                           <div class="col-sm-10">
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option>Telkom</option>
                                 <option>Bintang</option>
                                 <option>Citra</option>
                                 <option>Audi</option>
                              </select>
                           </div>
                        </div>

                        <div class="form-group">
									<label class="col-sm-2 control-label">Nama Supervisor</label>
									<div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Nama ODP" class="form-control mb">
									</div>

									<label class="col-sm-2 control-label">Alamat Supervisor</label>
									<div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Alamat ODP" class="form-control mb">
									</div>

									<label class="col-sm-2 control-label">Nomor HP Supervisor</label>
									<div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Nomor HP ODP" class="form-control mb">
									</div>

									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn btn-danger" type="submit">Simpan Data Supervisor</button>
									</div>
								</div>
                     </form>
						</div>
					</div>

				</div>
			</div>


         @include('includes.footer')

		</div>
	</div>

   @include('includes.scripts')

@endsection
