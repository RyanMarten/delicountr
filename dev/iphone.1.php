<!DOCTYPE html>
<html>
<!-- CURSOR POINTER!!!!! -->
<head>
  <!-- META -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- JS (for preformance boosting, can move to after body) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

  <!-- TITLE -->
  <title>Delicountr |
    <?php echo $pageTitle ?> </title>
<script>
  $(document).ready(function () {
$(document).on('click', '#button1',  function(event) {
    event.preventDefault();
    alert('button1');
});
});

</script>
<style>
  .button1 {
    cursor: pointer;
  }
</style>
</head>
<body>
<body>
<main>
  <a class="button1" id="button1" href="#"><div class="icon"></div><div class="text">Option 1</div></a>
</main>
</body>

</body>

</html>