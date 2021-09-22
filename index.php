<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Token</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <?php include("component/navbar.php"); ?>


    <!-- ----------------------------------------------------------- -->
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Vosser Token (VOS)</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">We are the currency of the future Let's come together and walk together with us. We will never stop evolving.</p>

            <p id="address" style="display: none;">0xa8fB7cF448A0755a9516Db3fcE11437066285e38</p>
            
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Buy Vosser</button>
                    <button onclick="copyToClipboard('#address')" class="btn btn-outline-secondary btn-lg px-4">Copy Address</button>
                </div>
        </div>
   </div>
   <!-- ----------------------------------------------------------- -->


    <!-- ----------------------------------------------------------- -->
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Total Supply</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">45,000,000</h1>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Latest Price</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$ 0.50</h1>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Market Cap</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$ 140,351</h1>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Total Holders</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">300</h1>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Total Volume</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$ 4,440,351</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- ----------------------------------------------------------- -->


    <!-- ----------------------------------------------------------- -->
    <?php include("component/time-line.php"); ?>
    <!-- ----------------------------------------------------------- -->


    <!-- ----------------------------------------------------------- -->
    <?php include("component/footer.php"); ?>
    <!-- ----------------------------------------------------------- -->


    <!-- ----------------------------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
        <?php include("js/copy-text.js"); ?>
    </script>
    <!-- ----------------------------------------------------------- -->
</body>
</html>