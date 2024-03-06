<div class="content py-5 mt-5">
    <div class="container">
        <div class="card card-outline card-purple shadow rounded-0">
            <div class="card-header">
                <h4 class="card-title">My Booking List</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <colgroup>
                        <col width="5%">
                        <col width="15%">
                        <col width="15%">
                        <col width="30%">
                        <col width="10%">
                        <col width="15%">
                    </colgroup>
                    <thead>
                    <tr class="bg-gradient-dark text-light">
                            <th class="text-center">#</th>
                            <th class="text-center">Date Booked</th>
                            <th class="text-center">Ref. Code</th>
                            <th class="text-center">Trip Details</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td class="text-center"></td>
                            <td></td>
                            <td></td>
                            <td>
                                <p class="m-0 truncate-1"><b>Pickup:</b> <?= $row['pickup_zone'] ?></p>
                                <p class="m-0 truncate-1"><b>Dropoff:</b> <?= $row['drop_zone'] ?></p>
                            </td>
                           
                            <td class="text-center">
                                <button type="button" class="btn btn-flat btn-info border btn-sm view_data" data-id="">View Details</button>
                            </td>
                        </tr>
                     
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</div>
