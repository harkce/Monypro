@extends('layouts.master')

@section('pageTitle', 'Monitor Aktifitas Agency')

@section('content')

   @include('includes.header')
   @include('includes.sidebar')

	<div class="content-wrapper">
		<div class="container-fluid">

         <div class="row">
            <div class="col-md-12">

               <div class="panel panel-danger">
                  <div class="panel-heading">
                     <h3 class="panel-title">Monitor Agency</h3>
                  </div>
                  <div class="panel-body">
                     <form method="get" class="form-horizontal">

                        <div class="form-group">
                           <div class="col-sm-4">
                              <label class="control-label">Agency : </label>
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <label class="control-label">pilih</label>
                                 <option value="Agency1">Agency 1</option>
                                 <option value="Agency2">Agency 2</option>
                                 <option value="Agency3">Agency 3</option>
                                 <option value="Agency4">Agency 4</option>
                              </select>
                           </div>

                           <div class="col-sm-4">
                              <label class="control-label">Bulan : </label>
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option value="1">Januari</option>
                                 <option value="2">Februari</option>
                                 <option value="3">Maret</option>
                                 <option value="4">April</option>
                                 <option value="5">Mei</option>
                                 <option value="6">Juni</option>
                                 <option value="7">Juli</option>
                                 <option value="8">Agustus</option>
                                 <option value="9">September</option>
                                 <option value="10">Oktober</option>
                                 <option value="11">November</option>
                                 <option value="12">Desember</option>
                              </select>
                           </div>

                           <div class="col-sm-4">
                              <label class="control-label">Tahun : </label>
                              <select class="selectpicker" multiple data-selected-text-format="count">
                                 <option value="2013">2013</option>
                                 <option value="2014">2014</option>
                                 <option value="2015">2015</option>
                                 <option value="2016">2016</option>
                                 <option value="2017">2017</option>
                              </select>
                           </div>
                           <!-- </div> -->
                        </div>

                        <div class="form-group">
                           <div class="col-sm-12">

                           <!-- TABLE DATA -->
                           <table id="zctb" class="display table table-stripeded table-bordered table-hover" cellspacing="0" width="100%">

                              <thead>
                                 <tr>
                                    <th>Avenger</th>
                                    <th>Supervisor</th>
                                    <th>Agency</th>
                                    <th>Total</th>
                                    <th style="text-align:center">Detail</th>
                                 </tr>
                              </thead>
                              <tfoot>
                                 <tr>
                                    <th>Avenger</th>
                                    <th>Supervisor</th>
                                    <th>Agency</th>
                                    <th>Total</th>
                                    <th style="text-align:center">Detail</th>
                                 </tr>
                              </tfoot>
                              <tbody>
                                 <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td style="text-align:center">
                                       <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Lihat</button>
                                    </td>


                                 </tr>
                                 <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 </tr>
                                 <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 </tr>
                                 <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 </tr>
                                 <tr>
                                    <td>Prescott Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 </tr>
                                 <tr>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 </tr>
                                 <tr>
                                    <td>Martena Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>Edinburgh</td>
                                    <td>46</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 </tr>
                                 <tr>
                                    <td>Unity Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 <tr>
                                 </tr>
                                    <td>Howard Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>San Francisco</td>
                                    <td>51</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
                                 </tr>
                                 <tr>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td style="text-align:center"><button type="button" class="btn btn-danger btn-xs">Lihat</button></td>
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
                     <h4 class="modal-title">Data Berdasarkan Tanggal</h4>
                     <!-- <h4 class="modal-title">Modal title</h4> -->
                  </div>
                  <div class="modal-body">

                     <table class="table table-bordered table-striped data-table" style="text-align:center">
                        <thead>
                           <tr>
                              <th>1</th>
                              <th>2</th>
                              <th>3</th>
                              <th>4</th>
                              <th>5</th>
                              <th>6</th>
                              <th>7</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-bordered table-striped data-table" style="text-align:center">
                        <thead>
                           <tr>
                              <th>8</th>
                              <th>9</th>
                              <th>10</th>
                              <th>11</th>
                              <th>12</th>
                              <th>13</th>
                              <th>14</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-bordered table-striped data-table" style="text-align:center">
                        <thead>
                           <tr>
                              <th>15</th>
                              <th>16</th>
                              <th>17</th>
                              <th>18</th>
                              <th>19</th>
                              <th>20</th>
                              <th>21</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-bordered table-striped data-table" style="text-align:center">
                        <thead>
                           <tr>
                              <th>22</th>
                              <th>23</th>
                              <th>24</th>
                              <th>25</th>
                              <th>26</th>
                              <th>27</th>
                              <th>28</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-bordered table-striped data-table" style="text-align:center">
                        <thead>
                           <tr>
                              <th>29</th>
                              <th>30</th>
                              <th>31</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>kosong</td>
                              <td>kosong</td>
                              <td>kosong</td>
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
