@extends('layouts.master')

@section('pageTitle', 'Data Pelanggan')

@section('content')

   @include('includes.header')
   @include('includes.sidebar')

	<div class="content-wrapper">
		<div class="container-fluid">

         <div class="row">
            <div class="col-md-12">

               <div class="panel panel-danger">
                  <div class="panel-heading">
                     <h3 class="panel-title">Data Pelanggan</h3>
                  </div>
                  <div class="panel-body">
                     <form method="get" class="form-horizontal">

                        <div class="form-group">
                           <div class="col-sm-3">
                              <label class="control-label">ODP  : </label>
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option value="ODP1">ODP 1</option>
                                 <option value="ODP2">ODP 2</option>
                                 <option value="ODP3">ODP 3</option>
                                 <option value="ODP4">ODP 4</option>
                              </select>
                           </div>
                           <div class="col-sm-3">
                              <label class="control-label">Agency  : </label>
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option value="Agency1">Agency 1</option>
                                 <option value="Agency2">Agency 2</option>
                                 <option value="Agency3">Agency 3</option>
                                 <option value="Agency4">Agency 4</option>
                              </select>
                           </div>
                           <div class="col-sm-3">
                              <label class="control-label">Supervisor  : </label>
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option value="Supervisor1">Supervisor 1</option>
                                 <option value="Supervisor2">Supervisor 2</option>
                                 <option value="Supervisor3">Supervisor 3</option>
                                 <option value="Supervisor4">Supervisor 4</option>
                              </select>
                           </div>
                           <div class="col-sm-3">
                              <label class="control-label">Avenger  : </label>
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option value="Farah">Farah</option>
                                 <option value="Mini">Mini</option>
                                 <option value="Dwi">Dwi</option>
                                 <option value="Tias">Tias</option>
                              </select>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="col-sm-12">

                           <!-- TABLE DATA -->
                           <table id="zctb" class="display table table-stripeded table-bordered table-hover" cellspacing="0" width="100%">

                              <thead>
                                 <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nomor HP</th>
                                    <th style="text-align:center"></th>
                                 </tr>
                              </thead>
                              <tfoot>
                                 <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nomor HP</th>
                                    <th style="text-align:center"></th>
                                 </tr>
                              </tfoot>
                              <tbody>
                                 <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>54684316854</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Lihat</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>


                                 </tr>
                                 <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>4756725727</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>275272727527</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>78579898758</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Prescott Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>752787205</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>7278675827</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Martena Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>7278672584</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Unity Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>778978527</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 <tr>
                                 </tr>
                                    <td>Howard Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>727867857</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>78545646</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs">Ubah</button>
                                       <button type="button" class="btn btn-default btn-xs">Hapus</button>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <!-- TABLE DATA -->

                           </div>
                        </div>
                     </form>
                  </div>
               </div>

            </div>
         </div>

         <!-- MODAL DATA (DATE) -->
         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title">Data M Fadlhan Putranto</h4>
                     <!-- <h4 class="modal-title">Modal title</h4> -->
                  </div>
                  <div class="modal-body">

                     <table class="table table-striped table-pelanggan" style="text-align:center">

                        <tbody>
                           <tr>
                              <td><b>Nama Pelanggan</b></td>
                              <td> : </td>
                              <td style="text-align:left">M Fadhlan Putranto</td>
                           </tr>
                           <tr>
                              <td><b>Alamat Pelanggan</b></td>
                              <td> : </td>
                              <td style="text-align:left">Sukabirus</td>
                           </tr>
                           <tr>
                              <td><b>Nomor HP</b></td>
                              <td> : </td>
                              <td style="text-align:left">654654684</td>
                           </tr>
                           <tr>
                              <td><b>Tipe Rumah</b></td>
                              <td> : </td>
                              <td style="text-align:left">Kost Pintar</td>
                           </tr>
                           <tr>
                              <td><b>Kendaraan</b></td>
                              <td> : </td>
                              <td style="text-align:left">Sepeda Motor</td>
                           </tr>
                           <tr>
                              <td><b>UIE</b></td>
                              <td> : </td>
                              <td style="text-align:left">Sesuatu</td>
                           </tr>
                           <tr>
                              <td><b>Pengeluaran Internet</b></td>
                              <td> : </td>
                              <td style="text-align:left">Sekian </td>
                           </tr>
                           <tr>
                              <td><b>Jarak ODP</b></td>
                              <td> : </td>
                              <td style="text-align:left">100 Meter</td>
                           </tr>
                           <tr>
                              <td><b>Tipe User TV</b></td>
                              <td> : </td>
                              <td style="text-align:left">Usee TV</td>
                           </tr>
                           <tr>
                              <td><b>Hasil Kunjungan</b></td>
                              <td> : </td>
                              <td style="text-align:left">Bagus</td>
                           </tr>
                           <tr>
                              <td><b>Permintaan Pelanggan</b></td>
                              <td> : </td>
                              <td style="text-align:left">Tambah Bang</td>
                           </tr>
                           <tr>
                              <td><b>Jumlah User Internet</b></td>
                              <td> : </td>
                              <td style="text-align:left">3</td>
                           </tr>
                        </tbody>
                     </table>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Jendela</button>
                     <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                </div>
              </div>
         </div>
         <!-- MODAL DATA (DATE) -->

         @include('includes.footer')

		</div>
	</div>

   @include('includes.scripts')

@endsection
