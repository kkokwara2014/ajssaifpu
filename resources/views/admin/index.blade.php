@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3">
          <!-- small box -->
          <div class="small-box bg-fuchsia">
            <div class="inner">
            <h3>{{$submittedPapers}}</h3>
              <p>Submitted Papers</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-paper"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3>{{$contacts}}</h3>

              <p>Contacts</p>
            </div>
            <div class="icon">
              <i class="ion ion-email"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3>{{$editors}}</h3>
              <p>Committee Members</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3>{{$admins}}</h3>
              <p>Admins</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <!-- ./col -->

      </div>
      <!-- /.row -->
      <!-- Main row -->

    </section>
    <!-- /.Left col -->

    <section class="col-lg-5 connectedSortable">

    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection