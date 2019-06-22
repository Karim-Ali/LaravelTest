@extends('layout')

@section('title')
<title>Admin</title>
@endsection

@section('content')
    <form action="{{ URL::asset('user/store') }}" name ="form" method="post">
        @csrf
        @method('PUT')
        <div class="container">
            <input type="text" name="question" placeholder="question" required><br>
            <input type="text" name="ans1" placeholder="ans1" required><br>
            <input type="text" name="ans2" placeholder="ans2" required><br>
            <input type="text" name="ans3" placeholder="ans3" required><br>
            <input type="text" name="ans4" placeholder="ans4" required><br>
            <label>Correct answer : </label><select name="answer" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br><br>
            <input type="text" name="sec" placeholder="seconds" required><br>
            <input type="submit" value="Add" class="btn">
        </div>
    </form>
@endsection