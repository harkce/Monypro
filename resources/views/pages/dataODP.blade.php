@extends('layouts.master')

@section('pageTitle', 'Data ODP')

@section('content')

   @include('includes.header')
   @include('includes.sidebar')

	<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Input Data ODP</h3>
						</div>
						<div class="panel-body">
                     <form method="get" class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-2 control-label">Pilih Kendatel</label>
									<div class="col-sm-10">
										<select class="selectpicker" multiple data-selected-text-format="count">
											<option>Semarang</option>
											<option>Kendal</option>
											<option>Ungaran</option>
										</select>
									</div>
								</div>

                        <div class="form-group">
                           <label class="col-sm-2 control-label">Pilih STO</label>
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
									<label class="col-sm-2 control-label">Masukkan Nama ODP</label>
									<div class="col-sm-10">
                                 <input type="text" placeholder="Masukkan Nama ODP" class="form-control mb">
									</div>
								</div>


                        <div class="form-group">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn btn-danger" type="submit">Simpan Data</button>
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
