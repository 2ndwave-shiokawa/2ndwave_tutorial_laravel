
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>ブログ一覧</h1>
            <a href="/blogs/create" class="float-end">
                <button class="btn btn-info">新規登録</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="w-15">タイトル</th>
                        <th scope="col" class="w-auto">内容</th>
                        <th scope="col" class="w-10">作成者</th>
                        <th scope="col" class="w-15">作成日</th>
                        <th scope="col" class="w-15">更新日</th>
                        <th scope="col" class="w-10">ボタン</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <th scope="row">{{ $blog->id }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->content }}</td>
                            <td>{{ $blog->user ? $blog->user->name : '' }}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td>{{ $blog->updated_at }}</td>
                            <td>
                                <a href="/blogs/{{$blog->id}}" class="btn btn-primary">
                                    詳細
                                </a>
                                <a href="/blogs/{{$blog->id}}" class="btn btn-warning">
                                    編集
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {{ $blogs->appends(Request::all()) }}
        </div>
    </div>
</div>
@endsection