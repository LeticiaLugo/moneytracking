<div class="row">
    <div class="col-xs-12 col-sm-5 col-md-5">
    <h4>Editar cuenta</h4>
    <form action="<?php echo APP_URL."/accounts/edit"; ?>" method="POST">
    	<input type="hidden" name="id" value="<?php echo $account["id"]; ?>">
        <div class="form-group">
            <label for="user_id">Nombre usuario:</label>
            <select class="form-control" name="user_id" id="user_id">
                <?php 
                foreach ($users as $user):
                    if ($user["users"]["id"] == $account["user_id"]) {
                ?>
                    <option selected value="<?php echo $user["users"]["id"]; ?>">
                        <?php echo $user["users"]["username"]; ?>
                    </option>
                <?php 
                    } else {
                ?>
                    <option value="<?php echo $user["users"]["id"]; ?>">
                        <?php echo $user["users"]["username"]; ?>
                    </option>
                <?php
                    }
                    endforeach;
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input class="form-control" type="text" name="name" value="<?php echo $account["name"]; ?>">
        </div>
        <input class="btn btn-success" type="submit" value="Guardar">
    </form>
    </div>
</div>