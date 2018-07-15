@extends('layouts.dashboardlayout')

@section ('title')
Patient Management
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
                          <th>Home Town</th>
                          <th>GI Unit</th>
                          <th>Diagnosis</th>
                          <th>Diagnosis Year</th>
                          <th>Occupation</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($flights as $row)
                            <tr>
                              <td>{{$row['id']}}</td>
                              <td>{{$row['patientname_clinic']}}</td>
                              <td>{{$row['patientgender_clinic']}}</td>
                              <td>{{$row['patientage_clinic']}}</td>
                              <td>{{$row['patienthometown_clinic']}}</td>
                              <td>{{$row['patientgi_clinic']}}</td>
                              <td>{{$row['patientdiagnosis_clinic']}}</td>
                              <td>{{$row['patientyearofdiagnosis_clinic']}}</td>
                              <td>{{$row['patientoccupation_clinic']}}</td>
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
