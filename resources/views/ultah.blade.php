@extends('frontend.main')

@section('body')
      <div id="getStart">
         <div class="jumbotron">
            <h1>Selamat, User ...!</h1>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
         </div>
      </div>
      <h2>Ulang Tahun Hari Ini!</h2>
      <table class="table table-striped table-hover ">
         <thead>
            <tr>
               <th>Nama</th>
               <th>Tanggal Lahir</th>
               <th>Umur</th>
               <th>Alamat</th>
            </tr>
         </thead>
         <?php $x = 0; ?>
         @foreach($birthday as $list)
               @if( $list->tanggal_lahir->month == \Carbon\Carbon::now()->month && $list->tanggal_lahir->day == \Carbon\Carbon::now()->day)
                  <tbody>
                     <tr>
                        <td>{{$list->nama}}</td>
                        <td>{{$list->tanggal_lahir->toDateString() }}</td>
                        <td>{{ $list->tanggal_lahir->diffInYears(\Carbon\Carbon::now())}}</td>
                        <td>{{$list->tempat_lahir}}</td>
                     </tr>
                  </tbody>
               <?php $x += 1; ?>
               @endif
         @endforeach
         @if($x == 0)
            <tr>
                  <td colspan="4"><center>Data Kosong</center></td>
            </tr>
         @endif
      </table>
      <h2 style="padding-top: 40px;">Ulang Tahun Besok!</h2>
      <table class="table table-striped table-hover ">
         <thead>
            <tr>
               <th>Nama</th>
               <th>Tanggal Lahir</th>
               <th>Umur</th>
               <th>Alamat</th>
            </tr>
         </thead>
            <?php $i = 0; ?>
            @foreach($birthday as $list)
                   @if( $list->tanggal_lahir->day ==  \Carbon\Carbon::now()->addDays(1)->day && $list->tanggal_lahir->month ==  \Carbon\Carbon::now()->addDays(1)->month)
                     <tbody>
                        <tr>
                           <td>{{$list->nama}}</td>
                           <td>{{$list->tanggal_lahir->toDateString()}}</td>
                           <td>{{ $list->tanggal_lahir->diffInYears(\Carbon\Carbon::now()->addDays(1))  }}</td></td>
                           <td>{{$list->tempat_lahir}}</td>
                        </tr>
                     </tbody>
                     <?php $i += 1; ?>
                  @endif
            @endforeach
            @if($i == 0)
               <tbody>
                  <tr>
                     <td colspan="4"><center>Data Kosong</center></td>
                  </tr>
               </tbody>
            @endif
      </table>
@endsection