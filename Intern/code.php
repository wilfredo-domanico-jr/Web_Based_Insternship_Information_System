

                    
                     
                    <div class="container-fluid px-4">
                        <div class = "mt-4 mb-4 contact-us">

                            <h1 class="title-page">JOIN CLASS</h1>
                            </div>

                        <div class="card violet mb-4">
                            <div class="card-header code-header">
                                <h1 class ="heading-h1">Pending Applications</h1>
                                <button type ="button" class="btn btn-primary" data-toggle="modal" data-target="#joinclassModal"> Join Class</button>
                            </div>
                            <div class="card-body-code">

                                <div class="card-body-code">
                                    <div class="alert alert-info" role="alert">
                                        No Pending Applications yet!
                                        
                                      </div>
                                      <table class="table table-bordered table-striped" id="studentTable">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Class CODE</th>
                                                    <th>Subject Code</th>
                                                    <th>Prof Name</th>
                                                    <th width="280px">Action</th>
                                                </tr>
                                            </thead>  
                                            <tbody>
                                        <?php
                                            foreach($application_detail as $ap_dtl){
                                            ?>
                                            <tr id="<?php echo $ap_dtl['clsapply_code']; ?>">
                                                <td><?php echo $ap_dtl['clsapply_code']; ?></td>
                                                <td><?php echo $ap_dtl['class_code']; ?></td>
                                                <td><?php echo $ap_dtl['subject_code']; ?></td>
                                                <td><?php echo $ap_dtl['prof_name']; ?></td>
                                                <td>
                                                <a data-id="<?php echo $ap_dtl['clsapply_code']; ?>" class="btn btn-primary btnEdit">Edit</a>
                                                <a data-id="<?php echo $ap_dtl['clsapply_code']; ?>" class="btn btn-danger btnDelete">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>

                                </div>
                            
                            
                            </div>
                        </div>
                    </div>


                    <!------MODAL------------>

                    <!-- Modal -->
                                <div class="modal fade" id="joinclassModal" tabindex="-1" role="dialog" aria-labelledby="joinclassModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header header-modal-color">
                                        <h5 class="modal-title text-light" id="joinclassModalLabel">Enter Class Code</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>

                                        <form id="addClass" name="addClass" action="<?php echo base_url('Intern/store');?>" method="post">

                                                    <div class="modal-body body-modal-color text-center">
                                                    
                                                    <input type="text" class="mb-4 form-control text-center" id="class_Code" name ="class_Code"placeholder="Class Code Goes Here...">
                                                        
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                        <input type="text" class="form-control text-center" id="prof_name" name ="prof_name"placeholder="Enter Professor Name">
                                                        </div>
                                                        <div class="col">
                                                        <input type="text" class="form-control text-center" id="sub_code" name="sub_code" placeholder="Enter Subject Code">
                                                        </div>
                                                    </div>
                                                    

                                                    </div>
                                                    <div class="custom-modal-footer">
                                                        <center>
                                                            <button type="button" id="modalcloseBtn" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                        </center>
                                                    </div>


                                        </form>
                                        

                                    </div>
                                    </div>
                                </div>




            <!-----------UPDATE MODAL------------>


            <div class="modal fade" id="updateclassModal" tabindex="-1" role="dialog" aria-labelledby="updateclassModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header header-modal-color">
                                        <h5 class="modal-title text-light" id="updateclassModalLabel">Enter Class Code</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>

                                        <form id="updateClass" name="updateClass" action="<?php echo base_url('Intern/edit');?>" method="post">

                                                    <div class="modal-body body-modal-color text-center">
                                                    <input type="hidden" name="hdnStudentId" id="hdnStudentId"/>
                                                    <input type="text" class="mb-4 form-control text-center" id="class_Code" name ="class_Code"placeholder="Class Code Goes Here...">
                                                        
                                                    <div class="row mb-4">
                                                        <div class="col">
                                                        <input type="text" class="form-control text-center" id="prof_name" name ="prof_name"placeholder="Enter Professor Name">
                                                        </div>
                                                        <div class="col">
                                                        <input type="text" class="form-control text-center" id="sub_code" name="sub_code" placeholder="Enter Subject Code">
                                                        </div>
                                                    </div>
                                                    

                                                    </div>
                                                    <div class="custom-modal-footer">
                                                        <center>
                                                            <button type="button" id="modalcloseBtn" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                        </center>
                                                    </div>


                                        </form>
                                        

                                    </div>
                                    </div>
                                </div>

                                <script>
$(document).ready(function () {

    $("#addClass").validate({
        rules: {
            class_Code: "required",
            prof_name: "required",
            subject_code: "required"
        },
        messages: {
        },
           
        submitHandler: function(form) {
            var form_action = $("#addClass").attr("action");
            $.ajax({
                data: $('#addClass').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    var student = '<tr id="'+res.data.clsapply_code+'">';
                    student += '<td>' + res.data.clsapply_code + '</td>';
                    student += '<td>' + res.data.class_code + '</td>';
                    student += '<td>' + res.data.subject_code + '</td>';
                    student += '<td>' + res.data.prof_name + '</td>';
                    student += '<td><a data-id="' + res.data.clsapply_code + '" class="btn btn-primary btnEdit">Edit</a>  <a data-id="' + res.data.clsapply_code + '" class="btn btn-danger btnDelete">Delete</a></td>';
                    student += '</tr>';      

                    $('#modalcloseBtn').trigger("click");
                    // $('#joinclassModal').modal('fade');
                    $('#studentTable tbody').prepend(student);
                    $('#addClass')[0].reset();
                },
                    error: function (data) {
                }
            });
        }
    });


    // UPDATE 

    $('body').on('click', '.btnEdit', function () {
        var student_id = $(this).attr('data-id');
        $.ajax({
            url: 'edit/'+student_id,
            type: "GET",
            dataType: 'json',
            success: function (res) {
                $('#updateclassModal').modal('show');
                $('#updateStudent #hdnStudentId').val(res.data.clsapply_code); 
                $('#updateStudent #class_Code').val(res.data.class_code);
                $('#updateStudent #prof_name').val(res.data.subject_code);
                $('#updateStudent #sub_code').val(res.data.prof_name);
            },
                error: function (data) {
            }
        });
    });

    //asdadas
    $("#updateStudent").validate({
        rules: {
            class_Code: "required",
            prof_name: "required",
            subject_code: "required"
        },
            messages: {
        },
        submitHandler: function(form) {
            var form_action = $("#updateStudent").attr("action");
            $.ajax({
                data: $('#updateStudent').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    var student = '<tr id="'+res.data.clsapply_code+'">';
                    student += '<td>' + res.data.clsapply_code + '</td>';
                    student += '<td>' + res.data.class_code + '</td>';
                    student += '<td>' + res.data.subject_code + '</td>';
                    student += '<td>' + res.data.prof_name + '</td>';
                    student += '<td><a data-id="' + res.data.clsapply_code + '" class="btn btn-primary btnEdit">Edit</a>  <a data-id="' + res.data.clsapply_code + '" class="btn btn-danger btnDelete">Delete</a></td>';
                    student += '</tr>';      
                    $('#modalcloseBtn').trigger("click");
                    // $('#joinclassModal').modal('fade');
                    $('#studentTable tbody').prepend(student);
                    $('#addClass')[0].reset();
                },
                    error: function (data) {
                }
            });
        }
    }); 



    //DELETE


    $('body').on('click', '.btnDelete', function () {
        var student_id = $(this).attr('data-id');
        $.get('delete/'+student_id, function (data) {
            $('#studentTable tbody #'+ student_id).remove();
        })
    });  
 
    
});   
</script>