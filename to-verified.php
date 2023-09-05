<title>WIIS - ACCOUNT ERROR</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        


<link rel="icon" type="image/jpeg" href="images/icon.jpg"/>
<div id="container_anim">
        <div id="lock" class="key-container">

            <i class ="fas fa-user-lock" style="font-size:200px;color:#badfe7;"></i>
        </div>
    </div>

    <p id="text" style="color:#fff;">ACCOUNT INACTIVE</p>
    <p id="new_text" style="color:#fff;">Your account is to be verified by the system administrator.</p>
    
     <p id="credit" style ="color:#fff;">
   If you think there's a mistake. 
      
    <a style ="color:#fff;" href="index.php#contact">Please Send us an Email!</a></p>



<style>

html,body{
    margin:0;
    padding:0;
    display:flex;
    justify-content:center;
    align-items:center;
    background-color:#2b7a78;
    font-family:"Quicksand", sans-serif;

}


#key{
    position:absolute;
    top:77%;
    left:-33%;
}

#text{
  font-size:4rem;
  position:absolute;
  top:35%;
  width:100%;
  text-align:center;
}

#new_text{
  font-size:2rem;
  position:absolute;
  top:51%;
  width:100%;
  text-align:center;
}

#credit{
    position:absolute;
    bottom:40px;
    width:100%;
    text-align:center;
}

a{
    color: rgb(115,102,102);
}


.key-container{

    margin-top:-260px;
}

</style>



<script>
  var lock = document.querySelector('#lock');
var key = document.querySelector('#key');


function keyAnimate(){
    dynamics.animate(key,{
        translateX: 33
    }, {
        type:dynamics.easeInOut,
        duration:500,
        complete:lockAnimate
    })
}


function lockAnimate(){
    dynamics.animate(lock, {
        rotateZ:-5,
        scale:0.9
        }, {
            type:dynamics.bounce,
            duration:3000,
            complete:keyAnimate
        })
}


setInterval(keyAnimate, 3000);

</script>