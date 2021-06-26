
{{-- modal for create user button --}}
<!-- Modal -->
<div id="myModal2" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    {{-- consider implementing scrollable modal --}}
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create New Contact</h5>
        </div>

        <!-- FORM BEGINS (create-user-modal) -->
        <form action= "{{route('newBenny')}}" method="POST">
          @csrf
        <div class="modal-body">
            <div class="container-fluid">

                {{-- form --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-sm border-0 border-bottom" id="createName" placeholder="name@example.com">
                    <label for="createName">Name</label>
                </div>

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 border-bottom" id="createIC" placeholder="Password">
                            <label for="createIC">NRIC</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control border-0 border-bottom" id="createDOB" placeholder="dd/mm/yyyy">
                            <label for="createDOB">Birthday</label>
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 border-bottom" id="createGender" placeholder="Password">
                            <label for="createGender">Gender</label>
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 border-bottom" id="createRace" placeholder="Password">
                            <label for="createRace">Race</label>
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 border-bottom" id="createContact" placeholder="XXXXXXXX">
                            <label for="createContact">Phone</label>
                          </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0 border-bottom" id="createAdd" placeholder="Password">
                        <label for="createAdd">Address</label>
                    </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="close btn btn-secondary" data-dismiss="modal" aria-label = "Close">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
            <!-- END FORM -->
        </div>
    </div>
</div>
</div>
