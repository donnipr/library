<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Enteidev|Laravel</title>
<link rel="stylesheet" type="text/css" href="{{asset('assets1/style.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets1/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets1/css/font-awesome.min.css')}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300,100' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>
<div class="header">
  <div class="bg-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="logo pull-left col-md-6 col-sm-6 col-xs-12">
            <h1><b>enteidev.id</b></h1>
          </div>
          <div class="social col-md-6 col-sm-6 col-xs-12">
            <ul class="pull-right">
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="main-title text-center">
          <h2>SISTEM INFPORMASI PERPUSTAKAAN</h2><br/><br/><br/>
            <p class="sub-title"><h1>We are Reaching For The Moon</h1></p>
            <div id="countdown" data-wow-delay=".3s" data-date="Dec 26, 2016 06:00:00"></div>
            <a href="#footer" class="subscribe-tag page-scroll">CARI BUKU</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-title text-center">
          <p>DAFTAR BUKU</p>
        <div class="about-content">
          <table class="table table-hover">
                        <thead>
                            <tr>
                                <td><strong>NO</strong></td>
                                <td><strong>ISBN</strong></td>
                                <td><strong>JUDUL</strong></td>
                                <td><strong>PENGARANG</strong></td>
                                <td><strong>PENERBIT</strong></td>
                                <td><strong>JUMLAH</strong></td>
                                <td><strong>LOKASI</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                            @foreach($bukus as $buku)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $buku->isbn }}</td>
                                <td>{{ $buku->judul }}</td>
                                <td>{{ $buku->pengarang->nama }} </td>
                                <td>{{ $buku->penerbit->nama }}</td>
                                <td>{{ $buku->jumlah }}</td>
                                <td>{{ $buku->rak->lokasi }}</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
        </div>
        {{ $bukus->links() }}
        </div>
        
        <div class="social text-center">
          <ul>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-12 text-center footer-line">
        <p>2016 &copy; enteidev.id | Developer by donniprasetyo</p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('assets1/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets1/js/jquery.countdown.min.js')}}"></script> 
<script type="text/javascript">

</script>
</body>
</html>
