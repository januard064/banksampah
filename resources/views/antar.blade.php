@extends('layouts.app')

@include('header2')



<h3 style="margin-bottom:40px;color:#268986 ;font-weight:bold; margin-left: 46%;">ANTAR</h3>

<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width:100%;" >
    <label class="btn " style="width:50%; border-radius:0; color:black;" >
      <input  type="radio" name="options" id="option1" autocomplete="off" checked> <a style="color:black;" href="#"> Isi Form</a>
    </label>
    <label class="btn "style="width:50%; border-radius:0;  ">
      <input  type="radio" name="options" id="option2" autocomplete="off"> <a style="color:black;" href="statusantar"> Status</a>
    </label> 
  </div>




<div  style="margin-left:30% ; margin-top:40px;" class="poin">


                    <form method="GET" action="/antar/addantar">
                        @csrf
                      

                        <div class="row">

                        <div class="form-group row" style="margin-left:0.5px;">
                            <label class=" col-form-label">Jenis Sampah</label>

                            <div style="margin-left:15px;">
                              
                              <select class="form-control" id="jenis" style="width:300px;" name="jenissampah" >
                              <option>Poin - Jenis Sampah</option>
                              @foreach($all_sampah as $subject)
                              <option>{{$subject['JenisSampah']}}</option>
                             @endforeach
                            </select>   
                            </div>
                        </div>

                        <div class="form-group row"class="col-sm-2" style="margin-left:4%;">
                            <label >Jumlah</label>

                            <div class="col-sm-2">
                                <input type="text"  class="form-control" name="berat" id="berat" style="width:50px;" required>
                            </div>
                        </div>

                        <div class="form-group row" class="col-sm-3" style="margin-left:5px;">
                            
                            <div class="col-sm-2" >
                            <div style="width:100px;">
                               
                                <select class="form-control" id="" name="satuan" >
                                  <option>Kg</option>
                                  <!-- <option>Pcs</option> -->
                                </select>
                            </div>
                        </div>
                        </div>
                        </div>
                   
                        <div class="form-group row">
                            <label >Poin</label>

                            <div class="col-sm-4" style="margin-left:60px;">
                                <input type="text"  class="form-control" name="poin" id="poin" style="width:300px;" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label >Tanggal</label>

                            <div class="col-sm-4"  style="margin-left:40px;">
                                <input class="date form-control" type="text" name="tanggal" style="width:300px;" required >
                                
                            </div>
                        </div>

  

                        <script type="text/javascript">

                            $('.date').datepicker({  

                              format: 'mm-dd-yyyy'

                            });  

                        </script> 

                    

                        <div style="float:right; margin-right:23%; margin-top:5%;">
                        <button type="button" class="btn btn-danger" style="margin-right:20px;   ">Batal</button>
                        <!-- <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">OK </button> -->
                        <button type="submit" class="btn btn-success" >OK </button>

                        </div> 




                    </form>

</div>


  <script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script> 

<!-- input form -->
<script>
$(document).ready(function(){
  $("buttont").click(function(){
    $("#div").fadeIn("slow");
  });
});
</script>

<!-- close form -->
<script>
$(document).ready(function(){
  $("buttonw").click(function(){
    $("#div").fadeOut("slow");
  });
});
</script>


<!-- Hitung Poin -->
<script type ="text/javascript">
		$(".poin").keyup(function(){
			var jenis = parseInt($("#jenis").val())
			var berat = parseInt($("#berat").val())
			
			var poin = jenis * berat;
			$("#poin").attr("value",poin)
			
			});
	</script>


</div>




<div style="margin-top:200px; margin-left:5%;">
<a href="">Daftar Lokasi Pengantaran Sampah</a>
</div>


@include('footer')
