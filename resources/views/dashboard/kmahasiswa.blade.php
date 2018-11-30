<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.header')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @stack('scripts')
</head>
<body>
    @include('partial.nav')
    <div id="content">
    <div id="asu">
        <div class="container mt-4">
            <div class="row">
               
                <div class="col-md-12">
                    <div class="kiri3">
                    <h1>Dashboard / Mahasiswa</h1>
</div>
                    <div class="row">
                        <div class="col-md-5">
                            
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="flash-message">
                                @if(Session::has('add-revisi-sukses'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{Session::get('add-revisi-sukses')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                            <div class="table-responsive">
                                <table class="table table-inverse" id="tkMahasiswa">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>Nama Kegiatan</th>
                                            <th>Tema Acara</th>
                                            <th>Waktu Acara</th>
                                            <th>Tempat Acara</th>
                                            <th>Scan</th>
                                            <th width="15%;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                </table>
                            </div>

                                        

                            {{-- MODAL --}}
                            <div class="modal fade" id="modalDosenDecline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Catatan Komentar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="dashboard/inputcomment" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                        <div class="card-body">
                                            <h4 class="card-title" id="card-title-comment">Edit Acara</h4>
                                            <div class="form-group">
                                                <label for="judulRevisi">Judul revisi</label>
                                                <input type="hidden" name="idAcara" id="idAcara" value="">
                                                <input type="text" name="judulRevisi" id="judulRevisi" class="form-control" placeholder="masukkan judul revisi">
                                            </div>
                                            
                                            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                <i class="fas fa-plus-square"></i>Tambahkan catatan revisi
                                            </button>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body mt-2 border border-warning">
                                                    <div class="form-group">
                                                        <label for="catatanRevisi">Comment</label>
                                                        <textarea class="form-control" name="catatanRevisi" id="catatanRevisi" rows="3"></textarea>
                                                        <small class="text-muted">Jika tidak ada komentar kosongkan saja textarea tersebut</small>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            

<div class="row mt-4">
    <div class="col-md-12" id="historyViewMahasiswa">
            <div class="card">        
                <div class="card-body">
                    <h4 class="card-title"><a data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" href="#bbb"><i class="fas fa-history" id="historyApproved"  role="button"></i> History Mahasiswa Approved</a></h4>
                        <div class="table-responsive class="collapse" id="bbb"">
                            <table class="table table-inverse" id="tDosenHistoryMahasiswa">
                                <thead class="thead-default">
                                    <tr>
                                        <th>Nama Kegiatan</th>
                                        <th>Tema Acara</th>
                                        <th>Waktu Acara</th>
                                        <th>Tempat Acara</th>
                                        <th>File Bukti</th>
                                        <th width="15%;">Kapan Di Acc</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                            </table>
                        </div>
                </div>
            </div>
    </div>
</div>

            </div>
        </div>
    </div>
    </div>
    @include('partial.dependency')

</body>
</html>