@extends('layouts.app')

@section('content')
<div class="container">
    <form action='/books' method='post'>
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 border bg-info text-center">
                        タイトル
                    </div>
                    <div class="col-md-8 border">
                        <input type='text' name='book[title]' class="form-control" max='20' required='true'>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 border bg-info text-center">
                        著者
                    </div>
                    <div class="col-md-8 border">
                        <textarea name='book[author]' class="form-control" max='200'></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 border bg-info text-center">
                        発行日
                    </div>
                    <div class="col-md-8 border">
                        <input type='date' name='book[issue_date]' class="form-control"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 border bg-info text-center">
                        あらすじ
                    </div>
                    <div class="col-md-8 border">
                        <textarea name='book[synopsis]' class="form-control" max='200'></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 border bg-info text-center">
                        出版社
                    </div>
                    <div class="col-md-8 border">
                        <select name="book[publisher]" class="form-control" required='true'>
                            
                                <option value="1">集英社</option>
                                <option value="2">懇談社</option> 
                                <option value="3">角川</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-2">
            <div class="me-2">
                <a href="/books">
                    <button type='button' class='btn btn-info'>一覧に戻る</button>
                </a>
            </div>
            <div>
                <button type='submit' class='btn btn-success'>保存する</button>
            </div>
         </div>   
    </form>    
</div>
@endsection