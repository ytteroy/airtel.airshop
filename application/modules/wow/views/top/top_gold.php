<table class="table table-striped table-bordered table-hover table-condensed datatable_c">
    <thead>
        <tr>
            <th>Lietotājs</th>
            <th>Gold</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
        if(count($players) > 0):

            foreach($players as $player):
                ?>
                <tr>
                    <td><?php echo $player->name; ?></td>
                    <td><?php echo $player->money; ?></td>
                </tr>
                <?php
                
            endforeach;
        
        endif;
        ?>

    </tbody>
</table>