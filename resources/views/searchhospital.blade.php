@extends('layouts.dashboardlayout')

@section ('title')
Search Hospital
@endsection


@section ('body')

@if (session()->has('message'))
 <div class="alert alert-success">
   {{ session()->get('message')}}
 </div>
@endif
<!-- Main content -->
<section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">

          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Search Patient Details</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>GI/BHT</th>
                          <th>Proceedure</th>
                          <th>Indication</th>
                          <th>Operator</th>
                          <th>Findings/Intervention</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($flights as $row)
                            <tr>
                              <td>{{$row['id']}}</td>
                              <td>{{$row['patientname']}}</td>
                              <td>{{$row['patientsex']}}</td>
                              <td>{{$row['patientage']}}</td>
                              <td>{{$row['patient_gi_bht']}}</td>
                              <td>{{$row['patientproceedure']}}</td>
                              <td>{{$row['patientindication']}}</td>
                              <td>{{$row['patientoperator']}}</td>
                              <td>{{$row['patientfinding_intervention']}}</td>
                            </tr>
                            @endforeach    
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>HomeTown</th>
                        </tr>
                        </tfoot>
                      </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->


        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
<!-- /.content -->



  

@endsection
