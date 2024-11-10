@extends('admin.layouts.main')

@section('content')

<div class="row">
            <div class="col-lg-6 ml-3">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Blog Detail</h6>
                </div>
                <div class="card-body">
                  <form action="{{route('blog-details.store')}}" method="POST"
                  enctype="multipart/form-data" >@csrf 

                  <div class="dropdown mb-3">
                                        
                    <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
                    <select name="id" id="id">
                      @foreach($blogs as $blog)
                      
                      <option value="{{ $blog->id }}">
                      {{ $blog->title }}
                      </option>
                      @endforeach
                    </select>
                    <!-- </div> -->
                   
                  </div>
                  
                  <div class="form-group">
                      <label for="position">Position</label>
                      <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                      <input type="number" class="form-control"  name="position" >
                      @error('text')
                          <span class="invalid-feedback"
                          role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                      @enderror
                    </div>
                  
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Text Area</label>
                      <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                      <textarea class="form-control @error('text') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                      @error('text')
                          <span class="invalid-feedback"
                          role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="customFile">Choose image</label>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                  </form>
                </div>
              </div>

            </div>
          </div>
          <!--Row-->


@endsection