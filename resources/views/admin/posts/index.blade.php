@extends('layouts.app')

@section('content')

      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Published posts</div>

                <div class="card-body">
                  <table class="table table-hover">
                        <thead>
                              <th>
                                    Image
                              </th>
                              <th>
                                    Title
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>  
                                    Trash
                              </th>
                        </thead>

                        <tbody>
                              @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                          <tr>
                                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                                                <td>{{ $post->title }}</td>
                                                <td>
                                                      <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                                </td>

                                                <td>
                                                      <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">Trash</a>
                                                </td>
                                          </tr>
                                    @endforeach
                              @else
                                    <tr>
                                          <th colspan="5" class="text-center">No published posts</th>
                                    </tr>
                              @endif
                        </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop