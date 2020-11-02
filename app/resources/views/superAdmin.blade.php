@extends('layouts.master')
<title>Information </title>
<style>

</style>

@section('content')

<body>
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
                        <button class="btn btn-outline-dark dropbtn" data-toggle="modal" data-target="#myModal">
                            <i class="glyphicon glyphicon-plus"></i> &nbsp;Add user
                        </button>

                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog" style="width:500px; height:800px">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">
                                            <b>
                                            <center>ADD A NEW ACCOUNT</center></b>
                                        </h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
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
                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Role" maxlength="10"></div>
                                                        </div>
                                                        <div class="form-group"><label class="form-label control-label">Status</label>
                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Status" maxlength="10"></div>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Save</button>
                                        <button type="submit" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="dropdown">

                        <button onclick="myFunction()" class="btn btn-outline-dark dropbtn"><i class="glyphicon glyphicon-list"></i> &nbsp;
                            <i class="glyphicon glyphicon-chevron-down"></i></button>
                        <div id="myDropdown" class="dropdown-content">
                            <form action="">
                                <div class="styleBox">
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Fullname</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Unit</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Email</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Other Email</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Phone number</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Other phone number</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Position</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Academic rank</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Academic degree</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Note</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="styleFont">&nbsp;<span>Role</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    function myFunction() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }

                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                            for (i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                    openDropdown.classList.remove('show');
                                }
                            }
                        }
                    }
                </script> -->


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
                                        <a href="" style="color:black;margin-left:5px; font-size:20px" data-toggle="modal" data-target="#myModal1"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <div id="myModal1" class="modal fade" role="dialog">
                                            <div class="modal-dialog" style="width:500px; height:800px">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h3 class="modal-title">
                                                            <b>
                                                        <center>EDIT INFORMATION</center></b>
                                                        </h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <form action="">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group"><label class="form-label control-label">Fullname</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter fullname" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Username</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter username" maxlength="10" readonly></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Password</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Password" maxlength="10" readonly></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Unit</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Email" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Email</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Email" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Other Email</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Email" maxlength="10"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <div class="form-group"><label class="form-label control-label">Phone number</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Phone number" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Other Phone number</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Email" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Position</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Role" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Academic rank</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Status" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Academic degree</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Email" maxlength="10"></div>
                                                                        </div>
                                                                        <div class="form-group"><label class="form-label control-label">Note</label>
                                                                            <div class="form-wrap"><input id="" class="form-control" type="text" placeholder="Enter Email" maxlength="10"></div>
                                                                        </div>
                                                                    </div>

                                                                </form>

                                                            </div>
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



</body>
</body>