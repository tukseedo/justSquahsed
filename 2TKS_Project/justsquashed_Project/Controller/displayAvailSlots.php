<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

<?php include($_SERVER['DOCUMENT_ROOT'] . "/2TKS_Project/justsquashed_Project/Controller/retrieveBookingDetails.php"); ?>

<table class="table table-bordered table-responsive-sm" id="availTimeSlots">
                    <thead>
                        <tr style="text-align: center;">
                        <th></th><th>Court 1</th><th>Court 2</th><th>Court 3</th><th>Court 4</th><th>Court 5</th><th>Court 6</th><th>Court 7</th><th>Court 8</th>
                        </tr>
                    </thead>
                    <tbody id="availTimeSlots-body"></tbody>
                    </table>

<script src="/2TKS_Project/justsquashed_Project/Controller/script/availTimeSlots.js"></script>