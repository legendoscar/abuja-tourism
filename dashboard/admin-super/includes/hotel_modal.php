<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              <h4 class="modal-title"><b>Add New Hotel</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="address" id="address" required>
                        <option value="" selected>- Select -</option>
                        <option value="">Budget</option>
                        <option value="">Luxury</option>
                        <option value="">Business</option>
                        <option value="">Romantic</option>
                        <option value="">Standard</option>
                        <option value="">Best Value</option>
                        <option value="">Classic</option>
                        <option value="">Family Friendly</option>
                        <option value="">Quiet</option>
                        <option value="">Charming</option>
                        <option value="">Trendy</option>
                        <option value="">Party</option>
                        <option value="">Villa</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input class="form-control" type="text" name="address" id="address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>

                    <div class="col-sm-9">
                      <input class="form-control" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9">
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="add_date">
                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              <h4 class="modal-title"><b>Edit Hotel</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="address" id="address" required>
                        <option value="" selected>- Select -</option>
                        <option value="">Budget</option>
                        <option value="">Luxury</option>
                        <option value="">Business</option>
                        <option value="">Romantic</option>
                        <option value="">Standard</option>
                        <option value="">Best Value</option>
                        <option value="">Classic</option>
                        <option value="">Family Friendly</option>
                        <option value="">Quiet</option>
                        <option value="">Charming</option>
                        <option value="">Trendy</option>
                        <option value="">Party</option>
                        <option value="">Villa</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input class="form-control" type="text" name="address" id="address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>

                    <div class="col-sm-9">
                      <input class="form-control" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9">
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="add_date">
                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-save"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Ban -->
<div class="modal fade" id="ban">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Banning...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="#">
                <input type="hidden" class="hotelid" name="id">
                <div class="text-center">
                    <p>Are you sure you want to ban this hotel?</p>
                    <h2 id="del_hotel" class="bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="ban"><i class="fa fa-remove"></i> Ban</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Unban -->
<div class="modal fade" id="unban">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Unbanning...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="#">
                <input type="hidden" class="hotelid" name="id">
                <div class="text-center">
                    <p>Are you sure you want to unban this hotel?</p>
                    <h2 id="del_hotel" class="bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-warning btn-flat" name="unban"><i class="fa fa-check"></i> Unban</button>
              </form>
            </div>
        </div>
    </div>
</div>
