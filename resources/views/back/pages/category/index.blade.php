@extends('back.layouts.master')
@section('content')
<br><br>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Category</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
            <a class="btn btn-primary btn-add-items" href="{{ route('category.create') }}">Add New</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    
                    <th>Category Name</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        {{-- <td>
                            @if ($programming->programmingImages()->exists())
                            <img src="{{ asset('assets/uploads/programming/'.$programming->programmingImages[0]->image) }}" alt="" style=" width: 120px; height: 90px;
                            object-fit: contain;">
                            @else
                                --
                            @endif
                            </td> --}}
                        <td>{{ $category->name }}</td>

 
                       <td style="text-align: center">
                        <form action="{{route('category.destroy',$category->id)}}" method="post" >
                            @csrf
                            @method('delete')
                            <button  class="delete_ancor btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                            <a  href="{{route('category.edit',$category->id)}}" class="edit_ancor btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>

                       </td>

                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

@endsection
@push('custom-scripts')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true,
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
@endpush
