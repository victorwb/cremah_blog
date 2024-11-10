@extends('admin.layouts.main')

@section('content')

<div class="row">
            <div class="col-lg-6 ml-3">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Blog</h6>
                </div>
                <div class="card-body">
                  <form action="{{route('blog.update',[$blog->id])}}" method="POST">@csrf 
                    {{method_field('PUT')}}
                    
                    <div class="form-group">
                      <label for="Textarea1">Text Area</label>
                      <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                      <textarea class="form-control @error('title') is-invalid @enderror" id="Textarea1" name="title" rows="3" >{{$blog->title}} </textarea>
                      @error('title')
                          <span class="invalid-feedback"
                          role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                      <label for="type">Type</label>
                      <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value={{$blog->type}}>
                      @error('type')
                          <span class="invalid-feedback"
                          role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                      @enderror
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    
                  </form>
                </div>
              </div>

            </div>
          </div>
          <!--Row-->


@endsection