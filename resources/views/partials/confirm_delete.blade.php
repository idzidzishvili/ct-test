<div id="confirmDelete" class="modal fade" tabindex="-1" aria-hidden="true" data-scroll="true">
   <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" >Confirm delete</h5>
               <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div>
                  <h6>Are you sure want to delete?</h6>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
               <form method="post" action="" id="confirm-task-delete">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger waves-effect waves-light" id="update-fr-transportation">Delete</button>
               </form>
            </div>
      </div>
   </div>
</div>