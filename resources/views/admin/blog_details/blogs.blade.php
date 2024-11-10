@extends('admin.layouts.main')

@section('content')

<div class="row">
            <div class="col-lg-9 mb-4 ml-3">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Blog Details</h6>
                  <a href="{{ route('blog-details.create') }}" class="btn btn-sm btn-primary">Create</a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Blog ID</th>
                        <th>Text</th>
                        <th>Image</th>
                        <th>Status/Position</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(count($blogdetails)>0)
                    @foreach($blogdetails as $key=>$blog)
                      <tr>
                        <td><a href="#">{{$key+1}}</a></td>
                        <td>{{ Str::limit($blog->text, 10) }}</td>
                        <td><image src="{{Storage::url($blog->image)}}" width='20'/></td>
                        <td><span class="badge badge-success">{{$blog->position}}</span></td>
                        <td><a href="{{route('blog-details.edit',[$blog->id])}}" class="btn btn-sm btn-primary">Detail</a></td>
                        <td>
                        <form action="{{route('blog-details.destroy',[$blog->id])}}" method="POST">@csrf
                          {{method_field('DELETE')}}
                          
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                      </tr>
                      @endforeach  
                      @else
                      <td>No blogs yet</td>
                    @endif 
                                            
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

@endsection