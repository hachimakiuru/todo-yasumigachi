@extends('layouts.app_original')
@section('content')  


<!-- edit.blade.php -->

<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">コメントを編集する</h5>
    </div>
    <div class="modal-body">
        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- 編集フォームの内容 -->
            <div class="mb-3">
                <label for="editedComment">コメント内容</label>
                <textarea class="form-control" id="editedComment" name="body" rows="3">{{ $comment->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">更新する</button>
        </form>
    </div>
</div>


@endsection