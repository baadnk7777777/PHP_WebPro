<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clickmodal">Open
                    Form</button>


                <div class="modal fade" id="clickmodal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modaltitle">Class Registration</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hedden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="" method="post" id="frmreist">
                                    <p class="text-danger">* required filed. *</p>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Name <span class=" text-danger">* </span></label>
                                            <input type="text" class="form-control" name="txtfristname"
                                                placeholder="Your First name" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="">LastName</label>
                                            <input type="text" class="form-control" name="txtlastname"
                                                placeholder="Your Last name">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Student ID <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="txtstudentid"
                                                placeholder="Student ID" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" name="txtemail" class="form-control" placeholder="Email"
                                                required>
                                        </div>
                                    </div>

                                    <label>Gender</label>

                                    <div class="form-row">

                                        <div class="form-group col-md-2">
                                            <div class="from-check from-check-inline">
                                                <input type="radio" class="form-check-input" name="txtgender"
                                                    value="Male">
                                                <label class="form-check-label"> Male</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <div class="from-check from-check-inline">
                                                <input type="radio" class="form-check-input" name="txtgender"
                                                    value="Female">
                                                <label class="form-check-label"> Female</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <div class="from-check from-check-inline">
                                                <input type="radio" class="form-check-input" name="txtgender"
                                                    value="prefer not to say">
                                                <label class="form-check-label">prefer not to say</label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-row">

                                        <div class="form-group col-md-4">
                                            <label>Subject</label>
                                            <select name="txtsubject">
                                                <option value="C">C</option>
                                                <option value="Java">Java</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Date</label>
                                            <input type="date" class="form-control" name="txtdate">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Date</label>
                                            <input type="time" class="form-control" name="txttime">
                                        </div>

                                    </div>

                                    <div class="form-check">
                                        <label for="" class="form-check-label">
                                            <input type="checkbox" name="txtare" class="form-check-input" require>
                                            Agree
                                        </label>
                                    </div>

                                    <input type="submit" class="btn btn-outline-primary" name="btnsubmit"
                                        value="Submit">
                                    <input type="reset" class="btn btn-outline-primary" name="btnreset" value="Reset">

                                </form>


                            </div>
                            <div class="modal-footer">
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End modal click registration -->

            </div>
        </div>

        <!-- Modal -->


        <div class="modal fade modal-child" id="viewmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Class Registration Information</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal_viewbody">



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

        <script>
        $(function() {
            console.log("adhasdj");
            $("#frmreist").submit(function() {
                console.log("asdasdasdwwwwwwww");
                event.preventDefault();



                $.ajax({

                    url: "process.php",
                    type: "POST",
                    data: $("form#frmreist").serialize(),
                    success: function(data) {
                        $("#modal_viewbody").html(data);
                        $("#clickmodal").modal('hide');
                        $("#viewmodal").modal("show");

                    },
                    error: function(data) {
                        console.log("An error occured.");
                        console.log(data);
                    }
                });
            });

        });
        </script>
</body>

</html>