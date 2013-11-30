
<div class="wrap">
  <h2>View Data</h2>
  <table class="wp-list-table widefat fixed posts">
  <thead>
    <tr>
      <th>ID</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>Email</th>
      <th>_Lbstolose</th>
      <th>_Lbs</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>Email</th>
      <th>_Lbstolose</th>
      <th>_Lbs</th>
    </tr>
  </tfoot>
  <tbody>
    <?php

        require_once(dirname(dirname(__FILE__)) . "/src/isdk.php");
        
        $app = new iSDK;

        if ($app->cfgCon("connectionName")):

        $returnFields = array('Id','FirstName','LastName','Email', '_Lbstolose', '_Lbs');
        $query = array('Id' => '%');
        $contacts = $app->dsQueryOrderBy("Contact",20, 0, $query, $returnFields, 'Id');
       
          foreach ($contacts as $key => $value) {
          ?>
           <tr>
              <th><?php echo $value['Id']; ?></th>
              <th><?php echo $value['FirstName']; ?></th>
              <th><?php echo $value['LastName']; ?></th>
              <th><?php echo $value['Email']; ?></th>
              <th><?php echo $value['_Lbstolose']; ?></th>
              <th><?php echo $value['_Lbs']; ?></th>
            </tr>
          <?php  
          }
        else: 
          echo "Connection Failed";
      endif;
    ?> 
  </tbody>
</table>
</div> 
<?php

?>
<br />
<div class="pagination">
    <a href="#" class="first" data-action="first">&laquo;</a>
    <a href="#" class="previous" data-action="previous">&lsaquo;</a>
    <input type="text" readonly="readonly" data-max-page="50" />
    <a href="#" class="next" data-action="next">&rsaquo;</a>
    <a href="#" class="last" data-action="last">&raquo;</a>
</div>

<div class="content" style="padding-left:220px; font-size:15px;"></div>
<input value="<?php echo plugins_url('/process/pagination-process.php', dirname(__FILE__)) ?>" type="hidden" id="url-con"/>
<script type="text/javascript">
jQuery(document).ready(function($) {

  $('.pagination').jqPagination({
    max_page  : 50,
    paged   : function(page) {
            
        var dataprocess = {pagedata:page};
        var postURL = $('#url-con').val();
        
        $('.content').html('<span>Retrieving Data...<span>');
        $.post( postURL, dataprocess, function(data) {
            
            })
            .done(function(data) {
              
            })
            .fail(function(data) {
              $('.content').html(data);
            })
            .always(function(data) {
                $('tbody').html(data);
                $('.content').html(' ');
        });
    }
  });

});
</script>
