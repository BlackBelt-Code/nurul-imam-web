{{-- Modals --}}
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    Create Student
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('student-create') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" class="form-control" name="date" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <textarea type="text" class="form-control" name="address" placeholder="Address" required></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" style="width: 100%;" class="btn btn-success">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>