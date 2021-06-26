
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
        <form action= "" method="POST">
          @csrf
        <div class="modal-body">
            <div class="container-fluid">

                {{-- form --}}
                <div class="form-floating mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-sm border-0 border-bottom" name="name" placeholder="name@example.com">
                </div>

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <label for="nric">NRIC</label>
                            <input type="text" class="form-control border-0 border-bottom" name="nric" placeholder="Password">

                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <label for="dob">Birthday</label>
                            <input type="date" class="form-control border-0 border-bottom" name="dob" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control border-0 border-bottom" name="gender" placeholder="Password">
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <label for="race">Race</label>
                            <input type="text" class="form-control border-0 border-bottom" name="race" placeholder="Password">
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <label for="phoneNum">Phone</label>
                            <input type="text" class="form-control border-0 border-bottom" name="phoneNum" placeholder="XXXXXXXX">
                          </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control border-0 border-bottom" name="address" placeholder="Password">

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
