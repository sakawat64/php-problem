<select name="branch[]" class="select2" multiple="multiple" required>

<?php while ($data = mysqli_fetch_assoc($branch)) {  ?>
<option value="<?php echo $data['branch_id'];?>" <?php echo (isset($_GET['area_id']) && in_array($data['branch_id'],$ar_branch)) ? 'selected="selected"' : ""  ?>  ><?php echo $data['branch_name']  ?></option>
<?php } ?>
</select>