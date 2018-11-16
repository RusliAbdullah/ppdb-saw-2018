<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog  modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?=!empty($modal_title)?$modal_title:'Judul Modal' ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       	<?php include($form); ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<style type="text/css">
  .modal-fullscreen {
    min-width: 100%;
    width: 100%;
    /*margin: 20px;*/
    margin-left:10px;
}

</style>