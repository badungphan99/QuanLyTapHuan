@extends('layouts.app')
<title>SuperAdmin </title>
@section('content')

<div class="container main_wrapper">

    <div id="mainLeft">
        <h1 class="heading-page"><span>Users</span></h1>
        <div class="filter-report">

            <div class="boxLeft ">
                <h1 class="leftTitle">Role</h1>
                <div class="styleBox">
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>SuperAdmin</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Admin</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Teacher</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Student</span>
                    </div>
                </div>
            </div>
            <div class="boxLeftC ">
                <h2 class="leftTitle">Status</h2>
                <div class="styleBox">
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>All</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Activated</span>
                    </div>
                    <div>
                        <input type="checkbox" class="styleFont">&nbsp;<span>Deactivated</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="mainRight">
        <div>
            <div class="search-box">
                <form class="search-form" action=""> <input class="form-control" placeholder="Search fullname, username..." type="text">
                    <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i> 
                     </button>
                </form>
            </div>
            <div class="menuRight">
                <div class="add-user">
                    <button class="btn dropbtn" style="background-color: #aaa;" data-toggle="modal" data-target="#modalAdd">
                            <i class="glyphicon glyphicon-plus"></i> &nbsp;Add user
                        </button>

                </div>
                <div id="modalAdd" class="modal fade" role="dialog">
                    <div class="modal-dialog" style="width:500px; height:800px">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="loginlabel">ADD A NEW ACCOUNT</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <form action="">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="form-label control-label">Fullname</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter fullname" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Username</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter username" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Password</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Password" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Password confirm</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Password confirm" maxlength="10"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group"><label class="form-label control-label">Email</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Email" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Phone number</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Phone number" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Role</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Role" maxlength="10"></div>
                                            </div>
                                            <div class="form-group"><label class="form-label control-label">Status</label>
                                                <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Status" maxlength="10"></div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Save</button>
                                <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->


            </div>
            <div>
                <div class="row">
                    <table class="table table-hover">
                        <thead style="background-color: #aaa;">
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Fullname</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Unit</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Position</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white;">
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>
                                    <a href="" style="color:black;margin-left:5px; font-size:20px" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit"></i></a>
                                    <div id="modalEdit" class="modal fade" role="dialog">
                                        <div class="modal-dialog" style="width:500px; height:800px">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="loginlabel">EDIT INFORMATION</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-md-12">
                                                        <form action="">
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="form-label control-label">Fullname</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Username</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10" readonly></div>
                                                                </div>
                                                                <!-- <div class="form-group"><label class="form-label control-label">Password</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10" readonly></div>
                                                                </div> -->
                                                                <div class="form-group"><label class="form-label control-label">Unit</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Email</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Other Email</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="form-label control-label">Phone number</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Other Phone number</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Position</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Academic rank</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Academic degree</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                                <div class="form-group"><label class="form-label control-label">Note</label>
                                                                    <div class="form-wrap"><input id="" class="form-control" type="text" maxlength="10"></div>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Save</button>
                                                    <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" style="color:black;margin-left:5px; font-size:24px"><i class="fa fa-trash-o"></i></a>

                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection