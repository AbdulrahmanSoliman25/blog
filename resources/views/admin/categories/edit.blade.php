
@extends('layouts.app')

@section('content')

      @include('admin.includes.errors')


 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Update category: {{ $category->name }}</div>

                <div class="card-body">
                   <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                        </div>
                      
                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Update category
                                    </button>
                              </div>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop