                            

<?php
    if($row['msg_read'] == 1){
        echo '<div class ="content notif-read" style ="padding:5px;border-radius:10px;display:flex; align-items: center;justify-content: space-between;">
        ';
    }

    else{

        echo '<div class ="content notif" style ="padding:5px;border-radius:10px;display:flex; align-items: center;justify-content: space-between;">
        ';
    } 

?> <span style="color:#fff;font-size:2vmin"><i class="fa-solid fa-bell"></i> DECLINE APPLICATION NOTICE</span>
                                                            
                                                            <div>


                                                            <button style="font-size:2vmin" type="button" data-toggle="modal" data-target=" .<?php echo $row['id']?>" class="btn btn-warning""><i class="fa-regular fa-eye"></i> View</button>
                                                            <?php
                                                                    if($row['msg_read'] == 0){
                                                                    


                                                                        ?>

                                                                       <a style="font-size:2vmin" onclick = "return confirm('Mark as Read ?')" class="btn btn-primary" href="app/read-notification.php?id=<?php echo $row['id'];?>"><i class="fab fa-readme"></i> Mark As Read</a>
                                                            
                                                            <?php
                                                                    }

                                                                ?> 
                                                            <a style="font-size:2vmin" onclick = "return confirm('Are you sure you want to delete this notification ?')" class="btn btn-danger" href="app/drop-notification.php?id=<?php echo $row['id']?>"><i class="fa-regular fa-trash-can"></i> Delete</a> 



                                                            </div>
                                                            </div>

                                                            <br>
                                                                <!-- Lagay dito -->

                                                                <div class="modal fade bd-example-modal-lg <?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">

                                                                <div class="modal-header header-modal-color">
                                                                    <h5 style ="color:#fff;" class="modal-title" id="uploadModalLabel">Application Notice</h5>
                                                                    <button style ="color:#fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                    <div class="modal-content text-center" style="padding:20px;">
                                                                    



<div>


    <h1>Good Day!</h1><br>


    For: <?php echo $myfname?> <?php echo $mylname?><br><br>


    <p>We are sad to announce that your application for <b><?php echo $row['title']?></b><br>
     Position has been marked as: <b><?php echo $row['status']?></b>.<br><br>
    However, we encourage you to Apply in further internship.<br> Thank you!
    </p>








</div>





                                                                
</div>
                                                                </div>
                                                                </div>
                                                                <!-- <div class="custom-modal-footer">
                                                                                                                        <center>
                                                                                                                            
                                                                                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                                                        </center>
                                                                                                                    </div> -->