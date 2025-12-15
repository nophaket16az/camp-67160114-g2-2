@extends('template.default')
@section('title','My Controller')
@section('headerl1',"My View")

@section('content')
    <form action="#" method="POST">
        @csrf
        <label for="num"> ป้อนข้อมูลแม่สูตรคูณ</label>
        <input type="number" id="num" name="num">
        <button class ="btn"
        type="submit">ส่งข้อมูล</button>
    </form>
 @endsection

