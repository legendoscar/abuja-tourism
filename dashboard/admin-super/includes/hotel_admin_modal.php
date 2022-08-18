
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
                    <p>Are you sure you want to ban this admin?</p>
                    <h2 id="del_user" class="bold"></h2>
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
                    <p>Are you sure you want to unban this admin?</p>
                    <h2 id="del_user" class="bold"></h2>
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
