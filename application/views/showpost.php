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


    <?php echo form_open("dashboard/deletepost"); ?>
    <tbody>
        <?php if (!empty($posts)) {
 ?>
<?php foreach ($posts as $post) { ?>
                <tr>
                    <td><input type="checkbox" name="id[]" value="<?php echo $post['id']?>"/></td>
                    <td><?php echo $post['judul']; ?></td>
                    <td><?php echo word_limiter($post['isi'], 5); ?></td>
                    <td><?php echo $post['time']; ?></td>

                    <td>
                        <!-- Icons -->
                        <a href="<?php echo site_url("dashboard/editpost/" . $post['id']); ?>" title="Edit"><img src="<?php echo base_url(); ?>template/simplaadmin/resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="<?php echo site_url("dashboard/deletepost/" . $post['id']); ?>" title="Delete" onclick="return confirm('are you sure ?');"><img src="<?php echo base_url(); ?>template/simplaadmin/resources/images/icons/cross.png" alt="Delete" /></a>

                    </td>
                </tr>
        <?php } ?>
<?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6">
                <div class="bulk-actions align-left">
                 
                    <input type="submit" class="button"  value="Delete" onclick="return confirm('are you sure')">
                </div>


                <div class="clear"></div>
            </td>
        </tr>
    </tfoot>
    <?php echo form_close();?>
</table>