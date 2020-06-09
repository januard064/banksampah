@extends('layouts.app')
@include('header2')







<h3 style="margin-bottom:40px;color:#268986 ;font-weight:bold; margin-left: 46%;">ANTAR</h3>

<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width:100%;" >
    <label class="btn " style="width:50%; border-radius:0; color:black;" >
      <input  type="radio" name="options" id="option1" autocomplete="off" > <a style="color:black;" href="antar"> Isi Form</a>
    </label>
    <label class="btn "style="width:50%; border-radius:0;  ">
      <input  type="radio" name="options" id="option2" autocomplete="off" checked> Status
    </label> 
  </div>

<div  style="margin-left: 30px;margin-right:30px; margin-top:40px;">
<div >    

                <div class="card-body">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>JenisSampah</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Poin</th>
                    <th>Status</th>
                    </tr>

                  </thead>

                    
                    <tbody>
                    <?php
                        $no = 1;
                    ?>
                    @foreach($all_subject as $subject)
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$subject['tanggal']}}</td>
                      <td>{{$subject['jenisSampah']}}</td>
                      <td>{{$subject['berat']}}</td>
                      <td>{{$subject['satuan']}}</td>
                      <td>{{$subject['poin']}}</td>
                      <td>{{$subject['status']}}</td>
                      
                    
                    </tr>
                    <?php
                        $no++;
                    ?>
                    @endforeach
                    </tbody>
                               
                   
                  
                    </table>
                </div>
            </div>
</div>




@include('footer')
