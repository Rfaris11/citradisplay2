<!-- h = home -->

<!--Modal: Register Form-->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fa fa-window-restore"></i><span id="title-text"></span></h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid z-depth-1-half" id="body-img1" src="">
                    </div>
                    <div class="col-9">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-newspaper-o mr-1"></i>Uraian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><i class="fa fa-file-image-o mr-1"></i>Gambar</a>
                            </li>
                        </ul>
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active pl-2" id="panel1" role="tabpanel">
                                <br>
                                <label>Deskripsi :</label>
                                <p class="ml-3" id="body-deskripsi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                                    porro voluptate odit minima.</p>
                                <label>Kategori :</label>
                                <p class="ml-3" id="body-kategori">Kategori</p>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                            <div class="tab-pane fade p-2" id="panel2" role="tabpanel">
                                <br>
                                <div class="row" id="body-img2">
                                </div>
                            </div>
                            <!--/.Panel 2-->
                        </div>
                    </div>
                </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Register Form-->