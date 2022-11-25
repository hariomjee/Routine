<html lang="en">

<head>
  <title>ClassRoom</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="index.css" />

</head>

<body>
<div class="container-fluid ">
  <div class="row text-center d-flex justify-content-center mt-4">
    <!--  making items into centre -->
    <p class="  font-weight-normal text-info mt-2 display-4 ">Daily Details</p>

    <div class="button_Add my-5">
      <input class="col Subject" size="35" id="subject" placeholder="Subject" type="text">
      <input class="col link" id="link" size="35" placeholder="Link" type="text">
      <input class="col note" id="note" size="35" placeholder="Note" type="text">
      <input type="date"  id="date">
      <button type="col button" class="btn btn-success btn-circle btn-xl mx-5" id="add">Add</button>
    </div>


    <div class="col mt-2 text-center " id="dailyDetails">
      <table class="table">
        <thead class="thead-dark text-center">
          <tr>
            <th id="id" scope="col">Se.No</th>
            <th id="subject" scope="col">Subject</th>
            <th id="link" scope="col">Link</th>
            <th id="note" scope="col">Note</th>
            <th id="date" scope="col">Date</th>
          </tr>
        </thead>
        <tbody class="" id="load">
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- JS, Popper.js, and jQuery -->
<script src="/online course registration system/global/js/jquery.min.js"></script>
<script src="/online course registration system/global/js/popper.min.js"></script>
<script src="/online course registration system/global/js/bootstrap.min.js"></script>
<script src="/online course registration system/global/js/bootstrap.min.js"></script>
<script src="/routine/index.js"></script>
</div>


</body>

</html>