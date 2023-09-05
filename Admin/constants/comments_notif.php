
<?php
    if($row['msg_read'] == 1){
        echo '<div class ="content notif-read" style ="padding:5px;border-radius:10px;display:flex; align-items: center;justify-content: space-between;">
        ';
    }

    else{

        echo '<div class ="content notif" style ="padding:5px;border-radius:10px;display:flex; align-items: center;justify-content: space-between;">
        ';
    } 

?> 

<span style="color:#fff;font-size:2vmin"><i class="fa-solid fa-bell"></i><?php echo $row['title'];?></span> 
                                                            
                                                            <div>


                                                            <?php
                                                                    if($row['msg_read'] == 0){
                                                                    


                                                                        ?>

                                                                       <a style="font-size:2vmin" onclick = "return confirm('Mark as Read ?')" class="btn btn-primary" href="app/read-notification.php?id=<?php echo $row['id'];?>"><i class="fab fa-readme"></i> Mark As Read</a>
                                                            
                                                            <?php
                                                                    }

                                                                ?> 

                                                                <!-- <a style="font-size:2vmin" onclick = "return confirm(Mark as Read ?')" class="btn btn-primary" href="app/read-notification.php?id=<?php echo $row['id'];?>"><i class="fab fa-readme"></i> Mark As Read</a> -->
                                                            
                                                            <a style="font-size:2vmin" onclick = "return confirm('Are you sure you want to delete this notification ?')" class="btn btn-danger" href="app/drop-notification.php?id=<?php echo $row['id'];?>"><i class="fa-regular fa-trash-can"></i> Delete</a>



                                                            </div>
                                                          
                                                            </div> 
                                                                    
                                                            <br>