@extends('layouts.master')

@section('pageTitle', 'Table Data ODP')

@section('content')

   @include('includes.header')
   @include('includes.sidebar')

	<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Table Data ODP</h3>
						</div>
						<div class="panel-body">
                     <form method="get" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
                              <!-- TABLE DATA -->
                              <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      									<thead>
      										<tr>
                                       <th width="15px">NO</th>
      											<th>Kandatel </th>
      											<th>STO</th>
                                       <th>Nama ODP</th>
      										</tr>
      									</thead>
      									<tfoot>
      										<tr>
                                       <th>NO</th>
                                       <th>Kandatel </th>
      											<th>STO</th>
                                       <th>Nama ODP</th>
      										</tr>
      									</tfoot>
      									<tbody>
      										<tr>
                                       <td>1</td>
      											<td>Tiger Nixon</td>
      											<td>System Architect</td>
      											<td>$320,800</td>
      										</tr>
      										<tr>
                                       <td>2</td>
      											<td>Garrett Winters</td>
      											<td>Accountant</td>
      											<td>$170,750</td>
      										</tr>
      										<tr>
                                       <td>3</td>
      											<td>Ashton Cox</td>
      											<td>Junior Technical Author</td>
      											<td>$86,000</td>
      										</tr>
                                    <tr>
                                       <td>4</td>
      											<td>Ashton Cox</td>
      											<td>Junior Technical Author</td>
      											<td>$86,000</td>
      										</tr>
                                    <tr>
                                       <td>5</td>
      											<td>Ashton Cox</td>
      											<td>Junior Technical Author</td>
      											<td>$86,000</td>
      										</tr>
                                    <tr>
                                       <td>6</td>
      											<td>Ashton Cox</td>
      											<td>Junior Technical Author</td>
      											<td>$86,000</td>
      										</tr>
                                 </tbody>
                              </table>

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
