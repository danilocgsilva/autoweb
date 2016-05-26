<form
  <?php if ($page_source == 'basic_html_2') echo 'style="display: inline-block"'; ?> id="basic_html_2" class="switchingForm" name="basic_html_2_download" method="GET" action="includes/basic_html_2_download.php">
  <input type="radio" name="format" value="html" checked="">
    html
    <input type="radio" name="format" value="php">
      php<br />
      <input type="text" name="name" />
      <input type="submit" value="Cria" /><br />
      <textarea rows="12">
        <?php echo $basic_html_2 ?>
      </textarea>
    </form>
