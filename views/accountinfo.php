<div class="container no-padding">
    <div class="row">
    <br>
        <?php
//        var_dump($user);

        ?>
    <div class="col-xs-6 col-md-6 ">
    <div class="input-group ">
        <span class="input-group-addon" id="basic-addon1">Facebook id</span>
        <input type="text" id="disabledInput" class="form-control" placeholder="<?php echo $user['id']?>" aria-describedby="basic-addon1" disabled>
    </div>
        <br>
        <div class="input-group ">
            <span class="input-group-addon" id="basic-addon1">Name</span>
            <input type="text" id="disabledInput" class="form-control" placeholder="<?php echo $user['name']?>" aria-describedby="basic-addon1" disabled>
        </div>
        <br>
        <div class="input-group ">
            <span class="input-group-addon" id="basic-addon1">Gender</span>
            <input type="text" id="disabledInput" class="form-control" placeholder="<?php echo $user['gender']?>" aria-describedby="basic-addon1" disabled>
        </div>
        <br>
        <div class="input-group ">
            <span class="input-group-addon" id="basic-addon1">Age Range</span>
            <input type="text" id="disabledInput" class="form-control" placeholder="<?php echo $user['age_range']['min'] . " t/m " . $user['age_range']['max'];?>" aria-describedby="basic-addon1" disabled>
        </div>
    </div>
    <div class="col-xs-6 col-md-6" style="margin-bottom: 50px;">
        <div style="text-align: center;" class="acc"><img src="https://graph.facebook.com/<?php echo $user['id']?>/picture?type=large" alt=""></div>
    </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
    <h2>Pagina's die u leuk vind</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Pagina</th>
            <th>id</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $users = $user['context']['mutual_likes'];
        foreach($users as $datas){
            echo "<tr>";
            echo "<td>";
            echo $datas['name'];
            echo "</td>";
            echo "<td>";
            echo $datas['id'];
            echo "</td>";
        }
        ?>
    </div>
        </tbody>
    </table>
    </div>
</div>