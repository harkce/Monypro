@extends('layouts.master')

@section('pageTitle', 'Input User')

@section('content')

   @include('includes.header')
   @include('includes.sidebar')

	<div class="content-wrapper">
		<div class="container-fluid">

         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-danger">
                  <div class="panel-heading">Input User</div>
                  <div class="panel-body">
                     <ul class="nav nav-tabs">
                        <li class="active"><a href="#agency" data-toggle="tab" aria-expanded="true">Input Agency</a></li>
                        <li class=""><a href="#supervisor" data-toggle="tab" aria-expanded="false">Input Supervisor</a></li>
                        <li class=""><a href="#avenger"  data-toggle="tab" aria-expanded="false">Input Avenger</a></li>
                     </ul>
                     <br>
                     <div id="myTabContent" class="tab-content">

                        <!-- INPUT AGENCY -->
                        <div class="tab-pane fade active in" id="agency">
                           <form method="get" class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Nama Agency</label>
                                 <div class="col-sm-10">
                                       <input type="text" placeholder="Masukkan Nama Agency" class="form-control mb">
                                 </div>

                                 <label class="col-sm-2 control-label">Alamat Agency</label>
                                 <div class="col-sm-10">
                                       <input type="text" placeholder="Masukkan Alamat Agency" class="form-control mb">
                                 </div>

                                 <label class="col-sm-2 control-label">Nomor HP Agency</label>
                                 <div class="col-sm-10">
                                       <input type="text" placeholder="Masukkan Nomor HP Agency" class="form-control mb">
                                 </div>

                                 <div class="col-sm-8 col-sm-offset-2">
                                    <button class="btn btn-danger" type="submit">Simpan Data Agency</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- INPUT AGENCY -->

                        <!-- INPUT SUPERVISOR -->
                        <div class="tab-pane fade" id="supervisor">
                           <form method="get" class="form-horizontal">

                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Pilih Agency</label>
                                 <div class="col-sm-10">
                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                       <option>Agency 1</option>
                                       <option>Agency 2</option>
                                       <option>Agency 3</option>
                                       <option>Agency 4</option>
                                    </select>
                                 </div>

                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Nama Supervisor</label>
                                 <div class="col-sm-10">
                                       <input type="text" placeholder="Masukkan Nama Supervisor" class="form-control mb">
                                 </div>

                                 <label class="col-sm-2 control-label">Alamat Supervisor</label>
                                 <div class="col-sm-10">
                                       <input type="text" placeholder="Masukkan Alamat Supervisor" class="form-control mb">
                                 </div>

                                 <label class="col-sm-2 control-label">Nomor HP Supervisor</label>
                                 <div class="col-sm-10">
                                       <input type="text" placeholder="Masukkan Nomor HP Supervisor" class="form-control mb">
                                 </div>

                                 <div class="col-sm-8 col-sm-offset-2">
                                    <button class="btn btn-danger" type="submit">Simpan Data Supervisor</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- INPUT SUPERVISOR -->

                        <!-- INPUT AVENGER -->
                        <div class="tab-pane fade" id="avenger">
                           <form method="get" class="form-horizontal">

                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Pilih Agency</label>
                                 <div class="col-sm-10">
                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                       <option>Agency 1</option>
                                       <option>Agency 2</option>
                                       <option>Agency 3</option>
                                       <option>Agency 4</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Pilih Supervisor</label>
                                 <div class="col-sm-10">
                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                       <option>Supervisor 1</option>
                                       <option>Supervisor 2</option>
                                       <option>Supervisor 3</option>
                                       <option>Supervisor 4</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Nama Avenger</label>
                                 <div class="col-sm-10">
                                       <input type="text" placeholder="Masukkan Nama Avenger" class="form-control mb">
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
                        <!-- INPUT AVENGER -->
                     </div>
                  </div>
               </div>
            </div>
         </div>

         @include('includes.footer')

		</div>
	</div>

   @include('includes.scripts')

@endsection
