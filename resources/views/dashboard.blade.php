@extends('layouts.master')
@section('content')
    <section class="row" style="margin-top:20px;">
            <div class="col-md-6 col-md-offset-3">
                <header>
                    <h3>What do you have to say?</h3>
                    <form class="form-group" action="{{ route('post.create') }}" method="post">
                        <textarea name="body" class="form-control" id="new-post" rows="5" placeholder="Your post"></textarea>
                            <button type="submit" class="btn btn-primary" style="margin-top:10px;">Create Post</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>
                </header>
            </div>

    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What other people say...</h3>
            </header>
            @foreach ($posts as $post)
                <article class="post" data-postid = "{{ $post->id }}">
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Post by {{$post->user->first_name}} on {{$post->created_at->diffForHumans()}}
                    </div>
                    <div class="interaction">
                        <a href="#">Like </a>|
                        <a href="#"> Dislike </a>
                        @if (Auth::user() == $post->user)
                             |<a href="#" class="edit"> Edit </a> |
                            <a href="{{ route('post.delete',['post_id' => $post->id]) }}"> Delete</a>
                        @endif

                    </div>
                </article>
            @endforeach


        </div>
    </section>
    <div class="modal fade" id="edit-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Post Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
              <label for="post-body">Edit the Post</label>
              <textarea class="form-control" name="post-body" rows="5" id="post-body"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal-save">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="" style="background:green;width:100px;height:150px;color:yellow;">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
</div>


<script type="text/javascript">
  var token = '{{ Session::token() }}';
  var url = '{{ route('edit')}}';
</script>
@endsection
