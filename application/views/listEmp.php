<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Codeigniter test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini">
    <div class="container">
        <div class="row mt-5">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addEmpModal">Add New</button>
        </div>
        <div class="row mt-4">
            <table class="table table-striped" id="employeeListing">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Skills</th>
                        <th>Desgination</th>
                        <th>Address</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="listRecords">
                </tbody>
            </table>

            <form id="saveEmpForm" method="post">
                <div class="modal fade" id="addEmpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Name*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Age*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="age" id="age" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Skills*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="skills" id="skills" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Designation*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="designation" id="designation" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Address*</label>
                                    <div class="col-md-10">
                                        <textarea name="address" id="address" class="form-control" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="btn-saveEmpForm" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form id="editEmpForm" method="post">
                <div class="modal fade" id="editEmpModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Employee</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Name*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="empName" id="empName" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Age*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="empAge" id="empAge" class="form-control" placeholder="Age" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Skills*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="empSkills" id="empSkills" class="form-control" placeholder="Skils" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Designation*</label>
                                    <div class="col-md-10">
                                        <input type="text" name="empDesignation" id="empDesignation" class="form-control" placeholder="Skils" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Address*</label>
                                    <div class="col-md-10">
                                        <textarea name="empAddress" id="empAddress" class="form-control" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="empId" id="empId" class="form-control">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="btn-editEmpForm" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form id="deleteEmpForm" method="post">
                <div class="modal fade" id="deleteEmpModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete Employee</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Are you sure to delete this record?</strong>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="deleteEmpId" id="deleteEmpId" class="form-control">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="button" id="btn-deleteEmpForm" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/assets/js/crud_operation.js"></script>
</body>

</html>