<html>
<head>
<title>CodeIgniter ajax post</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">

// Ajax post
$(document).ready(function() {
    $(".submit").click(function(event) {
        event.preventDefault();
              var mark_name = $("input#mark").val();
              var model_name = $("input#models").val();

              jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>" + "index.php/IdentifyingBuyerVehicle",
              dataType: 'json',
              data: {mark: mark_name, models: model_name },
              success: function() {

        }
        });
    });
});
</script>
</head>
<body>
<div class="main">
<div id="content">

<div id="form_input">
<?php

    // Form Open
    echo form_open( 'mark_data_submit' );

      $data_name = array(
        'name' => 'mark',
        'class' => 'input_box',
        'placeholder' => 'or Add new mark',
        'id' => 'mark'
      );

      echo form_input( $data_name );  ?>
      <div id="form_button">
        <?php echo form_submit( 'submit', '+', "class='submit'"); ?>
      </div>
      <?php $data_name = array(
        'name' => 'models',
        'class' => 'input_box',
        'placeholder' => 'or Add new model',
        'id' => 'models'
      );

      echo form_input( $data_name );


    ?>
    </div>
      <div id="form_button">
        <?php echo form_submit( 'submit', '+', "class='submit'"); ?>
      </div>
    <?php

    echo form_close(); ?>

</div>
</div>
</body>
</html>
