@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    タイトル
                </div>
                <div class="col-md-8 border">
                    {{ $book->title }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    著者
                </div>
                <div class="col-md-8 border">
                    {{ $book->author }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    発行日
                </div>
                <div class="col-md-8 border">
                    {{ $book->issue_date }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    あらすじ
                </div>
                <div class="col-md-8 border">
                    {{ $book->synopsis }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    出版社
                </div>
                <div class="col-md-8 border">
                    {{ $book->publisher }}
                </div>
            </div><div class="row">
                <div class="col-md-4 border bg-info text-center">
                    作成日
                </div>
                <div class="col-md-8 border">
                    {{ $book->timestamps }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border bg-info text-center">
                    更新日
                </div>
                <div class="col-md-8 border">
                    {{ $book->softDeletes }}
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2 d-flex">
        <a href="/books" class='btn btn-info me-2'>
            一覧に戻る
        </a>
        <a href="/books/{{$book->id}}/edit" class="btn btn-warning me-2">
            編集
        </a>
        <form action="/books/{{$book->id}}" method='post'>
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">削除</button>
        </form>
    </div>
</div>
@endsection