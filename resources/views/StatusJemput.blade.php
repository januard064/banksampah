@extends('layouts.app')
@include('header2')



<h3 style="margin-bottom:40px;color:#268986 ;font-weight:bold; margin-left: 46%;">JEMPUT</h3>

<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width:100%;" >
    <label class="btn " style="width:50%; border-radius:0; color:black;" >
      <input  type="radio" name="options" id="option1" autocomplete="off" > <a style="color:black;" href="jemput"> Isi Form</a>
    </label>
    <label class="btn "style="width:50%; border-radius:0;  ">
      <input  type="radio" name="options" id="option2" autocomplete="off" checked> <a style="color:black;" href="#"> Status</a>
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
                      <td>{{$subject['Tanggal']}}</td>
                      <td>{{$subject['JenisSampah']}}</td>
                      <td>{{$subject['Berat']}}</td>
                      <td>{{$subject['Satuan']}}</td>
                      <td>{{$subject['Poin']}}</td>
                      <td>{{$subject['Status']}}</td>
                      
                    
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
