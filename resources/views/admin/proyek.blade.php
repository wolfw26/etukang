@extends('component.template')
@section('konten')
<div class="card-header mb-3">
    <div class="text-center">
        <h1>Halaman <strong style="color: brown;">Proyek</strong></h1>
    </div>
</div>

<div class="row">
    <div class="col-9">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">

                                <div class="text-center">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid ">
                                </div>
                                <h2 class="lead text-center"><b>Nicole Pearson</b></h2>
                                <div class="row">

                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Statistic
                            </div>
                            <div class="card-body pt-0">

                                <div class="text-center">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid ">
                                </div>
                                <h2 class="lead text-center"><b>Imanuel Georgia</b></h2>
                                <div class="row">

                                    <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /row -->
            </div>
            <!-- /card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /card-solid -->
    </div>
    <div class="col">
        <div class="card pb-4">
            <div class="card-header bg-cyan">
                <div class="card-title text-uppercase">
                    Menu
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A list item
                        <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A second list item
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A third list item
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
