@extends('layouts.master')

@section('pageTitle', 'Input Data Avenger')

@section('content')

   @include('includes.header')
   @include('includes.sidebar')

	<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Input Data Avenger</h3>
						</div>
						<div class="panel-body">
                     <form method="get" class="form-horizontal">

                        <div class="form-group">
                           <label class="col-sm-2 control-label">Nama Avenger</label>
                           <div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Nama ODP" class="form-control mb">
                           </div>
                        </div>

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
                           <label class="col-sm-2 control-label">Pilih Supervisor</label>
                           <div class="col-sm-10">
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option>Mawar</option>
                                 <option>Wulan</option>
                                 <option>Dian</option>
                                 <option>David</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
									<label class="col-sm-2 control-label">Kontak</label>
									<div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Kontak Avenger" class="form-control mb">
									</div>

									<label class="col-sm-2 control-label">Alamat Avenger</label>
									<div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Alamat Avenger" class="form-control mb">
									</div>

									<label class="col-sm-2 control-label">Nomor HP Avenger</label>
									<div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Nomor HP Avenger" class="form-control mb">
									</div>

									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn btn-danger" type="submit">Simpan Data Avenger</button>
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
