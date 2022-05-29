<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Users Data</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Userpass</th>
                    <th>contact</th>
                    <th>action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Userpass</th>
                    <th>contact</th>
                    <th>action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach($usersData as $user) : ?>
                <tr>
                    <td><?= $user['Customer']; ?></td>
                    <td><?= $user['Email'] ?></td>
                    <td><?= $user['UserName'] ?></td>
                    <td><?= $user['UserPass'] ?></td>
                    <td><?= $user['Contact'];?></td>
                    <td>
                            <button type="button" class="badge bg-warning border-0 p-2 updateButton" data-bs-toggle="modal" data-bs-target="#userModalForm" data-id="<?= $user['UserID'];?>">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        <a href="<?= base_url();?>dashboard/destroy" >
                            <button type="button" class="badge bg-danger border-0 p-2">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="userModalForm" tabindex="-1" >
    var_dump($this->input->post())
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tittle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url();?>/dashboard/updateDataUser" method="post">
                    <input type="hidden" name="UserID" id="UserID">
                        <div class="form-group">
                            <label for="userName" class="form-label mt-2">Username</label>
                            <input type="text" class="form-control" id="UserName" name="UserName">
                        </div>
                        
                        <div class="form-group">
                            <label for="Customer" class="form-label mt-2">Full Name</label>
                            <input type="text" class="form-control" id="Customer" name="Customer">
                        </div>
                        
                        <div class="form-group">
                            <label for="Email" class="form-label mt-2">Email</label>
                            <input type="Email" class="form-control" id="Email" name="Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="UserPass" class="form-label mt-2">Password</label>
                            <input type="password" class="form-control" id="UserPass" name="UserPass">
                        </div>
                        <div class="row mt-4 ">
                            <div class="col-6">
                                <div class="input-group mb-3">
                                <label class="input-group-text" for="Gender">Gender</label>
                                <select class="form-select" id="Gender" name="Gender">
                                    <option selected>Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                </div>       
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="City" name="City" placeholder="your city/distric....">
                                </div>        
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="Contact" class="form-label mt-2">Contact</label>
                            <input type="number" class="form-control" id="Contact" name="Contact">
                        </div>
                        <div class="modal-footer d-flex flex-column justify-content-center">
                            <button type="submit"  class="btn btn-primary">Udpate Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>