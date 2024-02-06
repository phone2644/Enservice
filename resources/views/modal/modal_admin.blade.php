<!DOCTYPE html>

<!-- Modal -->
{{-- <div class="modal fade" id="openProblems" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> --}}
   <!-- Scrollable modal  modal-lg-->
   <div class="modal fade " id="openProblems" tabindex="-1" aria-labelledby="exampleModalScrollableTitle"  aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="height: 80%">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalScrollableTitle">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="{{ asset('js/modal.js') }}" type="text/javascript"></script>