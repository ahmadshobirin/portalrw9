
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <b><h4 class="modal-title" style="text-align: center;">Selamat Ulang Tahun!</h4></b>
    </div>
    <div class="modal-body">
        <table class="table" style="border:none">
            <thead>
            <tr>
                <th> No. </th>
                <th> Nama </th> 
            </tr>               
            </thead>

            <tbody>
            <tr>
                <td> 1. </td>
                <td> Wehee </td>

            </tr>                
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  
</div>
</div>

<ul class="nav flex-column col-md-offset-1 col-md-3 rightSide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- Search Option --}}
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search</button>
                        </span>
                    </div>
                    <br>
                        <div class="card ">
                            <div class="header">
                                <center>
                                    <h4 class="title">Ulang Tahun Warga</h4>
                                </center>
                            </div>
                            <div class="content">
                                <div class="table-full-width" >
                                    <table class="table" style="border:none">
                                        <tbody>
                                            <tr>
                                                <th class="col-sm-6">
                                                    <center>Hari ini</center>
                                                </th>
                                                <th class="col-sm-6">
                                                    <center>Besok</center>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>                               
                                                      <!-- Trigger the modal with a button -->
                                                      <center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="fa fa-birthday-cake fa-2x"></span></button></center>
                                                </td>
                                                <td>                               
                                                      <!-- Trigger the modal with a button -->
                                                      <center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="fa fa-birthday-cake fa-2x"></span></button></center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:9px">
                                                    <center>11 orang</center>
                                                </td>
                                                <td>
                                                    <center>-</center>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>   
    </div>   
</ul>