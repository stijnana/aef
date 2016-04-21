<div class="container no-padding">
    <br>
    <br>
    <div class="col-xs-6 ">
    <div class="input-group ">
        <span class="input-group-addon" id="basic-addon1">Facebook id</span>
        <input type="text" id="disabledInput" class="form-control" placeholder="<?php echo $user['id']?>" aria-describedby="basic-addon1" disabled>
    </div>
        <br>
        <div class="input-group ">
            <span class="input-group-addon" id="basic-addon1">Name</span>
            <input type="text" id="disabledInput" class="form-control" placeholder="<?php echo $user['name']?>" aria-describedby="basic-addon1" disabled>
        </div>
    </div>
    <br>
    <div class="input-group ">
        <span class="input-group-addon" id="basic-addon1">Name</span>
        <input type="text" id="disabledInput" class="form-control" placeholder="<?php echo $user['name']?>" aria-describedby="basic-addon1" disabled>
    </div>
</div>
    <div class="col-xs-6 ">
        <div style="text-align: center;" class="acc"><img src="https://graph.facebook.com/<?php echo $user['id']?>/picture?type=large" alt=""></div>
    </div>

</div>