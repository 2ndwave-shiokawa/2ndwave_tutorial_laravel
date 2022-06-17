@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>ブログ一覧</h1>
            <a href="/books/create" class="float-end">
                <button class="btn btn-info">新規登録</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="w-15">タイトル</th>
                        <th scope="col" class="w-auto">著書</th>
                        <th scope="col" class="w-10">発行日</th>
                        <th scope="col" class="w-15">あらすじ</th>
                        <th scope="col" class="w-15">出版社</th>
                        <th scope="col" class="w-10">作成日</th>
                        <th scope="col" class="w-10">更新日</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->issue_date }}</td>
                            <td>{{ $book->synopsis }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->timestamps }}</td>
                            <td>{{ $book->softDeletes }}</td>
                            <td>
                                <a href="/books/{{$book->id}}" class="btn btn-primary">
                                    詳細
                                </a>
                                <a href="/books/{{$book->id}}" class="btn btn-warning">
                                    編集
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {{ $books->appends(Request::all()) }}
        </div>
    </div>
</div>
@endsection