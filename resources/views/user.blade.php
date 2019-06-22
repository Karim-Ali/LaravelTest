@extends('layout')
@section('title')
<title>user</title>
@endsection

@foreach($questions as $question)
    @section('content')
        @if($questions->count() > 0)
            <fieldset>
                <div class="container">
                        <div id="countdown" class="countdown">{{$question->sec}}</div><br><br><hr>
                        <label><h2>{{$question->ques}}</h2></label><br><hr>
                        <input type="radio" name = "answer" value = "1"><label><h3>{{$question->ans1}}</h3></label><br>
                        <input type="radio" name = "answer" value = "2"><label><h3>{{$question->ans2}}</h3></label><br>
                        <input type="radio" name = "answer" value = "3"><label><h3>{{$question->ans3}}</h3></label><br>
                        <input type="radio" name = "answer" value = "4"><label><h3>{{$question->ans4}}</h3></label><br>
                        <input type="submit" value="Next" class="btn" onclick="calculateScore()">
                </div>
            </fieldset>
        @else
            <div class = "alert alert-info">
                <strong>Oops </strong>there is no questions.
            </div>
        @endif
    @endsection
    <script>
        var timeleft = {{$question->sec}};
        var downloadTimer = setInterval(function(){
          document.getElementById("countdown").innerHTML = timeleft;
          timeleft -= 1;
          if(timeleft < 0){
            clearInterval(downloadTimer);
            alert("Time out")
            var nextpage = "{{$questions->nextPageUrl()}}";
            if(nextpage == ''){
                window.location.replace('/test/public');
            }
            else
                window.location.replace(nextpage);
          }
        }, 1000);
        function calculateScore(){
            var val;
            var answer = {{$question->answer}}
            var radios = document.getElementsByName("answer");
            for (var i=0, len=radios.length; i<len; i++) {
                if ( radios[i].checked ) { // radio checked?
                    val = radios[i].value; // if so, hold its value in val
                    break; // and break out of for loop
                }
            }
            if(val == answer)
                alert('right answer');
            else
                alert('wrong answer');
            var nextpage = "{{$questions->nextPageUrl()}}";
            if(nextpage == ''){
                window.location.replace('/test/public');
            }
            else
                window.location.replace(nextpage);
        }
</script>
@endforeach