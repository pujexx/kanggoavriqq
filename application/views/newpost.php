<form action="<?php echo site_url("dashboard/newpost")?>" method="post">

    <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

        <p>
            <label>Judul</label>
            <input class="text-input small-input" type="text" id="small-input" name="judul" /> <span class="input-notification"><?php echo form_error("judul");?></span> <!-- Classes for input-notification: success, error, information, attention -->
            <br /><small>Judul</small>
        </p>
        <p>
            <label>Isi</label>
            <textarea class="text-input textarea wysiwyg" id="textarea" name="isi" cols="79" rows="15"></textarea>
        </p>
        <p><span class="input-notification"><?php echo form_error("isi");?></span></p>
        <p>
            <input class="button" type="submit" value="Submit" />
        </p>

    </fieldset>
</form>