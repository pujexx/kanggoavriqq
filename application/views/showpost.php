<table>

    <thead>
        <tr>
            <th><input class="check-all" type="checkbox" /></th>
            <th>Judul</th>
            <th>Isi</th>
            <th>tanggal</th>          
            <th>Action</th>
        </tr>

    </thead>

    <tfoot>
        <tr>
            <td colspan="6">
                <div class="bulk-actions align-left">
                    <select name="dropdown">
                        <option value="option1">Choose an action...</option>
                        <option value="option2">Edit</option>
                        <option value="option3">Delete</option>
                    </select>
                    <a class="button" href="#">Apply to selected</a>
                </div>

           
                <div class="clear"></div>
            </td>
        </tr>
    </tfoot>

    <tbody>
        <?php if(!empty($posts)){?>
        <?php foreach ($posts as $post){?>
        <tr>
            <td><input type="checkbox" /></td>
            <td><?php echo $post['judul'];?></td>
            <td><?php echo word_limiter($post['isi'],5);?></td>
            <td><?php echo $post['time'];?></td>
          
            <td>
                <!-- Icons -->
                <a href="<?php echo site_url("dashboard/editpost/".$post['id']);?>" title="Edit"><img src="<?php echo base_url();?>template/simplaadmin/resources/images/icons/pencil.png" alt="Edit" /></a>
                <a href="<?php echo site_url("dashboard/deletepost/".$post['id']);?>" title="Delete" onclick="return confirm('are you sure ?');"><img src="<?php echo base_url();?>template/simplaadmin/resources/images/icons/cross.png" alt="Delete" /></a>
               
            </td>
        </tr>
        <?php } ?>
      <?php }?>
    </tbody>

</table>