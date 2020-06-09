@extends('layouts.app')
@include('header2')

<div style="background-color: #ffffff; padding: 20px;">
            <div style="text-align: center;">
                <h4 style="color: #A0BAA2">EVENT</h4>
            </div>
        </div>

        @foreach($all_event as $subject)
<div style="margin-top:50px;">
        <div class="media position-relative">
            <img style="margin-center: 50px" src="{{$subject['urlevent']}}" width="250px" height="225px" class="mr-3" alt="...">
            <div class="media-body">
              <h4 class="mt-0" style="font-weight : semibold">{{$subject['namaEvent']}}</h4>
              <img style="width : 15px ; height:15px ; margin-right: 10px" src="{{ ('ikon/calendar.png') }}">{{$subject['waktuEvent']}}
              <p><img style="width : 20px ; height:20px ; margin-right: 10px" src="{{ ('ikon/rumah.png') }}">{{$subject['tempatEvent']}}</p>
              <p><img style="width : 20px ; height:20px ; margin-right: 10px" src="{{ ('ikon/clock.png') }}">13:00 - 17:00</p>
              <p>{{$subject['descEvent']}}</p>
              <button type="submit" class="btn btn-success float-right" >OK</button>   
            </div>
          </div>
</div>
@endforeach

@include('footer')
